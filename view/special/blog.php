<div class="container">
	<div class="row">
		<blockquote class="headerBlq capWorld">Son Məqalələr</blockquote>
	</div>
	<?php 
	
	if ($value == false) {
		xeta('Təəssüfki saytda hələ məqalə yoxdur');//saytda meqale olub-olmadigini yoxlayir
	}
	else{
		$resultBlogs = $value[0];//meqalelerin sayi
		$totalPages = $value[1];//pagination sehifelerinin sayi
		$currentPage = $_GET["page"];//hal-hazirda baxilan sehife
		
		if ($currentPage == 1) {
			$firstClass= "disabled";
		}
		else{
			$firstClass = "waves-effect";
		}
		if ($currentPage == $totalPages) {
			$lastClass = "disabled";
		}
		else{
			$lastClass = "waves-effect";
		}
		if ($firstClass != "disabled") {
			$firstLink = '<a href=?url=meqaleler&page='.($currentPage-1).'>';
		}
		else{
			$firstLink = '';
		}
		if ($lastClass != "disabled") {
			$lastLink = '<a href=?url=meqaleler&page='.($currentPage+1).'>';
		}
		else{
			$lastLink = '';
		}

//sablon vasitesile meqaleleri ekrana verilmesi
		foreach ($resultBlogs as $blog) {
			echo('<div class="row">');
			include 'view/general/blogSablon.php';
			echo("</div>");
		}
//pagination kodlari
		if (!empty($totalPages) && $totalPages > 1) {
			echo '<ul class="pagination" id="pagination">
			<li class='.$firstClass.'>'.$firstLink.'<i class="material-icons">chevron_left</i></a></li>';
			for ($i=1; $i<=$totalPages ; $i++) { 
				if ($i == $currentPage) {
					$classActive = "active";
				}
				else{
					$classActive = "";
				}
				if ($i == 1) {
					echo(' <li class="'.$classActive.'" id='.$i.'><a href='."?url=meqaleler&page=".$i.'>'.$i.'</a></li>');
				}
				else{
					echo('<li class="'.$classActive.'" id="'.$i.'""><a href='."?url=meqaleler&page=".$i.'>'.$i.'</a></li>');
				}
			}
			echo'<li class='.$lastClass.'>'.$lastLink.'<i class="material-icons">chevron_right</i></a></li>
			</ul>'	;
		}
		
	}
	

	?>
	
</div>