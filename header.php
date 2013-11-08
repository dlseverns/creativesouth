<?php
/**
 * @package WordPress
 * @subpackage Creative South Yo
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_head(); ?>

        <!--[if lte IE 8]>
        <meta HTTP-EQUIV="REFRESH" content="0; url=lte-ie8.html">
        <![endif]-->

    </head>
    <body>    
        <!--Main Menu Start-->
        <header class="header-section">

            <!--Navigation Menu-->
            <nav class="main-menu">
                <ul>
                    <? creative_south_nav(); ?>
                    <li class="menu-active"><a href="index.html">HOME</a><div class="hover-active"></div>
                        <ul>
                            <li><a href="index.html">HOME STYLE 1</a><div class="submenu-bg"></div></li>
                            <li><a href="home-style2.html">HOME STYLE 2 (VIDEO)</a><div class="submenu-bg"></div></li>
                            <li><a href="home-style3.html">HOME STYLE 3 (FULL GRID)</a><div class="submenu-bg"></div>
                                <ul>
                                    <li><a href="#">THIRD LEVEL MENU</a><div class="submenu-bg"></div></li>
                                    <li><a href="#">THIRD LEVEL MENU</a><div class="submenu-bg"></div></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about-us.html">ABOUT US</a><div class="hover-active"></div>
                        <ul>
                            <li><a href="about-us.html">STYLE 1 GRID HEADER</a><div class="submenu-bg"></div></li>
                            <li><a href="about-us-style2.html">STYLE 2 FULLWIDTH IMAGE</a><div class="submenu-bg"></div></li>
                        </ul>
                    </li>
                    <li><a href="service.html">OUR SERVICES</a><div class="hover-active"></div>
                        <ul>
                            <li><a href="service.html">SERVICE STYLE 1</a><div class="submenu-bg"></div></li>
                            <li><a href="service-style2.html">SERVICE STYLE 2</a><div class="submenu-bg"></div></li>
                        </ul>
                    </li>
                    <li><a href="portfolio.html">PORTFOLIO</a><div class="hover-active"></div></li>
                    <li><a href="gallery.html">GALLERY</a><div class="hover-active"></div></li>
                    <li><a href="blog.html">BLOG</a><div class="hover-active"></div>
                        <ul>
                            <li><a href="blog-single.html">BLOG SINGLE PAGE</a><div class="submenu-bg"></div></li>
                        </ul>
                    </li>
                    <li><a href="#">PAGE</a><div class="hover-active"></div>
                        <ul>
                            <li><a href="page-grid-header.html">GRID HEADER</a><div class="submenu-bg"></div></li>
                            <li><a href="page-fullwidth.html">FULL WIDTH</a><div class="submenu-bg"></div></li>
                            <li><a href="page-sidebar.html">PAGE WITH SIDEBAR</a><div class="submenu-bg"></div></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">CONTACT US</a><div class="hover-active"></div></li>
                </ul>
            </nav>

            <div id="navbtn">
                <a href="#">
                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/hide-menu.png" alt="responsive menu" />
                </a>
            </div>
            <!--Navigation Menu End-->

            <!--Logo-->
            <div class="logo">
                <a href="index.html"><img src="<? echo get_bloginfo('template_url') ?>/assets/images/logo.png" alt="logo" /></a>
            </div>
            <!--Logo End-->

            <!--Social Media-->
            <nav class="social-main">
                <ul>
                    <li><a href="#"><img src="<? echo get_bloginfo('template_url') ?>/assets/images/social-icon/social-icon-facebook.png" alt="Facebook" onMouseOver="this.src='<? echo get_bloginfo("template_url") ?>/assets/images/social-icon/social-icon-facebook-hover.png';" onMouseOut="this.src='<? echo get_bloginfo("template_url") ?>/assets/images/social-icon/social-icon-facebook.png';" /></a></li>
                    <li><a href="#"><img src="<? echo get_bloginfo('template_url') ?>/assets/images/social-icon/social-icon-twitter.png" alt="Twitter" onMouseOver="this.src='<? echo get_bloginfo("template_url") ?>/assets/images/social-icon/social-icon-twitter-hover.png';" onMouseOut="this.src='<? echo get_bloginfo("template_url") ?>/assets/images/social-icon/social-icon-twitter.png';" /></a></li>
                    <li><a href="#"><img src="<? echo get_bloginfo('template_url') ?>/assets/images/social-icon/social-icon-pinterest.png" alt="Pinterest" onMouseOver="this.src='<? echo get_bloginfo("template_url") ?>/assets/images/social-icon/social-icon-pinterest-hover.png';" onMouseOut="this.src='<? echo get_bloginfo("template_url") ?>/assets/images/social-icon/social-icon-pinterest.png';" /></a></li>
                    <li><a href="#"><img src="<? echo get_bloginfo('template_url') ?>/assets/images/social-icon/social-icon-google-plus.png" alt="Google Plus" onMouseOver="this.src='<? echo get_bloginfo("template_url") ?>/assets/images/social-icon/social-icon-google-plus-hover.png';" onMouseOut="this.src='<? echo get_bloginfo("template_url") ?>/assets/images/social-icon/social-icon-google-plus.png';" /></a></li>
                    <li><a href="#"><img src="<? echo get_bloginfo('template_url') ?>/assets/images/social-icon/social-icon-feed.png" alt="Feed" onMouseOver="this.src='<? echo get_bloginfo("template_url") ?>/assets/images/social-icon/social-icon-feed-hover.png';" onMouseOut="this.src='<? echo get_bloginfo("template_url") ?>/assets/images/social-icon/social-icon-feed.png';" /></a></li>
                </ul>
            </nav>
            <!--Social Media End-->

        </header>
        <!--Main Menu End-->
        
         <!--All Content Start-->
    <div class="wrapper">
            
            <!--Banner Slide Start-->
            <section class="banner-slide">
                <div id="layerslider" style="width: 1024px; height: 502px;">
                 
                    <!--Layer 1-->
                    <div class="ls-layer" style="transition2d: 8,49,77,100,105; slidedelay: 8000;">
                 
                        <!--Slider Background-->
                        <img class="ls-bg" src="<? echo get_bloginfo('template_url') ?>/assets/images/slider/slider1.jpg" alt="layer1-background" />
                        <a href="#" class="ls-link"></a>

                        <!--Slider Sublayers-->
                        <h1 class="ls-s1" style="position: absolute; top:55px; left: 100px; slidedirection : fade; slideoutdirection : fade; durationin :2000; durationout : 2500; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 0; delayout : 0; text-shadow: 0px 0px 20px white; font-weight: normal; font-size: 120px; color: white; text-transform: uppercase; text-align: left;">GRIDZ</h1>
                        
                        <h1 class="ls-s1" style="position: absolute; top:200px; left: 115px; slidedirection : fade; slideoutdirection : fade; durationin : 2000; durationout : 2500; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 500; delayout : 0; text-shadow: 0px 0px 20px white; font-weight: normal; font-size: 25px; color: white; text-transform: uppercase; text-align: left;">GRID STYLE SITE TEMPLATE</h1>
                        
                        <h1 class="ls-s3" style="position: absolute; top:250px; left: 110px; slidedirection : left; slideoutdirection : left; durationin : 2000; durationout : 2500; easingin : easeOutBack; delayin : 1200; font-weight: normal; font-size: 25px; color: white; text-transform: uppercase; background-color: #00aaaa; padding: 10px 20px;">Lorem ipsum sit consetetur</h1>
                        </div>
                    <!--End-->
                 
                    <!--Layer 2-->
                    <div class="ls-layer" style="transition2d: 8,49,77,100,105; slidedelay: 8000;">
                 
                        <!--Slider Background-->
                        <img class="ls-bg" src="<? echo get_bloginfo('template_url') ?>/assets/images/slider/slider2.jpg" alt="layer1-background">
                        <a href="#" class="ls-link"></a>

                        <!--Slider Sublayers-->
                        <h1 class="ls-s-1" style="top:159px; left: 114px; slidedirection : fade; durationin : 2000; delayin : 1000; rotatein : -90; rotateout : -90; scalein : 2.5; scaleout : 0; width: 100px; font-weight: normal; font-size: 25px; color: white; text-transform: uppercase; background-color: #00aaaa; text-align: center; border-radius: 5px; padding: 10px 0px;">
						grid
                        </h1>
    
                            <h1 class="ls-s3" style="top:159px; left: 220px; slidedirection : top; slideoutdirection : top; durationin : 1500; easingin : easeInOutQuart; delayin : 600; scalein : 5; width: 285px; font-weight: normal; font-size: 25px; color: white; text-transform: uppercase; background-color: #00aaaa; text-align: center; border-radius: 5px; padding: 10px 0px;">
                            site template
                        </h1>
    
                            <h1 class="ls-s-1" style="top:159px; left: 510px; slidedirection : fade; durationin : 2000; delayin : 1200; rotatein : 90; rotateout : 90; scalein : 2.5; scaleout : 0; width: 115px; font-weight: normal; font-size: 25px; color: white; text-transform: uppercase; background-color: #00aaaa; text-align: center; border-radius: 5px; padding: 10px 0px;">
                            style
                        </h1>
    
                            <h1 class="ls-s3" style="top:220px; left: 114px; slidedirection : left; slideoutdirection : left; durationin : 1500; easingin : easeInOutQuart; delayin : 800; scalein : 5; width: 270px; font-weight: normal; font-size: 25px; color: white; text-transform: uppercase; background-color: #1a1a1a; text-align: center; border-radius: 5px; padding: 10px 0px;">
                            creative
                        </h1>
    
                            <h1 class="ls-s3" style="top:220px; left: 390px; slidedirection : right; slideoutdirection : right; durationin : 1500; easingin : easeInOutQuart; delayin : 500; scalein : 5; width: 235px; font-weight: normal; font-size: 25px; color: white; text-transform: uppercase; background-color: #1a1a1a; text-align: center; border-radius: 5px; padding: 10px 0px;">
                            minimal
                        </h1>
    
                            <h1 class="ls-s-1" style="top:281px; left: 114px; slidedirection : fade; durationin : 2000; delayin : 1100; rotatein : 90; rotateout : 90; scalein : 2.5; scaleout : 0; width: 110px; font-weight: normal; font-size: 25px; color: #1a1a1a; text-transform: uppercase; background-color: #ffffff; text-align: center; border-radius: 5px; padding: 10px 0px;">
                            and
                        </h1>
    
                            <h1 class="ls-s3" style="top:281px; left: 230px; slidedirection : bottom; slideoutdirection : bottom; durationin : 1500; easingin : easeInOutQuart; delayin : 700; scalein : 5; width: 105px; font-weight: normal; font-size: 25px; color: #1a1a1a; text-transform: uppercase; background-color: #ffffff; text-align: center; border-radius: 5px; padding: 10px 0px;">
                            easy
                        </h1>
    
                        <h1 class="ls-s-1" style="top:281px; left: 341px; slidedirection : fade; durationin : 2000; delayin : 1300; rotatein : -90; rotateout : -90; scalein : 2.5; scaleout : 0; width: 285px; font-weight: normal; font-size: 25px; color: #1a1a1a; text-align: right; text-transform: uppercase; background-color: #ffffff; text-align: center; border-radius: 5px; padding: 10px 0px;">
                            customization
                        </h1>
                    </div>
                    <!--End-->
                    
                    <!--Layer 3-->
                    <div class="ls-layer" style="transition2d: 8,49,77,100,105; slidedelay: 8000;">
                 
                        <!--Slider Background-->
                        <img class="ls-bg" src="<? echo get_bloginfo('template_url') ?>/assets/images/slider/slider3.jpg" alt="layer1-background">
                        <a href="#" class="ls-link"></a>

                        <!--Slider Sublayers-->
                        <h1 class="ls-s1" style="top:173px; left: 130px; slidedirection : left; slideoutdirection : left; durationout : 750; easingin : easeOutBack; scalein : .1; scaleout : .1; font-weight: normal; font-size: 25px; color: white; text-transform: uppercase; background-color: #1a1a1a; padding: 5px 15px;">
						creative design
                        </h1>
    
                        <h1 class="ls-s1" style="top:233px; left: 130px; slidedirection : left; slideoutdirection : left; durationout : 750; easingin : easeOutBack; delayin : 500; scalein : .1; scaleout : .1; font-weight: normal; font-size: 25px; color: white; text-transform: uppercase; background-color: #1a1a1a; padding: 5px 15px;">
                            responsive layout
                        </h1>
                        
                        <h1 class="ls-s1" style="top:293px; left: 130px; slidedirection : left; slideoutdirection : left; durationout : 750; easingin : easeOutBack; delayin : 1000; scalein : .1; scaleout : .1; font-weight: normal; font-size: 25px; color: white; text-transform: uppercase; background-color: #1a1a1a; padding: 5px 15px;">
                            and easy customization
                        </h1>
                    </div>
                    <!--End-->

                </div>
            </section>
            <!--Banner Slide End-->
            
            <!--Call to Action Start-->
            <section class="call-action">
            	<div class="content">
            		<h1>At vero <span class="text-colortwo">eos accusam</span> justo duo dolores...</h1>
                </div>
				<a href="#">
                	<div class="large-button">
                    	<span>GET MORE INFO</span>
                    </div>
				</a>
            </section>
            <!--Call to Action End-->
            
            <!--Service Start-->
            <section class="container service">
            	<ul>
                	
                    <!--Service 1-->
                    <li class="flip">
                    	<a href="service-single1.html">
                            <div class="flip-front">
                                <div class="service-icon">
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/service-icon/service-icon-1.png" alt="service" />
                                </div>
                                <h2 class="grid-title">Lorem Ipsum</h2>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">Dolor sit amet</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                	MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Service 2-->
                    <li class="flip">
                    	<a href="service-single2.html">
                            <div class="flip-front">
                                <div class="service-icon">
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/service-icon/service-icon-2.png" alt="service" />
                                </div>
                                <h2 class="grid-title">Dolor Sit Amet</h2>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">Consetetur sadip</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                	MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Service 3-->
                    <li class="flip">
                    	<a href="service-single1.html">
                            <div class="flip-front">
                                <div class="service-icon">
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/service-icon/service-icon-3.png" alt="service" />
                                </div>
                                <h2 class="grid-title">Sed Diam Nonumy</h2>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">Eirmod tempor</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                	MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Service 4-->
                    <li class="flip">
                    	<a href="service-single2.html">
                            <div class="flip-front">
                                <div class="service-icon">
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/service-icon/service-icon-4.png" alt="service" />
                                </div>
                                <h2 class="grid-title">Labore Dolore</h2>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">Aliquyam erat</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                	MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                </ul>
            </section>
            <!--Service End-->
            
            <div class="clearfix"></div>
            
            <!--Grid Content Start-->
            <section class="container">
            
            	<!--Left Area Start-->
            	<div class="grid-half left">
                
                	<!--Large Grid-->
                	<div class="large-grid flip">
                        <div class="flip-front">
                            <a href="blog-single.html">
                                <figure>
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/upload/large-thumbnail1.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <div class="flip-back">
                            <h1 class="large-title-back">Lorem ipsum dolor sit consetetur amet</h1>
                            <p class="large-description-back">Sed diam nonumy eirmod tempor ut labore et <span class="text-colortwo">dolore magna</span> aliquyam erat sed diam voluptua, at vero eos</p>
                            <a href="blog-single.html">
                                <div class="large-button">
                                    <span>GET MORE INFO</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--End-->
                    
                    <ul class="small-grid">
                    	
                        <!--Small Grid 1-->
                    	<li class="flip">
                        	<div class="flip-front">
                            	<a href="blog-single.html">
                                	<figure>
                                    	<img src="<? echo get_bloginfo('template_url') ?>/assets/images/upload/small-thumbnail1.jpg" alt="image" />
                                    </figure>
                                </a>
                            </div>
                            <a href="blog-single.html">
                                <div class="flip-back active-details gray">
                                    <h2 class="title-back text-gray">Dolor sit amet</h2>
                                    <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                    <div class="more-details">
                                        MORE DETAILS
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--End-->
                        
                        <!--Small Grid 2-->
                        <li class="small-thumb">
                        	<h2>At vero eos et justo duo dolores et ea rebum</h2>
                            <p>At vero eos et accusam...</p>
                        </li>
                        <!--End-->
                        
                    </ul>
                    
                </div>
                <!--Left Area End-->
                
                <!--Right Area Start-->
                <div class="grid-half right">
                	<ul class="small-grid">
                    	
                        <!--Small Grid 3-->
                    	<li class="small-thumb">
                        	<h2>Nonumy eirmod<br><span class="large-font">50%</span></h2>
                            <p>At vero eos et accusam...</p>
                        </li>
                        <!--End-->
                        
                        <!--Small Grid 4-->
                        <li class="flip">
                        	<div class="flip-front">
                            	<a href="blog-single.html">
                                	<figure>
                                    	<img src="<? echo get_bloginfo('template_url') ?>/assets/images/upload/small-thumbnail2.jpg" alt="image" />
                                    </figure>
                                </a>
                            </div>
                            <a href="blog-single.html">
                                <div class="flip-back active-details gray">
                                    <h2 class="title-back text-gray">Dolor sit amet</h2>
                                    <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                    <div class="more-details">
                                        MORE DETAILS
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--End-->
                        
                    </ul>
                    
                    <div class="clearfix"></div>

                    <!--Large Grid-->
                    <div class="large-grid">
                        <div class="flip-back">
                            <h1 class="large-title-back">At vero eos et accusam</h1>
                            <p class="large-description-back"><span class="largest-font">SHARE</span><br><br>Labore et <span class="text-colortwo">Diam Nonumy</span> aliquyam erat sed diam voluptua, at vero eos</p>
                            <a href="about-us.html">
                                <div class="large-button">
                                    <span>GET MORE INFO</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--End-->
         
                </div>
                <!--Right Area End-->
                
            </section>
            <!--Grid Content End-->
            
            <!--Portfolio Start-->
            <section class="container portfolio">
            	<ul>
                	<li class="item">
                        <div class="box-title">
                            <div class="icon">
                                <img src="<? echo get_bloginfo('template_url') ?>/assets/images/service-icon/service-icon-5.png" alt="service" />
                            </div>
                            <h2>PORTFOLIO</h2>
                        </div>
                    </li>
                    
                    <!--Portfolio 1-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/upload/portfolio-thumbnail-06.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details gray">
                                <h2 class="title-back text-gray">Dolor sit amet</h2>
                                <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 2-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/upload/portfolio-thumbnail-13.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details">
                                <h2 class="title-back">Lorem ipsum</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 3-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/upload/portfolio-thumbnail-03.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details gray">
                                <h2 class="title-back text-gray">Sadipscing elitr</h2>
                                <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 4-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/upload/portfolio-thumbnail-14.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details gray">
                                <h2 class="title-back text-gray">Eirmod tempor</h2>
                                <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 5-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/upload/portfolio-thumbnail-11.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details">
                                <h2 class="title-back">Dolore magna</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 6-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/upload/portfolio-thumbnail-04.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details gray">
                                <h2 class="title-back text-gray">Aliquyam erat</h2>
                                <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 7-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/upload/portfolio-thumbnail-05.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details">
                                <h2 class="title-back">Diam Voluptua</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                </ul>
            </section>
            <!--Portfolio End-->
            
    </div>