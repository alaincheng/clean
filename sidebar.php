<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<div id="sidebar" class="sidebar  sidebar-right">
	<div class="grid_3">
		<div class="sidebar-top">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>


			<div class="sidebar-widget">
				<h1>Categories</h1>

				<ul class="">
				<?php foreach( get_categories( (array('hide_empty'=>0, 'exclude'=>'1', 'pad_counts'=>1))) as $cat){ ?>

					<li class="two-col"><a
						href="/category/<?php echo $cat->cat_name;?>"><?php echo $cat->cat_name . ' ('. $cat->category_count.')'; ?>
					</a></li>

					<?php } ?>
				</ul>

			</div>
			<?php endif; // end sidebar widget area ?>
		</div>
		<div class="sidebar-bottom"></div>
	</div>
</div>
