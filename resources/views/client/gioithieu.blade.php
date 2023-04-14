@extends('layouts.layout-main.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Giới thiệu</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('client.main')}}">Trang chủ</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Giới thiệu</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!--Start-->
    <div class="container typeword">
        <div class="my-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb rounded-0 px-0 py-2">
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{route('client.main')}}"
                           class="text-truncate text-info fondsize"
                           title="Trang chủ">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="./gioithieu.html"
                           class="cam-color fondsize"
                           title="Điểm đến yêu thích">Giới thiệu</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('client/anh/about.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">Bay an toàn- vui ngập tràn</h1>
                        <p class="text-dark" >Đến với Banana Airlines, chúng tôi cam kết đem tới cho khách hàng những trải nghiệm tuyệt vời nhất </p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="team-item bg-white mb-4">
                                    <div class="team-img position-relative overflow-hidden">
                                        <img class="img-fluid  " src="{{asset('client/anh/plane3.jpg')}}" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="team-item bg-white mb-4">
                                    <div class="team-img position-relative overflow-hidden">
                                        <img class="img-fluid  " src="{{asset('client/anh/plane.jpg')}}" alt="">
                                    </div>
                                </div>

                            </div>
                            <a href="./chuyenbay.html" class="btn btn-primary mt-1">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->








        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <div class="text-center mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">GIỚI THIỆU</h6>
                    <h1>Về nhóm chúng tôi</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://scontent.fhan17-1.fna.fbcdn.net/v/t39.30808-6/329739756_1391637348273153_1241118877991390923_n.jpg?stp=cp6_dst-jpg&_nc_cat=109&ccb=1-7&_nc_sid=174925&_nc_ohc=-lbKFQuVyIwAX_eOffK&_nc_ht=scontent.fhan17-1.fna&oh=00_AfD-8uau35QlI02oYsN33oWQmaBr7b3438_jmlLERSLG4w&oe=643D28DA" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="https://www.facebook.com/youngspidey2301"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">NGUYỄN TRUNG HIẾU</h5>
                                <p class="m-0">Team Leader</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://scontent.fhan17-1.fna.fbcdn.net/v/t1.15752-9/341128619_1413315642764349_4772137840312371018_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=ae9488&_nc_ohc=dbDYnZlc0vcAX9AMY47&_nc_ht=scontent.fhan17-1.fna&oh=03_AdTjrP52Od2QxY2prujFwSZHaseAgT-3XPodZAosS1lMVg&oe=64605484"  alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="https://www.facebook.com/profile.php?id=100074636828645"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">LÊ MINH ĐỨC</h5>
                                <p class="m-0">Project Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://scontent.fhan17-1.fna.fbcdn.net/v/t39.30808-6/325470590_3077613635872273_9207768098266673125_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=174925&_nc_ohc=pGj9Pf70VTAAX9cIPYC&_nc_ht=scontent.fhan17-1.fna&oh=00_AfDIhtn5Ce1IrKIgkgmmlaYznEerUDRaAwR0ouAuR13CCA&oe=643CF20E" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="https://www.facebook.com/youngspidey2301/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">LIONEL MESSI</h5>
                                <p class="m-0">Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://vcdn-thethao.vnecdn.net/2022/06/27/dejong-7549-1656338602.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="hhttps://www.facebook.com/youngspidey2301/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">FRENKIE DE JONG</h5>
                                <p class="m-0">Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://fcb-abj-pre.s3.amazonaws.com/img/jugadors/213_cruyff.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="https://www.facebook.com/youngspidey2301/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">JOHAN CRUYFF</h5>
                                <p class="m-0">BE Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->



        <!-- Footer start-->


        <section id="end-page">
            <div class="footer py-5 bg-dark">
                <div class="container">

                    <div class="row">
                        <div class="col-md-4">

                            <a href="#" class="navbar-brand">
                                <h2 class="m-0 text-primary"><span class="text-white">BANANA</span> AIRLINES  </h2>
                            </a>
                            <br> <br>
                            <p class="text-white">
                                Chúng tôi cam kết mang lại những trải nghiệm tuyệt vời đến các bạn.

                            </p>

                            <p class="text-white">
                                Xin trân trọng cám ơn sự đồng hành của Qúy khách!
                            </p>
                            <div class="d-flex justify-content-start mt-4">
                                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                   style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                   style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                   style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                   style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="ml-auto d-md-block d-none">


                            <span class="ti-search search-icon text-light"></span>
                        </div>




                        <div class="col-md-3">
                            <h4 class="text-white">Thông tin thêm</h4>
                            <nav class="nav flex-column my-3 footer-web-info">
                                <a style="color: #ffffff;"
                                   href="#"
                                   title="Điều khoản sử dụng')}}">Điều khoản sử dụng</a>
                                <a style="color: #ffffff;"
                                   href="#"
                                   title="Chính sách bảo mật">Chính sách bảo mật</a>
                                <a style="color: #ffffff;"
                                   href="#"
                                   title="Hướng dẫn đặt vé">Hướng dẫn đặt vé</a>
                                <a style="color: #ffffff;"
                                   href="#"
                                   title="Hướng dẫn đặt vé">Hướng dẫn thanh toán</a>
                            </nav>
                        </div>

                        <div class="col-md-2">
                            <h4 class="text-white">Hỗ trợ</h4>
                            <nav class="nav flex-column my-3 footer-web-info">
                                <a style="color: #ffffff;"
                                   href="javascript:void 0"
                                   title="Phản hồi">Phản hồi</a>
                                <a style="color: #ffffff;"
                                   href="#"
                                   title="Câu hỏi thường gặp">Câu hỏi thường gặp</a>
                                <a style="color: #ffffff;"
                                   href="#"
                                   title="Tư vấn hỗ trợ đặt vé">Tư vấn hỗ trợ đặt vé</a>
                            </nav>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">Liên hệ với chúng tôi</h4>
                            <br>
                            <div class="d-flex">
                                <h4 class="fa fa-map-marker-alt text-primary"></h4>
                                <div class="pl-3">
                                    <h5 style="color: #D9a404;">Địa chỉ</h5>
                                    <p style="color: #ffffff;">236, Hoàng Quốc Việt, Bắc Từ Liêm, Hà Nội</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <h4 class="fa fa-envelope text-primary"></h4>
                                <div class="pl-3">
                                    <h5 style="color: #D9a404;">Email</h5>
                                    <p style="color: #ffffff;">customer@banana_airline.com</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <h4 class="fa fa-phone-alt text-primary"></h4>
                                <div class="pl-3">
                                    <h5 style="color: #D9a404;">Hotline</h5>
                                    <p style="color: #ffffff;">+012 345 67890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr color="white" align="right" size="5px">
                <div class="container-fluid p-0 " style="color: #20211F;">
                    <p class="text-center" style="color: #ffffff">
                        <a>Công ty TNHH BANANA AIRLINE</a> <br>
                        <a>Coppyright</a>&copy;<a class="text-primary font-weight-bold" href="#"> 2022 BANANA </a> <br>
                    </p>
                </div>
            </div>
        </section>
        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="about.html" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>



@endsection
