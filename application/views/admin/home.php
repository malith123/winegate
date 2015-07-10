<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url();?>assests/css/main1.css" type="text/css">
	</head>
<body>
	<div id="wrapper">
			<?php include("admin_header.php"); ?>
            <div style="padding-top: 290px;"></div>
			<div id="content" class="checkout">
				<div id="breadcrumb">
					<a href="#">Latest Customers</a>
				</div>
				<?php include("left.php"); ?>
				<div id="right">
					<h1 class="bar">Customers</h1>
                                        <?php
                                        if($customers!='empty')
                                        {
                                            
                                        ?>
					<table id="cart">
						<thead>
							<th>Customer No</th>
							<th>Name</th>
							<th>Date Registered</th>
							<th>Actions</th>
						</thead>
						<tbody>
                                                    <?php
                                                    foreach($customers as $customer)
                                                    {
                                                        ?>
                                                    
							<tr>
								<td><?=$customer->user_id;?></td>
								<td><?=$customer->full_name;?></td>
								<td><?=$customer->date_joined;?></td>
								<td><a href="<?=base_url();?>index.php/admin/cInfo/<?=$customer->user_id;?>">Details</a> | 
                                                                    <a href="<?=base_url();?>index.php/admin/cOrders/<?=$customer->user_id;?>">Orders</a> | 
                                                                    <a href="<?=base_url();?>index.php/admin/cEdit/<?=$customer->user_id;?>">Edit</a> | 
                                                                    <a href="<?=base_url();?>index.php/admin/cDelete/<?=$customer->user_id;?>">Delete</a></td>
							</tr>
                                                    <?php } ?>
							
						</tbody>
					</table>
					<?php 
                                        if($total>RECORDS_PER_PAGE)
                                        {
                                        $pages = ceil($total/RECORDS_PER_PAGE);
                                        
                                        ?>
					<div id="actions">
						<div id="pagination">
							<a href="">&laquo;</a>
							<?php for($i=1; $i<=$pages;$i++)
                                                        {
                                                            ?><a class="<?php if($this->uri->segment(3)==$i) echo 'active';?>" href="<?php 
                                                            echo base_url();?>index.php/admin/customers/<?=$i;?>"><?php echo $i;?></a>
                                                            
                                                          <?php } ?>  
							<a href="">&raquo;</a>
						</div>
                                           <?php } ?> 
 <?php } else { echo "No Record Found"; } ?>
				</div>		
				<div class="clear"></div>
				<?php include("footer.php"); ?>
			</div>
	
	</div>
</body>
</html>