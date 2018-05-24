<?php
/**

 */
// start again
$con=mysqli_connect('localhost','root','','negila_yogi');  // this one in error
if(isset($_REQUEST['id'])){
    $id=intval($_REQUEST['id']);
    $sql="select * from register WHERE id=$id";
    $run_sql=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_sql)){
        $per_id=$row[0];
        $per_fname=$row[1];
        $per_sname=$row[2];
        $per_email=$row[3];
        $per_phone=$row[4];
        $per_occupation=$row[5];
        $per_addres=$row[6];
        $per_city=$row[7];
        $per_zip=$row[8];
        $per_subscp=$row[10];
        $per_dateFrom = $row[11];
        $per_dateTO = $row[12];
    }//end while
?>
    <form class="form-horizontal" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Information</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtid">ID</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtid" name="txtid" value="<?php echo $per_id;?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtname">First Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtname" name="first_name" value="<?php echo $per_fname;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtname">Second Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtname" name="second_name" value="<?php echo $per_sname;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtemail">email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="txtemail" name="email" value="<?php echo $per_email;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtphone">Phone</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtphone" name="phone" value="<?php echo $per_phone;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtname">Occupation</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtname" name="occupation" value="<?php echo $per_occupation;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtname">Address</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtname" name="address" value="<?php echo $per_addres;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtname">city</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtname" name="city" value="<?php echo $per_city;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtnum">Zip-code</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtnum" name="zip" value="<?php echo $per_zip;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtname">Subscription</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtname" name="subscp" value="<?php echo $per_subscp;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtname">From Date</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="txtdate" name="dateFrom" value="<?php echo $per_dateFrom;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtname">To Date</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="txtdate" name="dateTo" value="<?php echo $per_dateTo;?>">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <<div class="modal-footer">
                <a href="report.php"><button type="button" class="btn btn-danger">Cancel</button> </a>
                <button type="submit" class="btn btn-primary" name="btnEdit">Save</button>
            </div>
        </div>
    </form>
<?php
}//end if
?>
