<?php
	include 'database.php';
	// $root = dirname(dirname(__FILE__));
	include './Controllers/HomeController/HomeController.php';
	include 'CommentController.php';
	$fun = index();

	$events_array = getEvents();	

	$blogs = getBlogs();

	if (isset($_GET['bid'])) {
		$single_blog = getSingleBlog($_GET['bid']);
		$blog_comments = getCommentsPerBlog($_GET['bid']);
	}else{
		$single_blog = new stdClass();;
		$blog_comments = [];
	}

	if (isset($_GET['eid'])){
		$single_event = getSingleEvent($_GET['eid']);

	}else{
		$single_event = new stdClass();;
	}


?>