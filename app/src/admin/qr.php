<?php
include 'config.php';
session_start();

if(empty($_SESSION['admin_id'])){
    header("location:login.php");
    ?>
    <script type="text/javascript">
        window.location.href="login.php";
    </script>
    <?php
}

$details="SELECT * FROM hospitals WHERE hcode = '".$_SESSION['admin_id']."'";
$result2 = $conn->query($details);
if ($result2->num_rows > 0) {
    while($row2 = $result2->fetch_assoc()) {
        $hname = $row2["hname"];
        $hbal = $row2["bal"];
        $hcode =$row2['hcode'];
        }
}

?>


<!--the qr image in html tag-->




<img src="https://api.qrserver.com/v1/create-qr-code/?size=1024x1024&data=<?php echo $hcode; ?>">