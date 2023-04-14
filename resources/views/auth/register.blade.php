@extends("client-layout")
@section("main")
    <div class="l-bt-fixed-to-top" id="bt-to-top">
        <div class="bt-icon"><i class="fab fa-telegram-plane"></i> TOP</div>
    </div>
    <header>
        <div class="background-blue-color pd-tb-2px">
            <div class="container">
                <div class="row">
                    <div class="col-sm d-none d-sm-block text-white line_h_28">MỘT PHÚT LÀ XONG</div>
                    <div class="col-sm">
                        <ul class="list-inline text-center margin-0px line_h_28 font-size mr-0">
                            <li class="list-inline-item"><a class="facebook text-white" href="#"><i
                                            class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="youtube text-white" href="#"><i
                                            class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin text-white" href="#"><i
                                            class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="google text-white" href="#"><i
                                            class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter text-white" href="#"><i
                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="rss text-white" href="#"><i class="fas fa-rss"
                                                                                               aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm d-none d-sm-block line_h_28">
                        <ul class="float-right margin-0px text-white mr-0">
                            <li class="list-inline-item  padding-right-10px"><a class="text-white"
                                                                                href="{{ route('register') }}"><i
                                            class="fa fa-lock padding-right-5px"></i> Đăng Ký</a></li>
                            <li class="list-inline-item"><a class="text-white" href="{{ route('login') }}"><i
                                            class="fa fa-user-plus padding-right-5px"></i> Đăng Nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-output">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3">
                        <a id="logo" href="index.php" class="d-inline-block margin-tb-10px"><img
                                    src="{{asset('assets/img/logo.png')}}" alt=""></a>
                        <!-- <a class="mobile-toggle" href="#"><i class="fa fa-navicon"></i></a> -->
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light col-lg-9 col-md-9 col-9 aligh-items-right">
                        <div class="collapse navbar-collapse  link-padding-tb-20px dropdown-dark d-flex justify-content-end "
                             id="navbarNav">
                            <ul class="navbar-nav W-100 d-flex justify-content-end" id="menu-main">
                                <li class="nav-item active">
                                    <a class="" href="/site/index.php">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item" href="/site/?act=timve" id="" role="button" data-toggle=""
                                       aria-haspopup="true" aria-expanded="">
                                        CHECK IN ONLINE
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=khuyenmai">DÀNH CHO BẠN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=contact">LIÊN HỆ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=blog">BÀI VIẾT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="pd-r-0" style="padding-right: 0px;" href="/site/?act=about">VỀ CHÚNG
                                        TÔI</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header-output-fixed" id="l-menu-fixed">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3">
                        <a id="logo" href="index.php" class="d-inline-block margin-tb-10px"><img
                                    src="{{asset('assets/img/logo.png')}}" alt=""></a>
                        <!-- <a class="mobile-toggle" href="#"><i class="fa fa-navicon"></i></a> -->
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light col-lg-9 col-md-9  col-9 aligh-items-right">
                        <div class="collapse navbar-collapse  link-padding-tb-20px dropdown-dark d-flex justify-content-end "
                             id="navbarNav">
                            <ul class="navbar-nav W-100 d-flex justify-content-end" id="menu-main">
                                <li class="nav-item active">
                                    <a class="" href="/site/index.php">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item" href="/site/?act=timve" id="" role="button" data-toggle=""
                                       aria-haspopup="true" aria-expanded="">
                                        CHECK IN ONLINE
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=khuyenmai">DÀNH CHO BẠN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=contact">LIÊN HỆ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=blog">BÀI VIẾT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="pd-r-0" href="/site/?act=about">VỀ CHÚNG TÔI</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class=" dropdown-toggle fz-12vw" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-user-circle"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a>
                                        <a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a></div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <link rel="stylesheet" href="{{asset('assets/css/phuong/main.css')}}">
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Đăng Ký</h2>
                    <form action="{{route("register")}}" method="post">
                        @csrf
                        @method("post")
                        <div class="input-group">
                            <input class="input--style-3" type="text" value="{{old("name")}}" name="name"
                                   placeholder="Tên tài khoản">
                            @error("name")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" value="{{old("email")}}" placeholder="Email"
                                   name="email">
                            @error("email")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" name="password" placeholder="Nhập mật khẩu">
                            @error("password")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Nhập lại mật khẩu"
                                   name="password_confirmation">
                            @error("password")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" id="signup">Đăng Ký</button>
                            <a class="btn btn--pill btn--green text-white" href="{{ route('login') }}">Đăng Nhập</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--    <script src="{{asset('assets/jquery/signup.js')}}" type="text/javascript"></script>--}}
@endsection
