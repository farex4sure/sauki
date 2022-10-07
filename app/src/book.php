<?php
include "config.php";
session_start();
if($_SERVER["REQUEST_METHOD"]==="POST"){
   $appDate = $_POST['app-date'];
   $hcode = $_POST['hcode'];
   $phoneid = $_POST['phone'];
   $dt=time();
   $insert = "INSERT INTO appointments(userid,hospitalid,datetime)VALUES('$phoneid','$hcode','$dt')";
   $inserted = mysqli_query($link,$insert);

   if($inserted){
     $no = rand(1,100); 
     echo $no;
   }

}
?>