<?php

session_start();

include 'CommentModel.php';

if(isset($_POST['commentbtn'])){
	// echo '<pre>';print_r("comment");echo 'commnt';'</pre>';die;
	$comment= trim($_POST['comment']);
	$bid= $_POST['blog_id'];
	$uid = $_SESSION['user']['uID'];
	
	$comm = new CommentModel();	
	// echo '<pre>';print_r($comment);print_r($bid);print_r($uid);echo '</pre>';die;
	if (isset($_SESSION['user']) && $uid > 0) {
		$register=$comm->addComment($comment, $uid, $bid);
		if($register==1){
			
			header('location:blogsingle.php?bid='.$bid);
			
		}
	}

	header('location:blogsingle.php?bid='.$bid);
}

function getCommentsPerBlog ($bid) {
	$comment = new CommentModel;
	$all_comments = $comment->getCommentsByBlogId($bid);

	$comment_arr = [];
	while($row = $all_comments->fetch_assoc())
    $comment_arr[] = $row;

	return $comment_arr;
}


?>