<?php<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Online Store </title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="<?php echo base_url("/templatemo_style.css"); ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("stylesheet/styles.css"); ?>" />
        <link rel="stylesheet" type="text/css" href="http://localhost/winegate/assests/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assests/css/bootstrap.css" >
        <link rel="stylesheet" href="<?php echo base_url();?>assests/css/datepicker.css" >
            
        <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>scripts/mootools-1.2.1-core.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>scripts/mootools-1.2-more.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>scripts/slideitmoo-1.1.js"></script>
        <script src="<?php echo base_url();?>assests/js/main.js"></script>
        <script src="<?php echo base_url();?>assests/js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>assests/js/bootstrap-datepicker.js"></script>
        
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
//if($this->session->userdata('admin')=='')
   // header("Location:".base_url()."index.php/admin/");
?><div id="header">
				<div id="logo">
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo.png" alt="Galaxy Wines Ltd." /></a>
				</div>
			</div>
			<div id="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Our Products</a></li>
					<li><a href="#">My Cart</a></li>
					<li><a href="#">Contact Us</a></li>
                                        
                                       <li><a href="<?php echo base_url();?>index.php/Notification_ctrl/notification1">Notification</a></li>
                    <?php if($this->session->userdata('admin')!='')
					{
					?>
                    <li><a href="<?php echo base_url();?>index.php/admin/signout">Signout</a></li>
                    <?php } ?>
				</ul>
			</div>

 </ul>  <div>
<!--                               <form action="<?php echo base_url(); ?>index.php/Main/getPrice " method="post"><table><tr><td>    --><table><tr><td>
                                 <ul>   <div id="templatemo_banner">

                                        

                                        <div id="product_gallery">

                                            <div id="SlideItMoo_outer">	
                                                <div id="SlideItMoo_inner">			
                                                    <div id="SlideItMoo_items">
                                                        <div class="SlideItMoo_element">
                                                            <a href="http://www.templatemo.com/page/1" target="_parent">
                                                                <img src="<?php echo base_url(); ?>images/templatemo_product_01.png" alt="product 1" /></a>
                                                        </div>	
                                                        <div class="SlideItMoo_element">
                                                            <a href="http://www.templatemo.com/page/2" target="_parent">
                                                                <img src="<?php echo base_url(); ?>images/templatemo_product_02.png" alt="product 2" /></a>
                                                        </div>
                                                        <div class="SlideItMoo_element">
                                                            <a href="http://www.templatemo.com/page/3" target="_parent">
                                                                <img src="<?php echo base_url(); ?>images/templatemo_product_03.png" alt="product 3" /></a>
                                                        </div>
                                                        <div class="SlideItMoo_element">
                                                            <a href="http://www.templatemo.com/page/4" target="_parent">
                                                                <img src="<?php echo base_url(); ?>images/templatemo_product_04.png" alt="product 4" /></a>
                                                        </div>
                                                        <div class="SlideItMoo_element">
                                                            <a href="http://www.templatemo.com/page/5" target="_parent">
                                                                <img src="<?php echo base_url(); ?>images/templatemo_product_05.png" alt="product 5" /></a>
                                                        </div>
                                                        <div class="SlideItMoo_element">
                                                            <a href="http://www.templatemo.com/page/6" target="_parent">
                                                                <img src="<?php echo base_url(); ?>images/templatemo_product_06.png" alt="product 6" /></a>
                                                        </div>
                                                        <div class="SlideItMoo_element">
                                                            <a href="http://www.templatemo.com/page/7" target="_parent">
                                                                <img src="<?php echo base_url(); ?>images/templatemo_product_07.png" alt="product 7" /></a>
                                                        </div>
                                                        <div class="SlideItMoo_element">
                                                            <a href="http://www.templatemo.com/page/8" target="_parent">
                                                                <img src="<?php echo base_url(); ?>images/templatemo_product_08.png" alt="product 8" /></a>
                                                        </div>
                                                    </div>			
                                                </div>
                                            </div>

                                        </div> <!-- end of product gallery -->



                                    </div> 
                           
                            
			</div>

