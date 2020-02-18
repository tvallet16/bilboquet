<?php



session_start();
$_SESSION['login']=$_POST['login'];
$_SESSION['password']=$_POST['password'];
if ($_SESSION['login']!="jon" || $_SESSION['password']!="1234") {
    $_SESSION['error']="mauvais login ou mot de passe. Veuillez pas réessayer! ";
    header('Location: http://192.168.33.33/login.php');

}else{
    $_SESSION['error']= "";
    header('Location: /');
}