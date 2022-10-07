<?php
session_start();
ob_start();

$idn=$_SESSION['idno'];

include "config.php";

$conn = $link;



//get the hospital id from get

$hcode = $_GET['hcode'];




//get the hospital name


        $details="SELECT * FROM hospitals WHERE hcode = '$hcode'";
        $result2 = $link->query($details);
        if ($result2->num_rows > 0) {
            while($row2 = $result2->fetch_assoc()) {
                $hname = $row2["hname"];
               
                 // now get the payment amount genearted by the hospital
       // get the pending payments fromthe  database
            
            $getPP=mysqli_query($conn, "SELECT * FROM pending_payments WHERE userid='".$idn."' AND hospitalid='".$hcode."' AND st='0'");
            
            //check if there is ongoing payment
            
            if(mysqli_num_rows($getPP) > 0){
                
                while($pDetails = mysqli_fetch_assoc($getPP)){
                    $feeAmount=$pDetails['amount'];
                    $feeDesc=$pDetails['description'];
                    
                }
                
          
            
            }
            else {
              // no unpaid payment  
               
               ?>
               
               
            <script>
                alert( "You do not have unpaid fees in This hospital");
                window.location.href='hospitalDetails.php';
            </script>
        <?php   
        
            }
            
            
         
       
                }
        }
                else{
    
    
    echo "No hospital with code ({$hcode}) found";
}

        

$_SESSION['hcode']=$hcode;
$_SESSION['feeAmount']=$feeAmount;



?>







<?php
include "config.php";


$details="SELECT * FROM users WHERE phone = '".$_SESSION['phone']."'";
$result2 = $link->query($details);
if ($result2->num_rows > 0) {
    while($row2 = $result2->fetch_assoc()) {
        $name = $row2["fullname"];
        }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="../assets/sauki.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <!-- Varela Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

  <!-- splide -->
  <link rel="stylesheet" href="../splide-4.0.7/dist/css/splide.min.css">


  <title>Sauki Healthcare</title>

  <link rel="stylesheet" href="../dist/output.css">


  <style>
    ::-webkit-scrollbar {
      width: 6px;
    }

    ::-webkit-scrollbar-track {
      box-shadow: inset 20px 4px 10px #f3eee7;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
      background: #189BCC;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #fff;
    }
  </style>
</head>

<body class="bg-[#e0e0e0] font-raleway">
  <div>
    <div class="h-44 bg-primary rounded-b-[30%] flex items-center py-5 mb-5 justify-between px-7">
      <h2 class="font-bold text-3xl text-white leading-tight">Welcome, <br> <?php echo $name ?></h2>
      <img src="../assets/user.png" alt="" class="w-14 h-14 rounded-full">
    </div>


    <div class="my-5 mx-5">
 <p class="text-center font-semibold text-sm my-4 pb-1">Payment</p>
      <p class="text-center font-light text-xs pb-4 px-10 leading-tight">Your payment when successful will reflect in
        the Sauki Insurance Dashboard</p>
      <div class="">
<form id="aform" method="POST">
    <div class="grid gap-6 mb-6 md:grid-cols-2">
    </div>
    <div class="mb-6">
        <label for="hcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
     <h3> Make payment of <?php echo $feeAmount ?> to <?php echo $hname ?> for <?php echo $feeDesc ?></h3>

    </div> 
   
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Payment Method</label>
    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected="">Payment Method</option>
      <option value="wallet">Wallet Balance </option>
      <option value="CA">HMO's</option>
      <option value="FR">PPO's</option>
      <option value="DE">NHIS</option>
    </select>

   
    </div> 
        <div class="mb-6">
        <label for="confirm_password" class="block mb-2 my-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enter Pin</label>
        <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 0" placeholder="•••••••••" required="" name="pwd">
    </div> 

    <button type="submit" class="block text-white bg-cyan-500 hover:bg-cyan-600 focus:ring-4  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button" data-modal-toggle="popup-modal">Pay
    </button>

<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center" aria-hidden="true">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400"> <div id="resp"></div>  </h3>
                <a href="dashboard.php" data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Ok</a>
            </div>
        </div>
    </div>
</div>
</form>


      </div>
     
    </div>


  </div>









  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="../splide-4.0.7/dist/js/splide.min.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>


  <script>

    AOS.init({
      duration: 800,
      delay: 400
    });

  </script>

  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
  <script>
    var popoverTriggerList = [].slice.call(
      document.querySelectorAll('[data-bs-toggle="popover"]')
    );
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new Popover(popoverTriggerEl);
    });
  </script>

  <script>
    new Splide('.splide').mount();
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var splide = new Splide('.splide');
      splide.mount();
    });
  </script>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->


<!-- <script type="text/javascript">-->
<!--$(document).ready(function(e){-->


<!--  $("#hcode").keyup(function(e){-->

<!--   var hcode=$("#hcode").val();-->


<!--      e.preventDefault();-->
<!--        $.ajax({-->
<!--            type: 'POST',-->
<!--            url: 'gethd.php?hcode=' + hcode,-->
<!--            data: "hcode=" + hcode,-->
        
<!--            contentType: false,-->
<!--            cache: false,-->
<!--            processData:false,-->
<!--            beforeSend: function(){-->
<!--             $("#hname").html("Looking for the hospital");-->
            
              

<!--            },-->
<!--            success: function(response){-->
<!--            $("#hname").html(response);-->
           
<!--                if(response.status == 1){-->
             
                   
<!--                }else{-->
                  
<!--                }-->
               
<!--            }-->
<!--        });-->
<!--    });-->



<!--});-->
<!--</script>-->
</body>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
$(document).ready(function () {
  // submit add book
  
  $("#aform").submit(function(e) {
    e.preventDefault();

    $("#resp").html("");
    var formData = new FormData(this);

    $.ajax({
        url: 'maketransfer.php',
        type: 'POST',
        data: formData,
        success: function (data) {
           $("#resp").html(data);
           $("#aform")[0].reset();
        },
        cache: false,
        contentType: false,
        processData: false
    });
});



});
</script>

</html>