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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ẩn form 1 chiều khi trang được tải
            $("#form1").show();
            $("#form2").hide();

            // focus radi khứ hồi
            const radio = document.getElementById("round-trip");
            radio.style.backgroundColor = "aqua";
            radio.focus();

            // Hiển thị form được chọn khi tùy chọn được chọn
            $("input[type='radio']").click(function() {
                var option = $(this).val();
                const box1 = document.getElementById("round-trip");
                const box2 = document.getElementById("one-way");
                if (option == "form1") {
                    $("#form1").show();
                    $("#form2").hide();
                    $("#return").hide();
                    box1.style.backgroundColor = "aqua";
                    box2.style.backgroundColor = "transparent";
                } else if (option == "form2") {
                    $("#form2").show();
                    $("#form1").hide();
                    box2.style.backgroundColor = "aqua";
                    box1.style.backgroundColor = "transparent";
                }
            });
        });
    </script>
    <style>
        .type_ticket{
            display: inline-block;
        }
        .type_ticket input[type="radio"]{
            appearance: none;
            -webkit-appearance: none;
            display: inline-block;
            vertical-align: middle;
        }
        .type_ticket label{
            padding: 5px 10px;
        }
    </style>
</head>

<body>
@include('layouts.layout-main.header')

@yield('content')

@include('layouts.layout-main.footer')








</body>

</html>
