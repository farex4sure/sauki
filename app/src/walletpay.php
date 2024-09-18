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
    <div class="h-44 bg-primary rounded-b-[30%] px-7">
      <div class="flex items-center py-5 mb-5 justify-between">
        <div onclick="toggle()" class="toggleBtn">
          <svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.75 16H24V13.3333H17.75V16ZM0 0V2.66667H7.75V0H0ZM0 9.33333H24V6.66667H0V9.33333Z"
              fill="white" />
          </svg>
        </div>
        <img src="../assets/user.png" alt="" class="w-10 h-10 rounded-full">
      </div>
      <p class="text-center font-bold text-xl text-white mt-7">Wallet Topup</p>
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
 <p class="text-center font-semibold text-sm my-4 pb-1">Top up your Sauki wallet</p>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
    </div>
    <div class="mb-6">
    <div class="mb-6">
        <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Amount</label>
        <input type="number" id="amount" name="amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
    </div> 
    </div>
    <button type="button" onclick='payWithPaystack();' class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Top up</button>

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





           <script src="https://js.paystack.co/v1/inline.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script>
 

 
 
  function payWithPaystack(){

 document.cookie = "amount = " + document.getElementById("amount").value;
  var handler = PaystackPop.setup({
      key: 'pk_live_99cd12c4408d9d0f9fa9a310df89d78a215cbb79',
      email: 'saukihealthcare@gmail.com',
      amount: document.getElementById("amount").value+"00",
      ref: '<?php echo mt_rand(00000000,12345678);?>', // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_country: "",
                display_city: "",
                display_id: ""
                 }
         ]
      },
      callback: function(response){
           window.location.replace("top-up-verify.php?ref="+response.reference);
      },
      onClose: function(){
          alert('Top up canceled');
      }
    });
    handler.openIframe();
  }
</script>


</body>

</html>