<?php
	$page = '';
	$cropname = "Crop Name Here";
	$userlocation = "User Location Here";
	$body = "<div class='search_none'>Search Details Here</div>";
	if (isset($_GET['page'])) {
		$page = $_GET['page'];

		$query = "SELECT * FROM crop_search WHERE id=$page ";
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result)){
			$cropname = $row['crop'];
			$userlocation = $row['location'];
			$body = $row['details'];
			print('<audio class="home_audio hidebx" src="'.$row['audio'].'" controls="controls" loop="loop" autoplay="autoplay"></audio>');
		}
	}
?>

		<article class="home_container app_view_container">
			<!-- header -->
			<header class="crop_search_head crop_loc_head">
				<aside class="crop_head_inner"><div class="centroid_700">
					<br>
					<p style="font-size:1.2em;">Day One::.</p>
					<div class="header_label white_crop">Crop: <?php print($cropname) ?></div>
					<div class="header_label white_location">Location: <?php print($userlocation) ?></div>
				</div></aside>
			</header>
			<!-- end of header -->

			<!-- section or body -->
			<section class="centroid_700 crop_section">
				<?php print($body) ?>
			</section>
			<!-- end of section or body -->

			<script>
				$(function () {
					$('.plant').addClass('menu_focus');
				});
			</script>
		</article>