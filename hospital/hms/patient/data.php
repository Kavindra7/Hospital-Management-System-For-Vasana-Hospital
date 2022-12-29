<?php
header('Content-Type: application/json');
include('include/config.php');
include('include/checklogin.php');

$conn = mysqli_connect("localhost","root","","hms");

$sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);



/*session_start();
error_reporting(0);
include('include/checklogin.php');
check_login();
header('Content-Type: application/json');
$conn = mysqli_connect("localhost","root","","hms");
$sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);*/
?>