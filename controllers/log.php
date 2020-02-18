<?php



session_start();
$_SESSION['set']['text1']="on";
$_SESSION['set']['text2']="on";
$_SESSION['set']['img1']="on";
$_SESSION['set']['img2']="on";
$_SESSION['set']['band']="on";
$_SESSION['login']=$_POST['login'];
$_SESSION['password']=$_POST['password'];
if ($_SESSION['login']!="jon" || $_SESSION['password']!="1234") {
    $_SESSION['error']="mauvais login ou mot de passe. Veuillez pas réessayer! ";
    header('Location: http://192.168.33.33/login.php');

}else{
    $_SESSION['error']= "";
    header('Location: /');
}