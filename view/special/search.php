<div class="container">
	<div class="row">
		<blockquote class="headerBlq"><?php echo '"'.$_GET["search"].'" üzrə axtarışın nəticələri:'; ?></blockquote>
	</div>
	<?php 
//eger axtarilan soze uygun meqale varsa gosterir eks halda xeta mesaji verir
	if ($value->num_rows > 0) {
		while($blog = $value->fetch_assoc()) {
			echo('<div class="row">');
			include 'view/general/blogSablon.php';
			echo("</div>");
		}
	} else {
		xeta("Axtardığınız məqalə tapılmadı");
	}
	?>
</div>