<?php 
//butun meqaleleri ceken function
function bloglar($pageNum)
{
	global $db;
	$blogCount = $db->query("select  * from article");
	$blogCountData = $blogCount->fetch_all(MYSQLI_ASSOC);
	$errorMsg = false;

	if (empty($blogCountData)) {
		return $errorMsg;//eger bazada meqale yoxdursa false deyeri qaytarir
	}
	else{
		$limit = 4;
		$startFrom = ($pageNum-1)*$limit;
		$blogstart = $db->query("select * from article order by ID desc limit $startFrom ,$limit");

		$blogstart = $blogstart->fetch_all(MYSQLI_ASSOC);

		$totalPages = ceil( count($blogCountData) / $limit);//ne qeder pagination sehifesi olacagini tapmaq ucun meqale sayini 1 sehifede gosterilecek max meqale sayina bolub yuvarlaqlasdiririq


		$blogData[0] = 	$blogstart;//pagination-da haradan baslayaraq meqalelerin bazadan cekileceyini teyin edir
		$blogData[1] =  $totalPages;//nece dene pagination sehifesinin oldugunu qaytarir
		return $blogData;
	}
	
	$db->close();
}
//db-e yeni meqale elave edir
function blogElave()
{
	global $db;
	$ad = htmlentities($_POST["ad"],ENT_QUOTES);
	$soyad = htmlentities($_POST["soyad"],ENT_QUOTES);
	$basliq = htmlentities($_POST["basliq"],ENT_QUOTES);
	$cat = htmlentities($_POST["category"],ENT_QUOTES);
	$meqale = htmlentities($_POST["meqale"],ENT_QUOTES);
	if (!empty($_POST["sekil"])) {
		$sekil = htmlentities($_POST["sekil"],ENT_QUOTES);
	}
	else{
		$sekil = "a.jpg";//default meqale sekli
	}
	date_default_timezone_set('Asia/Baku');
	$tarix = date("Y-m-d  H:i:s");
	$db->real_query("insert into article (writer_name,writer_sname,art_title,art_cat,art_pic,art_text,upload_time) values ('$ad','$soyad','$basliq','$cat','$sekil','$meqale','$tarix') ") or die("Xeta baş verdi ".$db->error);
	return $db->insert_id;
	$db->close();
}
//bazadan id parametrine esasen meqale cekir
function tekBlogCek($id)
{
	global $db;
	$row = $db->query("select * from article where ID=".$id."");
	$blog = $row->fetch_assoc();
	return $blog;
	$db->close();
}
//bazada axtaris etmek ucun function
function axtar($search)
{
	global $db;
	$search = $db->real_escape_string($search);
	$sql = "SELECT * FROM article
	WHERE (`art_title` LIKE '%".$search."%') OR (`art_text` LIKE '%".$search."%')";
	$result = $db->query($sql);
	return $result;
	$db->close();
}
?>