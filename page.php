<?php
/*
 Template Name: Archives with Content
 */
?>

<?php get_header(); ?>

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
<?php get_footer(); ?>