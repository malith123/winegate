<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Online Store</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="<?php echo base_url("/templatemo_style.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("stylesheet/styles.css"); ?>" rel="stylesheet" type="text/css"  />
        <link href="<?php echo base_url("assests/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
<!--        <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/datepicker.css" />-->
        <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>scripts/mootools-1.2.1-core.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>scripts/mootools-1.2-more.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>scripts/slideitmoo-1.1.js"></script>
<!--        <script src="<?php echo base_url(); ?>assests/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assests/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assests/js/bootstrap-datepicker.js"></script>-->

        <script>
            $(function() {
                $('.datepicker').datepicker();
            });
        </script>

        <script language="javascript" type="text/javascript">
            window.addEvents({
                'domready': function() {
                    /* thumbnails example , div containers */
                    new SlideItMoo({
                        overallContainer: 'SlideItMoo_outer',
                        elementScrolled: 'SlideItMoo_inner',
                        thumbsContainer: 'SlideItMoo_items',
                        itemsVisible: 4,
                        elemsSlide: 2,
                        duration: 200,
                        itemsSelector: '.SlideItMoo_element',
                        itemWidth: 158,
                        showControls: 1});
                }

            });
        </script>

    </head>
    <body>

        <div id="templatemo_wrapper">

            <div id="templatemo_main_column">

                <div id="templatemo_header">

                    <div id="site_title">
                        <h1><a href="http://www.templatemo.com" target="_parent">
                                <img src="<?php echo base_url(); ?>images/templatemo_logo.jpg" alt="Gadget Store" />
                                <span>E Marketing</span>
                            </a></h1>
                    </div>

                </div> 
                <form action="" method ="post"><table><tr><td>
                                <div id="templatemo_menu">

                                    <ul>
                                        <li><a href="#" class="current"><span></span>Home</a></li>
                                        <li><a href="#" target="_parent"><span></span>About Us</a></li>
                                        <li><a href="#" target="_parent"><span></span>Category</a></li>
                        <!--                <li><a href="#" target="_parent"><span></span>Contact Us</a></li>-->
                                        <li><a href="<?php echo base_url(); ?>index.php/givediscounts"><span></span>Discounts</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/aonotify"><span></span>Notifications</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/search" target="_parent"><span></span>Search</a></li>
                                    </ul>
                                </div>
                            </td>

                            <td><div id="templatemo_menu">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>index.php/login" ><span></span>Login</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/register" ><span></span>Register</a></li>
                                    </ul>
                                </div></td></tr></table></form>

                <div id="templatemo_banner">

                    <h2>Latest Products</h2>

                    <div id="product_gallery">

                        <div id="SlideItMoo_outer">	
                            <div id="SlideItMoo_inner">			
                                <div id="SlideItMoo_items">
                                    <div class="SlideItMoo_element">
                                        <img src="<?php echo base_url(); ?>images/templatemo_product_01.png" alt="product 1" /></a>
                                    </div>	
                                    <div class="SlideItMoo_element">
                                        <img src="<?php echo base_url(); ?>images/templatemo_product_02.png" alt="product 2" /></a>
                                    </div>
                                    <div class="SlideItMoo_element">
                                        <img src="<?php echo base_url(); ?>images/templatemo_product_03.png" alt="product 3" /></a>
                                    </div>
                                    <div class="SlideItMoo_element">
                                        <img src="<?php echo base_url(); ?>images/templatemo_product_04.png" alt="product 4" /></a>
                                    </div>
                                    <div class="SlideItMoo_element">
                                        <img src="<?php echo base_url(); ?>images/templatemo_product_05.png" alt="product 5" /></a>
                                    </div>
                                    <div class="SlideItMoo_element">
                                        <img src="<?php echo base_url(); ?>images/templatemo_product_06.png" alt="product 6" /></a>
                                    </div>
                                    <div class="SlideItMoo_element">
                                        <img src="<?php echo base_url(); ?>images/templatemo_product_07.png" alt="product 7" /></a>
                                    </div>
                                    <div class="SlideItMoo_element">
                                        <img src="<?php echo base_url(); ?>images/templatemo_product_08.png" alt="product 8" /></a>
                                    </div>
                                </div>			
                            </div>
                        </div>

                    </div> <!-- end of product gallery -->

                    <div class="cleaner"></div>

                </div> 
