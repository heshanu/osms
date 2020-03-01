<?php
$con=mysqli_connect("localhost","root","root","newosms");

if($con->connect_error){
	echo "connection faid";
	die();
}
else{
	echo("connection sucessfull");
}

?>