<?php
require_once 'database.php';


class CommentModel extends Connection {

	public function addComment($comment, $uid, $bid){
		$query = "INSERT into comments values(null,'".$comment."','".$uid."','".$bid."', NULL)";
		
		if(mysqli_query($this->con,$query)==true){
			return 1;
		}else{
			return 0;
		}
	}

	public function getCommentsByBlogId($bid) {
		$query = "SELECT * from comments as c INNER JOIN users as u ON c.uid=u.uID where c.bid = ". $bid. " ORDER BY cid DESC";

		$result = mysqli_query($this->con, $query);

		return $result;
	}
}

// $var = new CommentModel();
// $var->addComment('testComment',21,1);
// $var->getCommentsByBlogId(1);
// echo "success comment";

	
 ?>
