
<?php

$con=mysqli_connect('localhost','root','','negila_yogi');

$query = "SELECT * FROM register";
if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=NegilaYogi.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('No.', 'First Name' , 'Last Name', 'Email', 'Phone', 'Occupation', 'Address', 'City', 'Zip Code', 'Description', 'Subscription', 'From', 'To'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>
