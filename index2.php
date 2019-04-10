<?php
include_once('header.php');
include_once('BlogPosts.php');
$posts=new BlogPosts();
$query="SELECT * FROM posts ORDER BY id DESC";
$result=$posts->getPosts($query);
?>
<h1> My first OOP PHP blog </h1>
<br>
<br>
<?php
if(isset($_SESSION['author'])) {
	echo "<h3> Welcome ".$_SESSION['author']."</h3>";
}
if (is_array($result) || is_object($result)) {
	foreach ($result as $key => $res) {
		$posts->setDetails($res['title'],$res['post'],$res['author_id'],$res['date_posted']);
		$post=$posts->getDetails();
		echo "<h1>".$post['title']." </h1>";
		echo "<p>".$post['post']." </p>";
		echo "<p>Posted by: ".$post['author'].$post['date_posted'];

	}
}
?>