<?php
/*
Template Name: Landing Template
*/

get_header(); ?>
<style>
#masthead {
	position: fixed;
	width: 100%;
	z-index: 10;
}
.landing-header {
	position: relative;
	top: 60px;
	background-position: 0 -150px;
}
.landing-text-wrapper {
	padding-top: 50px;
	padding-bottom: 40px;
	overflow: hidden;
}
.landing-content .site-content {
	padding-top: 80px;
}
.grid {
	overflow: visible;
}
.who-we-are .col {
	opacity: 0;
	display: none;
	position: relative;
	top: 400px;
}
#menu-main {
	position: relative;
	left: -95px;
}
/*
#menu-main li:last-child:after {
	content: 'Join Us!';
	border: 2px solid #00b3e3;
	border-radius: 2px;
	padding: 4px 16px;
	color: white;
	font-size: 14px;
	font-weight: 700;
	top: 14px;
	right: -95px;
	position: absolute;
}
*/
.landing-header button {
	background: transparent;
	border-radius: 3px;
	border: 3px solid #07c6fa;
	box-shadow: none;
	height: auto;
	padding: 10px 16px 11px 22px;
	text-shadow: none;
}
.landing-header .how-to-help {
	background: #07c6fa;
	margin-left: 8px;
}
.landing-header button div {
	font-size: 24px;
	margin-left: 7px;
	position: relative;
	top: -6px;
}
.landing-header button:hover {
	background: transparent;
	
}
.landing-text-wrapper {
	background-color: rgba(0, 179, 227, .3);
}
.the-post {
	padding: 22px 0;
}
.landing-content h4 {
	text-align: left;
	font-size: 16px;
	padding: 0;
	margin: 16px 0;
	font-weight: 100;
}
.landing-content h2 {
	margin: 14px 0 10px;
}
.landing-content h2 a {
	color: #111820;
	text-transform: uppercase;
	font-size: 25px;
}
.the-post h4:before {
	content: "\f303";
	font-weight: 100;
	font: normal 22px/1 Genericons;
	-webkit-font-smoothing: antialiased;
	position: relative;
	top: 6px;
	padding-right: 3px;
}
.the-post p {
	line-height: 27px;
	font-size: 15px;
}
.the-author {
	position: relative;
	left: 12px;
	top: -2px;
}
.the-post .meta p {
	line-height: 20px;
	font-size: 14px;
	margin-bottom: 14px;
}
.meta span, .meta span a {
	color: #ccc;
}
.author-image img {
	border-radius: 50%;
	float: left;
	pointer-events: none;
}
.read-more {
	border: 2px solid #00b3e3;
	background: transparent;
	text-shadow: none;
	box-shadow: none;
	border-radius: 2px;
	padding: 3px 18px;
	color: #00b3e3;
	font-size: 13px;
	font-weight: 700;
}
.overlay {
	position: fixed;
	z-index: 2000;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,.7);
	text-align: center;
	display: none;
}
.close-video {
	font-weight: 500;
	font-size: 14px;
}
.close-video:hover {
	cursor: pointer;
}
.close-video div {
	position: relative;
	top: 4px;
}
.video {
	box-shadow:0 0 25px #111;
    	-webkit-box-shadow:0 0 25px #111;
    	-moz-box-shadow:0 0 25px #111;
	margin: 0 auto;
	padding: 10px;
	background-color: #fff;
	border-radius: 3px;
	position:relative;
	top: 50%;
	margin-top: -140px;
	width: 520px;
}
.twitter-timeline {
	width: 100%;
}
.landing-content .col {
	text-align: left;
}
.blog {
	width: 66%;
	padding-right: 40px;
}
.tweets {
	padding-top: 25px;
	width: 33%;
	height: auto;
}
.tweets .genericon {
	padding-right: 8px;
	position: relative;
	top: 2px;
}
</style>
<script>
jQuery(function() {
		var delay = 200;
		var left = 0;
		var height = jQuery('.landing-text-wrapper').outerHeight();
		var toAnimate = jQuery('.animate');
		

		jQuery('').click(function(){
			
			toAnimate.animate({'top': '4px'}, 300, function(){
				
				toAnimate.animate({'top':'-400px'}, 300, function(){
					toAnimate.hide()
				})
				
			});
			jQuery('.landing-text-wrapper').animate({'height':'370px'}, 400)
			jQuery('.who-we-are .col').css({}).show().each(function(){

				jQuery(this).delay(delay).animate({'top': '20px','opacity':'1'}, 700)
				delay = delay + 150;
			});

		});
		jQuery('.show-video').click(function(){
			jQuery('body').append('<div class="overlay"><div class="video"><iframe src="//player.vimeo.com/video/67705653" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><div class="close-video">CLOSE<div class="genericon genericon-close"></div></div></div></div>');
			jQuery('.overlay').fadeIn();
		});
		jQuery(document).on('click', '.overlay, .close-video', function(){
			jQuery('.video').hide();
			jQuery('.overlay').fadeOut().remove();
		});
	
});
jQuery(window).bind("load", function() {
	var twitterWidget = jQuery('#twitter-widget-0').contents()
	twitterWidget.find('img').css({'border-radius':'50%','width':'38px','height':'38px'});
	twitterWidget.find('body').css('font-family','open sans');
	twitterWidget.find('.timeline .e-entry-title').css({'padding-top':'3px','line-height':'18px'})
});
</script>
	<div class="landing-header">
		<div class="landing-text-wrapper">
			<h1 class="animate">We play with data <span>&amp;</span> deploy civic apps</h1>
			<p class="animate">Code for Sacramento is a <a href="http://brigade.codeforamerica.org" style="color:#ffffff;" target="_blank">Code for America Brigade.</a> As a Brigade, we are part of a national network of civic-minded volunteers who contribute their skills toward using the web as a platform for local government and community service.</p>
			<button class="show-video animate">What is Civic Hacking?<div class="genericon genericon-video"></div></button>
			<a href="/how-you-can-help"><button class="how-to-help animate">How You Can Help<div class="genericon genericon-next"></div></button></a>
		</div>
	</div>
	<div id="primary" class="content-area landing-content">
		<div id="content" class="site-content" role="main">
		<section class="col blog">
		<?php 
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=3' . '&paged='.$paged);
	
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<article class="the-post">
		<h4><?php the_date(); ?></h4>
		<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
<div class="meta">
		<div class="author-image"><?php $author_email = get_the_author_email(); echo get_avatar($author_email, '38'); ?></div>
		<p class="the-author">by <?php the_author(); ?><br><span><?php the_tags('Tags: ', ', ', ''); ?></span></p></div>
		<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>" title="Read more"><button class="read-more">READ MORE</button></a>
		</article>
		<?php endwhile; ?>
		</section>
		<section class="col tweets">
		<h4><span class="genericon genericon-twitter"></span> What We're Up To</h4>
		<a class="twitter-timeline" href="https://twitter.com/search?q=%23code4sac+OR+%40code4sac+OR+from:%40code4sac" data-widget-id="382259282256732160" data-chrome="nofooter transparent noheader noborders noscrollbar" data-tweet-limit="3" data-link-color="#00b3e3">Tweets about "#code4sac OR @code4sac OR from:code4sac"</a>
		</section>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>
	</div>
		

<?php get_sidebar(); ?>
<?php get_footer( 'landing' ); ?>
