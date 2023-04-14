<!-- Topbar Start -->
<div class="container-fluid bg-dark pt-3 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-white text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <p style="color: #D9a404"><i class="fa fa-envelope mr-2" style="color:#D9a404"></i>Banana@airline.com</p>
                    <p class="text-body px-3">|</p>
                    <p style="color: #D9a404"><i class="fa fa-phone-alt mr-2" style="color: #D9a404"></i>+012 345 6789</p>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-3" href="https://www.facebook.com/Banana-Airlines-109535575252958">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                <a href="{{route('client.hoadon.list')}}" class="btn btn-primary mt-2 ">Đăng nhập / Đăng ký</a>
                </a>
            </div>

        </div>
    </div>
</div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{route('client.main')}}"  class="navbar-brand pl-2">
                <h1 class="m-0 text-primary"><span class="text-dark">BANANA</span> AIRLINES <img class="img-fluid w-10  bg-white " src="{{asset('client/anh/logo2.')}}'" alt=""></h1>

            </a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{route('client.gioi-thieu')}}" class="nav-item nav-link strong ">Giới Thiệu</a>
                    <a href="{{route('client.lien-he')}}" class="nav-item nav-link strong">Liên Hệ</a>
                    <a href="{{route('client.khuyen-mai')}}" class="nav-item nav-link strong">KM</a>
                    <div class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle strong" data-toggle="dropdown">Khác</a>
                        <div class="dropdown-menu">
                            <a href="{{route('client.diem-den-yeu-thich')}}" class="dropdown-item ">Điểm đến yêu thích</a>
                            <a href="{{route('client.cam-nang-du-lich')}}" class="dropdown-item">Cẩm nang du lịch</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
