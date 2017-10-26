<?php
// $Id: local.php,v 1.1.2.5 2005/09/16 01:16:50 phppp Exp $

$original_locale = setlocale(LC_ALL, 0);
if (!setlocale(LC_ALL, 'zh')) {
	setlocale(LC_ALL, $original_locale );
}

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a", "A", "B", "c", "d", "D", "F", "g", "G", "h", "H", "i", "I", "j", "l", "L", "m", "M", "n", "O", "r", "s", "S", "t", "T", "U", "w", "W", "Y", "y", "z", "Z"	
// insert double '\' before 't', 'r', 'n'
if (!defined("_YEARMONTHDAY")) {
define("_TODAY", "今天 G:i");
define("_YESTERDAY", "昨天 G:i");
define("_MONTHDAY", "n/j G:i");
define("_YEARMONTHDAY", "Y/n/j G:i");
}

define("_ELAPSE", "%s以前");

define("_TIMEFORMAT_DESC", "可选格式：\"s\" - "._SHORTDATESTRING."；\"m\" - "._MEDIUMDATESTRING."；\"l\" - "._DATESTRING."；<br />".
							"\"c\" 或 \"custom\" - 根据距当前时刻的时间长短自动决定显示格式；\"e\" - 距离当前时刻的时间间隔；\"mysql\" - Y-m-d H:i:s；<br />".
							"具体字符串 - 参考<a href=\"http://php.net/manual/en/function.date.php\" target=\"_blank\">PHP手册</a>。"
							);
							
require_once dirname(dirname(__FILE__))."/english/local.class.php";

/**
 * The class should be an abstract one using PHP embedded functions
 * based on which, 
 * each local language defines its own equalient methods
 *
 * A comprehensive handler is expected in Xoops 2.3 or 2.4
 */

class XoopsLocal extends XoopsLocalEnglish
{	
	// localized substr
	function substr($str, $start, $length, $trimmarker = '-') {
	    $charset = empty($GLOBALS["xlanguage"]['charset_base'])?_CHARSET:$GLOBALS["xlanguage"]['charset_base'];
	    
	    if (function_exists('mb_internal_encoding') && @mb_internal_encoding($charset)) {
	        $str2 = mb_strcut( $str , $start , $length - strlen( $trimmarker ) );
	        return $str2 . ( mb_strlen($str) != mb_strlen($str2) ? $trimmarker : '' );
	    }
	    
	    switch(strtoupper($charset)){
	    case "UTF-8":
	    	$string = $str;
	    	$ellipsis =& $trimmarker;
	    	// From mediawiki::truncate
			$string = substr( $string, 0, $length );
			$char = ord( $string[strlen( $string ) - 1] );
			if ($char >= 0xc0) {
				# We got the first byte only of a multibyte char; remove it.
				$string = substr( $string, 0, -1 );
			} elseif ( $char >= 0x80 &&
			          preg_match( '/^(.*)(?:[\xe0-\xef][\x80-\xbf]|' .
			                      '[\xf0-\xf7][\x80-\xbf]{1,2})$/', $string, $m ) ) {
			    # We chopped in the middle of a character; remove it
				$string = $m[1];
			}
			return $string . ( (strlen($str) > strlen($string)) ? $ellipsis : "" );
			break;
	    
	    default:
	    
			$ch = chr(127);
			$p = array("/[\x81-\xfe]([\x81-\xfe]|[\x40-\xfe])/", "/[\x01-\x77]/");
			$r = array("", "");
			
			if ($start > 0) {
				$s = substr($str,0,$start);
				if ($s{strlen($s)-1} > $ch) {
					$s = preg_replace($p,$r,$s);
					$start += strlen($s);
				}
			}
			$s = substr($str,$start,$start+$length);
			$end = strlen($s);
			if ($s{$end-1} > $ch) {
				$s = preg_replace($p,$r,$s);
				$end += strlen($s);
			}
			$ret = substr($str,$start,$end);
			if ($start + $length < strlen($str)){
				$ret .= $trimmarker;
			}
			
			return $ret;
			break;
		
		}
	}
	
	function utf8_encode($text)
	{
		$text = XoopsLocal::convert_encoding($text, 'utf-8');
		return $text;
	}
	
	function convert_encoding($text, $to='utf-8', $from='')
	{
		if (empty($text)) {		
			return $text;
		}
	    if (empty($from)) $from = empty($GLOBALS["xlanguage"]['charset_base']) ? _CHARSET : $GLOBALS["xlanguage"]['charset_base'];
	    if (empty($to) || !strcasecmp($to, $from)) return $text;
	    
		if (function_exists('mb_convert_encoding')) {
			$converted_text = @mb_convert_encoding($text, $to, $from);
		} elseif (function_exists('iconv')) {
			$converted_text = @iconv($from, $to . "//TRANSLIT", $text);
		}	
		if (empty($converted_text)) {
			static $xconv_handler;
			$xconv_handler = isset($xconv_handler) ? $xconv_handler : @xoops_getmodulehandler('xconv', 'xconv', true);
			if (is_object($xconv_handler)) {
				$converted_text = @$xconv_handler->convert_encoding($text, $to, $from);
				if (!empty($converted_text)) {
					return $converted_text;
				}
			}
		}
		
		$text = empty($converted_text) ? $text : $converted_text;
	
	    return $text;
	}

}
?>