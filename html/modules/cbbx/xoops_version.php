<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
$moddirname = basename(__DIR__);
$modversion = array(
	'name'		 	=> _MI_CBBX_NAME,
	'version' 		=> 3.08,
	'description'	=> _MI_CBBX_DESC,
	'credits' 		=> 'Based on CBB and the NewBB 2 module developed by Marko Schmuck (predator) and D.J. (phppp)',
	'author' 		=> '',
	'license' 		=> 'GNU General Public License (GPL) see LICENSE',
	'image' 		=> 'images/cbbx_slogo.png',
	'dirname' 		=> $moddirname,
	'author_realname' 		=> 'CBBx Dev Team',
	'author_website_url' 	=> '',
	'author_website_name' 	=> '',
	'author_email' 			=> '',
	'status_version' 		=> '',
	'status' 				=> 'Alpha',
	'warning' => 'Alpha',
	'demo_site_url'		=> '',
	'demo_site_name' 	=> '',
	'support_site_url' 	=> '',
	'support_site_name' => '',
	'submit_feature' 	=> '',
	'submit_bug' 		=> '',
	// Sql file
	'sqlfile'	=> array('mysql' => 'sql/mysql.sql'),
	// Tables created by sql file (without prefix!)
	'tables'	=> array(
		'cbbx_archive',
		'cbbx_categories',
		'cbbx_votedata',
		'cbbx_forums',
		'cbbx_posts',
		'cbbx_posts_text',
		'cbbx_topics',
		'cbbx_online',
		'cbbx_digest',
		'cbbx_report',
		'cbbx_attachments', // reserved table for next version
		'cbbx_moderates', // For suspension
		'cbbx_reads_forum',
		'cbbx_reads_topic'),
	// Admin things
	'hasAdmin' => 1,
	'adminindex' => 'admin/index.php',
	'adminmenu' => 'admin/menu.php',
	// Menu
	'hasMain' => 1,
	//install
	//'onInstall' => 'include/module.php',
	//update things
	//'onUpdate' => 'include/module.php',
	// Search
	'hasSearch' => 1,
	'search' => array(
		'file' => 'include/search.inc.php',
		'func' => 'cbbx_search'
	),
	// Smarty
	'use_smarty' => 1,
	//module css
	//'css' => 'templates/cbbx.css';
	);

	//Base Templates
	$modversion['templates'] = array(
		array(
			'file' => 'cbbx_poll_results.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_index.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_searchresults.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_search.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_thread.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_viewforum.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_viewtopic_flat.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_viewtopic_thread.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_rss.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_viewall.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_poll_view.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_online.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_viewpost.tpl',
			'description' => '',
		),
		array(
			'file' => 'cbbx_item.tpl',
			'description' => '',
		)/*,
		array(
			'file' => 'cbbx_viewpost_list.tpl',
			'description' => '',
		)*/
		);

// Blocks
	// options[0] - Citeria valid: time(by default)
	// options[1] - NumberToDisplay: any positive integer
	// options[2] - TimeDuration: negative for hours, positive for days, for instance, -5 for 5 hours and 5 for 5 days
	// options[3] - DisplayMode: 0-full view;1-compact view;2-lite view
	// options[4] - Display Navigator: 1 (by default), 0 (No)
	// options[5] - SelectedForumIDs: null for all

	$modversion['blocks'][] = array(
		'file' => 'cbbx_blocks.php',
		'name' => _MI_CBBX_BLOCK_TOPIC_POST,
		'description' => 'Shows recent replied topics',
		'show_func' => 'b_cbbx_show',
		'options' => 'time|5|360|0|1|0',
		'edit_func' => 'b_cbbx_edit',
		'template' => 'cbbx_block.tpl');

	// options[0] - Citeria valid: time(by default), views, replies, digest, sticky
	// options[1] - NumberToDisplay: any positive integer
	// options[2] - TimeDuration: negative for hours, positive for days, for instance, -5 for 5 hours and 5 for 5 days
	// options[3] - DisplayMode: 0-full view;1-compact view;2-lite view
	// options[4] - Display Navigator: 1 (by default), 0 (No)
	// options[5] - Title Length : 0 - no limit
	// options[6] - SelectedForumIDs: null for all

	$modversion['blocks'][] = array(
		'file' => 'cbbx_blocks.php',
		'name' => _MI_CBBX_BLOCK_TOPIC,
		'description' => 'Shows recent topics in the forums',
		'show_func' => 'b_cbbx_topic_show',
		'options' => 'time|5|360|0|1|0|0',
		'edit_func' => 'b_cbbx_topic_edit',
		'template' => 'cbbx_block_topic.tpl');


	// options[0] - Citeria valid: title(by default), text
	// options[1] - NumberToDisplay: any positive integer
	// options[2] - TimeDuration: negative for hours, positive for days, for instance, -5 for 5 hours and 5 for 5 days
	// options[3] - DisplayMode: 0-full view;1-compact view;2-lite view; Only valid for 'time'
	// options[4] - Display Navigator: 1 (by default), 0 (No)
	// options[5] - Title/Text Length : 0 - no limit
	// options[6] - SelectedForumIDs: null for all

	$modversion['blocks'][] = array(
		'file' => 'cbbx_blocks.php',
		'name' => _MI_CBBX_BLOCK_POST,
		'description' => 'Shows recent posts in the forums',
		'show_func' => 'b_cbbx_post_show',
		'options' => 'title|10|360|0|1|0|0',
		'edit_func' => 'b_cbbx_post_edit',
		'template' => 'cbbx_block_post.tpl');

	// options[0] - Citeria valid: post(by default), topic, digest, sticky
	// options[1] - NumberToDisplay: any positive integer
	// options[2] - TimeDuration: negative for hours, positive for days, for instance, -5 for 5 hours and 5 for 5 days
	// options[3] - DisplayMode: 0-full view;1-compact view;
	// options[4] - Display Navigator: 1 (by default), 0 (No)
	// options[5] - SelectedForumIDs: null for all

	$modversion['blocks'][] = array(
		'file' => 'cbbx_blocks.php',
		'name' => _MI_CBBX_BLOCK_AUTHOR,
		'description' => 'Shows authors stats',
		'show_func' => 'b_cbbx_author_show',
		'options' => 'topic|5|360|0|1|0',
		'edit_func' => 'b_cbbx_author_edit',
		'template' => 'cbbx_block_author.tpl');	

	 
	$modversion['config'] = array();
	$modversion['config'][] = array(
		'name' 			=> 'do_debug',
		'title' 		=> '_MI_CBBX_DO_DEBUG',
		'description' 	=> '_MI_CBBX_DO_DEBUG_DESC',
		'formtype' 		=> 'yesno',
		'valuetype' 	=> 'int',
		'default' 		=> 0
	);

//-- note. not all of these need to be used. TODO: only include when using admin menus
@include_once(XOOPS_ROOT_PATH.'/modules/'.$moddirname.'/plugins/Frameworks/art/functions.ini.php');
@include_once(XOOPS_ROOT_PATH.'/modules/'.$moddirname.'/Frameworks/art/functions.ini.php');

// Is performing module install/update?
$isModuleAction = mod_isModuleAction('dirname');

$imagesets = array('default'=>'Default', 'hsyong'=>'hsyong');
if($isModuleAction){
	require_once(XOOPS_ROOT_PATH.'/class/xoopslists.php');
	$imagesets =& XoopsLists::getDirListAsArray(XOOPS_ROOT_PATH . '/modules/' . $moddirname . '/images/imagesets/');
}

	$modversion['config'][] = array(
		'name' 			=> 'image_set',
		'title' 		=> '_MI_CBBX_IMG_SET',
		'description' 	=> '_MI_CBBX_IMG_SET_DESC',
		'formtype' 		=> 'select',
		'valuetype' 	=> 'text',
		'options' 		=> $imagesets,
		'default' 		=> 'default');

	$modversion['config'][] = array(
		'name' 			=> 'image_type',
		'title' 		=> '_MI_CBBX_IMG_TYPE',
		'description' 	=> '_MI_CBBX_IMG_TYPE_DESC',
		'formtype' 		=> 'select',
		'valuetype' 	=> 'text',
		'options' 		=> array('png'=>'png', 'gif'=>'gif', 'auto'=>'auto'),
		'default' 		=> 'auto');

$theme_set = array(_NONE=>'0');
if($isModuleAction){
    foreach ($GLOBALS['xoopsConfig']['theme_set_allowed'] as $theme) {
		$theme_set[$theme] = $theme;
    }
}



$modversion['config'][] = array(
	'name' => 'theme_set',
	'title' => '_MI_CBBX_THEMESET',
	'description' => '_MI_CBBX_THEMESET_DESC',
	'formtype'=> 'select',
	'valuetype' => 'text',
	'options'=> $theme_set,
	'default' => '');

$modversion['config'][] = array(
	'name' 			=> 'pngforie_enabled',
	'title' 		=> '_MI_CBBX_PNGFORIE_ENABLE',
	'description' 	=> '_MI_CBBX_PNGFORIE_ENABLE_DESC',
	'formtype' 		=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 		=> 0);

$modversion['config'][] = array(
	'name' => 'subforum_display',
	'title' => '_MI_CBBX_SUBFORUM_DISPLAY',
	'description' => '_MI_CBBX_SUBFORUM_DISPLAY_DESC',
	'formtype' => 'select',
	'valuetype' => 'text',
	'options' => array(
					_MI_CBBX_SUBFORUM_EXPAND=>'expand',
					_MI_CBBX_SUBFORUM_COLLAPSE=>'collapse',
					_MI_CBBX_SUBFORUM_HIDDEN=>'hidden'),
	'default' => 'collapse');

$modversion['config'][] = array(
	'name' => 'post_excerpt',
	'title' => '_MI_CBBX_POST_EXCERPT',
	'description' => '_MI_CBBX_POST_EXCERPT_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 100);

$modversion['config'][] = array(
	'name' => 'topics_per_page',
	'title' => '_MI_CBBX_TOPICSPERPAGE',
	'description' => '_MI_CBBX_TOPICSPERPAGE_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 20);

$modversion['config'][] = array(
	'name' => 'posts_per_page',
	'title' => '_MI_CBBX_POSTSPERPAGE',
	'description' => '_MI_CBBX_POSTSPERPAGE_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 10);

$modversion['config'][] = array(
	'name' => 'posts_for_thread',
	'title' => '_MI_CBBX_POSTSFORTHREAD',
	'description' => '_MI_CBBX_POSTSFORTHREAD_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 200);


$modversion['config'][] = array(
	'name' => 'cache_enabled',
	'title' => '_MI_CBBX_CACHE_ENABLE',
	'description' => '_MI_CBBX_CACHE_ENABLE_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 0);

$defaultUploadDir = 'uploads/' . $moddirname;

$modversion['config'][] = array(
	'name' => 'dir_attachments',
	'title' => '_MI_CBBX_DIR_ATTACHMENT',
	'description' => '_MI_CBBX_DIR_ATTACHMENT_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'text',
	'default' => $defaultUploadDir);

$modversion['config'][] = array(
	'name' => 'media_allowed',
	'title' => '_MI_CBBX_MEDIA_ENABLE',
	'description' => '_MI_CBBX_MEDIA_ENABLE_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'path_magick',
	'title' => '_MI_CBBX_PATH_MAGICK',
	'description' => '_MI_CBBX_PATH_MAGICK_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'text',
	'default' => '/usr/bin/X11');

$modversion['config'][] = array(
	'name' => 'path_netpbm',
	'title' => '_MI_CBBX_PATH_NETPBM',
	'description' => '_MI_CBBX_PATH_NETPBM_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'text',
	'default' => '/usr/bin');

$modversion['config'][] = array(
	'name' => 'image_lib',
	'title' => '_MI_CBBX_IMAGELIB',
	'description' => '_MI_CBBX_IMAGELIB_DESC',
	'formtype' => 'select',
	'valuetype' => 'int',
	'default' => 4,
	'options' => array( _MI_CBBX_AUTO => 0,_MI_CBBX_MAGICK => 1, _MI_CBBX_NETPBM => 2, _MI_CBBX_GD1 => 3, _MI_CBBX_GD2 => 4 ));

$modversion['config'][] = array(
	'name' => 'max_img_width',
	'title' => '_MI_CBBX_MAX_IMG_WIDTH',
	'description' => '_MI_CBBX_MAX_IMG_WIDTH_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 500);

$modversion['config'][] = array(
	'name' => 'max_image_width',
	'title' => '_MI_CBBX_MAX_IMAGE_WIDTH',
	'description' => '_MI_CBBX_MAX_IMAGE_WIDTH_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 800);

$modversion['config'][] = array(
	'name' => 'max_image_height',
	'title' => '_MI_CBBX_MAX_IMAGE_HEIGHT',
	'description' => '_MI_CBBX_MAX_IMAGE_HEIGHT_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 640);

$modversion['config'][] = array(
	'name' => 'wol_enabled',
	'title' => '_MI_CBBX_WOL_ENABLE',
	'description' => '_MI_CBBX_WOL_ENABLE_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'user_level',
	'title' => '_MI_CBBX_USERLEVEL',
	'description' => '_MI_CBBX_USERLEVEL_DESC',
	'formtype' => 'select',
	'valuetype' => 'int',
	'default' => 1,
	'options' => array( _MI_CBBX_NULL => 0,_MI_CBBX_TEXT => 1, _MI_CBBX_GRAPHIC => 2));

$modversion['config'][] = array(
	'name' => 'userbar_enabled',
	'title' => '_MI_CBBX_USERBAR_ENABLE',
	'description' => '_MI_CBBX_USERBAR_ENABLE_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'show_realname',
	'title' => '_MI_CBBX_SHOW_REALNAME',
	'description' => '_MI_CBBX_SHOW_REALNAME_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 0);

$modversion['config'][] = array(
	'name' => 'groupbar_enabled',
	'title' => '_MI_CBBX_GROUPBAR_ENABLE',
	'description' => '_MI_CBBX_GROUPBAR_ENABLE_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'rating_enabled',
	'title' => '_MI_CBBX_RATING_ENABLE',
	'description' => '_MI_CBBX_RATING_ENABLE_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 0);

$modversion['config'][] = array(
	'name' => 'reportmod_enabled',
	'title' => '_MI_CBBX_REPORTMOD_ENABLE',
	'description' => '_MI_CBBX_REPORTMOD_ENABLE_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 0);

$modversion['config'][] = array(
	'name' => 'quickreply_enabled',
	'title' => '_MI_CBBX_QUICKREPLY_ENABLE',
	'description' => '_MI_CBBX_QUICKREPLY_ENABLE_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'rss_enable',
	'title' => '_MI_CBBX_RSS_ENABLE',
	'description' => '_MI_CBBX_RSS_ENABLE_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'rss_maxitems',
	'title' => '_MI_CBBX_RSS_MAX_ITEMS',
	'description' => '',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 10);

$modversion['config'][] = array(
	'name' => 'rss_maxdescription',
	'title' => '_MI_CBBX_RSS_MAX_DESCRIPTION',
	'description' => '',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 0);

$modversion['config'][] = array(
	'name' => 'rss_cachetime',
	'title' => '_MI_CBBX_RSS_CACHETIME',
	'description' => '_MI_CBBX_RSS_CACHETIME_DESCRIPTION',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 30);

$modversion['config'][] = array(
	'name' => 'rss_utf8',
	'title' => '_MI_CBBX_RSS_UTF8',
	'description' => '_MI_CBBX_RSS_UTF8_DESCRIPTION',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 0);

$modversion['config'][] = array(
	'name' => 'view_mode',
	'title' => '_MI_CBBX_VIEWMODE',
	'description' => '_MI_CBBX_VIEWMODE_DESC',
	'formtype' => 'select',
	'valuetype' => 'int',
	'default' => 1,
	'options' => array( _NONE => 0, _FLAT => 1, _THREADED => 2, _MI_CBBX_COMPACT => 3));

$modversion['config'][] = array(
	'name' => 'menu_mode',
	'title' => '_MI_CBBX_MENUMODE',
	'description' => '_MI_CBBX_MENUMODE_DESC',
	'formtype' => 'select',
	'valuetype' => 'int',
	'default' => 0,
	'options' => array( 'SELECT' => 0, 'CLICK'=>1, 'HOVER' => 2));

$modversion['config'][] = array(
	'name' => 'show_jump',
	'title' => '_MI_CBBX_SHOW_JUMPBOX',
	'description' => '_MI_CBBX_JUMPBOXDESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'show_permissiontable',
	'title' => '_MI_CBBX_SHOW_PERMISSIONTABLE',
	'description' => '_MI_CBBX_SHOW_PERMISSIONTABLE_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'email_digest',
	'title' => '_MI_CBBX_EMAIL_DIGEST',
	'description' => '_MI_CBBX_EMAIL_DIGEST_DESC',
	'formtype' => 'select',
	'valuetype' => 'int',
	'default' => 0,
	'options' => array( _MI_CBBX_EMAIL_NONE => 0, _MI_CBBX_EMAIL_DAILY => 1, _MI_CBBX_EMAIL_WEEKLY => 2));

$modversion['config'][] = array(
	'name' => 'show_ip',
	'title' => '_MI_CBBX_SHOW_IP',
	'description' => '_MI_CBBX_SHOW_IP_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'enable_karma',
	'title' => '_MI_CBBX_ENABLE_KARMA',
	'description' => '_MI_CBBX_ENABLE_KARMA_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'karma_options',
	'title' => '_MI_CBBX_KARMA_OPTIONS',
	'description' => '_MI_CBBX_KARMA_OPTIONS_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'text',
	'default' => '0, 10, 50, 100, 500, 1000, 5000, 10000');

$modversion['config'][] = array(
	'name' => 'since_options',
	'title' => '_MI_CBBX_SINCE_OPTIONS',
	'description' => '_MI_CBBX_SINCE_OPTIONS_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'text',
	'default' => '-1, -2, -6, -12, 1, 2, 5, 10, 20, 30, 60, 100');

$modversion['config'][] = array(
	'name' => 'since_default',
	'title' => '_MI_CBBX_SINCE_DEFAULT',
	'description' => '_MI_CBBX_SINCE_DEFAULT_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 100);

$modversion['config'][] = array(
	'name' => 'allow_user_anonymous',
	'title' => '_MI_CBBX_USER_ANONYMOUS',
	'description' => '_MI_CBBX_USER_ANONYMOUS_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'anonymous_prefix',
	'title' => '_MI_CBBX_ANONYMOUS_PRE',
	'description' => '_MI_CBBX_ANONYMOUS_PRE_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'text',
	'default' => 'Guest_');

$modversion['config'][] = array(
	'name' => 'allow_require_reply',
	'title' => '_MI_CBBX_REQUIRE_REPLY',
	'description' => '_MI_CBBX_REQUIRE_REPLY_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'edit_timelimit',
	'title' => '_MI_CBBX_EDIT_TIMELIMIT',
	'description' => '_MI_CBBX_EDIT_TIMELIMIT_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 60);

$modversion['config'][] = array(
	'name' => 'recordedit_timelimit',
	'title' => '_MI_CBBX_RECORDEDIT_TIMELIMIT',
	'description' => '_MI_CBBX_RECORDEDIT_TIMELIMIT_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 15);

$modversion['config'][] = array(
	'name' => 'delete_timelimit',
	'title' => '_MI_CBBX_DELETE_TIMELIMIT',
	'description' => '_MI_CBBX_DELETE_TIMELIMIT_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 60);

$modversion['config'][] = array(
	'name' => 'post_timelimit',
	'title' => '_MI_CBBX_POST_TIMELIMIT',
	'description' => '_MI_CBBX_POST_TIMELIMIT_DESC',
	'formtype' => 'textbox',
	'valuetype' => 'int',
	'default' => 30);

$modversion['config'][] = array(
	'name' => 'enable_permcheck',
	'title' => '_MI_CBBX_PERMCHECK_ONDISPLAY',
	'description' => '_MI_CBBX_PERMCHECK_ONDISPLAY_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 1);

$modversion['config'][] = array(
	'name' => 'enable_usermoderate',
	'title' => '_MI_CBBX_USERMODERATE',
	'description' => '_MI_CBBX_USERMODERATE_DESC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => 0);

$modversion['config'][] = array(
	'name' => 'subject_prefix_level',
	'title' => '_MI_CBBX_SUBJECT_PREFIX_LEVEL',
	'description' => '_MI_CBBX_SUBJECT_PREFIX_LEVEL_DESC',
	'formtype' => 'select',
	'valuetype' => 'int',
	'default' => 3,
	'options' => array( _MI_CBBX_SPL_DISABLE =>0, _MI_CBBX_SPL_ANYONE =>1, _MI_CBBX_SPL_MEMBER =>2, _MI_CBBX_SPL_MODERATOR =>3, _MI_CBBX_SPL_ADMIN=>4));

$modversion['config'][] = array(
	'name' => 'subject_prefix',
	'title' => '_MI_CBBX_SUBJECT_PREFIX',
	'description' => '_MI_CBBX_SUBJECT_PREFIX_DESC',
	'formtype' => 'textarea',
	'valuetype' => 'text',
	'default' => 'NONE,'._MI_CBBX_SUBJECT_PREFIX_DEFAULT);

$modversion['config'][] = array(
	'name' => 'disc_show',
	'title' => '_MI_CBBX_SHOW_DIS',
	'description' => '_MI_CBBX_SHOW_DIS_DESC',
	'formtype' => 'select',
	'valuetype' => 'int',
	'default' => 0,
	'options' => array( _NONE => 0, _MI_CBBX_POST => 1, _MI_CBBX_REPLY => 2, _MI_CBBX_OP_BOTH=> 3));

$modversion['config'][] = array(
	'name' => 'disclaimer',
	'title' => '_MI_CBBX_DISCLAIMER',
	'description' => '_MI_CBBX_DISCLAIMER_DESC',
	'formtype' => 'textarea',
	'valuetype' => 'text',
	'default' => _MI_CBBX_DISCLAIMER_TEXT);

$forum_options = array(_NONE => 0);
if( $isModuleAction && 'update_ok' == $_POST['op'] ) {
	$forum_handler =& xoops_getmodulehandler('forum', $modversion['dirname'], true);
	$forums = $forum_handler->getForumsByCategory(0, '', false, array('parent_forum', 'cat_id', 'forum_name'));
	if($forums):
	foreach (array_keys($forums) as $c) {
		foreach(array_keys($forums[$c]) as $f){
			$forum_options[$forums[$c][$f]['title']]=$f;
	        if(!isset($forums[$c][$f]['sub'])) continue;
			foreach(array_keys($forums[$c][$f]['sub']) as $s){
				$forum_options['-- '.$forums[$c][$f]['sub'][$s]['title']]=$s;
			}
		}
	}
	unset($forums);
	endif;
}
$modversion['config'][] = array(
	'name' => 'welcome_forum',
	'title' => '_MI_CBBX_WELCOMEFORUM',
	'description' => '_MI_CBBX_WELCOMEFORUM_DESC',
	'formtype' => 'select',
	'valuetype' => 'int',
	'default' => 0,
	'options' => $forum_options);

// Notification
$modversion['notification'] = array();
$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'cbbx_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'thread';
$modversion['notification']['category'][1]['title'] = _MI_CBBX_THREAD_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_CBBX_THREAD_NOTIFYDSC;
$modversion['notification']['category'][1]['subscribe_from'] = 'viewtopic.php';
$modversion['notification']['category'][1]['item_name'] = 'topic_id';
$modversion['notification']['category'][1]['allow_bookmark'] = 1;

$modversion['notification']['category'][2]['name'] = 'forum';
$modversion['notification']['category'][2]['title'] = _MI_CBBX_FORUM_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_CBBX_FORUM_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = 'viewforum.php';
$modversion['notification']['category'][2]['item_name'] = 'forum';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'global';
$modversion['notification']['category'][3]['title'] = _MI_CBBX_GLOBAL_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_CBBX_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][3]['subscribe_from'] = 'index.php';

$modversion['notification']['event'][1]['name'] = 'new_post';
$modversion['notification']['event'][1]['category'] = 'thread';
$modversion['notification']['event'][1]['title'] = _MI_CBBX_THREAD_NEWPOST_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_CBBX_THREAD_NEWPOST_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_CBBX_THREAD_NEWPOST_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'thread_newpost_notify';
$modversion['notification']['event'][1]['mail_subject'] = _MI_CBBX_THREAD_NEWPOST_NOTIFYSBJ;

$modversion['notification']['event'][2]['name'] = 'new_thread';
$modversion['notification']['event'][2]['category'] = 'forum';
$modversion['notification']['event'][2]['title'] = _MI_CBBX_FORUM_NEWTHREAD_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_CBBX_FORUM_NEWTHREAD_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_CBBX_FORUM_NEWTHREAD_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'forum_newthread_notify';
$modversion['notification']['event'][2]['mail_subject'] = _MI_CBBX_FORUM_NEWTHREAD_NOTIFYSBJ;

$modversion['notification']['event'][3]['name'] = 'new_forum';
$modversion['notification']['event'][3]['category'] = 'global';
$modversion['notification']['event'][3]['title'] = _MI_CBBX_GLOBAL_NEWFORUM_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_CBBX_GLOBAL_NEWFORUM_NOTIFYCAP;
$modversion['notification']['event'][3]['description'] = _MI_CBBX_GLOBAL_NEWFORUM_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = 'global_newforum_notify';
$modversion['notification']['event'][3]['mail_subject'] = _MI_CBBX_GLOBAL_NEWFORUM_NOTIFYSBJ;

$modversion['notification']['event'][4]['name'] = 'new_post';
$modversion['notification']['event'][4]['category'] = 'global';
$modversion['notification']['event'][4]['title'] = _MI_CBBX_GLOBAL_NEWPOST_NOTIFY;
$modversion['notification']['event'][4]['caption'] = _MI_CBBX_GLOBAL_NEWPOST_NOTIFYCAP;
$modversion['notification']['event'][4]['description'] = _MI_CBBX_GLOBAL_NEWPOST_NOTIFYDSC;
$modversion['notification']['event'][4]['mail_template'] = 'global_newpost_notify';
$modversion['notification']['event'][4]['mail_subject'] = _MI_CBBX_GLOBAL_NEWPOST_NOTIFYSBJ;

$modversion['notification']['event'][5]['name'] = 'new_post';
$modversion['notification']['event'][5]['category'] = 'forum';
$modversion['notification']['event'][5]['title'] = _MI_CBBX_FORUM_NEWPOST_NOTIFY;
$modversion['notification']['event'][5]['caption'] = _MI_CBBX_FORUM_NEWPOST_NOTIFYCAP;
$modversion['notification']['event'][5]['description'] = _MI_CBBX_FORUM_NEWPOST_NOTIFYDSC;
$modversion['notification']['event'][5]['mail_template'] = 'forum_newpost_notify';
$modversion['notification']['event'][5]['mail_subject'] = _MI_CBBX_FORUM_NEWPOST_NOTIFYSBJ;

$modversion['notification']['event'][6]['name'] = 'new_fullpost';
$modversion['notification']['event'][6]['category'] = 'global';
$modversion['notification']['event'][6]['admin_only'] = 1;
$modversion['notification']['event'][6]['title'] = _MI_CBBX_GLOBAL_NEWFULLPOST_NOTIFY;
$modversion['notification']['event'][6]['caption'] = _MI_CBBX_GLOBAL_NEWFULLPOST_NOTIFYCAP;
$modversion['notification']['event'][6]['description'] = _MI_CBBX_GLOBAL_NEWFULLPOST_NOTIFYDSC;
$modversion['notification']['event'][6]['mail_template'] = 'global_newfullpost_notify';
$modversion['notification']['event'][6]['mail_subject'] = _MI_CBBX_GLOBAL_NEWFULLPOST_NOTIFYSBJ;

$modversion['notification']['event'][7]['name'] = 'digest';
$modversion['notification']['event'][7]['category'] = 'global';
$modversion['notification']['event'][7]['title'] = _MI_CBBX_GLOBAL_DIGEST_NOTIFY;
$modversion['notification']['event'][7]['caption'] = _MI_CBBX_GLOBAL_DIGEST_NOTIFYCAP;
$modversion['notification']['event'][7]['description'] = _MI_CBBX_GLOBAL_DIGEST_NOTIFYDSC;
$modversion['notification']['event'][7]['mail_template'] = 'global_digest_notify';
$modversion['notification']['event'][7]['mail_subject'] = _MI_CBBX_GLOBAL_DIGEST_NOTIFYSBJ;

$modversion['notification']['event'][8]['name'] = 'new_fullpost';
$modversion['notification']['event'][8]['category'] = 'forum';
$modversion['notification']['event'][8]['admin_only'] = 1;
$modversion['notification']['event'][8]['title'] = _MI_CBBX_GLOBAL_NEWFULLPOST_NOTIFY;
$modversion['notification']['event'][8]['caption'] = _MI_CBBX_GLOBAL_NEWFULLPOST_NOTIFYCAP;
$modversion['notification']['event'][8]['description'] = _MI_CBBX_GLOBAL_NEWFULLPOST_NOTIFYDSC;
$modversion['notification']['event'][8]['mail_template'] = 'global_newfullpost_notify';
$modversion['notification']['event'][8]['mail_subject'] = _MI_CBBX_GLOBAL_NEWFULLPOST_NOTIFYSBJ;
?>