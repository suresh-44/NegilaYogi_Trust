<?php

    session_start();
    if (!isset($_SESSION['name']) and !isset($_SESSION['name'])) {
        header("Location: ../index.php");
        session_destroy();
    }
    // session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Report</title>
    <!-- bootstrap Lib -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- datatable lib -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/E_form_css.css" media="screen" />

 <style type="text/css">

.container{

    width: 190vh;
    height: 100%;
    background:white;


}



    .the-click-button {
        background-color: rgba(255, 80, 53, 0.901961);
        background-image: url(https://daks2k3a4ib2z.cloudfront.net/553f831feb855b6a5f0e42a8/5853beacc62327483d8324b7_mouse%205.svg), url(https://daks2k3a4ib2z.cloudfront.net/553f831feb855b6a5f0e42a8/5853beac5b991c28512ad40b_mouse1.svg);
        background-position: 20px -12px, 20px 4px;
        background-repeat: no-repeat;
        background-size: 22px, 22px;
        border-radius: 3px;
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        cursor: auto;
        display: inline-block;
        font-family: Montserrat, sans-serif;
        font-size: 18px;
        font-weight: normal;
        height: 40px;
        width: 140px;
        line-height: 24px;
        padding: 20px 30px 20px 60px;
        text-align: left;
        text-decoration: none;
        margin-left: 85%;
        text-shadow: rgba(0, 0, 0, 0.270588) 0px 1px 0px;
        text-size-adjust: 100%;
        transition-delay: 0s, 0s, 0s, 0s;
        transition-duration: 0.2s, 0.2s, 0.2s, 0.2s;
        transition: color 200ms ease, background-color 200ms ease, opacity 200ms ease, background-position 200ms ease, transform 50ms ease, -webkit-transform 50ms ease;
        -webkit-touch-callout: none; /* iOS Safari */ -webkit-user-select: none; /* Chrome/Safari/Opera */ -moz-user-select: none; /* Firefox */ -ms-user-select: none; /* Internet Explorer/Edge */
    }


body{
    background-color: #b7b6aa;
}

#col{
    margin-left: 80%;
}

 </style>


</head>
<body>

    <div class="container">
        <h1>N E G I L A &nbsp &nbsp  Y O G I</h1>
        <a href="../home.php" class="btn btn-info btn-lg" id="col">
            <span class="glyphicon glyphicon-log-out" id="align"></span> Home
        </a>
        <div class="form-group">
            <button onclick="Export()" class="btn btn-primary">Download</button>
        </div>


        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone NO</th>
                <th>Occupation</th>
                <th>address</th>
                <th>city</th>
                <th>Zip-Code</th>
                <th>Subscription</th>
                <th>From</th>
                <th>To</th>
                <th>Action</th>

            </tr>
            </thead>
            <!-- <tfoot>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </tfoot> -->
        </table>

        <!--create modal dialog for display detail info for edit on button cell click-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div id="content-data"></div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function(){
            var dataTable=$('#example').DataTable({
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:"fetch.php",
                    type:"post"
                }
            });
        });
    </script>
    <!--script js for get edit data-->
    <script>
        $(document).on('click','#getEdit',function(e){
            e.preventDefault();
            var per_id=$(this).data('id');
            //alert(per_id);
            $('#content-data').html('');
            $.ajax({
                url:'editdata.php',
                type:'POST',
                data:'id='+per_id,
                dataType:'html'
            }).done(function(data){
                $('#content-data').html('');
                $('#content-data').html(data);
            }).fial(function(){
                $('#content-data').html('<p>Error</p>');
            });
        });

        function Export()
        {
            var conf = confirm("Do you want to Download ?");
            if(conf == true)
            {
                window.open("export.php", '_blank');
            }
        }
    </script>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','negila_yogi');
if(isset($_POST['btnEdit'])){
    $new_id=mysqli_real_escape_string($con,$_POST['txtid']);
    $First_name=mysqli_real_escape_string($con,$_POST['first_name']);
    $Last_Name=mysqli_real_escape_string($con,$_POST['second_name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $occupation=mysqli_real_escape_string($con,$_POST['occupation']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $zip=mysqli_real_escape_string($con,$_POST['zip']);
    $subscp=mysqli_real_escape_string($con,$_POST['subscp']);
    $dateFrom=mysqli_real_escape_string($con,$_POST['dateFrom']);
    $dateTo=mysqli_real_escape_string($con,$_POST['dateTO']);

    $sqlupdate="UPDATE register SET first_name='$First_name',
                last_name='$Last_Name',email='$email',
                phone='$phone',
                occupation = '$occupation',
                address = '$adress',
                city = '$city',
                zip_code = '$zip',
                subscription = '$subscp',
                from_date  = '$dateFrom',
                to_date = '$dateTo',
                WHERE id='$new_id'";
    $result_update=mysqli_query($con,$sqlupdate);
    if($result_update){
        echo '<script>window.location.href="report.php"</script>';
    }
    else{
        echo '<script>alert("Update Failed")</script>';
    }
}
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $sqldelete="DELETE FROM register WHERE id='$id'";
    $result_delete=mysqli_query($con,$sqldelete);
    if($result_delete){
        echo'<script>window.location.href="report.php"</script>';
    }
    else{
        echo'<script>alert("Delete Failed")</script>';
    }
}
?>
