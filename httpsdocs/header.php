<?php
include "panel/setting/connection.php";

$ayarsor=$db->prepare("SELECT * FROM ayar ");
$ayarsor->execute();

$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE>
<html lang="tr">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Cpmpatible" content="IE=edge">

    <title><?php echo $ayarcek['ayar_title'] ?></title>
    <meta name="description" content="<?php echo $ayarcek['ayar_descrition'] ?>"/>
    <meta name="keywords" content="<?php echo $ayarcek['ayae_keywords'] ?>"/>

    <meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-icon.jpg">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">    
    <link rel="stylesheet" href="vendor/animate/animate.compate.css">    
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">    
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">    ,
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">    
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">

    <!-- Demo CSS -->


    <!-- Skin CSS -->


    <!-- Theme Custom CSS -->


    <!-- Head Libs -->


    <!-- Google Analytics Codes -->
    <?php echo $ayarcek['ayar_analytics'] ?>

</head>
<body>
    
</body>
</html>