<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ja BiH da Putujem</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/logo1.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/loginfrm.css">
    <link rel="stylesheet" href="css/rezervacija.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/camera.js"></script>
    <script src="js/jquery.mobile.customized.min.js"></script>
    
    <script>
    $(document).ready(function() {
        jQuery('#camera_wrap').camera({
            loader: false,
            pagination: false,
            minHeight: '444',
            thumbnails: false,
            height: '48.375%',
            caption: true,
            navigation: true,
            fx: 'mosaic'
        });

        var owl = $("#owl");
        owl.owlCarousel({
            items: 2,
            itemsDesktop: [995, 2],
            itemsDesktopSmall: [767, 2],
            itemsTablet: [700, 2],
            itemsMobile: [479, 1],
            navigation: true,
            pagination: false
        });
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
    </script>
</head>