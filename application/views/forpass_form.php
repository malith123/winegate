<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url();?>assests/css/main1.css" type="text/css">
	</head>
<body>
	<div id="wrapper">
			<?php include("header.php"); ?>
			<div id="content">
				<div id="breadcrumb">
					<a href="#">Our Products</a>
				</div>
				<?php include("left.php"); ?>
				<div id="right">
					
                    

                                    
		  <form action="<?=base_url();?>index.php/forpass" method="post" enctype="multipart/form-data" id="login">
					<p>
                                            You will receive an email with the information you need to change your password.</p>
                      <p>
						<input type="text" name="email" placeholder="Enter Your Email" value="<?=set_value('Email');?>" 
				</p>
			<p>
                             <?php echo form_error('email'); ?>
			 

                        </p>
			
                                    <input type="submit" value="Submit">
                                        
                                        
                                        
                                        
                                        
                      
				
</form>
                                    <?php include("footer.php"); ?>
			
	</div>
</body>
</html>