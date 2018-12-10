<?php 
//eger  meqale tesdiqlenmeyibse qarsisinda aktiv deyil yazilacaq
if ($value['is_public'] == 0) {
	$status  = " (aktiv deyil)";
}
else{
	$status = NULL;
}

?>

<div class="container">
	<div class="row">
		<blockquote class="headerBlq"><?php echo $value['art_title'].'<span class="red-text text-darken-1">'.$status.'</span>'; ?></blockquote>
		<span><?php echo $value['upload_time'] ; ?>   |  Kateqoriya: <span class="red-text"></span><?php echo $value['art_cat']; ?></span>
	</div>
	<div class="row">
		<div class="col s12 artPic" style="background: url(img/<?php echo $value['art_pic'];?>)">
		</div>
	</div>
	<div class="row artDiv">
		<p class="artText" ><?php echo nl2br($value['art_text']);//yazilari oldugu kimi(bosluqlari silmeden) ekrana cixarmaq ucun funtion ?></p>
	</div>
	<ul class="collection">
    <li class="collection-item avatar">
      <i class="material-icons circle blue lighten-3 ">edit</i>
      <span class="title">Yazar:</span>
      <p><?php echo $value['writer_sname']." ".$value['writer_name'] ?></p>
 
    </li>
  
  </ul>
</div>

