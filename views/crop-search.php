<?php
	$header = '
		<!-- header -->
		<header class="crop_search_head">
			<aside class="crop_head_inner"><div class="centroid_700">
				<h3 class="crop_h3">What do you want to plant?</h3>
				<form method="post" action="">
					<!-- textbox holder -->
					<div class="app_textbx_holder">
						<!-- name of crop -->
						<div class="crop_textholder grid-b6 name"><input type="text" required="required" name="cropname" placeholder="Name of Crop..."></div>
						<!-- user location -->
						<div class="crop_textholder grid-b6 float_right location"><input type="text" required="required" name="userlocation" placeholder="My Location..."></div>
					</div>
					<!-- button -->
					<center>
						<input type="submit" class="btnAppSubmit" name="btnPlant" value="Plant">
					</center>
				</form>
			</div></aside>
		</header>
		<!-- end of header -->
	';

	$body = '<h3 class="crop_sec_h3">Identify Pest or Disease</h3> <label class="crop_identify float_right" title="Select/Take a pic"><input class="hidebx" type="file" accept="image/*" capture="camera"></label>';

	if (isset($_POST['btnPlant'])) {
		$crop_name = mysqli_real_escape_string($con, $_POST['cropname']);
		$user_location = mysqli_real_escape_string($con, $_POST['userlocation']);

		$query = "
			SELECT * FROM crop_location 
			WHERE crop LIKE '%".$crop_name."%'
			AND location LIKE '%".$user_location."%'
			";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				$header = '
					<!-- header -->
					<header class="crop_search_head crop_search_head_result crop_loc_head">
						<aside class="crop_head_inner"><div class="centroid_700">
							<br>
							<p style="font-size:1.2em;">Search Results</p>
							<div class="header_label white_crop">Crop: '.$row['crop'].'</div>
							<div class="header_label white_location">Location: '.$row['location'].'</div>
						</div></aside>
					</header>
					<!-- end of header -->
				';
				$body = $row['details'].'<br><br><a href="?view=crop-location&page='.$row['id'].'" class="start_planting plant_me">Start Planting</a>';
				print('<audio class="home_audio hidebx" src="'.$row['audio'].'" controls="controls" loop="loop" autoplay="autoplay"></audio>');
			}
		}else{
			$body .= "<div class='search_none'>Data Not Found</div>";
		}
	}
?>

			<article class="home_container app_view_container">
				<?php print($header); ?>

				<section class="centroid_700 crop_section">
					<?php print($body) ?>
				</section>

				<script>
					$(function () {
						$('.crop').addClass('menu_focus');
					});
				</script>
			</article>