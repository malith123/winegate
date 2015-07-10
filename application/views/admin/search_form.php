<div id="templatemo_content" style="width:950px; margin-top: 50px">

    <form id="form1" name="searchForm" method="post" style="width: 450px; margin-left: 230px "action="">

        <div class="col-xs-10">
            <input name="SearchByDate" type="text" class="form-control " placeholder="Enter Date" value="">
        </div>

        <div class="col-xs-2">
            <input type="submit" id="btn-search" class="btn btn-success" value="Search">
        </div>
        <br><br>

    </form>


    <table id="item-table" class="table table-striped">
        <thead>
            <tr class="danger">
                <th>Order ID</th>
                <th>User ID</th>
                <th>Order Status</th>
                <th>Order Date</th>
                <th>Total Price</th>
            </tr>
        </thead>

        <?php
        foreach ($order as $product) {

            $oid = $product['order_id'];
            $uid = $product['user_id'];
            $order_status = $product['order_status'];
            $order_date = $product['order_date'];
            $total_price = $product['total_price'];
            ?>
            <tr>
                <td><img src="<?php echo base_url(); ?>images/<?php echo $image ?>"</td>
                <td><big><?php echo $oid; ?></big></td>
            <td><big>$<?php echo $uid; ?></big></td>
            <td><big><?php echo $order_status; ?></big></td>
            <td><big><?php echo $order_date ?></big></td>
            <td><big>$<?php echo $total_price; ?></big></td>
            </tr>
        <?php } ?>
    </table>
    <script type="text/javascript">
        $("item-table").click(function() {
            alert();
        })
    </script>

</div>
