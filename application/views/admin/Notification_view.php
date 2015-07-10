
<?php echo form_open('Notification_ctrl'); ?>


<html>
    <head>
        <style>
            h1 { 
                display: block;
                font-size: 2em;
                margin-top: 0.67em;
                margin-bottom: 0.67em;
                margin-left: 0;
                margin-right: 0;
                font-weight: bold;
                color: blue;
            }
        </style>
        <link rel="stylesheet" href="<?php echo base_url();?>assests/css/main1.css" type="text/css">
    </head>

    <body>
        <div id="wrapper">
        <?php include("admin_header.php"); ?>
        <div style="padding-top: 290px;"></div>
<!--        <nav class="navbar navbar-default sidebar" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>      
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url("/Admin_ctr") ?>">Admin Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                        <li >
                            <a href="#" >Details<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>

                        </li>          
                        <li ><a href="#">Reports<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
                        <li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>-->


<!--        <section  class="content width">
            <div style="font-weight:bold">  
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title" ><font size="4" color="blue">Stock View</font></h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">

                            <div style="font-weight:bold">

                                <ul>
                                    <li ><a href="<?php echo base_url("/select_gift_ctrl") ?>"><span class="glyphicon "></span>Gift Item</a></li>
                                    <li ><a href="<?php echo base_url("/select_furniture_ctrl") ?>"><span class="glyphicon "></span>Furniture Item</a></li>
                                    <li ><a href="<?php echo base_url("/select_electronic_ctrl") ?>"><span class="glyphicon "></span>Electronic Items</a></li>
                                    <li ><a href="<?php echo base_url("/select_fashion_ctrl") ?>"><span class="glyphicon "></span>Fashion Items</a></li>
                                    <li ><a href="<?php echo base_url("/select_furniture_ctrl") ?>"><span class="glyphicon "></span>Mix Item</a></li>
                                    <li ><a href="<?php echo base_url("/view_update") ?>"><span class="glyphicon glyphicon-remove-sign"></span>Delete Item</a></li>
                                    <li class="active"><a href="#"><span class="glyphicon glyphicon-comment"></span>  Notifications</a></li>



                                </ul>
                            </div>
                        </section>
                    </div>

                    </section>-->

                    <section class="content width" >

                        <div style="font-weight:bold" class="box-body">  
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"><font size="4" color="blue">Notification About Stock</font></h3>
                                </div>
                                <div class="box-body">
                                    <div style="font-weight:bold" style="font-color:red" class="box-body">
                                        <section class="col-md-4 ">

<!--        <p><font size="7" color="blue">Notification</font></p> -->

                                            <form method="post" id="form1" class="form-horizontal sidebar width" action="/winegate/index.php/Notification_ctrl">


                                                <?php
                                                if (isset($user_data1)) {
                                                    $count = 0;
                                                    foreach ($user_data1 as $row) {
                                                        $count++;
                                                    }
                                                    if ($count == 0) {
                                                         echo "<script>alert('Stock is Empty!!')</script>";
                                                         echo 'Stock is empty';
                                                    } else {
                                                        echo "<script>alert('Stock Having Items!!')</script>";
                                                        echo 'Stock having Items';
                                                    }
                                                }
                                                ?>
                                                <br> 
                                                <?php
                                                if (isset($user_data2)) {
                                                    $count = 0;
                                                    foreach ($user_data2 as $row) {
                                                        $count++;
                                                    }
                                                    if ($count < 10) {
                                                        echo 'Gift Item Is Running Low';
                                                    } else {
                                                        
                                                    }
                                                }
                                                ?>
                                                <br>
                                                <?php
                                                if (isset($user_data3)) {
                                                    $count = 0;
                                                    foreach ($user_data3 as $row) {
                                                        $count++;
                                                    }
                                                    if ($count < 10) {
                                                        echo 'Electronic Item Is Running Low';
                                                    } else {
                                                        
                                                    }
                                                }
                                                ?>
                                                <br>
                                                <?php
                                                if (isset($user_data4)) {
                                                    $count = 0;
                                                    foreach ($user_data4 as $row) {
                                                        $count++;
                                                    }
                                                    if ($count < 10) {
                                                        echo 'Fashion Item Is Running Low';
                                                    } else {
                                                        
                                                    }
                                                }
                                                ?>

                                            </form>

                                        </section>
                                    </div>

                                </div>
                            </div>
                        </div>
             
        </section>



        <section  class="content width right">

            <div style="font-weight:bold" class="box-body">  
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> </h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-7 ">
<div style="padding-top: 100px;">
        <p><font size="4" color="blue">Notification</font></p> 

                            <form width='25' padding='20' method="post" id="form1" class="form-horizontal" action="http://localhost/E_marketting/index.php/Notification_ctrl/notification_view">
                                    <table class = "table table-striped "  >
                                        
                                   
                                       
                                  <?php 
                                  if (isset($user_data6)) {
                                  ?> 
                                  <?php foreach ($user_data6 as $row) { ?>

                                        <tr>
                                            <td><?php echo $row['user_name'] ?>                             Saying</td>
                                        <td><?php  echo $row['notification_message']; ?></td>
                                        <td ><a href="http://localhost/winegate/index.php/Notification_ctrl/notification_view?id=<?php echo $row['user_name'];?>"class="btn btn-primary btn-sm"  >View</a></td> </tr>
                                        
                                    
                               
                                <?php }?>
                                  <?php } ?> 
                                   
                                    </table>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript">
            var context;
            var text = "";
            var textDirection ="";

            $(function()
            {
                context = document.getElementById("cvs").getContext("2d");            
                setInterval("animate()", 150);
        
                textDirection ="right";
                textXpos = 5;
                text = "Hi Admin ,Nice to see you again!";    
            });  
        
            function animate() {            
                // Clear screen
                context.clearRect(0, 0, 500, 500);
                context.globalAlpha = 1;
                context.fillStyle = '#fff';
                context.fillRect(0, 0, 500, 500);    
                                        
                var metrics = context.measureText(text);
                var textWidth = metrics.width;
                
                if (textDirection == "right") {
                    textXpos += 10;

                    if (textXpos > 500 - textWidth) {
                        textDirection = "left";
                    }
                }
                else {
                    textXpos -= 10;

                    if (textXpos < 10) {
                        textDirection = "right";
                    }                    
                }

                context.font = '20px _sans';
                context.fillStyle = '#FF0000';
                context.textBaseline = 'top';
                context.fillText  ( text, textXpos, 180);    
              }    
              </script>
          </head>
          <body> 
             <div id="page">
                <canvas id="cvs" width="500" height="500">
                   Your browser does not support the HTML 5 Canvas. 
                </canvas>
             </div>
          </body>
</div>
          </div>
          </body>
          





