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
        <title>Add Product</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/global.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fg-main-style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/popup_style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style_code.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loader.css" />
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

                        <li><a class="active"  href="<?php echo base_url(); ?>index.php/products/">Add Products</a></li>
                        <li id="nomargin"><a href="<?php echo base_url(); ?>index.php/products/show_all">Show Products</a></li>
                    </ul>
                    <div class="fg-clear"></div>
                </div>
            </div>

            <!-- Middle Section -->
            <div class="row  main-container blue-bg">
                <div style="padding:0 100px;">
                    <div class="col-md-12 nopadding">
                        <div id="right-section-wrapper"style="border-right: 1px solid #CBE5F4;">
                            <div class="top-section-heading">
                                <h2>Add Product</h2>
                                <h4>Add Your Product Name,Price, Currency type and Merchant Email Id</h4>
                            </div>
                            <div class="clearfix"></div>
                            <div id="success_msg">
                                <h2>Product Added Successfully...!!</h2>

                                <div id="btn_con"><a href="<?php echo base_url() ?>index.php/products/show_all" class="fg-btn orange medium inline">See All Products</a></div><a id="msg_close" class="close icon-cross2" href="javascript:void(0)"></a>

                            </div>
                            <div class="fg-parent-box">

                                <div class="fg-box first">
                                    <p class="fg-box-header relative rl-pad">Product Information</p>
                                    <div class="fg-inner-box rl-pad">
                                        <form id="form" class="myForm" method="POST" enctype="multipart/form-data">
                                            <div class="fg-row">
                                                <label class="block fg-label">Product Name</label>
                                                <input id="product_name" type="text" class="fg-input text fg-fw" name="product_name" value="">
                                                <p id= "product_name" class="fg-help red"></p>
                                            </div>
                                            <div class="fg-row">
                                                <div class="col-md-8 nopadding">
                                                    <label class="block fg-label">Product Price</label>
                                                    <input id="product_price" type="number" step="0.01" min="0" class="fg-input text fg-fw" name="product_price" value="">
                                                    <p id ="product_price" class="fg-help red"></p>
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
                                                    <input class="fg-input text inline_path" id="import_file_text" placeholder="" type="text" onclick="document.getElementById('up_file').click();" readonly>
                                                    <span class="fg-upload-btn" onclick="document.getElementById('up_file').click();"><i class="icon-folder"></i>Choose</span>
                                                    <div class="fg-clear"></div>
                                                </div>
                                            </div>
                                            <div class="fg-row">
                                                <label class="block fg-label">Product Description</label>
                                                <textarea name="product_description" class="fg-textarea fg-fw last" rows="6"></textarea>
                                                <p class="fg-help"></p>
                                            </div>
                                            <div class="fg-row">
                                                <label class="block fg-label">Merchant Email Id</label>
                                                <input id="merchant_email" type="text" class="fg-input text fg-fw" name="merchant_email" value="">
                                                <p  id="merchant_email" class="fg-help red"></p>
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
                                                <input id ="submit" type="submit" class="fg-btn green medium inline" value="Save Product" name="submit">
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- fg-box End -->

                            </div><!-- fg-parent-box End-->
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
        <div id="pop2" class="simplePopup">
            <div class="bubblingG">
                <span id="bubblingG_1">
                </span>
                <span id="bubblingG_2">
                </span>
                <span id="bubblingG_3">
                </span>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>js/jquery.simplePopup.custom.js" type="text/javascript"></script>
        <script type="text/javascript">

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
                                                            url: "<?php echo base_url();?>" + "index.php/products/save_products",
                                                            success: function(res) {
                                                                if (res)
                                                                {
                                                                    
                                                                    if (res =='TRUE') {

                                                                        setTimeout(function() {
                                                                            $('#pop2').css('display', 'none');
                                                                            $('div.simplePopupBackground').css('display', 'none');
                                                                        },
                                                                                4000);
                                                                        setTimeout(function() {
                                                                            $('div#success_msg').slideDown(1000);

                                                                        },
                                                                                4500);
                                                                        $('#pop2').simplePopup();

                                                                        // $('div#success_msg').slideDown(1000);
                                                                    }
                                                                }
                                                            }
                                                        });
                                                        }
                                                    });

                                                    $('a#msg_close').click(function() {

                                                        $('div#success_msg').slideUp(1000);
                                                    });

                                                });
        </script>

    </body>
</html>
