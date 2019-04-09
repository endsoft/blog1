<?php
include_once('BlogPosts.php');
$posts=new BlogPosts();
$query="SELECT * FROM posts ORDER BY id DESC";
$result=$posts->getPosts($query);
?>
<h1> My first OOP PHP blog </h1>
<br>
<br>
<?php
foreach ($result as $key => $res) {
	$sql="SELECT firstLastName FROM author WHERE id=".$res['author_id'];
	$firstLastName=$posts->getPosts($sql);
	echo "<h1>".$res['title']." </h1>";
	echo "<p>".$res['post']." </p>";
	foreach ($firstLastName as $key => $firstLast) {
		echo "<p>Posted by: ".$firstLast['firstLastName'];
	}
	$splitDate=explode("-",$res['date_posted']);
	$month=$posts->getDate($splitDate[1]);
	echo " on ".$month." ".$splitDate[2].", ".$splitDate[0]." </p>";


}
?>