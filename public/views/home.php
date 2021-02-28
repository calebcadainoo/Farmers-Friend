	<?php
		// Check if user gone through the welcome page
		if ( @$_SESSION['logged_in'] != 1 ) {
		 	echo '<script>window.location.href="./?view=welcome";</script>';  
		}
	?>


	<section class="app_holderbx omni_crop_search">
		<!-- nav bar -->
		<aside class="app_navbar">
			<!-- omni logo -->
			<figure class="app_logo imgfx"><a href="./?view=obstract"><img src="img/Omni AI.png"></a></figure>
			<!-- date time widget -->
			<div class="app_datetime_widget float_right">
				<!-- time -->
				<div class="crop_time omni_time"></div>
				<!-- date -->
				<div class="crop_time omni_date"><?php date_default_timezone_set("Africa/Accra"); print(date('D jS M, Y')); ?></div>
			</div>
		</aside>
		<!-- end of nav bar -->

		<?php
			$view = "";
			if (isset($_GET['view'])) {
				$view = $_GET['view'];
			}
			switch ($view) {
				case 'obstract':
					# code...
					unset($_SESSION);
					session_destroy();
					session_write_close();
					echo "<script>window.location.href='./?view=welcome';</script>";
				case 'crop-location':
					# code...
					include_once 'views/crop-location.php';
					break;
				 case 'expert-speak':
					# code...
					include_once 'views/expert-speak.php';
					break;
				case 'group-chat':
					# code...
					include_once 'views/group-chat.php';
					break;
				case 'fam-coin':
					# code...
					include_once 'views/fam-coin.php';
					break;
				default:
					include_once 'views/crop-search.php';
					break;
			}
		?>

		<!-- base menu buttons -->
		<footer class="base_menu_options">
			<div class="grid-b3 trans base_menus home_row_ico crop"></div>
			<div class="grid-b3 trans base_menus home_row_ico plant"></div>
			<div class="grid-b3 trans base_menus home_row_ico expert"></div>
			<div class="grid-b3 trans base_menus home_row_ico persons"></div>
			<div class="grid-b3 trans base_menus home_row_ico dollar"></div>
		</footer>
		<!-- end of base menu buttons -->
	</section>