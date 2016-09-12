<?php

/**
 *
 * cmBB [English]
 *
 * @copyright (c) 2016 Ger Bruinsma
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_ANNOUNCE_TEXT'					=> 'Announcement text',
	'ACP_ANNOUNCE_TEXT_EXPLAIN'			=> 'Text that will be displayed above all articles and category pages. No BBcode is parsed, use HTML.',
	'ACP_ANNOUNCE_SHOW'					=> 'Show announcement text',
	'ACP_ANNOUNCE_SHOW_EXPLAIN'			=> 'Wether or not to display the text provided above',
	'ACP_CATEGORIES_MANAGE'				=> 'Mange categories',
	'ACP_CATEGORIES_MANAGE_EXPLAIN'		=> 'Here you can add, modify or delete categories. You should first create a category and submit, and change the setting next.'
											. '<br />Please note: cmBB uses the category name for the URL. Once you have chosen a category name, it is therefore recommended NOT to change the name afterwards since the URL will NOT be changed accordingly.',
	'ACP_CMBB_CATEGORIES'				=> 'Categories',
	'ACP_CMBB_SETTING_SAVED'			=> 'cmBB settings saved',
	'ACP_CMBB_TITLE'					=> 'cmBB',
	'ACP_MIN_POST_COUNT'				=> 'Required posts to create articles',
	'ACP_MIN_POST_COUNT_EXPLAIN'		=> 'Members with this many posts will acquire the permission to create articles. Set to 0 to disable this feature. Moderators and administrators will allways have this permission.',
	'ACP_MIN_TITLE_LENGTH'				=> 'Minumum title length',
	'ACP_MIN_TITLE_LENGTH_EXPLAIN'		=> 'Required minimum length of article titles',
	'ACP_MIN_CONTENT_LENGTH'			=> 'Minumum content length',
	'ACP_MIN_CONTENT_LENGTH_EXPLAIN'	=> 'Required minimum length of article content (body)',
	'ACP_NUMBER_INDEX_ITEMS'			=> 'Number of index items',
	'ACP_NUMBER_INDEX_ITEMS_EXPLAIN'	=> 'Maximum number of latest items to show on index page. Items are sorted by date (latest on top)',
	'ACP_REACT_FORUM_ID'				=> 'Forum for comment topics',
	'ACP_REACT_FORUM_ID_EXPLAIN'		=> 'Select the forum to create a topic in for comments.',
	'CHILDREN'							=> 'Children',
	'CHILDREN_EXPLAIN'					=> 'Number of articles in this category',
	'CMBB_SETTINGS'						=> 'cmBB settings',
	'CMBB_DELETE_CAT_EXPLAIN'			=> 'A category can only be deleted when it holds no articles',
	'CREATE_CATEGORY'					=> 'Add category',
	'ERROR_FAILED_DELETE'				=> 'Failed to delete.',
	'NO_REACTIONS'						=> 'Disable comments',
	'PROTECTED'							=> 'Protected',
	'PROTECTED_EXPLAIN'					=> 'Only accesible for moderators',

		));
