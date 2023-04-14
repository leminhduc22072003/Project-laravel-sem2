<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BANANA AIRLINES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <!--Js libraries-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('client/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('client/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('client/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('client/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('client/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('client/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('client/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('client/js/main.js')}}"></script>


    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{asset('client/css/mainmaybay.css')}}" />
    <link href="{{asset('client/css/about.css')}}" rel="stylesheet">
</head>

<body>
@include('layouts.layout-main.header')

@yield('content')

@include('layouts.layout-main.footer')








</body>

</html>
