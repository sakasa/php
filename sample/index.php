<?php
require_once dirname(__FILE__) . '/app/constant.php';
require_once dirname(__FILE__) . '/app/user_info.php';
require_once dirname(__FILE__) . '/app/article_list.php';

/**
 * index
 */
try {
	// user info
	$user = new UserInfo();
	// article list
	$article = new ArticleList();
	
	// view
	include Constant::$APP_DIR . '/view/view_index.php';

} catch (Exception $e) {
	print_r($e);
}
