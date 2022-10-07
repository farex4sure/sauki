<?php
include "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sauki IVR | On call</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <form method="POST" id="form1" class="justify-center items-center w-full max-w-xs h-screen py-4 text-gray-100">
            <div class="call-screen flex flex-col justify-center items-center w-full max-w-xs h-full max-h-sm rounded-3xl border-4 bg-teal-500">
                <div class='flex flex-col w-full h-full'>
                    <div class="flex flex-col justify-center items-center h-1/2 gap-3 p-2">
                        <div class="flex justify-center items-center border w-20 h-20 rounded-full bg-gray-50 bg-opacity-25">
                            <span class="text-3xl"><i class="fa fa-user"></i></span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <span class="dialed-num text-xl">222</span>
                            <span class="dialed-num"><i class="fa fa-sim-card"></i></span>
                        </div>
                        <div class="flex justify-center items-center">
                            <span class="call-duration hour">00</span>:
                            <span class="call-duration minute">00</span>:
                            <span class="call-duration second">00</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 justify-between gap-2 px-4 py-1 text-xs">
                        <button type='button' class='option flex flex-col justify-center items-center py-2'>
                            <span class="text-[15px]"><i class="fa-solid fa-microphone"></i></span>
                            <span class="mute">Mute</span>
                        </button>
                        <button type='button' class='show-key-pad flex flex-col justify-center items-center py-2'>
                            <span class="flex text-gray-50">
                                <svg color="#fff" width="20px" height="20px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <title>ionicons-v5-g</title>
                                    <path fill="currentColor" d="M256,400a48,48,0,1,0,48,48,48,48,0,0,0-48-48Z"/>
                                    <path fill="currentColor" d="M256,272a48,48,0,1,0,48,48,48,48,0,0,0-48-48Z"/>
                                    <path fill="currentColor" d="M256,144a48,48,0,1,0,48,48,48,48,0,0,0-48-48Z"/>
                                    <path fill="currentColor" d="M256,16a48,48,0,1,0,48,48,48,48,0,0,0-48-48Z"/>
                                    <path fill="currentColor" d="M384,272a48,48,0,1,0,48,48,48,48,0,0,0-48-48Z"/>
                                    <path fill="currentColor" d="M384,144a48,48,0,1,0,48,48,48,48,0,0,0-48-48Z"/>
                                    <path fill="currentColor" d="M384,16a48,48,0,1,0,48,48,48,48,0,0,0-48-48Z"/>
                                    <path fill="currentColor" d="M128,272a48,48,0,1,0,48,48,48,48,0,0,0-48-48Z"/>
                                    <path fill="currentColor" d="M128,144a48,48,0,1,0,48,48,48,48,0,0,0-48-48Z"/>
                                    <path fill="currentColor" d="M128,16a48,48,0,1,0,48,48,48,48,0,0,0-48-48Z"/>
                                </svg>
                            </span>
                            <span class="">Keypad</span>
                        </button>
                        <button type='button' class='flex flex-col justify-center items-center py-2'>
                            <span class="flex w-5 h-5">
                                <svg color="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                                    <g>
                                        <path fill="currentColor" d="M26.894,7.358c-0.551,0-1.097,0.153-1.579,0.444c-0.046,0.027-0.09,0.059-0.13,0.093L11.634,19.358H1c-0.553,0-1,0.447-1,1
                                            v19c0,0.266,0.105,0.52,0.293,0.707S0.734,40.358,1,40.358l10.61-0.005l13.543,12.44c0.05,0.046,0.104,0.086,0.161,0.12
                                            c0.482,0.291,1.028,0.444,1.579,0.444c1.713,0,3.106-1.416,3.106-3.156V10.514C30,8.774,28.606,7.358,26.894,7.358z M13,38.358
                                            c0,0.553-0.447,1-1,1s-1-0.447-1-1v-4c0-0.553,0.447-1,1-1s1,0.447,1,1V38.358z M13,25.358c0,0.553-0.447,1-1,1s-1-0.447-1-1v-4
                                            c0-0.553,0.447-1,1-1s1,0.447,1,1V25.358z"/>
                                        <path fill="currentColor" d="M52.026,29.858c0-8.347-5.316-15.76-13.229-18.447c-0.522-0.177-1.091,0.103-1.269,0.626
                                            c-0.177,0.522,0.103,1.091,0.626,1.269c7.101,2.411,11.872,9.063,11.872,16.553c0,7.483-4.762,14.136-11.849,16.554
                                            c-0.522,0.178-0.802,0.746-0.623,1.27c0.142,0.415,0.53,0.677,0.946,0.677c0.107,0,0.216-0.017,0.323-0.054
                                            C46.721,45.611,52.026,38.198,52.026,29.858z"/>
                                        <path fill="currentColor" d="M44.453,6.374c-0.508-0.213-1.095,0.021-1.312,0.53C42.926,7.413,43.163,8,43.672,8.216C52.376,11.909,58,20.405,58,29.858
                                            c0,9.777-5.894,18.38-15.015,21.914c-0.515,0.2-0.771,0.779-0.571,1.294c0.153,0.396,0.532,0.639,0.933,0.639
                                            c0.12,0,0.242-0.021,0.361-0.067C53.605,49.801,60,40.467,60,29.858C60,19.6,53.897,10.382,44.453,6.374z"/>
                                        <path fill="currentColor" d="M43.026,29.858c0-5.972-4.009-11.302-9.749-12.962c-0.53-0.151-1.084,0.152-1.238,0.684
                                            c-0.153,0.53,0.152,1.085,0.684,1.238c4.889,1.413,8.304,5.953,8.304,11.04s-3.415,9.627-8.304,11.04
                                            c-0.531,0.153-0.837,0.708-0.684,1.238c0.127,0.438,0.526,0.723,0.961,0.723c0.092,0,0.185-0.013,0.277-0.039
                                            C39.018,41.159,43.026,35.829,43.026,29.858z"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="speaker">Speaker</span>
                        </button>
                        <button type='button' class='flex flex-col justify-center items-center py-2'>
                            <span><i class="fa fa-plus"></i></span>
                            <span class="add-call">Add call</span>
                        </button>
                        <button type='button' class='flex flex-col justify-center items-center py-2'>
                            <span><i class="fa fa-pause"></i></span>
                            <span class="hold-call">Hold</span>
                        </button>
                        <button type='button' class='flex flex-col justify-center items-center py-2'>
                            <span class="text-[15px]"><i class="fa-solid fa-microphone-lines"></i></span>
                            <span class="add-call">Start Recording</span>
                        </button>
                    </div>
                    <div class="flex justify-center items-center h-1/3 p-2 py-6">
                        <div class="flex justify-center py-4">
                            <button type='button' class="flex justify-center items-center h-14 w-14 rounded-full bg-red-600  rotate-[135deg]">
                                <span><i class="fa fa-phone"></i></span>
                                <span class="dial-btn sr-only">Dial button</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden dial-pad items-center w-full max-w-xs h-full max-h-sm rounded-3xl overflow-hidden border-4 bg-gray-50">
                <div class="h-1/5 w-full border-b text-gray-600">
                    <div class="dial-display hidden h-full flex bg-gray-50 px-4">
                        <label class='sr-only' for="to_call"></label>
                        <input class='dial-num w-full border-9 text-center border-0 focus:border-0 focus:ring-0 bg-gray-50 text-2xl' name='to_call' placeholder='1' type="text">
                        <button type='button' class='clear-input'>
                            <span class="sr-only">Clear Input</span>
                            <span><i class="fa fa-chevron-left"></i></span>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col justify-center h-3/5 p-2 py-6 text-gray-500" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div id="resp"></div>
                    <div class="grid grid-cols-3">
                            <input name="response" value="1" hidden id="resp1">
                            <button id="btn1" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                                <span class='btn-value text-xl font-semibold'>1</span>
                                <span class='text-xs font-light text-gray-500'><i class="fa fa-infinity"></i></span>
                            </button>

                            <input name="response" value="2" hidden id="resp2">
                        <button id="btn2" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                            <span class='btn-value text-xl font-semibold'>2</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>abc</span>
                        </button>

                            <input name="response" value="3" hidden id="resp3">
                        <button id="btn3" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                            <span class='btn-value text-xl font-semibold'>3</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>def</span>
                        </button>

                            <input name="response" value="4" hidden id="resp4">
                        <button id="btn4" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                            <span class='btn-value text-xl font-semibold'>4</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>ghi</span>
                        </button>

                            <input name="response" value="5" hidden id="resp5">
                        <button id="btn5" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                            <span class='btn-value text-xl font-semibold'>5</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>jkl</span>
                        </button>

                            <input name="response" value="6" hidden id="resp6">
                        <button id="btn6" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                            <span class='btn-value text-xl font-semibold'>6</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>mno</span>
                        </button>

                            <input name="response" value="7" hidden id="resp7">
                        <button id="btn7" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                            <span class='btn-value text-xl font-semibold'>7</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>pqrs</span>
                        </button>

                            <input name="response" value="8" hidden id="resp8">
                        <button id="btn8" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                            <span class='btn-value text-xl font-semibold'>8</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>tuv</span>
                        </button>

                            <input name="response" value="9" hidden id="resp9">
                        <button id="btn9" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                            <span class='btn-value text-xl font-semibold'>9</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>wxyz</span>
                        </button>

                            <input name="response" value="B" hidden id="respB">
                        <button id="btnB" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                            <span class='btn-value text-2xl font-semibold text-gray-500'>*</span>
                        </button>

                            <input name="response" value="0" hidden id="resp0">
                        <button id="btn0" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                            <span class='btn-value text-xl font-semibold'>0</span>
                            <span class='text-xs font-light text-gray-500'><i class="fa fa-plus"></i></span>
                        </button>

                            <input name="response" value="A" hidden id="respA">
                        <button id="btnA" class='num-key flex flex-col justify-center items-center py-2.5 hover:bg-green-100' type='submit'>
                            <span class='btn-value text-2xl font-semibold text-gray-500'>#</span>
                        </button>


                    </div>
                </div>
                <div class="relative flex justify-center h-1/5 w-full pt-4">
                    <button type='button' class="flex justify-center items-center h-14 w-14 rounded-full bg-red-600  rotate-[135deg]">
                        <span class=''><i class="fa fa-phone"></i></span>
                        <span class='sr-only'>End Call</span>
                    </button>
                    <div class="absolute top-0 right-0 flex justify-center items-start h-full w-1/2 pt-4">
                        <button type='button' class="hide-key-pad h-12 w-12 rounded-full text-blue-600">
                            <span><i class="fa fa-chevron-down"></i></span>
                            <span class='sr-only'>End Call</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>



        
            <div class="">
                <audio controls class="hidden calling-tune" src="voices/select-lang.mp3"></audio>
            </div>
    </div>

    <script>
        console.log('On call');
        const dialNum = document.querySelector('.dial-num');
        const numKey = document.querySelectorAll('.num-key');
        const callScreen = document.querySelector('.call-screen');
        const dialPad = document.querySelector('.dial-pad');
        const showKeyPad = document.querySelector('.show-key-pad');
        const hideKeyPad = document.querySelector('.hide-key-pad');
        const clearInput = document.querySelector('.clear-input');
        const dialDisplay = document.querySelector('.dial-display');
        const dialDisplayState = () => {
            if (dialNum.value.length > 0) {
                dialDisplay.classList.remove('hidden');
            } else {
                dialDisplay.classList.add('hidden');
            }
        }

        numKey.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                console.log('Clicked');
                const btnValue = e.currentTarget.querySelector('.btn-value');
                dialNum.value += btnValue.textContent;
                dialDisplayState();
            })
        });

        clearInput.addEventListener('click', (e) => {
            e.preventDefault();
            let dialNumValue = [];
            for (const c of dialNum.value) {
                dialNumValue.push(c)
            };
            dialNumValue.pop();
            let temporaryValue = '';
            dialNumValue.forEach(value => {
                temporaryValue += value
            });
            dialNum.value = temporaryValue;
            dialDisplayState();
        });
        
        showKeyPad.addEventListener('click', (e) => {
            callScreen.classList.add('hidden')
            dialPad.classList.remove('hidden');
        })
        hideKeyPad.addEventListener('click', (e) => {
            callScreen.classList.remove('hidden')
            dialPad.classList.add('hidden');
        });

        const pad = (number) => {
            if (number > 9) {
                return `${number}`
            } else {
                return `0${number}`
            }
        }

        const updateTimeDisplay = () => {
            const second = document.querySelector('.second');
            const minute = document.querySelector('.minute');
            const hour = document.querySelector('.hour');
            let secondContent = Number(second.textContent);
            let minuteContent = Number(minute.textContent);
            let hourContent = Number(hour.textContent);

            if (secondContent <= 58) {
                secondContent = pad(secondContent + 1);
                second.textContent = secondContent;
            } else {
                second.textContent = '00';
                if (secondContent === 59) {
                    if (minuteContent <= 58) {
                        minuteContent = pad(minuteContent + 1);
                        minute.textContent = minuteContent;
                    } else {
                        minute.textContent = '00';
                        if (minuteContent === 59) {
                            hourContent =pad(hourContent + 1);
                            hour.textContent = hourContent;
                        }
                    }
                }
            }
        };
        
        setInterval(() => {
            updateTimeDisplay()
        }, 1000);
    </script>
    <script>
        const callingTune = document.querySelector('.calling-tune');
        window.addEventListener('DOMContentLoaded', () => playAudio());
        async function playAudio() {
            try {
                await callingTune.play();
                callingTune.loop = false;
                console.log("playing");
            } catch (err) {
                console.log(err);
            }
        }

        function handlePlayButton() {
            playAudio();
            
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>







<script>
$(document).ready(function () {
  // submit response
  
  $("#btn1").click(function (event) {
   
 var formData = {
   response:  $("#resp1").val(),
 };

 $.ajax({
   type: "POST",
   url: "response.php",
   data: formData,
 }).done(function (data) {
    $("#resp").html(data);
     
 });

 event.preventDefault();
});




$("#btn2").click(function (event) {
   
   var formData = {
     response:  $("#resp2").val(),
   };
  
   $.ajax({
     type: "POST",
     url: "response.php",
     data: formData,
   }).done(function (data) {
      $("#resp").html(data);
       
   });
  
   event.preventDefault();
  });





  
  $("#btn3").click(function (event) {
   
   var formData = {
     response:  $("#resp3").val(),
   };
  
   $.ajax({
     type: "POST",
     url: "response.php",
     data: formData,
   }).done(function (data) {
      $("#resp").html(data);
       
   });
  
   event.preventDefault();
  });






  $("#btn4").click(function (event) {
   
   var formData = {
     response:  $("#resp4").val(),
   };
  
   $.ajax({
     type: "POST",
     url: "response.php",
     data: formData,
   }).done(function (data) {
      $("#resp").html(data);
       
   });
  
   event.preventDefault();
  });





  $("#btn5").click(function (event) {
   
   var formData = {
     response:  $("#resp5").val(),
   };
  
   $.ajax({
     type: "POST",
     url: "response.php",
     data: formData,
   }).done(function (data) {
      $("#resp").html(data);
       
   });
  
   event.preventDefault();
  });






  $("#btn6").click(function (event) {
   
   var formData = {
     response:  $("#resp6").val(),
   };
  
   $.ajax({
     type: "POST",
     url: "response.php",
     data: formData,
   }).done(function (data) {
      $("#resp").html(data);
       
   });
  
   event.preventDefault();
  });





  $("#btn7").click(function (event) {
   
   var formData = {
     response:  $("#resp7").val(),
   };
  
   $.ajax({
     type: "POST",
     url: "response.php",
     data: formData,
   }).done(function (data) {
      $("#resp").html(data);
       
   });
  
   event.preventDefault();
  });








  $("#btn8").click(function (event) {
   
   var formData = {
     response:  $("#resp8").val(),
   };
  
   $.ajax({
     type: "POST",
     url: "response.php",
     data: formData,
   }).done(function (data) {
      $("#resp").html(data);
       
   });
  
   event.preventDefault();
  });







  $("#btn9").click(function (event) {
   
   var formData = {
     response:  $("#resp9").val(),
   };
  
   $.ajax({
     type: "POST",
     url: "response.php",
     data: formData,
   }).done(function (data) {
      $("#resp").html(data);
       
   });
  
   event.preventDefault();
  });







  $("#btn0").click(function (event) {
   
   var formData = {
     response:  $("#resp0").val(),
   };
  
   $.ajax({
     type: "POST",
     url: "response.php",
     data: formData,
   }).done(function (data) {
      $("#resp").html(data);
       
   });
  
   event.preventDefault();
  });








  $("#btnA").click(function (event) {
   
   var formData = {
     response:  $("#respA").val(),
   };
  
   $.ajax({
     type: "POST",
     url: "response.php",
     data: formData,
   }).done(function (data) {
      $("#resp").html(data);
       
   });
  
   event.preventDefault();
  });





  $("#btnB").click(function (event) {
   
   var formData = {
     response:  $("#respB").val(),
   };
  
   $.ajax({
     type: "POST",
     url: "response.php",
     data: formData,
   }).done(function (data) {
      $("#resp").html(data);
       
   });
  
   event.preventDefault();
  });







});
</script>
    