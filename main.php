<?php
   include("config.php");
   $error = "";
   session_start();

function Grabuser(&$id){
      $link = mysqli_connect("127.0.0.1", "root", "", "sppmdatabase");
      $result = mysqli_query($link,"SELECT * FROM Users where ID='$id'");
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      return $row['Name'];
   }
   
   function grabid(&$id){
      $link = mysqli_connect("127.0.0.1", "root", "", "sppmdatabase");
      $result = mysqli_query($link,"SELECT * FROM Users where Name='$id'");
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      return $row['ID'];
   }
   
   function addingaproduct(&$data, &$uid){
      $db = mysqli_connect("127.0.0.1", "root", "", "sppmdatabase");

      $userid = grabid($uid);
      $p=$data['PName'];
      $q=$data['QTY'];
      $d=$data['DAdded'];
      $sql = "INSERT INTO Products (`ID`, `Product`, `User ID`, `Quantity`, `Date`) VALUES (NULL, '$p', '$userid', '$q', '$d');";

      if (mysqli_query($db, $sql)) {
    $message = "ADDED Into the Database";
echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message =  "Please check the entered values";
echo "<script type='text/javascript'>alert('$message');</script>";
//echo $sql;
}

   }
?>
