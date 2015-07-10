<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Show Product</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/global.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fg-main-style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style_code.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-latest.js"></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery-1.9.1.js'></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/validate_by_text.js"></script>

    </head>
    <body>
        <div id="main-wrapper" class="container-fluid">
            <!-- Header Section -->
            <div class="row">
                <div class="main-header">  
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <a href="#" class="logo"><img src="<?php echo base_url(); ?>images/logo.png" alt="Formget Fugo"></a>
                    </div>
                    <div class="col-xs-9 col-sm-9 col-md-9">

                    </div>
                    <div class="fg-clear"></div>
                    <ul class="main-tab">

                        <li><a   href="<?php echo base_url(); ?>index.php/products/">Add Products</a></li>
                        <li id="nomargin"><a id="active" class="active" href="<?php echo base_url(); ?>index.php/products/show_all">Show Products</a></li>
                    </ul>
                    <div class="fg-clear"></div>
                </div>
            </div>

            <!-- Middle Section -->
            <div class="row  main-container blue-bg">
                <div style="padding:0 100px;">
                    <div class="col-md-12 nopadding">
                        <div id="right-section-wrapper"style="border-right: 1px solid #CBE5F4;">
                            <div id="table_container" >
                                <div class="top-section-heading">
                                    <h2>Show Products</h2>

                                </div>
                                <div class="clearfix"></div>

                                <div class="fg-parent-box">

                                    <div class="tab-pag-wrapper">
                                        <table class="messages">
                                            <thead>
                                                <tr class="head">
                                                    <th class="first">ID</th>
                                                    <th>Prodcut Name</th>
                                                    <th>Merchant's Email</th>

                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($query as $row) { ?>
                                                <input id="id<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" type="hidden">
                                                <input id="name<?php echo $row->id; ?>" value="<?php echo $row->product_name; ?>" type="hidden">
                                                <input id="price<?php echo $row->id; ?>" value="<?php echo $row->product_price; ?>" type="hidden" >
                                                <input id="currency<?php echo $row->id; ?>" value="<?php echo $row->product_currency; ?>" type="hidden">
                                                <input id="url<?php echo $row->id; ?>" value="<?php echo $row->product_image; ?>" type="hidden">
                                                <input id="description<?php echo $row->id; ?>" value="<?php echo $row->product_description; ?>" type="hidden">
                                                <tr class="row-data">
                                                    <td class="first"><?php echo $row->id; ?></td>
                                                    <td><?php echo $row->product_name; ?></td>          
                                                    <td><?php echo $row->merchant_email; ?></td>
                                                    <td><?php echo $row->product_price; ?>/<?php echo $row->product_currency; ?></td>               
                                                    <td>
                                                        <a href="javascript:void(0)" onclick="preview(<?php echo $row->id; ?>);" >
                                                            <div id="show"><i class="icon-eye"></i></div>
                                                        </a>
                                                        <a href="javascript:void(0)" onclick="edit(<?php echo $row->id; ?>);" >
                                                            <div id="edit"><i class="icon-pencil"></i></div>
                                                        </a>
                                                        <a href="javascript:void(0)" onclick="delete_product(<?php echo $row->id; ?>);" >
                                                            <div id="delete"><i class="icon-trash"></i></div>
                                                        </a>

                                                        <a href="javascript:void(0)" onclick="get_code(<?php echo $row->id; ?>);">
                                                            <div id="get_code">Code</div>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                        <!--                                        <div class="ajax_count">
                                                                                    <ul>
                                                                                        <li><a>1</a></li>
                                                                                        <li class="current"><a>2</a></li>
                                                                                        <li><a>3</a></li>
                                                                                        <li><a>&gt;</a></li>
                                                                                        <li><a>&gt;&gt;</a></li>
                                                                                    </ul>
                                                                                </div>-->
                                    </div>

                                </div><!-- fg-parent-box End-->
                            </div>
                            <div id="update_form">

                                <div class="top-section-heading">
                                    <h2>Update Product</h2>
                                    <h4></h4>
                                </div>
                                <div class="clearfix"></div>
                                <div id="success_msg">
                                    <h2>Product Updated Successfully...!!</h2>

                                    <div id="btn_con"><a href="<?php echo base_url() ?>index.php/products/show_all" class="fg-btn orange medium inline">See All Products</a></div><a id="msg_close" class="close icon-cross2" href="javascript:void(0)"></a>

                                </div>
                                <div class="fg-parent-box">

                                    <div class="fg-box first">
                                        <p class="fg-box-header relative rl-pad">Product Information<a onclick="update_close();" id="update_close" ><img src="<?php echo base_url();?>images/close.png"/></a></p>
                                        <div class="fg-inner-box rl-pad">
                                            <form class="myForm" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" id="product_id" name="product_id" value=""/>
                                                <div class="fg-row">
                                                    <label class="block fg-label">Product Name</label>
                                                    <input id="product_name" type="text" class="fg-input text fg-fw" name="product_name" value="">
                                                    <p id="product_name"   class="fg-help red"></p>
                                                </div>
                                                <div class="fg-row">
                                                    <div class="col-md-8 nopadding">
                                                        <label class="block fg-label">Product Price</label>
                                                        <input id="product_price" type="number" step="0.01" min="0" class="fg-input text fg-fw" name="product_price" value="">
                                                        <p id="product_price" class="fg-help red"></p>
                                                    </div>
                                                    <div class="col-md-4 ">
                                                        <label class="block fg-label">Currency</label>
                                                        <select id="product_currency" class="fg-select fg-fw" name="product_currency">
                                                            <option value="USD" title="$" >USD</option>
                                                            <option value="AUD" title="$" >AUD</option>
                                                            <option value="BRL" title="R$" >BRL</option>
                                                            <option value="GBP" title="£" >GBP</option>
                                                            <option value="CAD" title="$" >CAD</option>
                                                            <option value="CZK" title="">CZK</option>
                                                            <option value="DKK" title="">DKK</option>
                                                            <option value="EUR" title="€">EUR</option>
                                                            <option value="HKD" title="$">HKD</option>
                                                            <option value="HUF" title="">HUF</option>
                                                            <option value="ILS" title="₪">ILS</option>
                                                            <option value="JPY" title="¥">JPY</option>
                                                            <option value="MXN" title="$">MXN</option>
                                                            <option value="TWD" title="NT$">TWD</option>
                                                            <option value="NZD" title="$">NZD</option>
                                                            <option value="NOK" title="">NOK</option>
                                                            <option value="PHP" title="P">PHP</option>
                                                            <option value="PLN" title="">PLN</option>
                                                            <option value="RUB" title="">RUB</option>
                                                            <option value="SGD" title="$">SGD</option>
                                                            <option value="SEK" title="">SEK</option>
                                                            <option value="CHF" title="">CHF</option>
                                                            <option value="THB" title="฿">THB</option>
                                                        </select>
                                                        <p class="fg-help"></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="fg-row">
                                                    <label class="block fg-label">Product Image</label>
                                                    <div class="fg-upload-parent">
                                                        <input id="up_file" type="file" class="file1" name="up_file" style="visibility:hidden; height:0px !important;" onchange="document.getElementById('import_file_text').value = this.value;">  
                                                        <input name="import_file_text" class="fg-input text inline_path" id="import_file_text" placeholder="" type="text" onclick="document.getElementById('up_file').click();" readonly>
                                                        <span class="fg-upload-btn" onclick="document.getElementById('up_file').click();"><i class="icon-folder"></i>Choose</span>
                                                        <div class="fg-clear"></div>
                                                    </div>
                                                </div>
                                                <div class="fg-row">
                                                    <label class="block fg-label">Product Description</label>
                                                    <textarea id="product_description" name="product_description" class="fg-textarea fg-fw last" rows="6"></textarea>
                                                    <p class="fg-help">Help Text goes here.</p>
                                                </div>
                                                <div class="fg-row">
                                                    <label class="block fg-label">Merchant Email Id</label>
                                                    <input id="merchant_email" type="text" class="fg-input text fg-fw" name="merchant_email" value="">
                                                    <p id="merchant_email" class="fg-help red"></p>
                                                </div>
                                                <div class="fg-row first">
                                                <label class="block fg-label">Payments Mode</label>
                                                <select name="payment_mode" id="payment_mode" class="fg-select fg-fw">
                                                    <option value=""> -- Select Payment Mode -- </option>
                                                    <option value="https://www.sandbox.paypal.com/us/cgi-bin/webscr">sandbox.paypal</option>
                                                    <option value="https://www.paypal.com/cgi-bin/webscr">paypal</option>
                                                </select>
                                                <p id="payment_mode" class="fg-help"></p>
                                            </div>
                                                <div class="fg-row last">
                                                    <input id ="submit" type="submit" class="fg-btn green medium inline" value="Update Product" name="submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- fg-box End -->

                                </div><!-- fg-parent-box End-->


                            </div>
                        </div><!-- right-section-wrapper End -->
                    </div>
                </div>
            </div>
            <!-- Footer Section -->
            <div class="row">
                <div class="main-footer">
                    <div class="copyright-footer">
                        <p>2015 &copy; your-company.com All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="pop1" class="simplePopup">
            <form method="post" action="<?php echo base_url(); ?>index.php/products/checkout">
                <input id="product_id" name="product_id" type="hidden" value=""/>
                <h2>PHP, jQuery, Ajax Based Advance Contact Form</h2><br>
                <img style="width:30%; height: 180px" id="product_img" >
                <div id="product_decription_pre"></div>
                <br>
                <input id="show_submit" type="submit" value="Buy Now 28.00" class="fg-btn inline medium blue" />
                <br><br>
            </form>
        </div>

        <div id="copy_code" class="simplePopup">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/embed_css.css" />  
        <div id="form_container">
		 <form method="post" action="<?php echo base_url(); ?>index.php/products/checkout">
                <input id="product_id" name="product_id" type="hidden" value=""/>
                <h2>PHP, jQuery, Ajax Based Advance Contact Form</h2><br>
                <img style="width:30%; height: 180px" id="product_img"  src="" >
                <div id="product_decription_pre"></div>
                <br><br>
                <input id="code_submit" type="submit" value="Buy Now 28.00" class="fg-btn inline medium blue" />
                <br><br>
            </form>
            </div>
        
            

                </div>



        <div id="pop2" class="simplePopup">
            <div class="fg-row">
                <label class="block fg-label">Copy Code</label>
                <div id="code_con"></div>
                <p class="fg-help">Copy Code and put anywhere in any view</p>
            </div>
        </div>

        <div id="delete_product_pop" class="simplePopup">

            <div class="fg-box first">
                <p class="fg-box-header relative rl-pad">Deleting Product</p>
                <div class="fg-inner-box rl-pad">
                    <form  method="post">
                        <div class="fg-row">
                            <center> <label class="block fg-label">Are you sure..? <br>
                                    <br>You want to delete this Product</label>

                                <input type="hidden" name="product_id" id="del_product_id" value=""/>
                                <div><br><input id="del_submit" type="submit" value="Yes" class="fg-btn inline medium green" />  <a href="<?php echo base_url(); ?>index.php/products/show_all" id="cancel_delete" class="fg-btn orange medium inline">No</a></div>
                            </center>

                        </div>

                    </form>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>js/jquery.simplePopup.js" type="text/javascript"></script>
        <script type="text/javascript">

                                                            function delete_product(id) {
                                                                $('#del_product_id').val(id);
                                                                $('#delete_product_pop').simplePopup();
                                                            }


                                                            function preview(id) {
                                                                var currency = '$';
                                                                product_name = $("input#name" + id).val();
                                                                product_image = $("input#url" + id).val();
                                                                product_price = $("input#price" + id).val();
                                                                product_currency = $("input#currency" + id).val();
                                                                product_description = $("input#description" + id).val();
                                                                if (product_currency == "BRL") {
                                                                    currency = 'R$';
                                                                } else if (product_currency == "USD" || product_currency == "ASD") {
                                                                    currency = '$';

                                                                } else if (product_currency == 'GBP') {
                                                                    currency = '£';

                                                                }
                                                                $("div#product_decription_pre").html(product_description);
                                                                $("#pop1 h2").html(product_name);
                                                                $("#pop1 img").attr('src', product_image);
                                                                $("#pop1 input#show_submit").val("Buy Now " + currency + "" + product_price);
                                                                $("#pop1 input#product_id").val(id);
                                                                $('#pop1').simplePopup();
                                                            }
                                                            function get_code(id) {

                                                                var currency = '$';
                                                                product_name = $("input#name" + id).val();
                                                                product_image = $("input#url" + id).val();
                                                                product_price = $("input#price" + id).val();
                                                                product_currency = $("input#currency" + id).val();
                                                                if (product_currency == "BRL") {
                                                                    currency = 'R$';
                                                                } else if (product_currency == "USD" || product_currency == "ASD") {
                                                                    currency = '$';

                                                                } else if (product_currency == 'GBP') {
                                                                    currency = '£';

                                                                }
                                                                $("#copy_code h2").html(product_name);
                                                                $("#copy_code img").attr('src', product_image)
                                                                $("#copy_code input#submit").val("Buy Now " + currency + "" + product_price);
                                                                $("#copy_code input#product_id").val(id);



                                                                var data = $('#copy_code').html();
                                                                $('#pop2 #code_con').text(data);
                                                                $('#pop2').simplePopup();
                                                            }

                                                            function edit(id) {
                                                                
                                                                $.ajax({
                                                                    url: "<?php echo base_url();?>" + "index.php/products/get_value_for_update",
                                                                    type: "POST",
                                                                    dataType: 'json',
                                                                    data: {product_id: id},
                                                                    success: function(data) {
																		
																		
                                                                        $("input#product_id").val(id);
                                                                        $("input#product_name").val(data['product_name']);
                                                                        $("input#product_price").val(data['product_price']);
                                                                        $("select#product_currency").val(data['product_currency']);
                                                                        $("textarea#product_description").html(data['product_description']);																	$("select#payment_mode").val(data['payment_mode']);
                                                                        $("input#import_file_text").val(data['product_image']);
                                                                        $("input#merchant_email").val(data['merchant_email']);
                                                                    }
                                                                });
                                                                $("a#active").removeClass('active');
                                                                $("div#table_container").slideUp(1000);
                                                                $("div#update_form").slideDown(2000);
                                                            }

                                                            function update_close(){
                                                                $("div#update_form").slideUp(1000);
                                                                $("div#table_container").slideDown(1000);
                                                            }

                                                            jQuery(document).ready(function() {
                                                                $('input#submit').click(function(e) {
                                                                    $('div#success_msg').slideUp(1000);
                                                                    e.preventDefault();
                                                                    var validate_value = validate();
                                                        if(validate_value=='true'){
                                                                    var formData = new FormData($('.myForm')[0]);
                                                                    jQuery.ajax({
                                                                        type: "POST",
                                                                        data: formData,
                                                                        mimeType: "multipart/form-data",
                                                                        contentType: false,
                                                                        cache: false,
                                                                        processData: false,
                                                                        url: "<?php echo base_url(); ?>" + "index.php/products/update_product",
                                                                        success: function(res) {
                                                                            if (res)
                                                                            {
                                                                                if (res == 'TRUE') {

                                                                                    $('div#success_msg').slideDown(1000);
                                                                                }
                                                                            }
                                                                        }
                                                                    });
                                                                }
                                                                });
                                                                $('input#del_submit').click(function() {
                                                                    var id = $('input#del_product_id').val();
                                                                    $.ajax({
                                                                        url: "<?php echo base_url();?>" + "index.php/products/delete_product",
                                                                        type: "POST",
                                                                       
                                                                        data: {product_id: id},
                                                                        success: function(data) {
                                                                            location.reload();

                                                                        }
                                                                    });


                                                                });
                                                                $('a#msg_close').click(function() {
                                                                    $('div#success_msg').slideUp(1000);
                                                                });

                                                            });





        </script>



    </body>
</html>
