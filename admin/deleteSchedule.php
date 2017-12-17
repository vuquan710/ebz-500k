
<?php
ob_start();
require 'model/dbCon.php';
$id = $_GET['id'];
$sql= "DELETE FROM Schedule WHERE id='$id'";
mysqli_query($conn,$sql);
header('location:schedule.php');

?>