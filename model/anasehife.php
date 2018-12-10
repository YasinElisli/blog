<?php 
//ana sehifede gosterileeck son meqaleleri ceken function
function lastBlogs($blogNum)//$blogNum gosterilecek meqale sayini teyin edir
{
	global $db;
	$blogs = $db->query("select * from article order by ID desc limit $blogNum");
	$blogData = $blogs->fetch_all(MYSQLI_ASSOC);
	return $blogData;
	$db->close();
}

?>