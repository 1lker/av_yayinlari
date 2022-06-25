<?php
ob_start();
session_start();

include 'connection.php';

//Login
if (isset($_POST['LOGİN'])){
    $kullanici_ad = $_POST['kullanici_ad'];
    $kullanici_password = base64_encode($_POST['kullanici_password']);

    $usercheck = $db->prepare("SELECT * FROM kullanici where kullanici_ad=:kullanici_ad and kullanici_password=:kullanici_password");
    $usercheck->execute(array(
        'kullanici_ad' => $kullanici_ad,
        'kullanici_password' => $kullanici_password,
    ));

    $userinfo = $usercheck->fetch(PDO::FETCH_ASSOC);
    echo $count = $usercheck->rowCount();

    if ($count == 1) {
        $_SESSION['kullanici_ad'] = $userinfo['kullanici_ad'];
    }else{
        header("Location:../login.php?login=no");
    }
}