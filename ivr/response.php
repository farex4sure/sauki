<?php

session_start();
ob_start();
error_reporting(0);
$phoneNumber = $_SESSION['phone'];

include "config.php";

$textArray="";

if($_SERVER['REQUEST_METHOD']==="POST"){

    $userResponse=$_POST['response'];


if($_SESSION['level'] == "" AND $userResponse == 3){

    $_SESSION['lang']="3";

    $_SESSION['level']="1";
    ?>

    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/msg1.m4a"></audio>
    
    <?php


}








elseif($_SESSION['level']== "1" AND $userResponse == 1){

    $_SESSION['level']="2";
    
    ?>
    
    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/msg2.m4a"></audio>
    
    <?php

}






elseif($_SESSION['level']== "2"){
    $_SESSION['hid']=$userResponse;

$_SESSION['level']="3";



?>

<audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/msg3.m4a"></audio>

<?php

            
            }

    elseif($_SESSION['level']== "3"){

     $dt=time();
          $save=mysqli_query($conn, "INSERT INTO appointments (userid,hospitalid,datetime) VALUES('".$phoneNumber."','".$_SESSION['hid']."','".$dt."')");
               
    
    if($_SESSION['hid'] == 1){
  unset($_SESSION['level']);
 
 
 
 ?>
    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/resp1.m4a"></audio>
<?php

     $dt=time();
          $save=mysqli_query($conn, "INSERT INTO appointments (userid,hospitalid,datetime) VALUES('".$phoneNumber."','".$_SESSION['hid']."','".$dt."')");
    }
    
    elseif($_SESSION['hid'] == 2){
    unset($_SESSION['level']);
   
   
   
    ?>
    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/resp2.m4a"></audio>
<?php

     $dt=time();
          $save=mysqli_query($conn, "INSERT INTO appointments (userid,hospitalid,datetime) VALUES('".$phoneNumber."','".$_SESSION['hid']."','".$dt."')");
    }
    elseif($_SESSION['hid'] == 3){
         unset($_SESSION['level']);
         
         
           ?>
    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/resp3.m4a"></audio>
<?php

     $dt=time();
          $save=mysqli_query($conn, "INSERT INTO appointments (userid,hospitalid,datetime) VALUES('".$phoneNumber."','".$_SESSION['hid']."','".$dt."')");
        }
    
        elseif($_SESSION['hid'] == 4){
             unset($_SESSION['level']);
             
             
             
                      ?>
    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/resp4.m4a"></audio>
<?php
    
    
    
  
    
                
                }
            
       
    
                
               
            
    }
}





                   




                       




                           


?>
