
<div id="templatemo_content" class="content">
    <div class="container">
        <div>
            <div class="panel" style="color:darkred; width:620px; margin-top:70px; background-color:#BBB ; padding-left:10px ">
                <h4>Reset Password</h4>
            </div>

            <form id="formLogin" method="post" class="form-horizontal" action="/winegate/index.php/resetpass" >

                <div class="form-group">
                    <label class="col-xs-2 control-label">Password :</label>
                    <div class="col-xs-4">
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="password" /> 
                    </div>

                </div>



                <div class="form-group">
                    <label class="col-xs-2 control-label">Confirm Password :</label>

                    <div class="col-xs-4">
                        <input type="password" class="form-control" placeholder="Re-Enter Your Password" name="passconf" />
                        <?php echo form_error('passconf'); ?>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-xs-2 col-xs-offset-2" style="margin-left: 500px">

                        <button type="submit" class="btn btn-warning">Submit</button>

                    </div>
                </div>


                <br>
            </form>
        </div>
    </div>
</div>