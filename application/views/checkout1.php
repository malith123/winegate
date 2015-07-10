<?php if(empty($product_id)){
    header("Location: show_all");
} ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Billing Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/global.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fg-main-style.css">
        <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery-1.9.1.js'></script> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/popup_style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loader.css" />
        <script src="<?php echo base_url(); ?>js/jquery-latest.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/validate_by_text.js"></script>
        <style type="text/css">
            img#paypal{
                width: 126px;
                float: right;		
            }

        </style>

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
                                <h2>Billing Details</h2>
                                <h4></h4>
                            </div>
                            <div class="clearfix"></div>

                            <div class="fg-parent-box">

                                <div class="fg-box first">
                                    <p class="fg-box-header relative rl-pad">User Information</p>
                                    <div class="fg-inner-box rl-pad">
                                        <form class="myForm" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id; ?>"/>
                                            <div class="fg-row">
                                                <label class="block fg-label">Full Name</label>
                                                <input name="full_name" id="full_name" type="text" class="fg-input text fg-fw"/>
                                                <p id="full_name" class="fg-help red"></p>
                                            </div>
                                            <div class="fg-row">
                                                <label class="block fg-label">Email Address</label>
                                                <input id="email_address" type="text" class="fg-input text fg-fw" name="email_address" value="">
                                                <p  id="email_address"  class="fg-help red"></p>
                                            </div>

                                          
                                            <div class="fg-row last">
                                                <input onClick="submit_data();" id ="submit" type="button" class="fg-btn blue medium inline" value="Proceed To Paypal" name="submit"><img id="paypal" src="<?php echo base_url(); ?>images/paypal.jpg"/>
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
                        <p>2015 &copy; SEP-007. All rights reserved.</p>
                    </div>
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
    <form id ="payment_mode_form" name="form" action="https://www.sandbox.paypal.com/us/cgi-bin/webscr" method="post" target="_top">

        <input type="hidden" name="cancel_return" value="http://localhost/ci_paypal/index.php/products/show_all" />
<input type="hidden" name="return" value="http://www.aorank.com/live-tutorial/test.php" />
        <input type="hidden" name="cmd" value="_xclick">
        <input id="business" type="hidden" name="business" value="">
        <input type="hidden" name="lc" value="C2">
        <input id ="item_name" type="hidden" name="item_name" value="">
        <input id="amount" type="hidden" name="amount" value="">
        <input id="currency_code"  type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="button_subtype" value="services">
        <input type="hidden" name="no_note" value="0">
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">

    </form>
    <script src="<?php echo base_url(); ?>js/jquery.simplePopup.custom.js" type="text/javascript"></script>

    <script type="text/javascript">

                                                    function submit_data() {
                                                        var validate_value = validate_user();
                                                        if(validate_value=='true'){
                                                        
                                                       var payment_mode = $("select#payment_mode").val();
                                                       
                                                        $.ajax({
                                                            url: "<?php echo base_url(); ?>" + "index.php/products/save_billing_info",
                                                            type: "POST",
                                                            dataType: 'json',
                                                            data: {full_name: $("input#full_name").val(), email_address: $("input#email_address").val(), product_id: $("input#product_id").val()},
                                                            success: function(data) {
                                                                $("input#item_name").val(data['product_name']);
                                                                $("input#amount").val(data['product_price']);
                                                                $("input#business").val(data['merchant_email']);
                                                                $("input#currency_code").val(data['product_currency']);
																$('form#payment_mode_form').attr('action',data['payment_mode']);

                                                            }
                                                        });
                                                        setTimeout(function() {
                                                            document.form.submit();
                                                        }, 3000);

                                                        $('#pop2').simplePopup();
                                                        
        }
                                                    }
    </script>

</body>
</html>
