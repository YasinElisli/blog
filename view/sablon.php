<?php 
//function ekrana vermek ucun bir sablon emele getirir
function showPage($src,$title,$value=null)
{
	if ($src == "view/general/error404.php") {
		include $src;
	}
	else{
		include 'view/general/header.php';
		include $src;
		include 'view/general/footer.php';
	}

}
//saytin statik olan hisseleri ucun yuxaridaki funksiyadan toreyen funksiya
function generalPage($src,$title,$value=null)
{
	showPage('view/general/'.$src,$title,$value);
}
//saytin dinamik olan hisseleri ucun yuxaridaki funksiyadan toreyen funksiya
function specialPage($src,$title,$value=null)
{
	showPage('view/special/'.$src,$title,$value);
}


?>