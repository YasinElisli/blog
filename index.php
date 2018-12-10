<?php     
include 'controller/controller.php';

//Routing 

if (!empty($_GET["url"])) {
  $url = $_GET["url"];
  switch ($url) {
    //controller funksiyasinin 1ci parametri cagrilan sehifenin model ve controller fayllarini include etmek ucun,2-cisi ise controller faylindaki funksiyani cagirmaq ucundur
    case "anasehife"      :  controller('anaSehife.php','anasehife'); break;
    case "meqaleler"      :  controller('blog.php','blog');           break;
    case "blog/yeni"      :  controller('blog.php','yeniBlog');       break;
    case "blog/yeni/elave":  controller('blog.php','elave');          break;
    case "meqale"         :  controller('blog.php','tekBlog');        break;

    default: { controller('anaSehife.php','anasehife'); break;}
    break;
  }
}
elseif (!empty($_GET["search"])) {
  $url = $_GET["search"];
  controller('blog.php','blogAxtar');
}
else{
  $title = "Xeta";
  include 'view/general/header.php';
  xeta('Axtardığınız Səhifə tapılmadı');
  include 'view/general/footer.php';

}


?>
