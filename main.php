<?php
   include("config.php");
   $error = "";
   session_start();
   
   function login(&$login){
      $db = mysqli_connect("127.0.0.1", "root", "", "sppmdatabase");
      $myusername = mysqli_real_escape_string($db,$login['username']);
      $mypassword = mysqli_real_escape_string($db,$login['password']); 
      
      $sql = "SELECT id FROM Users WHERE Name = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }

   function ChangeData(&$Name, &$QTY, &$sold, &$get){
    $link = mysqli_connect("127.0.0.1", "root", "", "sppmdatabase");
    $ID=$get['ID'];
      $sql = "UPDATE Products SET Product='$Name', Quantity='$QTY', Sold='$sold' WHERE ID= '$ID' ";
      if (mysqli_query($link, $sql)) {
         header('Location: welcome.php' );
         $error = "Updated"; 
      } else {
         $message =  "WRONG VALUES";
         echo "<script type='text/javascript'>alert('$message');</script>";
      //echo $sql;
      }
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //header(string)
      //return $row['Name'];
   }

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
