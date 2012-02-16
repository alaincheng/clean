<?php
/*
 Template Name: Archives with Content
 */
?>

<?php get_header(); ?>
<div class="container_12">
	<div class="main-continer continer-left">
		<div class="grid_8">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="post">
				<h1 id="post-<?php the_ID(); ?>">
				<?php the_title();?>
				</h1>
				<hr />
				<div class="entrytext">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
	<div class="clear"></div>
</div>
</div>
<?php get_footer(); ?>