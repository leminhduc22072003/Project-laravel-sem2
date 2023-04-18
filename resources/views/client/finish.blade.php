<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('client/css/payment.css')}}">
    <link rel="stylesheet" href="{{asset('client/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/font-awesome-4.6.3/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style2.css')}}" />
    <link rel="stylesheet" href="{{asset('client/css/about.css')}}" />
    <script src="{{asset('client/js/jquery-3.2.1.slim.min.js')}}"></script>
    <script src="{{asset('client/popper.js.1.12.9/content/Scripts/umd/popper.min.js')}}"></script>
    <script src="{{asset('client/js/js/bootstrap.min.js')}}"></script>

    <title>Payment</title>
</head>
<body>
<header>

    <div class="container-fluid" style="padding: 0">
        <div class="header">
            <ul class="nav justify-content-center">
                <a href="{{route('client.main')}}"  class="navbar-brand-cus pl-2">
                    <h3 class="m-0 text-primary1"><span class="text-dark">BANANA</span> AIRLINES </h3>

                </a>
                <img class=" col-1" src="{{asset('client/anh/logo2.jpg')}}" alt="">
                <li class="nav-item item-1">
                    <div class="nav-item">
                        <div class="nav-item-number">1</div>
                        <div class="nav-item-text" style=" opacity: 0.6">
                            Đặt chỗ
                        </div>
                    </div>
                </li>
                <li class="nav-item item-2">
                    <div class="nav-item">
                        <div class="nav-item-number">
                            2
                        </div>
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
                        <div class="nav-item-number" style="background-color: #1ba0e2; opacity: 1">4</div>
                        <div class="nav-item-text" style="color:#1ba0e2; opacity: 1">Phát hành vé điện tử</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- Content Vertical Bar -->
<div class="payment1">
    <div class="container">
        <br>
        <h4 class="mb-1 typeword">Thông tin vé</h4>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white rounded shadow-sm p-4 payment">
                    <div class="row">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th>Mã vé</th>
                                <th>Chuyến bay</th>
                                <th>Từ</th>
                                <th>Đến</th>
                                <th>Ngày đi</th>
                                <th>Ngày đến</th>
                                <th>Trạng thái</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ve as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->chuyenbay->machuyenbay}}</td>
                                    <td>{{$item->chuyenbay->sanbay1->tensanbay}}</td>
                                    <td>{{$item->chuyenbay->sanbay2->tensanbay}}</td>
                                    <td>{{$item->chuyenbay->ngaydi}}</td>
                                    <td>{{$item->chuyenbay->ngayden}}</td>
                                    <td>{{config('base.type_of_bill')[$item->hoadon->chitiethoadon->trangthai]}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</div>
<div class="footer">
    <div class="footer-button">
        <a href="">
            <svg stroke-width="0" width="16" height="16" viewBox="0 0 16 16" fill="#fff" stroke="currentColor" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#fff" fill-rule="evenodd" d="M8,16 C3.581722,16 0,12.418278 0,8 C0,3.581722 3.581722,0 8,0 C12.418278,0 16,3.581722 16,8 C16,12.418278 12.418278,16 8,16 Z M8,14 C8.55228475,14 9,13.5522847 9,13 C9,12.4477153 8.55228475,12 8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 Z M12,6 C12,3.790861 10.209139,2 8,2 C6.92557447,2 5.91622834,2.42691741 5.17157288,3.17157288 C4.80069616,3.54244959 4.50524612,3.98305357 4.30388793,4.46864929 C4.09234236,4.97881291 4.33442012,5.5638738 4.84458374,5.77541937 C5.35474736,5.98696494 5.93980825,5.74488718 6.15135382,5.23472356 C6.251828,4.99241988 6.39975256,4.77182032 6.58578644,4.58578644 C6.95908733,4.21248555 7.46145959,4 8,4 C9.1045695,4 10,4.8954305 10,6 C10,7.1045695 9.1045695,8 8,8 C7.44771525,8 7,8.44771525 7,9 L7,10 C7,10.5522847 7.44771525,11 8,11 C8.55228475,11 9,10.5522847 9,10 L9,9.87398251 C10.7252272,9.42993972 12,7.86383943 12,6 Z"></path></svg>
            Bạn cần hỗ trợ?
        </a>
    </div>
</div>
</body>
</html>

