<?php
include "config.php";
session_start();




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

  <link rel="stylesheet" href="../../dist/output.css">


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
        <img src="../../assets/user.png" alt="" class="w-10 h-10 rounded-full">
      </div>
      <p class="text-center font-bold text-xl text-white mt-7 justify-center">Wallet to Bank </p>
    </div>
    <div
      class="bg-white rounded-lg p-3 px-5 space-y-1 flex text-sm flex-col mr-20 ml-5 absolute top-14 toggleMenu hidden"
      data-aos="zoom-in">
      <a class="" href="./admin_dashboard.php">Admin Dashboard</a>
      <a class="" href="./check_booking.php">Check Booking</a>
      <a class="" href="./pay.php">Payments</a>
      <a class="" href="./profile_verification.php">Verify Profile</a>
    </div>

    <!-- Buttom Navigation -->
    <div class="bg-white text-primary py-3 px-5 fixed bottom-0 inset-x-0 justify-between flex text-xs z-[44] md:hidden">
      <a href="./admin_dashboard.php" class="text-center space-y-1">
        <i class="fa-solid fa-house-chimney-user"></i>
        <p>Home</p>
      </a>
      <a href="./check_booking.php" class="text-center space-y-1">
        <i class="fa-solid fa-boxes-stacked"></i>
        <p>Booking</p>
      </a>
      <a href="./pay.php" class="text-center space-y-1">
        <i class="fa-solid fa-money-bill"></i>
        <p>Payments</p>
      </a>
      <a href="./profile_verification.php" class="text-center space-y-1">
        <i class="fa-solid fa-id-badge"></i>
        <p>Profile</p>
      </a>
    </div>

    <div class="my-1 mx-5 relative pb-12">
         <div class="my-5 mx-5">
 <p class="text-center font-semibold text-sm my-4 pb-1">Payment</p>
      <p class="text-center font-light text-xs pb-4 px-10 leading-tight">Your payment when successful will reflect in
        the Sauki Insurance Dashboard</p>
      <div class="">
<form>
    <div class="grid gap-6 mb-6 md:grid-cols-2">
    </div>
    <div class="mb-6">
        <label for="hcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Account Number</label>
        <input type="hcode" id="hcode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
        <span id="hname"></span>
    </div> 

   <div class="mb-6">
        <label for="hcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Account Name </label>
        <input type="hcode" id="hcode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
        <span id="hname"></span>
    </div> 
    <div class="mb-6">
        <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enter Pin</label>
        <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required="" name="pwd">
    </div> 
    </div>
    
<button class="block text-white bg-cyan-600 hover:bg-cyan-600 focus:ring-4  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button" data-modal-toggle="popup-modal">
  Pay
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
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Payment Successfully </h3>
                <button data-modal-toggle="popup-modal" type="button" class="text-white bg-cyan-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Continue
                </button>
                <a href="./admin_dashboard.php" data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Back</a>
            </div>
        </div>
    </div>
</div>


</form>


      </div>


  </div>







<script>
    const targetEl = document.getElementById('modalEl');

// options with default values
const options = {
  placement: 'bottom-right',
  backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
  onHide: () => {
      console.log('modal is hidden');
  },
  onShow: () => {
      console.log('modal is shown');
  },
  onToggle: () => {
      console.log('modal has been toggled');
  }
};

// toggle the modal
modal.toggle();
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="../splide-4.0.7/dist/js/splide.min.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  <script src="../../script.js"></script>


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

</body>

</html>