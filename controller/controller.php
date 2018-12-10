<?php 
include 'model/db.php';
include 'view/sablon.php';

//bu function controller ve module fayllarinin adlari eyni olduqda duzgun //isleyir
//1-ci deyisen include edilecek controller ve model  faylini 2-ci deyisen ise o cagirilacaq controller funksiyasini ifade edir
//eger controller function teyin olunmayibsa ana sehife function ise dusur
function controller($srcFile,$controller="anasehife")
{
	include 'controller/'.$srcFile;
	include 'model/'.$srcFile;
	$controller();
}
//bu funksiya title-i ve xeta mesajini view-a gonderir 
function xeta($mesaj)
{
	generalPage('error404.php','Xeta',$mesaj);
}





?>
