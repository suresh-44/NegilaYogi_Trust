<?php
$con=mysqli_connect('localhost','root','','negila_yogi')
    or die("connection failed".mysqli_errno());

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'first_name',
    2   =>  'last_name',
    3   =>  'email',
    4   =>  'phone',
    5   =>  'occupation',
    6   =>  'address',
    7   =>  'city',
    8   =>  'zip_code',
    9   =>  'subscription',
    10  =>  'from_date',
    11  =>  'to_date'
);  //create column like table in database

$sql ="SELECT * FROM register";
$query=mysqli_query($con,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT * FROM register WHERE 1=1";
if(!empty($request['search']['value'])){
    $sql.=" AND (id Like '".$request['search']['value']."%' ";
    $sql.=" OR first_name Like '".$request['search']['value']."%' ";
    $sql.=" OR last_name Like '".$request['search']['value']."%' ";
    $sql.=" OR phone Like '".$request['search']['value']."%' )";
}
$query=mysqli_query($con,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($con,$sql);

$data=array();

while($row=mysqli_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //first_name
    $subdata[]=$row[2]; //last_name
    $subdata[]=$row[3]; //email
    $subdata[]=$row[4]; //phone
    $subdata[]=$row[5]; //occupation
    $subdata[]=$row[6]; //address
    $subdata[]=$row[7]; //city
    $subdata[]=$row[8]; //zipcode
    $subdata[]=$row[10]; //subscription
    $subdata[]=$row[11];
    $subdata[]=$row[12];
          //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
    $subdata[]='<button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</button>
                <a href="report.php?delete='.$row[0].'" onclick="return confirm(\'Are You Sure ?\')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">&nbsp;</i>Delete</a>';
    $data[]=$subdata;
}

$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

?>
