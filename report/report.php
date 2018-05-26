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



body{
    background-color: #b7b6aa;
}

#col{
    margin-left: 93%;
}
.h1{
    align-content: center;
    color: white;
}

.form-group{

margin-left: 93%;
margin-bottom: 5%;

}

.menu{
    background-color: red;
    height: 5%;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #cb5a5a;
  color: white;

}
 </style>


</head>
<body>

    <div class="container">

<h1 class="header">N E G I L A&nbspY O G I &nbsp &nbsp T R U S T</h1>
<div class="topnav">
   <a class="active" href="logout.php">Logout</a>
   <a onclick="Export()" href="#news">download</a>
     <a href="../register.php">Register</a>
    <a href="../home.php">Home</a>


</div>

<p>

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


</p>
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
