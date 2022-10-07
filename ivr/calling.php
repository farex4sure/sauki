<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sauki IVR | Calling</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="flex justify-center items-center h-screen py-4 text-gray-100">
        <div class="flex flex-col justify-center items-center w-full max-w-xs h-full max-h-sm rounded-3xl border-4 bg-teal-500">
            <form class='flex flex-col w-full h-full'>
                <div class="flex flex-col justify-center items-center h-1/2 gap-3 p-2">
                    <div class="flex justify-center items-center border w-20 h-20 rounded-full">
                        <span class="text-3xl"><i class="fa fa-user"></i></span>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <span class="text-center">Sauki</span>
                        <span class="dial-num">222</span>
                        <span class="dial-num"><i class="fa fa-sim-card"></i></span>
                    </div>
                    <div class="flex justify-center items-center">
                        <span class="dial-state">Calling</span>
                    </div>
                </div>
                <div class="dial-display grid grid-cols-3 justify-between gap-2 px-4 py-1">
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
                        <button type='button' class='clear-input flex flex-col justify-center items-center py-2 opacity-50'>
                        <span><i class="fa fa-plus"></i></span>
                        <span class="add-call">Add call</span>
                    </button>
                </div>
                <div class="flex justify-center items-center h-1/3 p-2 py-6">
                    <div class="flex justify-center py-4">
                        <button type='button' class="bg-red-600 text-teal-50 w-14 h-14 rounded-full">
                            <span><i class="fa fa-phone"></i></span>
                            <span class="dial-btn sr-only">Dial button</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="">
                <audio controls class="hidden calling-tune" src="voices/1614.mp3"></audio>
            </div>
        </div>
    </div>

    <script>
        const callingTune = document.querySelector('.calling-tune');
        window.addEventListener('DOMContentLoaded', () => playAudio());
        async function playAudio() {
            try {
                await callingTune.play();
                console.log("playing");
            } catch (err) {
                console.log(err);
            }
        }

        function handlePlayButton() {
            playAudio();
            
        }
        setTimeout(function(){
        window.location.href = 'oncall.php';
        }, 8000);
    </script>
</body>
</html>