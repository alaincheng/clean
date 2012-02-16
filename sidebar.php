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
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
                    <div class="grid_3">
                        <div class="sidebar-top">
                            <div class="sidebar-widget">
                                <h1>Categories</h1>
                                <ul class="">
                                    <li class="two-col"><a href="#">Design (2)</a></li>
                                    <li class="two-col"><a href="#">Freebie (8)</a></li>
                                    <li class="two-col"><a href="#">jQuery (17)</a></li>
                                    <li class="two-col"><a href="#">Technology (10)</a></li>
                                    <li class="two-col"><a href="#">Flash (2)</a></li>
                                    <li class="two-col"><a href="#">Other (11)</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget">
                                <h1>Blogroll</h1>
                                <ul class="">
                                    <li><a href="#">notes.envato.com</a></li>
                                    <li><a href="#">www.smashingmagazine.com</a></li>
                                    <li><a href="#">codex.wordpress.org</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget">
                                <h1>Recent posts</h1>
                                <ul class="">
                                    <li class="">
                                        <div class="date"><span class="day">25</span><span class="month">Dec</span></div>
                                        <div class="post-data"><a href="#">Magna aenean ultrices auctor.</a></div>
                                        <div class="clear"></div>
                                    </li>
                                    <li class="">
                                        <div class="date"><span class="day">28</span><span class="month">feb</span></div>
                                        <div class="post-data"><a href="#">Magna aenean ultrices auctor, pellentesque enim. Magna aenean ultrices auctor, lorem.</a></div>
                                        <div class="clear"></div>
                                    </li>
                                    <li class="">
                                        <div class="date"><span class="day">13</span><span class="month">jan</span></div>
                                        <div class="post-data"><a href="#">Elementum sed pid nunc, placerat quis parturient dolor</a></div>
                                        <div class="clear"></div>
                                    </li>
                                    <li class="">
                                        <div class="date"><span class="day">28</span><span class="month">feb</span></div>
                                        <div class="post-data"><a href="#">Magna aenean ultrices auctor, pellentesque enim.</a></div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-bottom"></div>
                    </div>
                    <?php endif;?>
                </div>