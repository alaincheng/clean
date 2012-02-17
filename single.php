<?php
/**
 * The single post
 *
 * @package WordPress
 * @subpackage Clean
 * @since
 */
?>
<?php get_header(); ?>
<!--  START ARTICLE -->
<div class="article">
<?php while ( have_posts() ) : the_post(); ?>
	<div class="article-title">
		<div class="article-name">
			<h1>
			<?php echo the_title(); ?>
			</h1>
		</div>
	</div>
	<div class="article-meta">
		<div class="date article-date">
			<span class="day"><?php echo the_time('j'); ?> </span><span
				class="month"><?php echo the_time('M'); ?> </span>
		</div>
		<div class="article-info">
			<div class="article-author">
				Posted by <a href="#"> <?php the_author(); ?> </a>
			</div>
			<div class="article-category">
			<?php the_tags(); ?>
				
			</div>
		</div>
	</div>
	<div class="article-content">

	<?php echo the_content(); ?>
	<?php //trackback_rdf(); ?>
	</div>
</div>
	<?php endwhile; // end of the loop. ?>
<!--  START ARTICLE -->
<!-- <h1>Leave a reply</h1>
			<p id="Note" style="display: none"></p>
			<form class="cmxform" id="CommentForm" method="post" action="#">
				<fieldset>
					<div>
						<label for="ContactName" class="overlabel">Name</label> <input
							id="ContactName" name="ContactName" class="textInput required" />
					</div>
					<div>
						<label for="ContactEmail" class="overlabel">E-Mail</label> <input
							id="ContactEmail" name="ContactEmail"
							class="textInput required email" />
					</div>
					<div>
						<label for="ContactComment" class="overlabel">Comments</label>
						<textarea id="ContactComment" name="ContactComment"
							class="textInput required" rows="10" cols="4"></textarea>
					</div>
					<div>
						<button type="submit" class="btn">
							<span>Send now</span>
						</button>
						<label id="loader" style="display: none;"><img
							src="/wp-content/themes/clean/images/ajax-loader.gif" alt="Loading..." id="LoadingGraphic" />
						</label>

			
<input class="" type="hidden" name="subject"
							value="Message from website contact form" />
					</div>
				</fieldset>
			</form> -->

	<?php get_footer(); ?>