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
      <p class="text-center font-bold text-xl text-white mt-7 justify-center">Tranaction History </p>
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
 <p class="text-center font-semibold text-sm my-4 pb-1">Transactions </p>
      <p class="text-center font-light text-xs pb-4 px-10 leading-tight">Your transactions when successful will reflect in
        the Sauki Insurance Dashboard</p>
      <div class="">

      <div class="space-y-5 text-sm">
        <p class="font-semibold">History</p>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Successful</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N50,000</p>
            <p class="text-xs">5th Aug., 2022 | 01:00pm</p>
          </div>
          <p class="font-semibold text-red-500">Failed</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-red-500">Failed</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Successful</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Successful</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-red-500">Failed</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Successful</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-red-500">Failed</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Successful</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Successful</p>
        </div>

      </div>
      </div>


  </div>









  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="../splide-4.0.7/dist/js/splide.min.js"></script>

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