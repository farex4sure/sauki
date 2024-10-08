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
      <p class="text-center font-bold text-xl text-white mt-7">Sauki Insurance</p>
    </div>
    <div
      class="bg-white rounded-lg p-3 px-5 space-y-3 flex text-sm flex-col mr-20 ml-5 absolute top-14 toggleMenu hidden"
      data-aos="zoom-in">
      <a href="./dashboard.php">Appointment</a>
      <a href="./payments.php">Payments</a>
      <a href="./insurance.php">Insurance</a>
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

    <div class="my-5 mx-5 relative pb-12">
      <div class="grid grid-cols-2 gap-x-4 relative -top-10">
        <a href="./insurance-dashboard.php">
          <div class="bg-white rounded text-primary text-center font-semibold py-2 px-4 space-y-3 text-xs">
            <div class="flex justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
              </svg>
            </div>
            <p>Dashboard</p>
          </div>
        </a>
        <a href="./insurance-history.php">
          <div class="bg-white rounded text-primary shadow-xl text-center font-semibold py-2 px-4 space-y-3 text-xs">
            <div class="flex justify-center">
              <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M20.9413 10.6641H19.0624C18.8905 10.6641 18.7499 10.8047 18.7499 10.9766V21.7305C18.7499 21.832 18.7968 21.9258 18.8788 21.9844L25.3358 26.6992C25.4764 26.8008 25.6718 26.7734 25.7733 26.6328L26.8905 25.1094C26.996 24.9648 26.9647 24.7695 26.8241 24.6719L21.2538 20.6445V10.9766C21.2538 10.8047 21.1132 10.6641 20.9413 10.6641ZM29.5272 13.6016L35.6522 15.0977C35.8475 15.1445 36.0389 14.9961 36.0389 14.7969L36.0702 8.48829C36.0702 8.22657 35.7694 8.07813 35.5663 8.24219L29.41 13.0508C29.3635 13.0868 29.3281 13.1352 29.3078 13.1904C29.2876 13.2456 29.2834 13.3055 29.2956 13.363C29.3078 13.4205 29.3361 13.4734 29.377 13.5156C29.418 13.5579 29.4701 13.5876 29.5272 13.6016ZM36.078 25.3633L33.8632 24.6016C33.7859 24.5751 33.7014 24.5799 33.6277 24.6149C33.554 24.65 33.4969 24.7125 33.4686 24.7891C33.3944 24.9883 33.3163 25.1836 33.2343 25.3789C32.5389 27.0234 31.5429 28.5039 30.2694 29.7734C29.0101 31.0367 27.5177 32.0435 25.8749 32.7383C24.173 33.4578 22.3437 33.8271 20.496 33.8242C18.6288 33.8242 16.8202 33.4609 15.1171 32.7383C13.4743 32.0435 11.9818 31.0367 10.7225 29.7734C9.45302 28.5039 8.45692 27.0234 7.7577 25.3789C7.04214 23.6761 6.67553 21.847 6.67958 20C6.67958 18.1328 7.04286 16.3203 7.76552 14.6172C8.46083 12.9727 9.45692 11.4922 10.7304 10.2227C11.9897 8.95946 13.4821 7.95257 15.1249 7.25782C16.8202 6.53516 18.6327 6.17188 20.4999 6.17188C22.3671 6.17188 24.1757 6.53516 25.8788 7.25782C27.5216 7.95257 29.014 8.95946 30.2733 10.2227C30.6718 10.625 31.0468 11.043 31.3905 11.4844L33.7265 9.65626C30.6522 5.72657 25.8671 3.19922 20.4921 3.20313C11.1327 3.20704 3.61708 10.8086 3.71083 20.1719C3.80458 29.3711 11.285 36.7969 20.4999 36.7969C27.746 36.7969 33.9179 32.2031 36.2694 25.7695C36.328 25.6055 36.2421 25.4219 36.078 25.3633Z"
                  fill="#189BCC" />
              </svg>
            </div>
            <p>Payment History</p>
          </div>
        </a>
      </div>

      <div class="space-y-5 text-sm">
        <p class="font-semibold">History</p>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Credit</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N50,000</p>
            <p class="text-xs">5th Aug., 2022 | 01:00pm</p>
          </div>
          <p class="font-semibold text-red-500">Debit</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-red-500">Debit</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Credit</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Credit</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-red-500">Debit</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Credit</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-red-500">Debit</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Credit</p>
        </div>
        <div class="bg-white rounded-lg px-4 py-5 flex justify-between items-center">
          <div>
            <p class="font-semibold font-varela">N5,000</p>
            <p class="text-xs">10th Feb, 2022 | 05:00pm</p>
          </div>
          <p class="font-semibold text-green-500">Credit</p>
        </div>

      </div>
      <!-- <a href="./dashboard.php" class="">
        <button class="button">Continue</button>
      </a> -->
    </div>


  </div>









  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="../splide-4.0.7/dist/js/splide.min.js"></script>

  <script src="../script.js"></script>


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