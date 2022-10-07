<?php
include "config.php";
session_start();

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

     <!-- Buttom Navigation -->
    <div class="bg-white text-primary py-3 px-5 fixed bottom-0 inset-x-0 justify-between flex text-xs z-[44] ">
      <a href="dashboard.php" class="text-center space-y-1">
        <i class="fa-solid fa-house-chimney-user"></i>
        <p>Home</p>
      </a>
        <a href="./appointment.php" class="text-center space-y-1">
        <i class="fa-regular fa-calendar fa-xl"></i>
        <p>Appointment</p>
      </a>
        <a href="./payments.php" class="text-center space-y-1">
        <i class="fa-solid fa-money-bill fa-xl"></i>
        <p>Payments</p>
      </a>
     <a href="./insurance-dashboard.php" class="text-center space-y-1">
        <i class="fa-solid fa-house-medical-circle-check fa-xl"></i>
        <p>Insurance</p>
      </a>
    </div>

    <div class="my-5 mx-5">
 <p class="text-center font-semibold text-sm my-4 pb-1">Payment</p>
      <p class="text-center font-light text-xs pb-4 px-10 leading-tight">Your payment when successful will reflect in
        the Sauki Insurance Dashboard</p>
      <div class="">
<form method="GET" action='gethd.php'>
    <div class="grid gap-6 mb-6 md:grid-cols-2">
    </div>
    <div class="mb-6">
        <label for="hcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enter Hospital Code</label>
        <input type="hcode" name="hcode" id="hcode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
      
    </div> 
 
  

   
    
    <button type="submit" class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
</form>


      </div>
     
    </div>


  </div>









  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="../splide-4.0.7/dist/js/splide.min.js"></script>


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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


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

</html>