<?php
	if (isset($_REQUEST['upload']) ){

		$first = $_REQUEST['first_name'];
		$second = $_REQUEST['last_name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$occupation = $_REQUEST['occupation'];
		$address = $_REQUEST['address'];
		$city = $_REQUEST['city'];
		$zip_code = $_REQUEST['zip'];
		$description = $_REQUEST['comment'];



		$connect=  mysqli_connect("localhost","root" , "","negila_yogi" );
		if(mysqli_connect_errno())
		{ die("cannot connect to database field:". mysqli_connect_error());   }

		$query="INSERT INTO `register` set id= '',
											first_name='$first',
											last_name='$second',
											email='$email',
											phone = '$phone',
											occupation='$occupation',
											address='$address',
											city = '$city',
											zip_code = '$zip_code',
											description = '$description'";  
		$result=  mysqli_query($connect, $query);

		mysqli_close($connect);

	}

?>


<!-- `id`, `first_name`, `last_name`, `email`, `phone`, `occupation`, `address`, `city`, `zip_code`, `description`, `image` -->