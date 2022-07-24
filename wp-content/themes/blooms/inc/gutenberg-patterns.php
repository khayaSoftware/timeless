<?php

/**
 * Gutenberg Patterns
 *
 * @package WordPress
 * @subpackage blooms
 * @since 1.0
 * @version 1.0
 */

if ( ! is_admin() ) {
	return;
}
if ( ! class_exists( 'WP_Block_Patterns_Registry' ) ) {
	return;
}
function thb_patterns_register_block_patterns() {
	register_block_pattern(
		'blooms/homepage',
		array(
			'title'      => esc_html__( 'Homepage', 'blooms' ),
			'keywords'   => array( 'home', 'blooms', 'page' ),
			'categories' => array( 'blooms' ),
			// phpcs:disable
			'content' => '<!-- wp:cover {"url":"https://blooms.fuelthemes.net/wp-content/uploads/2022/02/hero-img.jpg","id":159,"dimRatio":30,"minHeight":65,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left" style="min-height:65vh"><span aria-hidden="true" class="has-background-dim-30 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-159" alt="" src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/hero-img.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="has-white-color has-text-color" id="plants-made-easy">Plants made easy</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color">Blooms co. helps you discover the best plants for your space, delivers <br>them to your door and helps you look after them.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ffd0ad","text":"#154747"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" href="https://blooms.fuelthemes.net/shop/" style="background-color:#ffd0ad;color:#154747">SHOP PLANTS</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 id="best-sellers-1">Best Sellers</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"right","className":"thb-arrow-link"} -->
<p class="has-text-align-right thb-arrow-link"><a href="https://blooms.fuelthemes.net/shop/" data-type="page" data-id="6">SHOP ALL BEST-SELLERS</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":14} -->
<div style="height:14px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:woocommerce/product-best-sellers {"columns":4,"rows":1,"contentVisibility":{"title":true,"price":true,"rating":true,"button":false}} /-->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"customColor":"#efefef"} -->
<hr class="wp-block-separator has-text-color has-background" style="background-color:#efefef;color:#efefef"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:paragraph {"className":"thb-subtitle","fontSize":"small"} -->
<p class="thb-subtitle has-small-font-size">CERTIFIED GREENERY</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":5} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading -->
<h2 id="our-plant-finder-makes-it-real-easy">Our <em>plant finder</em> makes it real easy</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We only work with the very best! Our team of expert plant care specialists take great care to make sure your plants are healthy and thriving when they arrive at your doorstep. Plants are usually only in our care for a few days.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#154747","text":"#f8f1e3"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" href="https://blooms.fuelthemes.net/blog/" style="background-color:#154747;color:#f8f1e3">TAKE THE QUIZ</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"3%"} -->
<div class="wp-block-column" style="flex-basis:3%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:image {"id":161,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m1-2.jpg" alt="" class="wp-image-161"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":42} -->
<div style="height:42px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"customColor":"#efefef"} -->
<hr class="wp-block-separator has-text-color has-background" style="background-color:#efefef;color:#efefef"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3} -->
<h3 id="best-sellers">Shop Your <em>Favorite Collections</em></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":14} -->
<div style="height:14px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m2.jpg","id":162,"dimRatio":10,"minHeight":390,"contentPosition":"top left"} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left" style="min-height:390px"><span aria-hidden="true" class="has-background-dim-10 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-162" alt="" src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4} -->
<h4 id="home-indoorplants"><strong>Home / Indoor<br>Plants</strong></h4>
<!-- /wp:heading -->

<!-- wp:spacer {"height":160} -->
<div style="height:160px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","style":{"color":{"text":"#154747"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-background-color has-text-color has-background" href="https://blooms.fuelthemes.net/shop/" style="color:#154747">FOR MY HOME</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m3.jpg","id":163,"dimRatio":20,"minHeight":390,"contentPosition":"top left","isDark":false} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="min-height:390px"><span aria-hidden="true" class="has-background-dim-20 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-163" alt="" src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4,"textColor":"white"} -->
<h4 class="has-white-color has-text-color" id="holiday-gifts-collection"><strong>Holiday Gifts <br>Collection</strong></h4>
<!-- /wp:heading -->

<!-- wp:spacer {"height":160} -->
<div style="height:160px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","style":{"color":{"text":"#154747"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-background-color has-text-color has-background" href="https://blooms.fuelthemes.net/shop/" style="color:#154747">SHOP GIFTS</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m04.jpg","id":169,"dimRatio":13,"minHeight":390,"contentPosition":"top left"} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left" style="min-height:390px"><span aria-hidden="true" class="has-background-dim-10 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-169" alt="" src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m04.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4} -->
<h4 id="eco-friendly-supplies"><strong>Eco-Friendly </strong><br><strong>Supplies</strong></h4>
<!-- /wp:heading -->

<!-- wp:spacer {"height":160} -->
<div style="height:160px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","style":{"color":{"text":"#154747"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-background-color has-text-color has-background" href="https://blooms.fuelthemes.net/shop/" style="color:#154747">PLANTS CARE</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"3%"} -->
<div class="wp-block-column" style="flex-basis:3%"><!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":196,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/l01.png" alt="" class="wp-image-196"/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":197,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/l02.png" alt="" class="wp-image-197"/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":198,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/l03.png" alt="" class="wp-image-198"/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":199,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/l04.png" alt="" class="wp-image-199"/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":200,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/l05.png" alt="" class="wp-image-200"/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"3%"} -->
<div class="wp-block-column" style="flex-basis:3%"><!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"https://blooms.fuelthemes.net/wp-content/uploads/2022/02/boxbg.png","id":204,"dimRatio":0,"focalPoint":{"x":"0.46","y":"1.00"},"minHeight":345,"minHeightUnit":"px","className":"low-cover-padding"} -->
<div class="wp-block-cover low-cover-padding" style="min-height:345px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-204" alt="" src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/boxbg.png" style="object-position:46% 100%" data-object-fit="cover" data-object-position="46% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":4,"style":{"color":{"text":"#f8f1e3"}}} -->
<h4 class="has-text-align-center has-text-color" id="subscribe-to-get-notified-about-exclusive-offers" style="color:#f8f1e3">Subscribe to get notified about exclusive offers!</h4>
<!-- /wp:heading -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:jetpack/contact-form {"subject":"[Blooms] Home","to":"anteksiler@gmail.coom"} -->
<!-- wp:jetpack/field-email /-->

<!-- wp:jetpack/button {"element":"button","text":"SUBSCRIBE","customTextColor":"#154747","customBackgroundColor":"#ffd0ad"} /-->
<!-- /wp:jetpack/contact-form --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":34} -->
<div style="height:34px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"customColor":"#efefef"} -->
<hr class="wp-block-separator has-text-color has-background" style="background-color:#efefef;color:#efefef"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3} -->
<h3 id="best-sellers">The Journey to <em>Your New Plant</em></h3>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
<p>We only work with the very best! Our team of expert plant care specialists take great care to make sure your plants are healthy and thriving when they arrive at your doorstep.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":48,"width":68,"height":80,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/icon1.png" alt="" class="wp-image-48" width="68" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":14} -->
<div style="height:14px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":5} -->
<h5 id="find-your-plant"><strong>Find your plant</strong></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px">It’s the only way I know how to live. What feels good. What feels right. What is needed.&nbsp;Give me a problem and I will approach it creatively, from my gut.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"1%"} -->
<div class="wp-block-column" style="flex-basis:1%"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":50,"width":76,"height":80,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/icon2.png" alt="" class="wp-image-50" width="76" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":14} -->
<div style="height:14px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":5} -->
<h5 id="choose-your-pot"><strong>Choose your pot</strong></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px">I wanted to have one that wasn’t like anyone else’s. My aim is to make the poor look rich and the rich look poor. Those designers are just crazy; but aren’t we all?</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"1%"} -->
<div class="wp-block-column" style="flex-basis:1%"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":53,"width":81,"height":80,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/icon3.png" alt="" class="wp-image-53" width="81" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":14} -->
<div style="height:14px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":5} -->
<h5 id="deliver-to-your-home"><strong>Deliver to your home</strong></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px">I have a fantastic relationship with money. I use it to buy my freedom. I’m a designer and people think, what do I know? I have an obsession with details and pattern.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":70} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
		)
		// phpcs:enable
	);

	register_block_pattern(
		'blooms/aboutpage',
		array(
			'title'      => esc_html__( 'About Page', 'blooms' ),
			'keywords'   => array( 'about', 'blooms', 'page' ),
			'categories' => array( 'blooms' ),
			// phpcs:disable
			'content' => '<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:media-text {"align":"","mediaId":118,"mediaLink":"https://blooms.fuelthemes.net/?attachment_id=118","mediaType":"image","mediaWidth":64,"style":{"color":{"background":"#154747"}}} -->
<div class="wp-block-media-text is-stacked-on-mobile has-background" style="background-color:#154747;grid-template-columns:64% auto"><figure class="wp-block-media-text__media"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/01/b1-1024x683.jpg" alt="" class="wp-image-118 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"style":{"color":{"text":"#f8f1e3"}}} -->
<h3 class="has-text-color" id="about-bloom" style="color:#f8f1e3">About Bloom</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#f8f1e3"}}} -->
<p class="has-text-color" style="color:#f8f1e3">My aim is to make the poor look rich and the rich look poor. Luxury must be comfortable, otherwise it is not luxury. Its useless to send models out on the runway to cry.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">A lot of self-importance goes on in the fashion industry. Im not like that. Those fashion designers are just crazy; but arent we all? Fashion should be fun. It shouldnt be labelled intellectual. There are only three things I can do - make a dress, decorate a house, and entertain people. Men have got more of a discerning eye. They appreciate cut and details, things that arent so obvious. They like things that have cachet and gentlemanliness.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"customColor":"#efefef"} -->
<hr class="wp-block-separator has-text-color has-background" style="background-color:#efefef;color:#efefef"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":56} -->
<div style="height:56px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"32%"} -->
<div class="wp-block-column" style="flex-basis:32%"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">OUR STORY</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":10} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3} -->
<h3 id="why-we-started-a-plant-business">Why We Started A Plant Business</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Money is the most corrosive aspect of life today because it means that all attention to detail is forgotten. A girl should be two things: classy and fabulous. Even Michelangelo got paid for doing the Sistine Chapel. To those artists who say theyre doing it for the love of art, I say: Get real. Men dont want another.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"3%"} -->
<div class="wp-block-column" style="flex-basis:3%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"65%"} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:video {"id":61,"poster":"https://blooms.fuelthemes.net/wp-content/uploads/2022/02/video-cover.jpg","src":"https://blooms.fuelthemes.net/wp-content/uploads/2022/02/Untitled.mp4"} -->
<figure class="wp-block-video"><video controls poster="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/video-cover.jpg" src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/Untitled.mp4"></video></figure>
<!-- /wp:video --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":56} -->
<div style="height:56px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"customColor":"#efefef"} -->
<hr class="wp-block-separator has-text-color has-background" style="background-color:#efefef;color:#efefef"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":65} -->
<div style="height:65px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center" id="our-unique-process">Our Unique Process</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Money is the most corrosive aspect of life today because it means that all attention to detail is forgotten. <br>A girl should be two things: classy and fabulous.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":56} -->
<div style="height:56px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"52%"} -->
<div class="wp-block-column" style="flex-basis:52%"><!-- wp:image {"id":139,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/a1.jpg" alt="" class="wp-image-139"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"3%"} -->
<div class="wp-block-column" style="flex-basis:3%"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:spacer {"height":170} -->
<div style="height:170px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":4} -->
<h4 id="find-your-plant"><strong>Find your plant</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
<p style="font-size:15px">I design from instinct. Its the only way I know how to live. What feels good. What feels right. What is needed. Give me a problem and I will approach it creatively, from my gut. I remember walking the dog one day, I saw a car full of teenage girls, and one of them rolled down the window and yelled, Marc Jacobs! in a French accent. I have an obsession with details and pattern. What you wear is how you present yourself to the world, especially today when human contacts go so fast. Fashion is instant language. It is difficult to talk about fashion in the abstract, without a human body before my eyes, without drawings, without a choice of fabric - without a practical or visual reality.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":80} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:spacer {"height":170} -->
<div style="height:170px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":4} -->
<h4 id="deliver-to-your-home"><strong>Deliver to your home</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
<p style="font-size:15px">I design from instinct. Its the only way I know how to live. What feels good. What feels right. What is needed. Give me a problem and I will approach it creatively, from my gut. I remember walking the dog one day, I saw a car full of teenage girls, and one of them rolled down the window and yelled, Marc Jacobs! in a French accent. I have an obsession with details and pattern. What you wear is how you present yourself to the world, especially today when human contacts go so fast. Fashion is instant language. It is difficult to talk about fashion in the abstract, without a human body before my eyes, without drawings, without a choice of fabric - without a practical or visual reality.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"3%"} -->
<div class="wp-block-column" style="flex-basis:3%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"52%"} -->
<div class="wp-block-column" style="flex-basis:52%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
<p style="font-size:15px"></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":140,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/a2.jpg" alt="" class="wp-image-140"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"customColor":"#efefef"} -->
<hr class="wp-block-separator has-text-color has-background" style="background-color:#efefef;color:#efefef"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center" id="what-they-say-about-us">What They Say About Us</h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":142,"width":149,"height":74,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/a3.jpg" alt="" class="wp-image-142" width="149" height="74"/></figure></div>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="font-size:14px">“We only work with the very best! Our team of expert plant care specialists take great care to make sure your plants are healthy.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"3%"} -->
<div class="wp-block-column" style="flex-basis:3%"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":143,"width":149,"height":74,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/a4.jpg" alt="" class="wp-image-143" width="149" height="74"/></figure></div>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="font-size:14px">“We only work with the very best! Our team of expert plant care specialists take great care to make sure your plants are healthy.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"3%"} -->
<div class="wp-block-column" style="flex-basis:3%"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":144,"width":149,"height":74,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/a5.jpg" alt="" class="wp-image-144" width="149" height="74"/></figure></div>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="font-size:14px">“We only work with the very best! Our team of expert plant care specialists take great care to make sure your plants are healthy.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px"></p>
<!-- /wp:paragraph -->',
		)
	// phpcs:enable
	);

	register_block_pattern(
		'blooms/contactpage',
		array(
			'title'      => esc_html__( 'Contact Page', 'blooms' ),
			'keywords'   => array( 'contact', 'blooms', 'page' ),
			'categories' => array( 'blooms' ),
			// phpcs:disable
			'content' => '<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:media-text {"align":"","mediaId":209,"mediaLink":"https://blooms.fuelthemes.net/contact/contact-2/","mediaType":"image","mediaWidth":64,"style":{"color":{"background":"#154747"}}} -->
<div class="wp-block-media-text is-stacked-on-mobile has-background" style="background-color:#154747;grid-template-columns:64% auto"><figure class="wp-block-media-text__media"><img src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/contact-1024x718.jpg" alt="" class="wp-image-209 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"style":{"color":{"text":"#f8f1e3"}}} -->
<h3 class="has-text-color" id="contact" style="color:#f8f1e3">Contact</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#f8f1e3"}}} -->
<p class="has-text-color" style="color:#f8f1e3">8212 E. Glen Creek Street Orchard Park,<br>NY 14127, United States of America<br>Phone: +1 909969 0383<br>Email: hello@fuelthemes.net</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#f8f1e3"}},"className":"thb-arrow-link tertiary-color"} -->
<p class="thb-arrow-link tertiary-color has-text-color" style="color:#f8f1e3"><a href="#">SHOW ON GOOGLE MAPS</a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m2.jpg","id":162,"dimRatio":10,"minHeight":390,"contentPosition":"top left"} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left" style="min-height:390px"><span aria-hidden="true" class="has-background-dim-10 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-162" alt="" src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4} -->
<h4 id="home-indoorplants"><strong>Home / Indoor<br>Plants</strong></h4>
<!-- /wp:heading -->

<!-- wp:spacer {"height":160} -->
<div style="height:160px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","style":{"color":{"text":"#154747"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-background-color has-text-color has-background" style="color:#154747">FOR MY HOME</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m3.jpg","id":163,"dimRatio":20,"minHeight":390,"contentPosition":"top left","isDark":false} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="min-height:390px"><span aria-hidden="true" class="has-background-dim-20 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-163" alt="" src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4,"textColor":"white"} -->
<h4 class="has-white-color has-text-color" id="holiday-gifts-collection"><strong>Holiday Gifts <br>Collection</strong></h4>
<!-- /wp:heading -->

<!-- wp:spacer {"height":160} -->
<div style="height:160px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","style":{"color":{"text":"#154747"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-background-color has-text-color has-background" style="color:#154747">SHOP GIFTS</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m04.jpg","id":169,"dimRatio":13,"minHeight":390,"contentPosition":"top left"} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left" style="min-height:390px"><span aria-hidden="true" class="has-background-dim-10 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-169" alt="" src="https://blooms.fuelthemes.net/wp-content/uploads/2022/02/m04.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4} -->
<h4 id="eco-friendly-supplies"><strong>Eco-Friendly </strong><br><strong>Supplies</strong></h4>
<!-- /wp:heading -->

<!-- wp:spacer {"height":160} -->
<div style="height:160px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","style":{"color":{"text":"#154747"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-background-color has-text-color has-background" style="color:#154747">PLANTS CARE</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->'
		)
// phpcs:enable
	);

	register_block_pattern_category(
		'blooms',
		array( 'label' => esc_html__( 'Blooms', 'blooms' ) )
	);
}
add_action( 'init', 'thb_patterns_register_block_patterns' );
