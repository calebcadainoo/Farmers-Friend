		

		<article class="home_container app_view_container">
			<!-- header -->
			<header class="crop_search_head fam_coin_head">
				<aside class="crop_head_inner"><div class="centroid_700">
					<br>
					<div class="header_label white_dollar">FAM &bull; Coin | Payment & Purchase</div>
				</div></aside>
			</header>
			<!-- end of header -->

			<!-- section or body -->
			<section class="centroid_700 fam_coin_section">
				<!-- tab holder -->
				<div class="app_tabs_holder">
					<div class="app_tab_el tab_pay grid-6">Make/Receive Payments</div>
					<div class="app_tab_el tab_pur grid-6">Purchase Agri-Inputs</div>
				</div>
				<!-- end of tab holder -->

				<?php
					$tab = "";
					if (isset($_GET['tab'])) { $tab = $_GET['tab']; }
					switch ($tab) {
						case 'agri-inputs':
							include_once 'views/agri-inputs.php';
							break;
						
						default:
							include_once 'views/receive-payment.php';
							break;
					}
				?>
			</section>
			<!-- end of section or body -->
		</article>

		<script>
			$(function () {
				$('.dollar').addClass('menu_focus');
			});
		</script>