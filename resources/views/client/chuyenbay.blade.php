

<!DOCTYPE html>
<html>

<head>
    <title>Chuyến bay</title>
    <link rel="stylesheet" href="{{asset('client/icon/css/all.min.css')}}" />
    <!-- <link rel="stylesheet" href="{{asset('client/fontawesome-free-5.15.4/css/all.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('client/fontawesome-free-5.15.4/css/grid.css')}}"> -->
    <link rel="stylesheet" href="{{asset('client/css/chuyenbay.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/footer.css')}}">
    <style>
    </style>
    <script type="text/javascript" src="{{asset('client/js/jquery.js')}}">
    </script>
    <script>
        $(document).ready(function () {
            $("#chitiet").click(function () {
                $(".thongtinchitiet").toggle();
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#chitiet1").click(function () {
                $(".thongtinchitiet1").toggle();
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#chitiet2").click(function () {
                $(".thongtinchitiet2").toggle();
            });
        });
    </script>
</head>

<body style="margin:0;">
<div class="header" style="width: 100%;"></div>
<div class="chuyenbay-content">
    <section class="tenchuyenbay">
        <div class="row">
            <div class="col span-3-of-4 a">
                <div class="tenchuyenbay1">
                    <div class="diemdiden" style="font-size: 110%; font-weight: 700;">
                        <span>{{$thanhphodi->name}} ({{$thanhphodi->mathanhpho}})</span> <span><i class="fas fa-arrow-right"></i></span> <span>{{$thanhphoden->name}} ({{$thanhphoden->mathanhpho}})</span>
                    </div>
                    <div class="thoigian" style="margin-top: 10px; color: #837b7b;">
                        <span>{{\Carbon\Carbon::parse(request()->get('ngaydi'))->format('l d-m-Y')}}</span> <span> | </span> <span>1 hành khách</span> <span>
                                |
                            </span> <span> Phổ thông</span>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-6 b">
                <a href="#" class="btn" style="border-radius: 5px"><i class="fas fa-search"></i> Đổi tìm kiếm</a>
            </div>
        </div>
    </section>
    <section class="boloc typeword">
        <div>
            <ul>
                <li>
                    <p>Bộ lọc:</p>
                </li>
                <li>
                    <select class="item">
                        <optgroup>
                            <option value="" selected disabled hidden class="typeword">Điểm dừng</option>
                            <option>Bay thẳng</option>
                            <option>1 điểm dừng</option>
                            <option>2 điểm dừng</option>
                        </optgroup>
                    </select>
                </li>
                <li>
                    <select class="item">
                        <optgroup>
                            <option value="" selected disabled hidden>Thời gian bay</option>
                            <option>Sáng</option>
                            <option>Chiều</option>
                            <option>Tối</option>
                            <option>Đêm</option>
                        </optgroup>
                    </select>
                </li>
                <li>
                    <select class="item">
                        <optgroup>
                            <option value="" selected disabled hidden>Hãng hàng không</option>
                            <option>Vienam Airlines</option>
                            <option>Vietjet Air</option>
                            <option>Bamboo Airways</option>
                        </optgroup>
                    </select>
                </li>
                <li>
                    <select class="item">
                        <optgroup>
                            <option value="" selected disabled hidden>Sắp xếp</option>
                            <option>Giá thấp nhất</option>
                            <option>Bay sớm nhất</option>
                            <option>Bay muộn nhất</option>
                            <option>Thời gian bay ngắn nhất</option>
                        </optgroup>
                    </select>
                </li>
            </ul>
        </div>
    </section>
    <section class="thongtinchuyenbay">
        @foreach($chuyenbay as $k => $item)
            <div class="thongtin">
                <div class="thongtinhien">
                    <ul>
                        <li><img src="{{asset($item->maybay->hangbay->avt_url)}}" alt="vietnam airlines" style="width: 100px"></li>
                        <li>
                            <p>{{\Carbon\Carbon::parse($item->ngaydi)->format('H:i')}} <p style="color:#837b7b; margin-top: 5px;"> {{$thanhphodi->name}} <br> ({{$thanhphodi->mathanhpho}})</p></p>
                        </li>
                        <i class="fas fa-plane icon-plane"></i>
                        <li>
                            <p>{{\Carbon\Carbon::parse($item->ngayden)->format('H:i')}} <br> <p style="color:#837b7b; margin-top: 5px;"> {{$thanhphoden->name}} <br> ({{$thanhphoden->mathanhpho}})</p></p>
                        </li>
                        <li>
                            <p>{{\Carbon\Carbon::parse($item->ngaydi)->diffInMinutes(\Carbon\Carbon::parse($item->ngayden))}}p <br><p style="color:#837b7b; margin-top: 5px;"> Bay thẳng</p></p>
                        </li>
                        <li>
                            <p>
                                <span class="price"> {{number_format($item->giave)}} VND</span> <span>/ khách</span> <br> <a href="{{route('client.pre-booking', ['chuyenbay' => $item->machuyenbay])}}" class="btn" style="border-radius: 5px">Chọn</a>
                            </p>
                        </li>
                    </ul>
                    <a href="#" id="chitiet">Thông tin chi tiết chuyến bay</a>
                    <!-- <button id="chitiet">Thông tin chi tiết chuyến bay</button> -->
                </div>
                <div class="thongtinchitiet">
                    <div class="thongtinbay">
                        <div class="thoigian">
                            <div> {{\Carbon\Carbon::parse($item->ngaydi)->format('H:i')}}</div>
                            <div> {{\Carbon\Carbon::parse($item->ngaydi)->format('d F')}}</div>
                        </div>

                        <div class="diadiem" style="padding-left: 80px;">
                            <div>{{$thanhphodi->name}} ({{$thanhphodi->mathanhpho}})</div>
                            <div>Sân bay {{$item->sanbay1->tensanbay}}</div>
                        </div>
                    </div>
                    <div class="mid">
                        <div class="giobay" style="transform: translateY(400%);"><i class="far fa-clock"></i> {{\Carbon\Carbon::parse($item->ngaydi)->diffInMinutes(\Carbon\Carbon::parse($item->ngayden))}}p</div>
                        <div class="line"><img src="{{asset('client/anh/Screenshot 2021-09-23 010653.png')}}" alt=""></div>
                        <div class="ve">
                            <div class="col span-1-of-3" style="display: flex;">
                                <div class="logo">
                                    <img src="{{asset(asset($item->maybay->hangbay->avt_url))}}" alt=""
                                         style="width: 30px; transform: translateY(-20%);">
                                </div>
                                <div class="ten" style="margin-left: 10px;">
                                    <div>{{$item->maybay->hangbay->name}} {{$item->maybay->name}}</div>
                                    <div style="margin-top: 10px;">Phổ thông</div>
                                </div>
                            </div>
                            <div class="col span-1-of-3 a">
                                <div class="hanhli">
                                    <div style="display: flex;">
                                        <div><i class="fas fa-suitcase-rolling icon"></i></div>
                                        <div style="margin-left: 10px;">
                                            <div>Hành lí 23kg</div>
                                            <div style="margin-top:5px ;">Hành lí xách tay 12kg</div>
                                            <div style="margin-top:5px ; ">
                                                <i class="fa fa-info-circle icon"
                                                   style="margin-right: 5px;"></i>Không có hành lí mua thêm
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: flex;">
                                    <div class="icon" style="margin-top: 10px;"><i class="fa fa-utensils"></i></div>
                                    <div style="margin-left: 10px; margin-top: 10px;">Suất ăn</div>
                                </div>
                                <div style="display: flex;">
                                    <div class="icon" style="margin-top: 10px;"><i class="fa fa-tv"></i></div>
                                    <div style="margin-left: 10px; margin-top: 10px;">Giải trí</div>
                                </div>
                                <div style="display: flex;">
                                    <div class="icon" style="margin-top: 10px;"><i class="fa fa-battery-full"></i></div>
                                    <div style="margin-left: 10px; margin-top: 10px;">Nguồn sạc & cổng USB</div>
                                </div>
                            </div>
                            <div class="col span-1-of-3">
                                <div class="maybay">
                                    <div style="display: flex;">
                                        <div><i class="fa fa-info-circle icon"></i></i></div>
                                        <div style="margin-left: 10px;">
                                            <div>Máy bay {{$item->maybay->tenmaybay}}</div>
                                            <div style="margin-top:10px ;">Sơ đồ ghế ngồi 3-3-3</div>
                                            <div style="margin-top:10px ;">Khoảng cách ghê 32 inches</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thongtinbay">
                        <div class="thoigian">
                            <div> {{\Carbon\Carbon::parse($item->ngayden)->format('H:i')}}</div>
                            <div> {{\Carbon\Carbon::parse($item->ngayden)->format('d F')}}</div>
                        </div>
                        <div class="diadiem" style="padding-left: 80px;">
                            <div>{{$thanhphoden->name}} ({{$thanhphoden->mathanhpho}})</div>
                            <div>Sân bay {{$item->sanbay2->tensanbay}}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>


</div>
</body>

</html>

