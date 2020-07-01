<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from andit.co/projects/html/wend/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 08:29:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Wend - Tour, Travel, Travel Agency Template">
    <meta name="keywords" content="Tour, Travel, Travel Agency Template">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Title-->
    <title>Travel | Home</title>


    <base href="{{asset('public/User')}}/" target="_top">
    <!--Favicon add-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--magnific-popup.cs-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--owl css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--    normalize css-->
    <link rel="stylesheet" href="css/normalize.css">
    <!--    flacticon css-->
    <link rel="stylesheet" href="font/flaticon.css">
    <!--    animate css-->
    <link rel="stylesheet" href="css/animate.css">

    <link href="bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet"
        type="text/css" />
    <!--Fontawesom -->
    <link rel="stylesheet" href="css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="fontawesome/fontawesome-free-5.13.0-web/css/all.min.css">
    <!--Font Famely-->
    <!--Poppins-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <!--Lato-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/pygments.css">

    <link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.min.css">
    <!-- style.css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive.css-->
    <link rel="stylesheet" href="css/responsive.css">
<body>
    {{-- header --}}
    @include('User/layout/header')
    {{-- content --}}
    @yield('content')
    {{-- footer --}}
    @include('User/layout/footer')
</body>



    <!-- Main js -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap-->
    <script src="js/bootstrap.min.js"></script>

    <!-- owl.carousel-->
    <script src="js/owl.carousel.min.js"></script>

    <!-- wow.min-->
    <script src="js/wow.min.js"></script>

    <!-- html5shiv-->
    <script src="js/html5shiv.js"></script>

    <!-- respondl-->
    <script src="js/respond.min.js"></script>

    <!-- prettifyl-->
    <script src="js/prettify.js"></script>

    <!--bootstrap-datepicker-->
    <script src="bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
     <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

    <!-- custom-->
    <script src="js/custom.js"></script>
    <script src="js/ion.rangeSlider.js"></script>
    <script src="js/ion.rangeSlider.min.js"></script>


</body>


<!-- Mirrored from andit.co/projects/html/wend/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 08:29:23 GMT -->
</html>
