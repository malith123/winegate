<html xmlns="http://www.w3.org/1999/xhtml">
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
                }

            });
        </script>
        
        <div id="header">
    
				<div id="logo">
					<a href="<?php echo base_url();?>index.php/"><img src="<?php echo base_url();?>images/logo.png" alt="Galaxy Wines Ltd." /></a>
				</div>
				<div id="summary">
					<div id="summary-details">
						<!-- <h2>Shopping Basket</h2> -->
						<?php if($this->session->userdata('cart_items_count')=='')	{ ?>	
	                    <p>0 Item(s) - $0.00</p>
						<?php } else { ?>
	               
	                    <p><?php echo $this->session->userdata('cart_items_count'); ?> Item(s) - $<?php echo number_format($this->session->userdata('total_price'),2);?></p>
	                        <?php } ?>	
							
						<br />
						<a href="<?php echo base_url();?>index.php/cart">View Cart</a>
					</div>
				</div>
			</div>

 			<div id="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Our Products</a></li>
                    <?php
					if($this->session->userdata('user_id')=='')
					{
						?>
					<li><a href="<?=base_url();?>index.php/login">Login</a></li>
                    <?php }
					else
					{
					 ?>
                     <li><a href="<?=base_url();?>index.php/user/">Dashboard</a></li> 
                    <li><a href="<?=base_url();?>index.php/signout">Signout</a></li> 
                     <?php } ?>
					<li><a href="#">Contact Us</a></li>
				
                                        <li> <form action="<?php echo base_url(); ?>index.php/search/getPrice" method="post" >
                             <select id="dropCat" name="item_price" class="form-control" style="width: 170px; margin-right: 10px;">
                        <?php
                        echo"<option>-------Select-------</option>";
                        echo"<option>$0-$500</option>";
                        echo"<option>$500-$1000</option>";
                        echo"<option>$1000-$1500</option>";
                        ?>
                    </select>

              
                                        </li>
                

                    <input type="submit" style="margin-right: 5px;" class="btn btn-success" name="Search1" value="Select Price" onclick="getPrice()">
                                            </form>  

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