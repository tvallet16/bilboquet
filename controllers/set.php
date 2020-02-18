<?php

session_start();
$_SESSION['set']['text1']=$_POST['text1'];
$_SESSION['set']['text2']=$_POST['text2'];
$_SESSION['set']['img1']=$_POST['img1'];
$_SESSION['set']['img2']=$_POST['img2'];
$_SESSION['set']['band']=$_POST['band'];
header('Location: http://192.168.33.33/bilboChoice.php');
