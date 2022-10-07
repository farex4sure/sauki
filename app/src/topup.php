<?php
session_start();
if (isset($_SESSION['loggedin'])) {
	// kayi login , an kyale ka.
}
else{
	// idan bayaki login ba mu maidakai login.php
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Top up | Sauki Healthcare </title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link   rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
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


  <link rel="stylesheet" href="../dist/output.css">
    <style>
        .disclaimer {
    position: fixed;
    z-index: 9999999;
    bottom: 0;
    right: 0;
    border-top: 2px solid #ff5c62;
    text-align: center;
    font-size: 14px;
    font-weight: 400;
    background-color: #fff;
    padding: 5px 10px 5px 10px;
    display: none;
}


footer img{
    display: none;
}
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

<body class="bg-[#e0e0e0] font-raleway>

    <div class="h-44 bg-primary rounded-b-[30%] flex items-center py-5 mb-5 justify-between px-7">
      <h2 class="font-bold text-3xl text-white leading-tight">Welcome, <br> <?php echo $name ?></h2>
      <img src="../assets/user.png" alt="" class="w-14 h-14 rounded-full">
    </div>
    <section class="login-clean" style="background: rgb(255,255,255);">
        <div  style="border-radius: 20px;">
            <small class="form-text" style="text-align: center;margin: 26px 0px 0px;margin-right: 31px;">Top up your Sauki wallet</small>
            <div class="illustration"></div>
            <div class="mb-3">
                <input required class="form-control" id="amount" type="number" name="amount" placeholder="Amount" style="border-radius: 10px;"></div>
            <div class="mb-3"></div>
            <div class="mb-3"><button type="button" class="btn btn-success d-block w-100" type="button" onclick="payWithPaystack()" style="border-radius: 10px;">Top up</button>
            </div><a class="forgot" href="home.php">back to dashboard</a>
        </div>
    </section>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
 
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