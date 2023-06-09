<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking</title>
    <link rel="stylesheet" href="{{asset('client/css/bookingdetail.css')}}" />
    <link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style2.css')}}" />
    <link rel="stylesheet" href="{{asset('client/css/about.css')}}" />
</head>
<body class="typeword">
<div class="container-fluid" style="padding: 0">
    <div class="header">
        <ul class="nav justify-content-center">
            <a href="{{route('client.main')}}"  class="navbar-brand-cus pl-2">
                <h3 class="m-0 text-primary1"><span class="text-dark">BANANA</span> AIRLINES </h3>

            </a>
            <img class=" col-1" src="{{asset('client/anh/logo2.jpg')}}" alt="">
            <li class="nav-item item-1">
                <div class="nav-item">
                    <div class="nav-item-number"
                         style="background-color: #1ba0e2; opacity: 1">
                        1
                    </div>
                    <div class="nav-item-text" style="color: #1ba0e2; opacity: 1">
                        Đặt chỗ
                    </div>
                </div>
            </li>
            <li class="nav-item item-2">
                <div class="nav-item">
                    <div class="nav-item-number">2</div>
                    <div class="nav-item-text">Thanh toán</div>
                </div>
            </li>
            <li class="nav-item item-3">
                <div class="nav-item">
                    <div class="nav-item-number">3</div>
                    <div class="nav-item-text">Đang xử lý</div>
                </div>
            </li>
            <li class="nav-item item-4">
                <div class="nav-item">
                    <div class="nav-item-number">4</div>
                    <div class="nav-item-text">Phát hành vé điện tử</div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="content">
    <div class="content-main">
        <h2 class="content-main-heading">Đặt chỗ của tôi</h2>
        <div class="content-main-heading-description">
            <span class="description">Điền thông tin và xem lại đặt chỗ</span>
        </div>
        @if(!empty($confirm))
            <div class="content-main-heading-description">
                <span class="description">Thông tin đăng nhập tài khoản mới</span>
            </div>
            <div class="forms-contact-main-account bg-a" style="border-radius: 5px">
                <div class="forms-contact-main-account-icon">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="40"
                         height="40"
                         fill="currentColor"
                         class="bi bi-person-fill"
                         viewBox="0.6 2 24 24">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                              style="color: white" />
                    </svg>
                </div>
                <div class="forms-contact-main-account-name">
                    <h4 class="account-name" style="font-size: 16px;
                line-height: 24px;
                letter-spacing: .5px;">
                        Tên đăng nhập: {{$customer->email}}
                    </h4>
                    <span class="account-type" style="font-size: 14px;">Mật khẩu: 12345678</span>
                </div>
            </div>
        @endif

        <div class="forms-contact">
            <div class="forms-contact-main">
                <h3 class="contact-info-heading">Thông tin liên hệ</h3>
                <div class="contact-info">
                    <div class="contact-info-name-and-change">
                        <div class="contact-info-name">
                            <h4 class="contact-info-name">{{$customer->first_name}} {{$customer->last_name}}</h4>
                        </div>
                        <div class="contact-info-change-button">
                            <span style="color: #d9a404">Thay đổi</span>
                        </div>
                    </div>
                    <hr />
                    <div class="contact-info-phone-and-email">
                        <div class="contact-info-phone">
                            <p>
                                <span>Điện thoại di động</span>
                            </p>
                            <p>
                                <span>+{{$customer->sdt}}</span>
                            </p>
                        </div>
                        <div class="contact-info-mail">
                            <p>
                                <span>Email</span>
                            </p>
                            <p>
                                <span>{{$customer->email}}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <h3 class="contact-info-heading">Thông tin hành khách</h3>
                <div class="contact-info">
                    <div class="contact-info-name-and-change">
                        <div class="contact-info-name">
                            <h4 class="contact-info-name">Ông {{$customer->first_name}} {{$customer->last_name}}</h4>
                        </div>
                        <div class="contact-info-change-button">
                            <span style="color: #d9a404">Thay đổi</span>
                        </div>
                    </div>
                    <hr />
                    <div class="contact-info-phone-and-email">
                        <div class="contact-info-phone">
                            <p>
                                <span>Ngày sinh</span>
                            </p>
                            <p>
                                <span>{{\Carbon\Carbon::parse($customer->sinhnhat)->format('l d F Y')}}</span>
                            </p>
                        </div>
                        <div class="contact-info-mail">
                            <p>
                                <span>Quốc tịch</span>
                            </p>
                            <p>
                                <span>{{$customer->quoctich}}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tien-ich-chuyen-bay" >
                <div>
                    <h3 style="margin-top: 40px; padding-bottom: 16px;">Tiện nghi chuyến bay</h3>
                </div>
                <div class="flight-service form-tien-ich" style="border-radius: 5px">
                    <div class="flight-service-header">
                        <div class="flight-luggage-service-header-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-id="IcBagBaggage"><path d="M8 7.2C8 6.07989 8 5.51984 8.21799 5.09202C8.40973 4.71569 8.71569 4.40973 9.09202 4.21799C9.51984 4 10.0799 4 11.2 4H12.8C13.9201 4 14.4802 4 14.908 4.21799C15.2843 4.40973 15.5903 4.71569 15.782 5.09202C16 5.51984 16 6.07989 16 7.2V8H8V7.2Z" stroke="#0194f3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6 8.00005V20M18 8.00005V20M2 10V18C2 19.1046 2.89543 20 4 20H20C21.1046 20 22 19.1046 22 18V10C22 8.89547 21.1046 8.00004 20 8.00004L4 8C2.89543 8 2 8.89543 2 10Z" stroke="#687176" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <h2 style="margin: 0 0 0 8px; font-size:24px;">Hành lý</h2>
                        <div class="choose-luggage-button">
                            <div data-toggle="modal"
                                 data-target="#exampleModal" dir="auto" class="css-901oao r-1sixt3s r-cygvgh r-b88u0q r-1iukymi r-q4m81j" style="color: #d9a404; cursor: pointer;">Chọn hành lý</div>
                        </div>
                    </div>
                    <hr style="margin: 0;">
                    <div class="flight-service-body">
                        <div class="flight-luggage-service-body-flight">
                            <div dir="auto" style="color: rgb(3, 18, 26);">{{$chuyenbay->sanbay1->thanhpho->name}} {{$chuyenbay->sanbay1->thanhpho->mathanhpho}}</div>
                            <img src="{{asset('client/anh/iconmuiten.svg')}}" width="16" height="16" style="margin-left: 4px; margin-right: 4px;">
                            <div dir="auto" style="color: rgb(3, 18, 26);">{{$chuyenbay->sanbay2->thanhpho->name}} {{$chuyenbay->sanbay2->thanhpho->mathanhpho}}</div>
                        </div>
                        <div class="flight-luggage-service-body-customer">
                            <div dir="auto" data-testid="baggageSummaryRouteTraveler-0.0.0-name" style="color: rgb(104, 113, 118); width: 200px;">Ông {{$customer->first_name}} {{$customer->last_name}}</div>
                            <div dir="auto" data-testid="baggageSummaryRouteTraveler-0.0.0-selection" style="-webkit-line-clamp: 2; color: rgb(3, 18, 26);">15 kg - 187.550 ₫</div>
                        </div>
                    </div>
                </div>
                <div class="flight-service form-tien-ich" style="border-radius: 5px">
                    <div class="flight-service-header">
                        <div class="flight-luggage-service-header-icon">
                            <svg fill="#8F8F8F" height="24" stroke="currentColor" stroke-linecap="round" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g fill="#8F8F8F"><g><path d="M8.94519765,4.61667101 C8.62806913,3.68955098 7.65298676,3 6.67081455,3 L4.85289307,3 C3.67003087,3 2.83090687,3.99471451 3.02901287,5.15303385 C3.04938258,5.26366685 3.04938258,5.26366685 3.13057716,5.70388653 C3.20952829,6.13228385 3.29750669,6.61071694 3.39225437,7.1272847 C3.66295152,8.60313521 3.93364366,10.0887842 4.18625429,11.48895 C4.2086197,11.6129428 4.2086197,11.6129428 4.23097451,11.7369844 C4.55575141,13.5394962 4.82308549,15.0491222 5.01454523,16.168581 C5.10764997,16.7129614 5.62443373,17.0787925 6.16881406,16.9856878 C6.7131944,16.8925831 7.07902556,16.3757993 6.98592083,15.831419 C6.79326179,14.7049479 6.52501719,13.1901802 6.1992793,11.3823349 C6.17688352,11.258066 6.17688352,11.258066 6.15447844,11.1338532 C5.90148533,9.73156742 5.63045917,8.24408523 5.35943803,6.76646833 C5.26458431,6.24932249 5.17650427,5.77033664 5.09745422,5.34140257 C5.066522,5.17369465 5.04735554,5.06977819 5.03448279,4.99999993 L6.67081455,5 C6.80194324,5 7.01379656,5.14981674 7.0528421,5.26396574 L9.60448342,12.7236474 C9.74285877,13.1281855 10.1231114,13.4 10.5506612,13.4 L17.1298024,13.4 C17.3261224,13.4 17.667392,13.596079 17.7656921,13.7652149 L19.6457155,17 C19.2433952,17 18.7642146,17 15.6956093,17 L7.99901987,17 C7.44673512,17 6.99901987,17.4477153 6.99901987,18 C6.99901987,18.5522847 7.44673512,19 7.99901987,19 L20.3766941,19 C21.6990875,19 22.4132729,17.7816855 21.7467063,16.6347851 L19.494861,12.7602399 C19.038297,11.9746718 18.0380977,11.4 17.1298024,11.4 L11.2654874,11.4 L8.94519765,4.61667101 Z M12,9 C12,8.44771525 12.4437166,8 12.9998075,8 L16.0001925,8 C16.5523709,8 17,8.44386482 17,9 C17,9.55228475 16.5562834,10 16.0001925,10 L12.9998075,10 C12.4476291,10 12,9.55613518 12,9 Z M7,20 L20,20 L20,21 C20,21.5522847 19.5525106,22 19.0014977,22 L7.99850233,22 C7.44704472,22 7,21.5561352 7,21 L7,20 Z"></path></g></g></g></g></svg>
                        </div>
                        <h2 style="margin: 0 0 0 8px; font-size:24px;">Số ghế</h2>
                        <div class="choose-luggage-button">
                            <div data-toggle="modal"
                                 data-target="#exampleModal" dir="auto" class="css-901oao r-1sixt3s r-cygvgh r-b88u0q r-1iukymi r-q4m81j" style="color: #d9a404; cursor: pointer;">Chọn ghế</div>
                        </div>
                    </div>
                    <hr style="margin: 0;">
                    <div class="flight-service-body">
                        <p style="margin:0;">Ông {{$customer->first_name}} {{$customer->last_name}}</p>
                        <div style="padding-top: 20px;">
                            <div>
                                <p style="color: #8f8f8f;
                    font-size: 14px;
                    line-height: 1.4; margin:0;">{{$chuyenbay->sanbay1->thanhpho->mathanhpho}} → {{$chuyenbay->sanbay2->thanhpho->mathanhpho}}</p><p style="font-size: 16px;
                    font-weight: 500;
                    line-height: 1.7; margin: 0;">3D - 587.350  VND</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flight-service form-tien-ich" style="border-radius: 5px">
                    <div class="flight-service-header">
                        <div class="flight-luggage-service-header-icon">
                            <svg stroke-width="0" viewBox="0 0 24 24" fill="#8F8F8F" height="24" stroke="currentColor" stroke-linecap="round" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#8F8F8F" d="M8,10.9999961 C7.99837314,10.9999987 7.99674597,11 7.9951185,11 L7.0048815,11 C5.34210976,11 4,9.66252515 4,7.99408095 L4,5.50738893 C4,3.56822114 5.55944116,2 7.5,2 C9.43307265,2 11,3.57245679 11,5.50738893 L11,7.99408095 C11,8.88456952 10.6141427,9.68420685 10,10.2344637 L10,19.4935615 C10,20.8782889 8.88605372,22 7.5,22 L5,22 L5,12.5064385 C5,11.9541538 5.44771525,11.5064385 6,11.5064385 C6.55228475,11.5064385 7,11.9541538 7,12.5064385 L7,20 L7.5,20 C7.77836233,20 8,19.7768174 8,19.4935615 L8,10.9999961 Z M17,9 L17.0020869,9 C17.5510457,9 18,8.55162926 18,8.00208688 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,8.00208688 C20,8.88923253 19.6133966,9.68684605 19,10.2359255 L19,19.4935615 C19,20.8782889 17.8860537,22 16.5,22 L14,22 L14,12.5064385 C14,11.9541538 14.4477153,11.5064385 15,11.5064385 C15.5522847,11.5064385 16,11.9541538 16,12.5064385 L16,20 L16.5,20 C16.7783623,20 17,19.7768174 17,19.4935615 L17,11 L14.9979131,11 C13.3432185,11 12,9.65503331 12,8.00208688 L12,4 C12,3.44771525 12.4477153,3 13,3 C13.5522847,3 14,3.44771525 14,4 L14,8.00208688 C14,8.55104571 14.4483707,9 14.9979131,9 L15,9 L15,2.99703014 C15,2.4463856 15.4438648,2 16,2 C16.5522847,2 17,2.45303631 17,2.99703014 L17,9 Z M6,5.50738893 L6,7.99408095 C6,8.55640386 6.44513339,9 7.0048815,9 L7.9951185,9 C8.55212895,9 9,8.55132271 9,7.99408095 L9,5.50738893 C9,4.67545223 8.32692295,4 7.5,4 C6.6665321,4 6,4.67028481 6,5.50738893 Z"></path></svg>
                        </div>
                        <h2 style="margin: 0 0 0 8px; font-size:24px;">Suất ăn trên máy bay</h2>
                        <div class="choose-luggage-button">
                            <div data-toggle="modal"
                                 data-target="#exampleModal" dir="auto" class="css-901oao r-1sixt3s r-cygvgh r-b88u0q r-1iukymi r-q4m81j" style="color: #d9a404; cursor: pointer;">Chọn suất ăn</div>
                        </div>
                    </div>
                    <hr style="margin: 0;">
                    <div class="flight-service-body">
                        <p style="margin:0;">Chuyến bay đi </p>
                        <div style="padding-top: 20px;">
                            <div>
                                <p style="font-size: 16px;
                    font-weight: 500;
                    line-height: 1.7; margin: 0;">{{$chuyenbay->sanbay1->thanhpho->mathanhpho}} → {{$chuyenbay->sanbay2->thanhpho->mathanhpho}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tien-ich-chuyen-bay">
                <div>
                    <h3 style="margin-top: 40px; padding-bottom: 16px;">Chi tiết giá</h3>
                </div>
                <div class="form-tien-ich" style="border-radius: 5px">
                    <div class="flight-service-header">
                        <h4 style="margin:0;">Giá bạn trả</h4>
                        <div style="margin-left: auto;margin-right: 16px;">{{number_format($chuyenbay->giave)}}  VND</div>
                        <p style="margin:0;">
                            <svg style="color: #0770cd;
                  height: 16px;
                  -webkit-transition: all .3s ease;
                  transition: all .3s ease;
                  width: 16px; cursor: pointer;" stroke-width="1.5" viewBox="0 0 16 16" fill="none" height="24" stroke="currentColor" stroke-linecap="round" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g transform="translate(0.166667, 4.033325)"><path d="M7.33333333,7.33333333 L0.488888889,0.488888889"></path><path d="M7.33333333,7.33333333 L14.1777778,0.488888889"></path></g></svg>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <span>VietJet Air (Người lớn) x1</span>
                            <span style="margin-left: auto;">VND 774.900</span>
                        </div>

                    </div>
                    <div class="flight-service-body collapse " id="collapseFilter" style="flex-direction: row;">

                    </div>
                </div>
            </div>
            <a href="{{route('client.payment')}}"
            ><button type="button"
                     class="btn btn-primary custom1"
                     data-toggle="modal"
                     data-target="#exampleModal"
                     style="float:right;">

                    Tiếp tục
                </button></a>
        </div>
        <div class="flight-detail-form">
            <div class="flight-detail-form-destination">
                <svg stroke-width="0" fill="#30C5F7" height="24" stroke="currentColor" stroke-linecap="round" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M11.964558,6.14125661 L13.8541043,6.51916587 L18.4496899,2.52012268 C19.2945553,1.78492726 20.5835088,1.83683661 21.3736438,2.62697164 C22.1650971,3.41842491 22.2129336,4.70922562 21.4804928,5.55092556 L17.4814496,10.1465111 L17.8594278,12.0364023 C18.2650613,11.7637492 18.8153146,11.8028394 19.1734819,12.1610067 C19.5785205,12.5660453 19.5817196,13.2195436 19.1666108,13.6346524 L18.3436667,14.4575965 L19.4571198,20.0248621 C19.6924132,21.2013294 18.0749946,21.7715929 17.5203924,20.7077062 L13.7517141,13.4782961 L11.0209323,15.9043041 C10.8211477,16.0642187 10.5379244,16.2308982 10.1689883,16.3363433 C10.0940337,16.357766 10.0187022,16.3753374 9.94322578,16.3889171 L9.94322578,20.9616545 C9.94322578,22.0135724 8.55790407,22.3972843 8.01669675,21.4952721 L5.94993922,18.0506762 L2.50534335,15.9839187 C1.60333115,15.4427114 1.98704305,14.0573897 3.038961,14.0573897 L7.61169837,14.0573897 C7.62527807,13.9819133 7.64284943,13.9065817 7.66427211,13.8316272 C7.76971729,13.4626911 7.93639679,13.1794677 8.1308429,12.9387544 L10.521982,10.2487255 L3.29290925,6.48022306 C2.22902259,5.92562089 2.79928603,4.30820221 3.97575336,4.54349567 L9.54301892,5.65694879 L10.3659631,4.83400461 C10.7747965,4.42517121 11.4317463,4.41927109 11.8396087,4.82713358 C12.195861,5.18338587 12.241246,5.7318492 11.964558,6.14125661 L11.964558,6.14125661 Z"></path></g></svg>
                <h5 title="Hà Nội → TP HCM" class="destination">{{$chuyenbay->sanbay1->thanhpho->name}} → {{$chuyenbay->sanbay2->thanhpho->name}}</h5>
                <span class="detail-button">Chi tiết</span>
            </div>
            <hr class="border" data-inset="false" style="background-color: rgba(0,0,0,.12);
            border: none;
            height: 1px;
            margin: 0;
            margin-top: -1px;">
            <div class="flight-detail-form-more-detail">
                <h5 class="flight-date">Chuyến bay đi • {{\Carbon\Carbon::parse($chuyenbay->ngaydi)->format('l, d F Y')}}</h5>
                <div class="flight-service-time-consuming">
                    <div class="flight-service">
                        <div class="service-name-and-discount">
                            <div class="service-name">
                                <span class="name-of-airline">{{$chuyenbay->maybay->hangbay->name}}</span>
                            </div>
                            <div class="service-discount">
                                <span style="color: #8f8f8f;font-size:14px;line-height: 20px;">Khuyen mai</span>
                            </div>
                        </div>
                        <div class="service-logo">
                            <img src="{{asset($chuyenbay->maybay->hangbay->avt_url)}}" alt="" style="max-width: 44px;max-height: 44px;">
                        </div>
                    </div>
                    <div class="flight-time-start-end-consuming">
                        <div class="time-with-place" style="padding-right: 8px;">
                            <div class="time-start">
                                <span>{{\Carbon\Carbon::parse($chuyenbay->ngaydi)->format('h:i')}}</span>
                            </div>
                            <div class="place-start">
                                <span>{{$chuyenbay->sanbay1->thanhpho->mathanhpho}}</span>
                            </div>
                        </div>
                        <div class="direction-pointer" style="padding:8px">
                            <svg stroke-width="0" width="12" height="12" viewBox="0 0 12 12" fill="#8f8f8f" stroke="currentColor" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#8f8f8f" fill-rule="evenodd" d="M8.58578644,5 L1.99539757,5 C1.4556644,5 1,5.44771525 1,6 C1,6.55613518 1.44565467,7 1.99539757,7 L8.58578644,7 L7.29289322,8.29289322 C6.90236893,8.68341751 6.90236893,9.31658249 7.29289322,9.70710678 C7.68341751,10.0976311 8.31658249,10.0976311 8.70710678,9.70710678 L11.7071068,6.70710678 C12.0976311,6.31658249 12.0976311,5.68341751 11.7071068,5.29289322 L8.70710678,2.29289322 C8.31658249,1.90236893 7.68341751,1.90236893 7.29289322,2.29289322 C6.90236893,2.68341751 6.90236893,3.31658249 7.29289322,3.70710678 L8.58578644,5 L8.58578644,5 Z"></path></svg>
                        </div>
                        <div class="time-with-place" style="padding: 0 8px;">
                            <div class="time-start">
                                <span>{{\Carbon\Carbon::parse($chuyenbay->ngayden)->format('h:i')}}</span>
                            </div>
                            <div class="place-start">
                                <span>{{$chuyenbay->sanbay2->thanhpho->mathanhpho}}</span>
                            </div>
                        </div>
                        <div class="time-consuming-with-type" style="padding-left: 8px;">
                            <div class="time-consuming">
                                <span>{{\Carbon\Carbon::parse($chuyenbay->ngaydi)->diffInMinutes(\Carbon\Carbon::parse($chuyenbay->ngayden))}}p</span>
                            </div>
                            <span>
                                    <span style="width: 10px;
                      height: 10px;
                      border-radius: 50%;
                      background: #1ba0e2;
                      display: inline-block;
                      margin-right: 8px;
                      vertical-align: middle;"></span>Bay thẳng
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="payback-and-date-change">
                <span class="payback"><svg style="margin-right: 8px;" stroke-width="0" width="16" height="16" viewBox="0 0 16 16" class="_3GhTG" fill="none" stroke="currentColor" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g fill="none" fill-rule="evenodd" stroke-width="0"><rect width="16" height="16"></rect><circle cx="8" cy="8" r="7" stroke-width="2"></circle><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8,8 L8,12"></path><circle cx="8" cy="5" r="1" fill="currentColor"></circle></g></svg><span>Không hoàn tiền</span></span>
                <span class="date-change"><svg style="margin-right: 8px;" stroke-width="0" width="16" height="16" viewBox="0 0 16 16" class="_3GhTG" fill="none" stroke="currentColor" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g fill="none" fill-rule="evenodd"><path d="M0 0h16v16H0z"></path><circle stroke-width="2" cx="8" cy="8" r="7"></circle><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M5 8l2 2 4-4"></path></g></svg><span>Có áp dụng đổi lịch bay</span></span>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade"
             id="exampleModal"
             tabindex="-1"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content container">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tất cả thông tin đặt chỗ của bạn đều đã chính xác?</h5>
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">Bạn muốn tiếp tục?</div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal">
                            Đóng
                        </button>
                        <a href="{{asset('client/html/payment.html')}}" style="color: white; text-decoration:none;">
                            <button type="button" class="btn btn-primary">
                                Tiếp tục
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer-button">
        <a href="">
            <svg stroke-width="0" width="16" height="16" viewBox="0 0 16 16" fill="#fff" stroke="currentColor" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#fff" fill-rule="evenodd" d="M8,16 C3.581722,16 0,12.418278 0,8 C0,3.581722 3.581722,0 8,0 C12.418278,0 16,3.581722 16,8 C16,12.418278 12.418278,16 8,16 Z M8,14 C8.55228475,14 9,13.5522847 9,13 C9,12.4477153 8.55228475,12 8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 Z M12,6 C12,3.790861 10.209139,2 8,2 C6.92557447,2 5.91622834,2.42691741 5.17157288,3.17157288 C4.80069616,3.54244959 4.50524612,3.98305357 4.30388793,4.46864929 C4.09234236,4.97881291 4.33442012,5.5638738 4.84458374,5.77541937 C5.35474736,5.98696494 5.93980825,5.74488718 6.15135382,5.23472356 C6.251828,4.99241988 6.39975256,4.77182032 6.58578644,4.58578644 C6.95908733,4.21248555 7.46145959,4 8,4 C9.1045695,4 10,4.8954305 10,6 C10,7.1045695 9.1045695,8 8,8 C7.44771525,8 7,8.44771525 7,9 L7,10 C7,10.5522847 7.44771525,11 8,11 C8.55228475,11 9,10.5522847 9,10 L9,9.87398251 C10.7252272,9.42993972 12,7.86383943 12,6 Z"></path></svg>
            Bạn cần hỗ trợ?
        </a>
    </div>
</div>
<script src="{{asset('client/js/bootstrap.min.js')}}"></script>
<script src="{{asset('client/js/jquery.js')}}"></script>
<script src="{{asset('client/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

