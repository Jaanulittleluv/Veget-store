<?php

include('dbconnect.php');
session_start();

if(isset($_POST['order'])){
   $fn = mysqli_real_escape_string($con, $_POST['fullname']);
   $vege = mysqli_real_escape_string($con, $_POST['vegetable']);
   $quant = mysqli_real_escape_string($con, $_POST['quantity']);
   $state = mysqli_real_escape_string($con, $_POST['district']);;
   $area = mysqli_real_escape_string($con, $_POST['area']);
   $address1 = mysqli_real_escape_string($con, $_POST['address']);

   $sql = "INSERT INTO `order_vegetable` (fullname, vegetable, quantity, district, area, address) VALUES ('$fn', '$vege', '$quant', '$state', '$area', '$address1')";
   $res = mysqli_query($con, $sql);

   if($res){
        header("location: orderdetails.php");
   } else {
        echo "Failed to add order";
   }
}

if(isset($_POST['orderf'])){
     $fn = mysqli_real_escape_string($con, $_POST['fullname']);
     $fr = mysqli_real_escape_string($con, $_POST['Fruits']);
     $quant = mysqli_real_escape_string($con, $_POST['quantity']);
     $state = mysqli_real_escape_string($con, $_POST['district']);;
     $area = mysqli_real_escape_string($con, $_POST['area']);
     $address1 = mysqli_real_escape_string($con, $_POST['address']);
  
     $sql = "INSERT INTO `order_fruits` (fullname, Fruits, quantity, district, area, address) VALUES ('$fn', '$fr', '$quant', '$state', '$area', '$address1')";
     $res = mysqli_query($con, $sql);
  
     if($res){
          header("location: orderdetails.php");
     } else {
          echo "Failed to add order";
     }
  }

  if(isset($_POST['orderh'])){
     $fn = mysqli_real_escape_string($con, $_POST['fullname']);
     $hp = mysqli_real_escape_string($con, $_POST['herbalplants']);
     $quant = mysqli_real_escape_string($con, $_POST['quantity']);
     $state = mysqli_real_escape_string($con, $_POST['district']);;
     $area = mysqli_real_escape_string($con, $_POST['area']);
     $address1 = mysqli_real_escape_string($con, $_POST['address']);
  
     $sql = "INSERT INTO `order_herbalplants` (fullname, herbalplants, quantity, district, area, address) VALUES ('$fn', '$hp', '$quant', '$state', '$area', '$address1')";
     $res = mysqli_query($con, $sql);
  
     if($res){
          header("location: orderdetails.php");
     } else {
          echo "Failed to add order";
     }
  }
  
  if(isset($_POST['orderl'])){
     $fn = mysqli_real_escape_string($con, $_POST['fullname']);
     $lv = mysqli_real_escape_string($con, $_POST['leafyvegetables']);
     $quant = mysqli_real_escape_string($con, $_POST['quantity']);
     $state = mysqli_real_escape_string($con, $_POST['district']);;
     $area = mysqli_real_escape_string($con, $_POST['area']);
     $address1 = mysqli_real_escape_string($con, $_POST['address']);
  
     $sql = "INSERT INTO `order_leafyvege` (fullname, herbalplants, quantity, district, area, address) VALUES ('$fn', '$lv', '$quant', '$state', '$area', '$address1')";
     $res = mysqli_query($con, $sql);
  
     if($res){
          header("location: orderdetails.php");
     } else {
          echo "Failed to add order";
     }
  }
?>