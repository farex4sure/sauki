<?php
include "config.php";
session_start();
$err="";
if (isset($_POST['submit'])){
    $phone=$_POST['phone'];
    $phone=$phone;
    $phone=ltrim($phone, "+2340");
    $phone="+234".$phone;
    
    $_SESSION['phone']=$phone;
    header("location:dialpad.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sauki IVR | Call</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="main.css">

</head>
<body>
    <div class="flex justify-center items-center h-screen py-4">
        <div class="flex flex-col justify-center items-center w-full max-w-xs h-full max-h-sm rounded-2xl border-4 border-black bg-gray-700">
            <form action="index.php" method="post" class='flex flex-col w-full gap-4 px-4'>
                <?php echo $err ?>
                <div class="phone-input-container flex w-full rounded-md overflow-hidden bg-white border-2 focus:border-blue-300">
                    <label for="phone" class='flex items-center bg-gray-200 px-1.5'>+234</label>
                    <input class='w-full phone-input border-0 border-l focus:ring-0 focus:border-0 focus:border-l' name="phone" type="tel" placeholder='8123456789'>
                </div>
                <div class="w-full">
                    <button type="submit" name="submit" class='w-full rounded-md bg-orange-500 font-semibold text-white py-2'>Connect</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const phoneInputContainer = document.querySelector('.phone-input-container');
        const phoneInput = document.querySelector('.phone-input');
        phoneInput.addEventListener('click', () => {
            phoneInputContainer.click();
        })
        // phoneInputContainer.addEventListener('click', (e) => {
        //     e.currentTarget.classList.add('border-blue-300')
        // });
        // phoneInputContainer.addEventListener('blur', (e) => {
        //     e.currentTarget.classList.remove('border-blue-300');
        // });
    </script>
</body>
</html>