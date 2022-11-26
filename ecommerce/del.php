<?php
include_once("connection.php");
$uid = $_GET['uid'];
$deleteQuery = $pdo->prepare("DELETE FROM products_tbl WHERE productID = :id");
$deleteQuery->bindParam(':id',$uid);
$deleteQuery->execute();
echo "<script>alert('Succesfully Deleted!')</script>";
echo "<script>window.open('view.php','_self')</script>";
?>