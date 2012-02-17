<?php
require_once ( get_template_directory() . '/theme-options.php' );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * To override this in a child theme, remove the filter and optionally add
 * your own function tied to the wp_page_menu_args filter hook.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentyten_page_menu_args' );

if ( function_exists('register_sidebar') ){
	register_sidebar();
}

class My_CatWidget extends WP_Widget {
	function My_CatWidget() {
		parent::WP_Widget(false, '[ Clean ] Category Widget');
	}
	function widget($args, $instance) {
		?>
<div class="sidebar-widget">
	<h1>Categories</h1>

	<ul class="">
	<?php foreach( get_categories( (array('hide_empty'=>0, 'exclude'=>'1', 'pad_counts'=>1))) as $cat){ ?>

		<li class="two-col"><a href="/category/<?php echo $cat->cat_name;?>"><?php echo $cat->cat_name . ' ('. $cat->category_count.')'; ?>
		</a></li>

		<?php } ?>
	</ul>
</div>
		<?php
	}
}
register_widget('My_CatWidget');

class My_RecentPostWidget extends WP_Widget {
	function My_RecentPostWidget() {
		parent::WP_Widget(false, '[ Clean ] Recent Post Widget');
	}
	function widget($args, $instance) {
		?>
<div class="sidebar-widget">
	<h1>Recent posts</h1>
	<ul class="">
	<?php foreach( get_posts() as $post){ ?>
	
		<li class="">
			<div class="date">
				<span class="day"><?php echo date('d',strtotime($post->post_date)); ?>
				</span><span class="month"><?php echo date('M',strtotime($post->post_date)); ?>
				</span>
			</div>
			<div class="post-data">
				<a href="/<?php echo $post->post_name;?>"><?php echo $post->post_title;?>
				</a>
			</div>
			<div class="clear"></div>
		</li>

		<?php
	}?>
	</ul>
</div>
	<?php
	}
}
register_widget('My_RecentPostWidget');
?>