<?php 
//ana sehifede gosterilecek meqale sayini teyin edir ve view-a gonderir
function anasehife()
{
	$blogs = lastBlogs(6);//6 - ana sehifede gosterilecek meqale sayi
	specialPage('anasehife.php','Blog.com',$blogs);
}


 ?>