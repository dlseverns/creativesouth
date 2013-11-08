    <div class="clearfix"></div>
    
    <!--Footer Start-->
    <footer class="footer-section">
    
    	<!--Footer About Us-->
    	<section class="footer-about">
        	<div class="footer-content">
                <figure>
                    <img src="<? echo get_bloginfo('template_url') ?>/assets/images/logo.png" alt="logo" />
                </figure>
                <div class="footer-text">
                    <br><p>Lorem ipsum dolor, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p><br>
                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                </div>
            </div>
        </section>
        <!--Footer About Us End-->
        
        <!--Footer Contact-->
        <section class="footer-contact">
        	<h2 class="footer-title">CONTACT INFO</h2>
        	<div class="footer-content">
            	<ul>
                	<li>
                    	<div class="contact-list footer-text">
                        	<span>Company Name<br>4884 Lilac Lane Statesboro, GA 30458</span>
                        </div>
                    </li>
                    <li>
                    	<div class="contact-list footer-text email">
                        	<span>Email: info@yourdomain.com</span>
                        </div>
                    </li>
                    <li>
                    	<div class="contact-list footer-text phone">
                        	<span>Phone: 111-123-456-9999</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Footer Contact End-->
        
        <!--Footer Subscribe-->
        <section class="footer-subscribe">
        	<h2 class="footer-title">NEWSLETTER</h2>
        	<div class="footer-content">
            	<div class="footer-text">
                	<p>Subscribe now for free tips, update item and our promotion.</p>
                </div>
                <div class="subscribe-box">
                	<form>
                    	<input class="first-name" type="text" name="firstname" placeholder="First name *" required />
                        <input class="last-name" type="text" name="lastname" placeholder="Last name *" required />
                        <input class="email" type="text" name="email" placeholder="Your email address *" required />
                        <input class="subscribe-button" type="submit" value="SUBSCRIBE"/>
                    </form>
                </div>
            </div>
        </section>
        <!--Footer Subscribe End-->
        
        <div class="clearfix"></div>
        
        <!--Footer Bottom-->
        <section class="footer-bottom">
        	<div class="copyright">
            	Copyright Â© All Rights Reserved. <a href="#">yourdomain.com</a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
        </section>
        <!--Footer Bottom End-->
        
    </footer>    
    <?php wp_footer(); ?>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                    $('#layerslider').layerSlider({
                            skinsPath : 'layerslider/skins/',
                            skin : 'borderlessdark3d',
                            thumbnailNavigation : 'hover',
                            showCircleTimer : true,
                            showBarTimer : true,
                    touchNav : true,
                            navStartStop : true,
                            animateFirstLayer : true,
                            responsive : true
                    });
            });		
        </script>
        <script type="text/javascript">
        $.fn.placeholder();
        </script>
    </body>
</html>