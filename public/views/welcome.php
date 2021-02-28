	<?php 
		// if (@is_null($_GET['view'])) {
			include_once 'splashscreen.php';
		// }
		// Check if user is logged in using the session variable
		$_SESSION['logged_in'] = 1;
	?>

	<section class="omni_home"><div class="omni_home_back">
		<!-- header -->
		<header class="omni_home_head">
			<div class="float_left trans home_head_left">
				<div class="omni_hello">Hello Farmer, </div>
				<div class="omni_greet"></div>
			</div>
			<div class="float_left trans weather_icon imgfx">
				<img src="#" alt="">
			</div>

			<aside class="float_right trans omni_nav_utils">
				<div class="omni_time"></div>
				<div class="omni_date"><?php date_default_timezone_set("Africa/Accra"); print(date('D jS F, Y')); ?></div>
			</aside>
		</header>
		<!-- end of header -->

		<div class="spacerA"></div><div class="spacerA"></div>
		<section class="home_container"><article class="home_infobx centroid_700">
			<!-- frosted tabs -->
			<div class="home_frosted_tab">
				<p>70% chance of rain today</p>
				<figure class="frosted_ico imgfx"><img src="ico/rain.png" alt=""></figure>
			</div>

			<!-- tab -->
			<div class="home_frosted_tab">
				Best Crops to plant this month:
				Maize, Sweet Potato, Rice
			</div>

			<!-- tab -->
			<div class="home_frosted_tab">
				<div class="grid_container">
					<div class="frosted_grid_tab grid-2">Pest Alert</div>
					<span>Watch out for: Fall Armyworms, Aphids, Cutworms, Weevils</span>
				</div>
			</div>

			<!-- tab -->
			<div class="home_frosted_tab">
				<div class="grid_container">
					<div class="frosted_grid_tab grid-2">Disease Alert</div>
					<span>Watch out for: Northern Leaf Blight, Maize Dwarf Mosiac Virus, Corn Smut</span>
				</div>
			</div>

			<!-- tab -->
			<div class="home_frosted_tab">
				<div class="grid_container">
					<div class="frosted_grid_tablets grid-3">Market Prices</div>
					<div class="frosted_grid_tablets grid-3">Yellow Corn <br>R180 per 50kg</div>
					<div class="frosted_grid_tablets grid-3">White Corn <br>R200 per 50kg</div>
					<div class="frosted_grid_tablets grid-3">White Rice <br>R20 per 1kg</div>
				</div>
			</div>

			<!-- tab -->
			<div class="home_frosted_tab">
				<div class="grid_container">
					<div class="frosted_grid_tab size_tablet grid-2">Agri Input Prices</div>
					<div class="frosted_grid_tablets grid-3">Fertilizer <div class="frosted_liner"></div>R8,300 per Ton</div>
					<div class="frosted_grid_tablets grid-3">Pesticides <div class="frosted_liner"></div>R250 market price </div>
					<div class="frosted_grid_tablets grid-3">Weedicides <div class="frosted_liner"></div>R180 market price</div>
				</div>
			</div>

			<!-- tab -->
			<div class="home_frosted_tab">
				<figure class="omni_home_logo imgfx"><img src="img/Omni AI.png"></figure>
				<br>
				<a href="?view=crop-search"><div class="omni_unlock_btn">Unlock</div></a>
			</div>
			<!-- end of frosted tabs -->
		</article></section>
		<!-- unlock button -->
		<div class="spacerA"></div>
		<!-- home row buttons -->
		<footer class="home_row_buttons">
			<a href="tel:"><div class="grid-b3 home_row_ico call"></div></a>
			<a href="sms:"><div class="grid-b3 home_row_ico msg"></div></a>
			<div class="grid-b3 home_row_ico"></div>
			<label class="grid-b3 home_row_ico cam"><input class="hidebx" type="file" accept="image/*" capture="camera"></label>
			<div class="grid-b3 home_row_ico broad"></div>
		</footer>
		<!-- end fo home row buttons -->
	</div></section>

	<audio class="home_audio hidebx" src="media/Home Screen Audio.mp3" controls="controls" loop="loop"></audio>