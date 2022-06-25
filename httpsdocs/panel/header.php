<?php
ob_start();
session_start();

include "setting/connection.php";

if(!isset($_SESSION['kullanici__ad'])){
    Header("Location:../404.html");
    exit;
}

$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_Ad=:kullanici_ad");
$kullanicisor->execute(array(
    'kullanici_ad' => $_SESSION['kullanici_ad']
));

$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html lang="tr">
<html class="fixed sidebar-light" data-style-switcher-options="{'sidebarColor':'dark'}">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <title>AV Yayınları Yönetim Paneli</title>
    <meta name="keywords" content="av yayınları"/>
    <meta name="description" content="av yayınları">
    <meta name="author" content="avyayinlari.com.tr">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- Web Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" type="text/css">

    <script src="ckeditor/ckeditor.js"></script>

    <!-- Vendor CSS -->
    <!--henüz bu frameworkler yerleştirilmedi-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
    <link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="vendor/morris/morris.css" />
    <link rel="stylesheet" href="vendor/select2/css/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap5.css" />
    <link rel="stylesheet" href="vendor/dropzone/basic.css" />
    <link rel="stylesheet" href="vendor/dropzone/dropzone.css" />
    <link rel="stylesheet" href="vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
    <link rel="stylesheet" href="vendor/pnotify/pnotify.custom.css" />
    <link rel="stylesheet" href="vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />


    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />


    <!-- Theme Custom CSS -->
    


    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.js"></script>


    <!--bunu bulamadım-->
    <script src="master/style-switcher/style.switcher.localstorage.js"></script> 


</head>
<body>


</body>