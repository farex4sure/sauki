<?php
session_start();
ob_start();
include "config.php";
$conn = $link;


$phoneNumber=$_SESSION['idno'];

$hcode=$_SESSION['hcode'];

           $pin=md5($_POST['pwd']);
           
           // check if the pin is correct
           
           $checkPIN=mysqli_query($conn, "SELECT *FROM users WHERE phone='".$phoneNumber."' AND tpin='".$pin."'");
           
           if(mysqli_num_rows($checkPIN) > 0){
               
               // if the password is correct
               
               

               
              // deduct user 
              
              //get the amount to  deduct the user
              
              
               //check if there is ongoing payment
            
              $getPP=mysqli_query($conn, "SELECT * FROM pending_payments WHERE userid='".$phoneNumber."' AND hospitalid='".$hcode."' AND st='0'");
            
            
                while($pDetails = mysqli_fetch_assoc($getPP)){
                  $fAmount=$pDetails['amount'];
                    $feeDesc=$pDetails['description'];
                $fpercent = $fAmount;
                }
                
                
                // lets deduct the user now
              // but before then, lets get their balance
							$getUserBalance=mysqli_query($conn, "SELECT bal FROM users WHERE phone='".$phoneNumber."'");
							// get the balance
							
							while($userBALANCE=mysqli_fetch_assoc($getUserBalance)){
									$userBal=$userBALANCE['bal'];
							
							}
							$newUserBal=$userBal - $fAmount;
            // update user balance
						
						
						$updateUserBalance=mysqli_query($conn, "UPDATE users SET bal ='".$newUserBal."' WHERE phone='".$phoneNumber."'");
              
              
              
              // credit hospital
               
               // but we have to get the hospital balance first
							 // lets get it
							 
							 $getHBalance=mysqli_query($conn, "SELECT bal FROM hospitals WHERE hcode='".$hcode."'");
							// get the balance
							
							while($hBALANCE=mysqli_fetch_assoc($getHBalance)){
									$hBal=$hBALANCE['bal'];
							
							}
							$newhBal=$hBal + $fpercent;
							 
							 
							 
							 
							 
							 $creditHospital=mysqli_query($conn, "UPDATE hospitals SET bal =".$newhBal." WHERE hcode='".$hcode."'");
              
                            // update the payment status to  1
            
               $update=mysqli_query($conn, "UPDATE pending_payments SET st='1' WHERE userid='".$phoneNumber."' AND hospitalid='".$hcode."' AND st='0'");
				
				echo "Paid " .$fpercent. " successfully, your new balance is ".$newUserBal. "";			 
			?>

                 
               
           <?php
               
               
               
           }
           else{
               // if the password is incorrect
            echo "Incorrect Password";       
                
               
               
           }
           ?>
          