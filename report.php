<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'negila_yogi'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql = 'SELECT * 
        FROM register';
        
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>

    <title>Report</title>
     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/E_form_css.css" media="screen" />
     <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
            background-color: white;
        }

       legend{
        color: white;
         font-family: arial;
         margin-top: 20px; 
       }
       h1{
        font-family: arial;
       }

        table td {
            transition: all .5s;
        }
        
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }

        .margin{

    margin-left: 800px;


}
.the-click-button{

width: 120px;
height: 20px;
background-color: transparent;
 font-family: Lobster;


} 
        .data-table th, 
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        
        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }

        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }

        .data-table tbody tr:nth-child(odd) td {
            
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
           
        }
    </style>
</head>
<body>
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">

<div class="container">
<legend>N e g i l a &nbsp; Y o g i &nbsp; T r u s t   <h1>R e p o r t

<div class="margin">
            <a href="Home.php" class="the-click-button" placeholder="tejas">Home</a>
            
           
</div>

</h1>

 

</legend>
   
    <table class="data-table" >
       
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>First Name</th>
                <th>email</th>
                <th>Phone</th>
                <th>occupation</th>
                <th>address</th>
                <th>city</th>
                <th>zip-code</th>
                <th>description</th>
                <th>image</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no     = 1;
        $total  = 0;
        while ($row = mysqli_fetch_array($query))
        {
            // $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
            echo '<tr>
                    <td>'.$no.'</td>
                    <td>'.$row['first_name'].'</td>
                    <td>'.$row['last_name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['phone'].'</td>
                    <td>'.$row['occupation'].'</td>
                    <td>'.$row['address'].'</td>
                    <td>'.$row['city'].'</td>
                    <td>'.$row['zip_code'].'</td>
                    <td>'.$row['description'].'</td>
                    <td>'.$row['image'].'</td>
                </tr>';
            // $total += $row['amount'];
            $no++;
        }?>
        <!-- </tbody>
        <tfoot>
            <tr>
                <th colspan="4">TOTAL</th>
                <th><?=number_format($total)?></th>
            </tr>
        </tfoot> -->
    </table>
    </tbody>
    </table>
    </div>
    </div>
    </div>

</body>
</html>