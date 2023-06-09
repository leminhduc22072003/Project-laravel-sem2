<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('client/css/style2.css')}}" />
    <link rel="stylesheet" href="{{asset('client/css/about.css')}}" />
    <link rel="stylesheet"
          href="{{asset('client/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}"
    />
    <link
        rel="stylesheet"
        href="{{asset('client/font-awesome-4.6.3/font-awesome-4.6.3/css/font-awesome.min.css')}}"
    />
    <script src="{{asset('client/js/haijs/jquery-3.2.1.slim.min.js')}}"></script>

    <title>Đặt chỗ của bạn</title>
</head>
<body>

<div class="container-fluid" style="padding: 0">

    </a>
    <div class="header">
        <ul class="nav justify-content-center">
            <a href="{{route('client.main')}}"  class="navbar-brand-cus pl-2">
                <h3 class="m-0 text-primary1"><span class="text-dark">BANANA</span> AIRLINES </h3>

            </a>
            <img class=" col-1" src="{{asset('client/anh/logo2.jpg')}}" alt="">
            <li class="nav-item item-1">
                <div class="nav-item">
                    <div
                        class="nav-item-number"
                        style="background-color: #1ba0e2; opacity: 1"
                    >
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

<!-- Content Vertical Bar -->
<div class="payment1 typeword">
    <div class="container">
        <br />
        <h3 class="mb-1">Đặt chỗ của tôi</h3>
        <p class="card-text">Điền thông tin và xem lại đặt chỗ.</p>
        <br />
        <div class="row">
            <div class="col-md-8">
                <h4 class="mb-1">Thông tin liên hệ</h4>
                <br />
                <div class="row">
                    <form method="post" action="{{route("client.booking.post")}}">
                        @csrf
                        @method("post")
                        <div class="col-md-12">
                            <div class="user-details bg-white borderradius">
                                <br />
                                <div class="container">
                                    <p class="mb-1 h5">
                                        <b>Thông tin liên hệ</b
                                        ><span class="float-right text-primary"
                                        ><b>Điền thông tin</b></span
                                        >
                                    </p>
                                    <hr />
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label> Họ (vd: Le)* </label>
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="như trên CMND (không dấu)"
                                                    name="first_name1"
                                                />
                                            </div>
                                            @error("first_name1")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label> Tên Đệm & Tên (vd: Thi Phuong Phuong)* </label>
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="như trên CMND (không dấu)"
                                                    name="last_name1"
                                                />
                                            </div>
                                            @error("last_name1")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label> Điện thoại di động* </label>
                                            <input
                                                type="tel"
                                                class="form-control"
                                                placeholder="VD: +84 901234567"
                                                name="sdt1"
                                            />
                                            @error("sdt1")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label> Email* </label>
                                            <input
                                                type="email"
                                                class="form-control"
                                                placeholder="VD: email@example.com"
                                                name="email1"
                                            />
                                            @error("email1")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <br class="n1" />
                            </div>
                            <br />
                            <h4>Thông tin hành khách</h4>
                            <br />
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="user-details bg-white borderradius">
                                        <div class="container">
                                            <div>
                                                <br />
                                                <p class="mb-1 h5">
                                                    <b>Người lớn 1</b
                                                    ><span class="float-right text-primary"
                                                    ><b>Điền thông tin</b></span
                                                    >
                                                </p>
                                            </div>
                                            <hr />
                                            <p class="card-text">
                                                Tên không dấu (Tên, Đệm , Họ . VD: Phuong Phuong Thi Le )
                                            </p>
                                            <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label> Danh xưng* </label>
                                                        <select class="custom-select form-control" name="gioitinh">
                                                            <option value="1">Ông</option>
                                                            <option value="2">Bà</option>
                                                            <option value="3">Cô</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-9">
                                                        <label> </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label> Họ (vd: Le)* </label>
                                                        <div class="input-group">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Như trên CMND (không dấu)"
                                                                name="first_name"
                                                            />
                                                        </div>
                                                        @error("first_name")
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label> Tên Đệm & Tên (vd: Thi Phuong Phuong)* </label>
                                                        <div class="input-group">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="như trên CMND (không dấu)"
                                                                name="last_name"
                                                            />
                                                        </div>
                                                        @error("last_name")
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label> Mobile Number* </label>
                                                        <input
                                                            type="tel"
                                                            class="form-control"
                                                            placeholder="VD: +84 901234567"
                                                            name="sdt"
                                                        />
                                                        @error("sdt")
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label> Email* </label>
                                                        <input
                                                            type="email"
                                                            class="form-control"
                                                            placeholder="VD: email@example.com"
                                                            name="email"
                                                        />
                                                        @error("email")
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label> Ngày sinh* </label>
                                                        <input type="date" class="form-control" name="sinhnhat"/>
                                                        @error("sinhnhat")
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label> Quốc tịch* </label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Vietnam"
                                                            name="quoctich"
                                                        />
                                                        @error("quoctich")
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                        </div>
                                        <br />
                                    </div>
                                </div>
                            </div>

                            <div class="pt-2">
                                <button type="submit" class="btn btn-primary float-right custom1">
                                        Tiếp tục
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white rounded shadow-sm p-4 payment">
                    <div class="flight-detail-form-destination">
                        <svg
                            stroke-width="0"
                            fill="#30C5F7"
                            height="24"
                            stroke="currentColor"
                            stroke-linecap="round"
                            viewBox="0 0 24 24"
                            width="24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                        >
                            <g>
                                <path
                                    d="M11.964558,6.14125661 L13.8541043,6.51916587 L18.4496899,2.52012268 C19.2945553,1.78492726 20.5835088,1.83683661 21.3736438,2.62697164 C22.1650971,3.41842491 22.2129336,4.70922562 21.4804928,5.55092556 L17.4814496,10.1465111 L17.8594278,12.0364023 C18.2650613,11.7637492 18.8153146,11.8028394 19.1734819,12.1610067 C19.5785205,12.5660453 19.5817196,13.2195436 19.1666108,13.6346524 L18.3436667,14.4575965 L19.4571198,20.0248621 C19.6924132,21.2013294 18.0749946,21.7715929 17.5203924,20.7077062 L13.7517141,13.4782961 L11.0209323,15.9043041 C10.8211477,16.0642187 10.5379244,16.2308982 10.1689883,16.3363433 C10.0940337,16.357766 10.0187022,16.3753374 9.94322578,16.3889171 L9.94322578,20.9616545 C9.94322578,22.0135724 8.55790407,22.3972843 8.01669675,21.4952721 L5.94993922,18.0506762 L2.50534335,15.9839187 C1.60333115,15.4427114 1.98704305,14.0573897 3.038961,14.0573897 L7.61169837,14.0573897 C7.62527807,13.9819133 7.64284943,13.9065817 7.66427211,13.8316272 C7.76971729,13.4626911 7.93639679,13.1794677 8.1308429,12.9387544 L10.521982,10.2487255 L3.29290925,6.48022306 C2.22902259,5.92562089 2.79928603,4.30820221 3.97575336,4.54349567 L9.54301892,5.65694879 L10.3659631,4.83400461 C10.7747965,4.42517121 11.4317463,4.41927109 11.8396087,4.82713358 C12.195861,5.18338587 12.241246,5.7318492 11.964558,6.14125661 L11.964558,6.14125661 Z"
                                ></path>
                            </g>
                        </svg>
                        <h5 title="Hà Nội → TP HCM" class="destination">
                            {{$chuyenbay->sanbay1->thanhpho->name}} → {{$chuyenbay->sanbay2->thanhpho->name}}
                        </h5>
                        <span class="detail-button">Chi tiết</span>
                    </div>
                    <hr
                        class="border"
                        data-inset="false"
                        style="
                  background-color: rgba(0, 0, 0, 0.12);
                  border: none;
                  height: 1px;
                  margin: 0;
                  margin-top: -1px;
                "
                    />
                    <div class="flight-detail-form-more-detail">
                        <h5 class="flight-date">Chuyến bay đi • {{\Carbon\Carbon::parse($chuyenbay->ngaydi)->format('l, d F Y')}}</h5>
                        <div class="flight-service-time-consuming">
                            <div class="flight-service">
                                <div class="service-name-and-discount">
                                    <div class="service-name">
                                        <span class="name-of-airline">{{$chuyenbay->maybay->hangbay->name}}</span>
                                    </div>
                                    <div class="service-discount">
                        <span
                            style="
                            color: #8f8f8f;
                            font-size: 14px;
                            line-height: 20px;
                          "
                        >Khuyen mai</span
                        >
                                    </div>
                                </div>
                                <div class="service-logo">
                                    <img
                                        src="{{asset($chuyenbay->maybay->hangbay->avt_url)}}"
                                        alt=""
                                        style="max-width: 44px; max-height: 44px"
                                    />
                                </div>
                            </div>
                            <div class="flight-time-start-end-consuming">
                                <div class="time-with-place" style="padding-right: 8px">
                                    <div class="time-start">
                                        <span>{{\Carbon\Carbon::parse($chuyenbay->ngaydi)->format('h:i')}}</span>
                                    </div>
                                    <div class="place-start">
                                        <span>{{$chuyenbay->sanbay1->thanhpho->mathanhpho}}</span>
                                    </div>
                                </div>
                                <div class="direction-pointer" style="padding: 8px">
                                    <svg
                                        stroke-width="0"
                                        width="12"
                                        height="12"
                                        viewBox="0 0 12 12"
                                        fill="#8f8f8f"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                    >
                                        <path
                                            fill="#8f8f8f"
                                            fill-rule="evenodd"
                                            d="M8.58578644,5 L1.99539757,5 C1.4556644,5 1,5.44771525 1,6 C1,6.55613518 1.44565467,7 1.99539757,7 L8.58578644,7 L7.29289322,8.29289322 C6.90236893,8.68341751 6.90236893,9.31658249 7.29289322,9.70710678 C7.68341751,10.0976311 8.31658249,10.0976311 8.70710678,9.70710678 L11.7071068,6.70710678 C12.0976311,6.31658249 12.0976311,5.68341751 11.7071068,5.29289322 L8.70710678,2.29289322 C8.31658249,1.90236893 7.68341751,1.90236893 7.29289322,2.29289322 C6.90236893,2.68341751 6.90236893,3.31658249 7.29289322,3.70710678 L8.58578644,5 L8.58578644,5 Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="time-with-place" style="padding: 0 8px">
                                    <div class="time-start">
                                        <span>{{\Carbon\Carbon::parse($chuyenbay->ngayden)->format('h:i')}}</span>
                                    </div>
                                    <div class="place-start">
                                        <span>{{$chuyenbay->sanbay2->thanhpho->mathanhpho}}</span>
                                    </div>
                                </div>
                                <div
                                    class="time-consuming-with-type"
                                    style="padding-left: 8px"
                                >
                                    <div class="time-consuming">
                                        <span>{{\Carbon\Carbon::parse($chuyenbay->ngaydi)->diffInMinutes(\Carbon\Carbon::parse($chuyenbay->ngayden))}}p</span>
                                    </div>
                                    <span>
                        <span
                            style="
                            width: 10px;
                            height: 10px;
                            border-radius: 50%;
                            background: #1ba0e2;
                            display: inline-block;
                            margin-right: 8px;
                            vertical-align: middle;
                          "
                        ></span
                        >Bay thẳng
                      </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payback-and-date-change">
                <span class="payback"
                ><svg
                        style="margin-right: 8px"
                        stroke-width="0"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        class="_3GhTG"
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                    <g fill="none" fill-rule="evenodd" stroke-width="0">
                      <rect width="16" height="16"></rect>
                      <circle cx="8" cy="8" r="7" stroke-width="2"></circle>
                      <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-width="2"
                          d="M8,8 L8,12"
                      ></path>
                      <circle cx="8" cy="5" r="1" fill="currentColor"></circle>
                    </g></svg
                    ><span>Không hoàn tiền</span></span
                >
                        <span class="date-change"
                        ><svg
                                style="margin-right: 8px"
                                stroke-width="0"
                                width="16"
                                height="16"
                                viewBox="0 0 16 16"
                                class="_3GhTG"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                            >
                    <g fill="none" fill-rule="evenodd">
                      <path d="M0 0h16v16H0z"></path>
                      <circle stroke-width="2" cx="8" cy="8" r="7"></circle>
                      <path
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 8l2 2 4-4"
                      ></path>
                    </g></svg
                            ><span>Có áp dụng đổi lịch bay</span></span
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <br />
</div>
<div class="footer">
    <div class="footer-button">
        <a href="">
            <svg
                stroke-width="0"
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="#fff"
                stroke="currentColor"
                stroke-linecap="round"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
            >
                <path
                    fill="#fff"
                    fill-rule="evenodd"
                    d="M8,16 C3.581722,16 0,12.418278 0,8 C0,3.581722 3.581722,0 8,0 C12.418278,0 16,3.581722 16,8 C16,12.418278 12.418278,16 8,16 Z M8,14 C8.55228475,14 9,13.5522847 9,13 C9,12.4477153 8.55228475,12 8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 Z M12,6 C12,3.790861 10.209139,2 8,2 C6.92557447,2 5.91622834,2.42691741 5.17157288,3.17157288 C4.80069616,3.54244959 4.50524612,3.98305357 4.30388793,4.46864929 C4.09234236,4.97881291 4.33442012,5.5638738 4.84458374,5.77541937 C5.35474736,5.98696494 5.93980825,5.74488718 6.15135382,5.23472356 C6.251828,4.99241988 6.39975256,4.77182032 6.58578644,4.58578644 C6.95908733,4.21248555 7.46145959,4 8,4 C9.1045695,4 10,4.8954305 10,6 C10,7.1045695 9.1045695,8 8,8 C7.44771525,8 7,8.44771525 7,9 L7,10 C7,10.5522847 7.44771525,11 8,11 C8.55228475,11 9,10.5522847 9,10 L9,9.87398251 C10.7252272,9.42993972 12,7.86383943 12,6 Z"
                ></path>
            </svg>
            Bạn cần hỗ trợ?
        </a>
    </div>
</div>
</body>
</html>
