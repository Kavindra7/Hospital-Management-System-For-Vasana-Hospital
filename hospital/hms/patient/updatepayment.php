<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_GET["id"])){
    mysqli_query($con,"update appointment set payment_status='Paid' where id = '".$_GET['id']."'");
}

?>