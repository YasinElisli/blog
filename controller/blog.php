<?php 
//butun bloglari pagination seklinde ekrana cixarmaq ucun model-den aldigi melumatlari view-a gonderir
function blog()
{
	if (isset($_GET["page"])) {
		$pageNum = $_GET["page"];
	}
	else{
		$pageNum = 1;
	}

	$blogs = bloglar($pageNum);
	specialPage('blog.php','Məqalələr',$blogs);
}
//yeni meqale sehifesine yonlendirir
function yeniBlog()
{
	specialPage('yeniBlog.php','Yeni Məqalə');
}
//POST-dan gelen melumatlarin varligini yoxlayir.Eger varsa model ise dusur ve elave olunan meqaleye yonlendirir,yoxdursa useri geriye qaytarir
function elave()
{
	if (!empty($_POST["ad"]) && !empty($_POST["soyad"]) && !empty($_POST["basliq"]) && !empty($_POST["meqale"])) {
		$id = blogElave();
		header("location:?url=meqale&id=".$id);
	}
	else{
		header("location:?url=blog/yeni");
	}
}
//GET-den gelen id-e esasen meqaleni db-den cekib gosterir
function tekBlog()
{
	$id = intval($_GET["id"]);
	$blog = tekBlogCek($id);
	specialPage("tekBlog.php","Meqale",$blog);
}
//GET-den gelen parametrlrer esasen bazada axtaris edir
function blogAxtar()
{
	$search = $_GET["search"];
	$result = axtar($search);
	specialPage("search.php","Netice",$result);
}

 ?>