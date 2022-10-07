<?php

session_start();
ob_start();


include "config.php";


if($_SERVER['REQUEST_METHOD']==="POST"){

    $userResponse=$_POST['response'];


if(!isset($_SESSION['lang'])){

if($userResponse == 1){
    $_SESSION['lang']="1";
// play welcome message
?>

<audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/english/welcome-english.mp3"></audio>

<?php

}elseif($userResponse == 2 ){
    $_SESSION['lang']="2";
// play welcome message
?>

<audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/igbo/welcome-igbo.mp3"></audio>

<?php

}elseif($userResponse == 3 ){
    $_SESSION['lang']="3";
// play welcome message
?>

<audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/hausa/welcome-hausa.mp3"></audio>

<?php

}elseif($userResponse == 4){
    $_SESSION['lang']="4";
// play welcome message
?>

<audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/yoruba/welcome-yoruba.mp3"></audio>

<?php

}

// english starts
}elseif($_SESSION['lang'] == 1 AND $userResponse == 1){

    ?>
    
    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/english/create-pin-english.aac"></audio>
    
    <?php
 $_SESSION['userPIN']='';
if($_SESSION['userPIN'] ==''){
$_SESSION['userPIN']=$userResponse;

}
 elseif(strlen($_SESSION['userPIN']) == 1 ){
    $_SESSION['userPIN']=$_SESSION['userPIN'].$userResponse;

 }
 elseif(strlen($_SESSION['userPIN']) == 2 ){
    $_SESSION['userPIN']=$_SESSION['userPIN'].$userResponse;

 }
 elseif(strlen($_SESSION['userPIN']) == 3 ){
    $_SESSION['userPIN']=$_SESSION['userPIN'].$userResponse;
    echo $_SESSION['userPIN'];

 }
 





}elseif($_SESSION['lang'] == 1 AND $userResponse == "A"){

    ?>

    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/english/cpin-english.aac"></audio>

    <?php

}elseif($_SESSION['lang'] == 1 AND $userResponse == "B"){

    ?>

    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/english/registered-english.aac"></audio>

    <?php

}


//igbo starts
elseif($_SESSION['lang'] == 2 AND $userResponse == 1){

    ?>
    
    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/igbo/createpin-igbo.aac"></audio>
    
    <?php
    
}elseif($_SESSION['lang'] == 2 AND $userResponse == "A"){

    ?>

    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/igbo/confirmpin-igbo.aac"></audio>

    <?php

}elseif($_SESSION['lang'] == 2 AND $userResponse == "B"){

    ?>

    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/igbo/registered-igbo.aac"></audio>

    <?php

}



//hausa starts
elseif($_SESSION['lang'] == 3 AND $userResponse == 1){

    ?>
    
    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/hausa/create-pin-hausa.aac"></audio>
    
    <?php
    
}elseif($_SESSION['lang'] == 3 AND $userResponse == "A"){

    ?>

    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/hausa/cpin-hausa.aac"></audio>

    <?php

}elseif($_SESSION['lang'] == 3 AND $userResponse == "B"){

    ?>

    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/hausa/registered-hausa.aac"></audio>

    <?php

}



//yoruba starts
elseif($_SESSION['lang'] == 4 AND $userResponse == 1){

    ?>
    
    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/yoruba/create-pin-yoruba.aac"></audio>
    
    <?php
    
}elseif($_SESSION['lang'] == 4 AND $userResponse == "A"){

    ?>

    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/yoruba/cpin-yoruba.aac"></audio>

    <?php

}elseif($_SESSION['lang'] == 4 AND $userResponse == "B"){

    ?>

    <audio autoplay="autoplay" controls class="hidden calling-tunes" src="voices/yoruba/registered-yoruba.aac"></audio>

    <?php

}



}
?>
