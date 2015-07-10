 <link rel="stylesheet" href="<?php echo base_url();?>assests/css/main1.css" type="text/css">
<?php include("admin_header.php"); ?>
<div style="padding-top: 290px;"></div>
<form method="post"  class="form-horizontal" action="http://localhost/winegate/index.php/Notification_ctrl/notification_view">
    <table  class = "table table-striped notifications nwidth"   >
        
        <tr >


            <?php
            if(isset($resultSet)){
            ?>
            <?php foreach ($resultSet as $row) { ?>

        <tr>
            <td>ID</td>
                <td><?php echo $row->id;
            
                ?></td>
        </tr>
        <tr>
                <td>User Name</td>
                <td><?php echo $row->user_name;
                
                ?></td>
        </tr>
        <tr>
            <td>Message</td>
                <td><?php echo $row->notification_message;
                
                ?></td>
        </tr>
       
        <tr ><td ><a href="http://localhost/winegate/index.php/Notification_ctrl/notification_approve?id=<?php echo $row->id;?>"class="btn btn-primary btn-sm"  >Back</a></td> </tr>
    </table>         
<?php } ?>
            <?php } ?>
        
</form>   

