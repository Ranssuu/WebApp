<?php
include_once("connection.php");
if(isset($_POST['Add'])){
	$productCategory = $_POST['productCat'];
	$productName = $_POST['productName'];
	$productDescription = $_POST['productDes'];
	$productPrice = $_POST['productPrice'];
	$productQuantity = $_POST['productQty'];

// image process
    // changable lang diot is yung productpic
    $profile = $_FILES['productImg']['name'];
    $tempName = $_FILES['productImg']['tmp_name'];
    $size = $_FILES['productImg']['size'];

    //UPLOAD PATH //external  folder to kung saan ma sasave yung newname ng img mo.
    $path = 'img/ProdImg/';

    //TO GET THE IMAGE EXTENTIO
    $imgExt = strtolower(pathinfo($profile, PATHINFO_EXTENSION));

    //acceptable file ext
    $validExt = array("jpg", "jpeg", "png" ,"gif");

    //new name once uploaded
    $newname = rand(1000, 99999).".".$imgExt;

    if(in_array($imgExt,$validExt)){
        if($size < 5000000){ // 5 MB
            move_uploaded_file($tempName,$path.$newname);
        } else {
            echo "<script>alert('Sorry! your file is to large')</script>";
            echo "<script>window.open('shop.php','_self')</script>";
        }
    } else {
        echo "<script>alert('Sorry! Invalid Extension')</script>";
        echo "<script>window.open('shop.php','_self')</script>";
    }
	
	$insertQuery = $pdo->prepare("INSERT INTO products_tbl (productImg, productCat, productName, productDes, productPrice, productQty) 
    VALUES (:PI, :PC, :PN, :PD, :PP, :PQ)");
	$insertQuery->bindParam(':PI',$newname);
	$insertQuery->bindParam(':PC',$productCategory);
	$insertQuery->bindParam(':PN',$productName);
	$insertQuery->bindParam(':PD',$productDescription);
	$insertQuery->bindParam(':PP',$productPrice);
	$insertQuery->bindParam(':PQ',$productQuantity);
	$insertQuery->execute();
	
	echo "<script>alert('Successfully Register')</script>";
	echo "<script>window.open('shop.php','_self')</script>";
}

?>


