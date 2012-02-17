<?php
/*
 Template Name: Archives with Content
 */
?>

<?php get_header(); ?>

<?php
$options = get_option('clean_theme_options');
 
?>



<!-- START FEATURE -->
<div class="feature">
	<div class="container_12">
		<div class="grid_4">
			<div class="services">
				<h2>
				<?php  echo $options['titleleft'];?>
				</h2>
				<img
					src="/wp-content/themes/clean/images/content/icons/home/64/home.png"
					alt="" />
				<p>
				<?php  echo $options['contentleft'];?>
				</p>
			</div>
		</div>
		<div class="grid_4">
			<div class="services">
				<h2>
				<?php  echo $options['titlemiddle'];?>
				</h2>
				<img
					src="/wp-content/themes/clean/images/content/icons/home/64/sale.png"
					alt="" />
				<p>
				<?php  echo $options['contentmiddle'];?>
				</p>
			</div>
		</div>
		<div class="grid_4">
			<div class="services">
				<h2>
				<?php  echo $options['titleright'];?>
				</h2>
				<img
					src="/wp-content/themes/clean/images/content/icons/home/64/chart_up.png"
					alt="" />
				<p>
				<?php  echo $options['contentright'];?>
				</p>
			</div>
		</div>
		<?php /*?><div class="clear"></div>
		<div class="grid_4">
		<div class="services">
		<h2>960 Grid System & Cool Design & Markup Standart</h2>
		<img src="/wp-content/themes/clean/images/content/icons/home/64/accept.png" alt="" />
		<p>Elementum sed pid nunc, placerat quis parturient dolor, sit
		nascetur? Mid placerat vel, cum scelerisque diam.</p>
		</div>
		</div>
		<div class="grid_4">
		<div class="services">
		<h2>12 nice background patterns and Unlimited color schemes</h2>
		<img src="/wp-content/themes/clean/images/content/icons/home/64/color.png" alt="" />
		<p>Elementum sed pid nunc, placerat quis parturient dolor, sit
		nascetur? Mid placerat vel, cum scelerisque diam.</p>
		</div>
		</div>
		<div class="grid_4">
		<div class="services">
		<h2>9 color types of Buttons, Tables, Boxes, Accordions, Tabs,
		Toggles</h2>
		<img src="/wp-content/themes/clean/images/content/icons/home/64/promotion.png" alt="" />
		<p>Elementum sed pid nunc, placerat quis parturient dolor, sit
		nascetur? Mid placerat vel, cum scelerisque diam.</p>
		</div>
		</div> */?>
	</div>
</div>
<!-- END FEATURE -->

		<?php get_footer(); ?>