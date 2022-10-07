<?php
include_once('config.php');

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $phone = $_SESSION["idno"];
}else {
   header('login.php');
}


if(isset($_POST['go'])){
  $otp1 = $_POST['otp1'];
  $otp2 = $_POST['otp2'];
  $otp3 = $_POST['otp3'];
  $otp4 = $_POST['otp4'];
  
  $amount = $_POST['amount'];

  if(empty($otp1) || empty($otp2) || empty($otp3) || empty($otp4) || empty($amount)){
      echo '<div class="err bg-red-100 text-red-500 rounded-md border-l-4 border-red-500 py-1 px-5 mt-5 mx-10"> fill in the fields properly!</div>';
  }else{
      if($otp1 != 1){
          echo'<div class="err bg-red-100 text-red-500 rounded-md border-l-4 border-red-500 py-1 px-5 mt-5 mx-10"> incorrect otp</div>';
      }else{
          if($otp2 != 2){
          echo'<div class="err bg-red-100 text-red-500 rounded-md border-l-4 border-red-500 py-1 px-5 mt-5 mx-10"> incorrect otp</div>';
      }else{
          if($otp3 != 3){
          echo'<div class="err bg-red-100 text-red-500 rounded-md border-l-4 border-red-500 py-1 px-5 mt-5 mx-10"> incorrect otp</div>';
      }else{
          if($otp4 != 4){
          echo'<div class="err bg-red-100 text-red-500 rounded-md border-l-4 border-red-500 py-1 px-5 mt-5 mx-10"> incorrect otp</div>';
          }else{
             $update = "UPDATE users SET bal = bal + '$amount' WHERE phone = '".$phone."'";
             $updated = mysqli_query($link,$update);

            if($updated){
                
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://fsi.ng/api/v1/flutterwave/v3/charges?type=card',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "client": "C10EgEYkJrusinoq55RgQ7rl+hlselSCuuX6GWx6VIJ7Ec7hXCGXup9Ukx8Luge/2HH2WYqXHvqdgrwMxhwlFMUV7tgqgH9ZCoe37pCnvkSkToNPiAbU0jG7L5i+WCxVR5/RaF0p0wbts8nb291rlgpnkk7QPuI2HcqR9R5Uairt/0O+PEmmFhF9v9A92X1w3zyAsGKQH98XxJxP9tAn176RahJL0upUhxrkJHoyJdaE55iicZGpg7Gu/CMYkgQHBGj3ODzL4Bla+pO+50wh5j2BIR+yjx8/V6uMw0qEPvfi5w+zQMoyQhFKvaYxk9P23L+SqR1tBzkty/aV4SCwLmpnzQnbXUewBqxZTQH+1MI="
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'sandbox-key: FL7Xppism18pd9RAtnYhsSi6Y8hKkENI1660725874',
    'Authorization: dskjdks'
  ),
));




$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://fsi.ng/api/sterling/TransferAPIs/api/Spay/InterbankNameEnquiry?Referenceid=01&RequestType=01&Translocation=01&ToAccount=0037514056&destinationbankcode=000001',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Sandbox-Key: 3f81b44afa59a7737ffd448d458aef99',
    'Ocp-Apim-Subscription-Key: t',
    'Ocp-Apim-Trace: true',
    'Appid: 69',
    'Content-Type: application/json',
    'ipval: 0',
    'sandbox-key: FL7Xppism18pd9RAtnYhsSi6Y8hKkENI1660725874'
  ),
));

$response = curl_exec($curl);

curl_close($curl);



              echo '<div class="err bg-green-100 text-green-500 rounded-md border-l-4 border-red-500 py-1 px-5 mt-5 mx-10">You have successfully top up your Sauki Wallet with '.$amount.'</div>';
            
              
            }

          }
         }
       }
      }
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
      <p class="text-center font-bold text-xl text-white mt-7">Payment Method</p>
    </div>
    <div
      class="bg-white rounded-lg p-3 px-5 space-y-3 flex text-sm flex-col mr-20 ml-5 absolute top-14 toggleMenu hidden"
      data-aos="zoom-in">
      <a href="./dashboard.php">Appointment</a>
      <a href="./payments.php">Payments</a>
      <a href="./insurance-dashboard.php">Insurance</a>
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
        <a href="./make-payment.php">
          <div class="bg-white rounded text-primary shadow-xl text-center font-semibold py-2 px-4 space-y-3 text-xs">
            <div class="flex justify-center">
              <svg width="28" height="28" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path
                  d="M8.05614 39.4844C8.76266 39.4844 9.33542 39.0938 9.33542 38.612C9.33542 38.1301 8.76266 37.7395 8.05614 37.7395C7.34961 37.7395 6.77686 38.1301 6.77686 38.612C6.77686 39.0938 7.34961 39.4844 8.05614 39.4844Z"
                  fill="#189BCC" />

                <path
                  d="M45.5312 34.2725L45.051 33.9905C45.0143 33.9692 41.3446 31.7918 40.4325 29.1495L40.2291 28.5642L39.8531 29.0555C39.8413 29.071 39.3199 29.7157 37.8607 30.4722C36.7804 24.3232 33.1056 16.9824 28.2764 13.8525C29.657 13.9641 31.042 13.8496 32.3786 13.3634C33.1835 13.0711 32.8361 11.7595 32.0239 12.0562C30.9282 12.455 29.8303 12.5637 28.7346 12.5079C31.4246 10.0426 33.5367 6.26422 33.5367 3.5015C33.5367 2.83763 33.5367 1.60167 32.5526 1.60167C32.1575 1.60167 31.8381 1.84842 31.3967 2.18917C30.7196 2.71131 29.6974 3.5015 28.1956 3.5015C27.6235 3.5015 26.5763 2.89784 25.7347 2.41316C24.7176 1.82786 24.0677 1.46875 23.5213 1.46875C22.6165 1.46875 21.2866 2.20019 20.1131 2.8457C19.6357 3.10787 18.9829 3.46772 18.8477 3.50223C17.1469 3.50223 16.1592 2.71792 15.5041 2.19872C15.1222 1.89469 14.8454 1.67437 14.476 1.67437C13.5081 1.67437 13.5081 2.83542 13.5081 4.18006C13.5081 6.77534 15.485 10.2012 18.0737 12.5035C16.4427 12.6202 14.8344 13.113 13.7042 14.208C13.08 14.8116 14.0258 15.7692 14.6478 15.167C15.5871 14.2564 16.8187 13.8665 18.1361 13.7908C18.1736 13.9252 18.2191 14.0574 18.2749 14.1874C12.7554 18.1538 8.83453 27.5721 8.83453 33.9303C8.83453 34.5575 8.883 35.1252 8.95791 35.6598C7.53469 35.0275 7.01548 34.473 7.0052 34.4605L6.62627 34.0236L6.43973 34.5744C5.61503 37.0008 2.02981 39.1055 1.99383 39.1268L1.46875 39.4315L2.00264 39.7201C2.18991 39.8215 2.3757 39.9103 2.56297 40.0065L2.22516 40.2408L2.40361 42.4733L16.3957 45.5312L21.7008 42.1377C22.2361 42.1406 22.7781 42.1421 23.3296 42.1421L29.5307 45.5312L43.5492 41.125V38.7684L43.1783 38.5459C43.3634 38.4284 43.5484 38.3087 43.7328 38.1853L44.2241 37.857L44.1161 37.8042L44.7411 37.633L44.8468 35.1832L44.4855 34.9269C44.6779 34.8116 44.8696 34.6941 45.062 34.5722L45.5312 34.2725V34.2725ZM14.8439 4.18006C14.8439 3.854 14.8483 3.59991 14.8549 3.40236C14.9673 3.49048 15.098 3.58669 15.2375 3.68583C15.6657 4.71102 16.4757 6.18711 17.849 7.11683C19.5175 8.24777 19.2957 6.94792 20.1858 5.76117C21.0758 4.57516 21.678 3.95388 23.1688 7.00447C23.8187 8.33442 24.9019 4.61775 25.9315 4.07505C26.204 4.22339 26.4757 4.36145 26.7423 4.47895C28.5885 7.48108 29.444 6.54475 31.0839 4.04934C31.5348 3.78497 31.9049 3.5015 32.1994 3.27458C32.2009 3.34288 32.2023 3.41852 32.2023 3.50297C32.2023 5.86031 30.2761 9.24137 27.9173 11.4467C27.8059 11.1637 27.6464 10.902 27.4458 10.6734C26.4933 9.59461 25.0047 10.7909 24.299 11.576C23.0469 11.1735 21.0068 10.0653 19.6776 10.6998C19.3465 10.8534 19.0425 11.0595 18.7772 11.3101C16.6035 9.32877 14.8439 6.46837 14.8439 4.18006V4.18006ZM26.7437 12.2391C26.4145 12.1693 26.0871 12.0909 25.7619 12.0041C26.1717 11.6509 26.5477 11.5275 26.7055 12.0526C26.7224 12.1098 26.7327 12.1752 26.7437 12.2391V12.2391ZM21.1625 12.6951C20.9194 12.6489 20.6697 12.607 20.4127 12.574C20.2178 12.4518 20.027 12.3232 19.8406 12.1884C20.5118 11.7383 21.6692 11.9777 22.7752 12.3529C22.2295 12.408 21.6912 12.527 21.1625 12.6951V12.6951ZM21.4959 14.6339C21.0846 14.7367 20.6367 14.6956 20.2497 14.5414C20.4068 14.4584 20.5654 14.3864 20.7241 14.3137C20.9811 14.4378 21.2381 14.5414 21.4959 14.6339ZM7.91216 41.4033C6.16059 40.8961 4.461 40.224 2.83616 39.3963C3.8327 38.7412 6.00352 37.1572 6.88623 35.2537C7.49136 35.7288 8.88814 36.5954 11.6083 37.2607C11.562 37.3356 11.5055 37.4157 11.4511 37.4942C9.12902 36.8862 7.80861 36.1173 7.78731 36.1041L7.46713 35.9131L7.31364 36.2561C7.11169 36.7055 6.63802 36.7731 6.37438 36.7731C6.30094 36.7731 6.25173 36.768 6.24512 36.7672L5.98295 36.729L5.88748 36.9802C5.69214 37.4928 4.8902 38.1625 4.59645 38.3777L4.10589 38.7375L4.66695 38.9674C4.87552 39.0526 4.93206 39.1312 4.935 39.1517C4.94234 39.2024 4.85348 39.3361 4.75875 39.4132L4.33134 39.7576L4.82852 39.9875C5.84709 40.4575 7.0008 40.8467 8.1545 41.1676C8.0627 41.2579 7.98339 41.335 7.91216 41.4033ZM13.8342 38.667C14.8608 38.811 15.9984 38.902 17.2409 38.902H17.2417C17.5002 38.902 17.7623 38.8976 18.0296 38.8896C18.0474 38.945 18.0729 38.9976 18.1053 39.046C18.1706 39.1451 18.2588 39.2274 18.3704 39.2913L16.4963 40.8929C16.4605 40.8914 16.4248 40.8907 16.389 40.8907C15.5541 40.8907 14.9313 41.1977 14.6324 41.7441C13.5 41.5996 12.3728 41.4167 11.2528 41.1955C12.1531 40.3944 13.0146 39.5506 13.8342 38.667V38.667ZM5.49973 39.5461C5.57317 39.4073 5.62091 39.2391 5.5952 39.0555C5.57079 38.8899 5.49138 38.7373 5.36975 38.6222C5.69948 38.3395 6.15406 37.9033 6.40375 37.4517C6.97142 37.4436 7.43995 37.2284 7.73517 36.848C8.23234 37.108 9.35227 37.633 11.0068 38.0884C10.3305 38.9366 9.41909 39.8986 8.71042 40.6139C7.60592 40.3216 6.49334 39.9691 5.49973 39.5461V39.5461ZM15.9653 42.6371L15.8148 42.6378C15.1825 42.6378 13.0873 42.5864 10.3194 42.0099C10.4164 41.9277 10.517 41.8432 10.6102 41.7624C12.856 42.2317 14.6669 42.4329 14.8028 42.4483L15.0716 42.477L15.1546 42.2163C15.336 41.6538 16.005 41.5708 16.3883 41.5708C16.4933 41.5708 16.5631 41.5774 16.5712 41.5781L16.7136 41.5935L19.9691 38.8117L19.0989 38.7831C18.8081 38.7728 18.6854 38.7074 18.6553 38.6626L18.8397 38.1802L18.33 38.2015C17.9584 38.2176 17.5956 38.2257 17.2409 38.2257H17.2402C16.215 38.2257 15.264 38.1581 14.3849 38.0516L14.5891 37.8108C16.3633 38.048 18.4879 38.1941 21.0531 38.1758C20.4406 39.035 18.9131 40.8614 15.9653 42.6371V42.6371ZM23.3267 39.4462V40.7865C22.9088 40.7865 22.502 40.785 22.104 40.782L21.9843 39.2736L20.9899 39.3544C21.6597 38.5628 21.9453 38.0348 21.971 37.987L22.2405 37.4774L21.6714 37.4876C16.2238 37.5875 12.6709 36.9383 10.4281 36.2172C10.2644 35.5548 10.1696 34.8057 10.1696 33.9311C10.1696 27.9657 13.9818 18.9491 19.0431 15.2948C19.9397 16.1621 21.2998 16.5418 22.5923 15.698C22.8758 15.5129 23.1225 15.2706 23.3539 15.0128C23.4089 15.0143 23.4655 15.0268 23.5213 15.0268C23.7064 15.0268 23.8944 15.0114 24.0816 14.9879C24.3188 15.0826 24.5509 15.1781 24.7661 15.2728C25.7964 15.7266 26.6762 15.4446 27.2769 14.819C31.913 17.6243 35.6275 25.0451 36.6049 31.0435C34.4855 31.891 31.1235 32.7179 25.9638 32.8633C26.9817 32.2817 27.7454 31.3035 27.4708 30.0183C27.1822 28.6597 26.0468 28.2778 24.8711 28.2154C24.8681 27.5773 24.8681 26.9405 24.8725 26.3024C25.2331 26.4617 25.579 26.6453 25.8933 26.8414C26.4485 27.1902 26.9508 26.2862 26.3993 25.9374C25.9211 25.6368 25.4107 25.3907 24.8777 25.2037C24.885 24.465 24.8887 23.7277 24.8887 22.9903C24.8894 22.3147 23.8855 22.3147 23.8855 22.9903C23.8855 23.6388 23.8811 24.2865 23.8753 24.9335C23.3409 24.8404 22.7953 24.8312 22.2582 24.9063C22.1708 24.4202 22.065 23.9376 21.9409 23.4596C21.775 22.809 20.8056 23.0843 20.9737 23.7372C21.0971 24.2065 21.1977 24.6735 21.2807 25.1472C21.2381 25.1634 21.1919 25.1714 21.15 25.1905C19.7899 25.7288 18.9601 27.1014 19.9552 28.3814C20.4186 28.9777 21.0244 29.2186 21.6876 29.2986C21.7235 30.1821 21.7463 31.0663 21.772 31.949C21.3277 31.6604 20.9231 31.2903 20.5566 30.8988C20.1028 30.42 19.3941 31.1595 19.8472 31.6376C20.4634 32.2934 21.1103 32.7891 21.8117 33.1064C21.8433 33.8606 21.888 34.617 21.9615 35.3675C22.0261 36.0336 23.0307 36.0372 22.9654 35.3675C22.9035 34.7183 22.8577 34.0677 22.828 33.4163C23.2099 33.4824 23.6109 33.4993 24.0368 33.4589C24.0846 34.1536 24.1404 34.8483 24.2197 35.543C24.2652 35.941 24.6456 36.0975 24.9262 36.0167L24.8637 37.459C24.4216 37.4987 23.9707 37.5354 23.5007 37.5662L22.9411 37.6029L23.2393 38.0847C23.2694 38.1332 23.608 38.6685 24.3636 39.4477H23.3267V39.4462ZM41.6038 34.6126C40.6807 35.0466 39.513 35.4446 38.3234 35.792C37.5919 35.0363 36.6563 34.028 35.9579 33.1335C37.5141 32.6621 38.385 32.1759 38.7779 31.9137C39.0886 32.1877 39.4998 32.3301 39.9867 32.3294C40.1483 32.3294 40.2915 32.314 40.4016 32.2963C40.7541 32.7531 41.3225 33.2804 41.678 33.5955C41.5098 33.768 41.4283 33.959 41.4349 34.1653C41.4408 34.3416 41.5113 34.4914 41.6038 34.6126V34.6126ZM36.3494 37.0257C36.4992 37.1579 36.6541 37.293 36.812 37.4296C33.8349 38.2191 31.6192 38.305 31.1368 38.3131C28.0539 36.4323 26.4559 34.4422 25.8397 33.5463C28.4196 33.4816 30.5522 33.2481 32.3309 32.9264C32.4032 33.0153 32.4764 33.1034 32.5504 33.1908C31.1209 33.4135 29.68 33.5564 28.2345 33.619L27.6419 33.6439L27.9679 34.1426C27.9672 34.1433 27.9011 34.2667 27.4634 34.3519L26.7518 34.4907L30.2504 37.3231L30.4134 37.2791C30.4171 37.2783 30.7255 37.1954 31.0986 37.1954C31.6369 37.1954 32.0048 37.3591 32.1899 37.6793L32.3074 37.882L32.5358 37.8416C33.8149 37.6084 35.0867 37.3363 36.3494 37.0257V37.0257ZM25.9969 34.8674L25.1612 34.8219C25.1222 34.4047 25.0833 33.9876 25.0539 33.5705C25.2008 33.8143 25.5019 34.2725 25.9969 34.8674ZM24.9629 32.1788C24.9147 31.1903 24.8856 30.2009 24.8755 29.2112C24.9959 29.2156 25.1149 29.2267 25.228 29.2428C26.5264 29.4396 26.8656 30.8834 25.8522 31.6956C25.5878 31.9049 25.2831 32.0584 24.9629 32.1788ZM32.629 37.1373C32.3 36.7312 31.7764 36.5183 31.0993 36.5183C30.8166 36.5183 30.5676 36.5565 30.4105 36.5873L28.211 34.805C28.3939 34.7 28.5172 34.567 28.5848 34.404C28.6014 34.3634 28.6142 34.3214 28.623 34.2784C30.3664 34.183 31.8352 34.0089 33.077 33.7959C33.6792 34.4679 34.5641 35.3947 35.7376 36.472C34.296 36.815 33.0939 37.05 32.629 37.1373V37.1373ZM23.8709 29.2377C23.8848 30.3018 23.9113 31.3688 23.9678 32.4322C23.8731 32.4469 23.7798 32.4653 23.6865 32.4748C23.3708 32.5108 23.0711 32.4843 22.7862 32.4124C22.7502 31.3843 22.7267 30.3539 22.6878 29.3251C23.0829 29.3067 23.4831 29.2678 23.8709 29.2377V29.2377ZM22.6371 28.3087C22.5912 27.5018 22.5153 26.6968 22.4095 25.8955C22.8962 25.8286 23.3912 25.8538 23.8687 25.9697C23.8634 26.7205 23.8622 27.4713 23.865 28.222C23.5426 28.2397 23.2364 28.2705 22.9668 28.2947C22.8571 28.3033 22.7472 28.3079 22.6371 28.3087V28.3087ZM21.6295 28.1802C21.5671 28.1633 21.5054 28.1501 21.4415 28.1288C21.1477 28.0292 20.8817 27.8613 20.6653 27.6389C20.0382 27.0536 20.8988 26.4794 21.4415 26.2069C21.5267 26.8605 21.5855 27.52 21.6295 28.1802V28.1802ZM29.7348 42.4755C26.5469 40.8467 24.8366 39.0364 24.1573 38.1978C24.6456 38.1611 25.1075 38.117 25.5651 38.0707L30.7923 41.4635L42.2559 38.3145C36.3442 41.8777 30.5037 42.4204 29.7348 42.4755V42.4755ZM39.2024 36.6813C39.1084 36.5873 38.996 36.4757 38.8631 36.3413C40.1674 35.9462 41.429 35.4879 42.3698 34.9842L42.9418 34.6765L42.3617 34.3812C42.2317 34.3144 42.1047 34.1918 42.1025 34.1455C42.1039 34.1279 42.1553 34.0339 42.3778 33.9061L42.8023 33.6623L42.4248 33.348C42.4131 33.3384 41.2359 32.361 40.8224 31.7316L40.6858 31.526L40.4516 31.5943C40.4494 31.5943 40.2482 31.6523 39.9867 31.6523C39.5828 31.653 39.2802 31.5208 39.0864 31.2609L38.8719 30.9767L38.6032 31.208C38.5892 31.2197 37.7572 31.902 35.5254 32.5468C35.4519 32.4409 35.3811 32.3331 35.3132 32.2236C38.0193 31.4033 39.4022 30.4105 40.0014 29.867C40.9634 31.9482 43.254 33.6248 44.2483 34.2821C42.6509 35.2487 40.9604 36.0525 39.2024 36.6813"
                  fill="#189BCC" />
                <path
                  d="M32.5916 34.6015C31.8594 34.4025 31.0333 34.5384 30.7439 34.9019C30.4568 35.2669 30.8196 35.7266 31.551 35.9271C32.2839 36.1261 33.1093 35.9895 33.3987 35.6253C33.6858 35.2603 33.3245 34.802 32.5916 34.6015Z"
                  fill="#189BCC" />
              </svg>



            </div>
            <p>Payment Method</p>
          </div>
        </a>
        <a href="./payment-history.php">
          <div class="bg-white rounded text-primary text-center font-semibold py-2 px-4 space-y-3 text-xs">
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

      <p class="text-center font-semibold text-sm pb-1">Make Payment</p>
      <p class="text-center font-light text-xs pb-4 px-10 leading-tight">Your payment when successful will reflect in
        the Sauki Insurance Dashboard</p>
        <a href="./make-payment.php">
          <div class=" rounded my-4 text-primary shadow-xl text-center font-semibold py-2 px-4  text-xs">
            <div class="flex flex-col justify-center">
                <div class=""> 
                <ul class="my-4 space-y-3">
            <li>
                <a href="hospitalDetails.php" class="flex items-center p-3 text-base font-bold text-primary bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow ">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-primary" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="CurrentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H80c-8.8 0-16-7.2-16-16s7.2-16 16-16H448c17.7 0 32-14.3 32-32s-14.3-32-32-32H64zM416 336c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Wallet </span>
                    <!--<span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">Popular</span>-->
                </a>
            </li>
            <li>
                <a href="./scanner.html" class="flex items-center p-3 text-base font-bold text-primary bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow ">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-primary" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="CurrentColor" d="M48 32C21.5 32 0 53.5 0 80v96c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H48zm80 64v64H64V96h64zM48 288c-26.5 0-48 21.5-48 48v96c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V336c0-26.5-21.5-48-48-48H48zm80 64v64H64V352h64zM256 80v96c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H304c-26.5 0-48 21.5-48 48zm64 16h64v64H320V96zm32 352v32h32V448H352zm96 0H416v32h32V448zM416 288v32H352V288H256v96 96h64V384h32v32h96V352 320 288H416z"/></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Qr Code</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-3 text-base font-bold text-primary bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow ">
                    <svg aria-hidden="true" svg class="h-5"viewBox="0 0 75.591 75.591" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientTransform="matrix(0 -54.944 -54.944 0 23.62 79.474)" gradientUnits="userSpaceOnUse" x2="1"><stop offset="0" stop-color="#ff1b2d"/><stop offset=".3" stop-color="#ff1b2d"/><stop offset=".614" stop-color="#ff1b2d"/><stop offset="1" stop-color="#a70014"/></linearGradient><linearGradient id="b" gradientTransform="matrix(0 -48.595 -48.595 0 37.854 76.235)" gradientUnits="userSpaceOnUse" x2="1"><stop offset="0" stop-color="#9c0000"/><stop offset=".7" stop-color="#ff4b4b"/><stop offset="1" stop-color="#ff4b4b"/></linearGradient><g transform="matrix(1.3333 0 0 -1.3333 0 107.2)"><path d="m28.346 80.398c-15.655 0-28.346-12.691-28.346-28.346 0-15.202 11.968-27.609 26.996-28.313.44848-.02115.89766-.03314 1.3504-.03314 7.2574 0 13.876 2.7289 18.891 7.2137-3.3227-2.2036-7.2074-3.4715-11.359-3.4715-6.7504 0-12.796 3.3488-16.862 8.6297-3.1344 3.6999-5.1645 9.1691-5.3028 15.307v1.3349c.13821 6.1377 2.1683 11.608 5.302 15.307 4.0666 5.2809 10.112 8.6297 16.862 8.6297 4.1526 0 8.038-1.2679 11.361-3.4729-4.9904 4.4643-11.569 7.1876-18.786 7.2144-.03596 0-.07122.0014-.10718.0014z" fill="url(#a)"/><path d="m19.016 68.025c2.6013 3.0709 5.9607 4.9227 9.631 4.9227 8.2524 0 14.941-9.356 14.941-20.897s-6.6891-20.897-14.941-20.897c-3.6703 0-7.0297 1.851-9.6303 4.922 4.0659-5.2809 10.111-8.6297 16.862-8.6297 4.1519 0 8.0366 1.2679 11.359 3.4715 5.802 5.1906 9.4554 12.735 9.4554 21.133 0 8.397-3.6527 15.941-9.4533 21.131-3.3234 2.205-7.2088 3.4729-11.361 3.4729-6.7504 0-12.796-3.3488-16.862-8.6297" fill="url(#b)"/></g></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">NFC</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-3 text-base font-bold text-primary bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow">
                    <svg aria-hidden="true" class="h-5" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><radialGradient cx="0%" cy="50%" fx="0%" fy="50%" r="100%" id="radialGradient-1"><stop stop-color="#5D9DF6" offset="0%"></stop><stop stop-color="#006FFF" offset="100%"></stop></radialGradient></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="logo"><rect id="base" fill="url(#radialGradient-1)" x="0" y="0" width="512" height="512" rx="256"></rect><path d="M169.209772,184.531136 C217.142772,137.600733 294.857519,137.600733 342.790517,184.531136 L348.559331,190.179285 C350.955981,192.525805 350.955981,196.330266 348.559331,198.676787 L328.82537,217.99798 C327.627045,219.171241 325.684176,219.171241 324.485851,217.99798 L316.547278,210.225455 C283.10802,177.485633 228.89227,177.485633 195.453011,210.225455 L186.951456,218.549188 C185.75313,219.722448 183.810261,219.722448 182.611937,218.549188 L162.877976,199.227995 C160.481326,196.881474 160.481326,193.077013 162.877976,190.730493 L169.209772,184.531136 Z M383.602212,224.489406 L401.165475,241.685365 C403.562113,244.031874 403.562127,247.836312 401.165506,250.182837 L321.971538,327.721548 C319.574905,330.068086 315.689168,330.068112 313.292501,327.721609 C313.292491,327.721599 313.29248,327.721588 313.29247,327.721578 L257.08541,272.690097 C256.486248,272.103467 255.514813,272.103467 254.915651,272.690097 C254.915647,272.690101 254.915644,272.690105 254.91564,272.690108 L198.709777,327.721548 C196.313151,330.068092 192.427413,330.068131 190.030739,327.721634 C190.030725,327.72162 190.03071,327.721606 190.030695,327.721591 L110.834524,250.181849 C108.437875,247.835329 108.437875,244.030868 110.834524,241.684348 L128.397819,224.488418 C130.794468,222.141898 134.680206,222.141898 137.076856,224.488418 L193.284734,279.520668 C193.883897,280.107298 194.85533,280.107298 195.454493,279.520668 C195.454502,279.520659 195.45451,279.520651 195.454519,279.520644 L251.65958,224.488418 C254.056175,222.141844 257.941913,222.141756 260.338618,224.488222 C260.338651,224.488255 260.338684,224.488288 260.338717,224.488321 L316.546521,279.520644 C317.145683,280.107273 318.117118,280.107273 318.71628,279.520644 L374.923175,224.489406 C377.319825,222.142885 381.205562,222.142885 383.602212,224.489406 Z" id="WalletConnect" fill="#FFFFFF" fill-rule="nonzero"></path></g></g></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">USSD</span>
                </a>
            </li>
        </ul>

              </div>



            </div>
          </div>
        </a>


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