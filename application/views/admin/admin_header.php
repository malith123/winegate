<?php
//if($this->session->userdata('admin')=='')
   // header("Location:".base_url()."index.php/admin/");
?><div id="header">
    <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Store</title>
<meta name="keywords" content="gadget store, free css templates, ecommerce templates, CSS, HTML" />
<meta name="description" content="Gadget Store is a free ecommerce website template from templatemo.com" />




 

<link href="<?php echo base_url("/assests/css/templatemo_style.css") ?>" rel="stylesheet" type="text/css" />

 <link rel="stylesheet" type="text/css" href="<?php echo base_url("/assests/css/bootstrap.css")?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assests/css/styles.css") ?>" />
<script language="javascript" type="text/javascript" src="<?php echo base_url ("scripts/mootools-1.2.1-core.js")?>"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url ("scripts/mootools-1.2-more.js")?>"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url("scripts/slideitmoo-1.1.js")?>"></script>

<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible: 4,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 158,
						showControls:1});
		}
		
	});
</script>

</head>
<body>
    <div id="templatemo_wrapper">

	<div id="templatemo_main_column1">
    
    	<div id="templatemo_header">
        
       		<div id="site_title">
                <h1><a href="#" target="_parent">
<!--                	<img src="<?php echo base_url("images/templatemo_logo.jpg") ?>" alt="Online Store" />
                    -->
                </a></h1>
            </div>
        
       
            </div>
               <div id="templatemo_menu">
        
<!--            <ul>
                <li><a href="#" class="current"><span></span>Home</a></li>
                <li><a href="#" target="_parent"><span></span>New Products</a></li>
                
                <li><a href="#" target="_parent"><span>More Products</span></a></li>
                 <li><a href="#" target="_parent"><span></span></a></li>
                <li><a href="<?php echo base_url("/login") ?>"><span></span>Login</a></li>
                 <li><a href="<?php echo base_url("/register") ?>"><span></span>Register</a></li>
                 
            </ul>    	
        -->
        </div> 
       


				<div id="logo">
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo.png" alt="Galaxy Wines Ltd." /></a>
				</div>
			</div>
			<div id="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Our Products</a></li>
<!--					<li><a href="#">My Cart</a></li>
					<li><a href="#">Contact Us</a></li>-->
                                         <li><a href="<?php echo base_url();?>index.php/search/getByDate">Daily Orders</a></li>
                                        <li><a href="<?php echo base_url();?>index.php/Notification_ctrl/notification1">Notification</a></li>
                                        <li><a herf="#">New Customers</a></li>
                    <?php if($this->session->userdata('admin')!='')
					{
					?>
                    <li><a href="<?php echo base_url();?>index.php/admin/signout">Signout</a></li>
                    <?php } ?>
				</ul>
			</div>



