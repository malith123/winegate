
<?php include("left.php"); ?>
<?php 
						$i=1;
						foreach ($home_products as $product)
						{
						
							?>
							<div class="item <?php if($i%3==0) echo 'no-margin-right';?>">
							<div class="photo"><img src="<?php echo base_url().$product->medium_image;?>" alt="<?php echo $product->item_name; ?>" /></div>
							<div class="title"><a href="<?php echo base_url();?>index.php/details/<?php echo $product->item_id; ?>/<?php echo strtolower(url_title($product->item_name)); ?>">
							<?php echo $product->item_name; ?></a></div>
							<p><span>$<?php echo $product->item_price; ?></span> per case</p>
							<div class="actions">
								<a href="<?php echo base_url();?>index.php/buy/<?php echo $product->item_id; ?>" class="add">Add to cart</a>
							</div>
						</div>
                        <?php $i++;} ?>

