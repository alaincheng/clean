<?php
/*
 Template Name: Archives with Content
 */
?>

<?php get_header(); ?>
<h1 class="page-title">
<?php
printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
?>
</h1>
<hr /><br />
<?php if (have_posts()) :
while (have_posts()) : the_post();?>
<div class="post">
	<div class="article-meta">
		<div class="date article-date">
			<span class="day"><?php echo the_time('j'); ?> </span><span
				class="month"><?php echo the_time('M'); ?> </span>
		</div>
		<div class="article-info">
		<?php echo the_title('<h1>','</h1>'); ?>
			<div class="article-author">
				Posted by <a href="#"> <?php the_author(); ?> &nbsp; &nbsp; </a> <?php the_tags(); ?>
			</div>
		</div>
	</div>

	<div class="entrytext">
	<?php the_content('<a href="/'. wp_get_single_post()->post_name. '" class="readmore">Read more</a>', true); ?>
	</div>
</div>
<br /><br />
	<?php endwhile;
	else:
	?>
<div class="post">
	<h1 id="post-no"></h1>
	<hr />
	<div class="entrytext">
		No post found for
		<?php echo single_cat_title( '', false ); ?>
		!
	</div>
</div>
		<?php
			
		endif; ?>
		<?php get_footer(); ?>