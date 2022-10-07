<?php

session_start();
include "config.php";
$err="";
$phone=$_SESSION['phone'];
if (isset($_POST['submit'])){
    $call=$_POST['to_call'];
    
    // $query = "SELECT * FROM users WHERE phone='$phone'";
    // $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    // $count = mysqli_num_rows($result);
    // if ($count > 0) {
        $err='
            <div class="bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3" role="alert">
                <p class="font-bold">Error</p>
                <p class="text-sm">phone number is already registered.</p>
            </div>
            ';
    // } else {
    if($call == '222'){
        header("location:calling.php");
    }else{
        $err='
            <div class="bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3" role="alert">
                <p class="font-bold">Invalid</p>
                <p class="text-sm">Incorrect Number.</p>
            </div>
            ';
    }
    
    
    
// }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sauki IVR | Dailpad</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="flex justify-center items-center h-screen py-4">
        <div class="flex flex-col justify-center items-center w-full max-w-xs h-full max-h-sm rounded-2xl border-4 border-black bg-gray-50">
            <form action="dialpad.php" method="post" class='flex flex-col w-full h-full divide-y'>
                <div class="mt-5">
                    <?php echo $err ?>
                </div>
                <div class="h-full p-2"></div>
                <div class="dial-display hidden flex bg-gray-50 px-4">
                    <label class='sr-only' for="to_call"></label>
                    <button type='button' class='option'>
                        <span><i class="fa fa-bars"></i></span>
                        <span class="sr-only">Options</span>
                    </button>
                    <input class='dial-num w-full border-9 text-center border-0 focus:border-0 focus:ring-0 bg-gray-50 text-2xl' name='to_call' placeholder='1' type="text">
                    <button type='button' class='clear-input'>
                        <span class="sr-only">Options</span>
                        <span><i class="fa fa-chevron-left"></i></span>
                    </button>
                </div>
                <div class="h-full p-2 py-6">
                    <div class="grid grid-cols-3">
                        <button class='num-key py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-xl font-semibold'>1</span>
                            <span class='text-xs font-light text-gray-500'><i class="fa fa-infinity"></i></span>
                        </button>
                        <button class='num-key py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-xl font-semibold'>2</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>abc</span>
                        </button>
                        <button class='num-key py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-xl font-semibold'>3</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>def</span>
                        </button>
                        <button class='num-key py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-xl font-semibold'>4</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>ghi</span>
                        </button>
                        <button class='num-key py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-xl font-semibold'>5</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>jkl</span>
                        </button>
                        <button class='num-key py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-xl font-semibold'>6</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>mno</span>
                        </button>
                        <button class='num-key py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-xl font-semibold'>7</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>pqrs</span>
                        </button>
                        <button class='num-key py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-xl font-semibold'>8</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>tuv</span>
                        </button>
                        <button class='num-key py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-xl font-semibold'>9</span>
                            <span class='text-xs font-light text-gray-500 uppercase'>wxyz</span>
                        </button>
                        <button class='num-key py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-2xl font-semibold text-gray-500'>*</span>
                        </button>
                        <button class='num-key py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-xl font-semibold'>0</span>
                            <span class='text-xs font-light text-gray-500'><i class="fa fa-plus"></i></span>
                        </button>
                        <button class='num-key btn-value py-2.5 hover:bg-green-100' type='button'>
                            <span class='btn-value text-2xl font-semibold text-gray-500'>#</span>
                        </button>
                    </div>
                    <div class="flex justify-center py-4">
                        <button type='submit' name="submit" class="bg-teal-500 text-teal-50 w-12 h-12 rounded-full">
                            <span><i class="fa fa-phone"></i></span>
                            <span class="dial-btn sr-only">Dial button</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        const dialNum = document.querySelector('.dial-num');
        const numKey = document.querySelectorAll('.num-key');
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
        })
    </script>
</body>
</html>