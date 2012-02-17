
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
</div>
</div>
<?php  if(!is_home()){
	get_sidebar();

}?>
<div class="clear"></div>
</div>
</div>
<!-- END FOOTER -->
<!-- START FOOTER-BOTTOM -->
<div class="footer-bottom head-pat6">
	<div class="container_12">
		<div class="grid_3">
			<h1>Quick navigation</h1>
			<ul class="footer-list">
				<li class="two-col"><a href="index.html">Home</a></li>
				<li class="two-col"><a href="contact.html">About</a></li>
				<li class="two-col"><a href="portfolio-three-column.html">Portfolio</a>
				</li>
				<li class="two-col"><a href="blog-left-sidebar.html">Blog</a></li>
				<li class="two-col"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="grid_3">
			<h1>Blogroll</h1>
			<ul class="footer-list">
				<li><a href="http://notes.envato.com">notes.envato.com</a></li>
				<li><a href="http://www.smashingmagazine.com">www.smashingmagazine.com</a>
				</li>
				<li><a href="http://codex.wordpress.org">codex.wordpress.org</a></li>
			</ul>
		</div>
		<div class="grid_3">
			<h1>Newsletter</h1>
			<div class="subscribe-form">
				<form class="cmxform" id="subscribeForm" method="post" action="#">
					<fieldset>
						<div>
							<label for="SubscribeEmail" class="overlabel">E-Mail</label> <input
								id="SubscribeEmail" name="SubscribeEmail"
								class="textInput required email subscribe" />
						</div>
						<button type="submit" class="btn subscribe-button">
							<span>Subscribe</span>
						</button>
					</fieldset>
				</form>
			</div>
			<div class="social-icons">
				<ul class="social-icons-list">
					<li><a href="http://flickr.com"><img class="tiptip"
							title="Visit my Flickr"
							src="/wp-content/themes/clean/images/content/footer-social-icons/flickr.png"
							alt="" /> </a></li>
					<li><a href="http://facebook.com/themeton"><img class="tiptip"
							title="Visit my Facebook"
							src="/wp-content/themes/clean/images/content/footer-social-icons/facebook.png"
							alt="" /> </a></li>
					<li><a href="http://www.youtube.com/olziinaa"><img class="tiptip"
							title="Visit my Youtube"
							src="/wp-content/themes/clean/images/content/footer-social-icons/youtube.png"
							alt="" /> </a></li>
					<li><a href="http://www.whatisrss.com/"><img class="tiptip"
							title="Subscribe my RSS FEED"
							src="/wp-content/themes/clean/images/content/footer-social-icons/feed.png"
							alt="" /> </a></li>
					<li><a href="http://www.linkedin.com"><img class="tiptip"
							title="Visit my Linkedin"
							src="/wp-content/themes/clean/images/content/footer-social-icons/linkedin.png"
							alt="" /> </a></li>
					<li><a href="http://www.last.fm"><img class="tiptip"
							title="Visit my LastFM"
							src="/wp-content/themes/clean/images/content/footer-social-icons/lastfm.png"
							alt="" /> </a></li>
					<li><a href="http://www.myspace.com"><img class="tiptip"
							title="Visit my My Space"
							src="/wp-content/themes/clean/images/content/footer-social-icons/myspace.png"
							alt="" /> </a></li>
					<li><a href="http://www.mixx.com"><img class="tiptip"
							title="Visit my Mixx"
							src="/wp-content/themes/clean/images/content/footer-social-icons/mixx.png"
							alt="" /> </a></li>
					<li><a href="http://twitter.com/themeton"><img class="tiptip"
							title="Visit my Twitter"
							src="/wp-content/themes/clean/images/content/footer-social-icons/twitter.png"
							alt="" /> </a></li>
					<li><a href="http://www.tumblr.com/"><img class="tiptip"
							title="Visit my Thmblr"
							src="/wp-content/themes/clean/images/content/footer-social-icons/tumblr.png"
							alt="" /> </a></li>
					<li><a href="https://posterous.com/"><img class="tiptip"
							title="Visit my Posterous"
							src="/wp-content/themes/clean/images/content/footer-social-icons/posterous.png"
							alt="" /> </a></li>
				</ul>

			</div>
		</div>
		<div class="grid_3">
			<h1>Location</h1>
			<span class="address">Suite 7, 13-15 Smail St Ultimo,<br />Sydney,
				Australia </span> <span class="phone">+976-123-456-789</span> <span
				class="mail">name@yourdomain.com</span>
		</div>
	</div>
</div>
<!-- END FOOTER-BOTTOM -->
<!-- START SUB-FOOTER -->
<div class="sub-footer">
	<div class="container_12">
		<div class="footer-menu">
			<ul class="footer-menu-list">
				<li><a href="index.html">Home</a></li>
				<li><a href="contact.html">About</a></li>
				<li><a href="portfolio-three-column.html">Portfolio</a></li>
				<li><a href="blog-right-sidebar.html">Blog</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</div>
		<div class="copyrights">
			<span>All Rights Reserved @ 2010 ThemeTON. Powered by: <a
				href="http://wordpress.org">Wordpress</a> Designed by: <a
				href="http://www.themeton.com">ThemeTON</a> Hosted by:<a
				href="http://www.mediatemple.net">MediaTemple</a> </span>
		</div>
	</div>
</div>
<!-- END SUB-FOOTER -->



<script type="text/javascript"> Cufon.now();

</script>
<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */

wp_footer();
?>
</body>
</html>
