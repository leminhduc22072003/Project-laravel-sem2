<!DOCTYPE html>
<html>
<head>
    <title>Xem lại</title>
    <link rel="stylesheet" href="{{asset('client/icon/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/icon/css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('client/css/grid.css')}}" />

    <style></style>
</head>

<body style="margin: 0">
<div class="header" style="width: 100%"></div>
<div class="prebooking-content">
    <div class="body">
        <div class="thongtin" style="display: flex">
            <div class="ten">Flight from {{$chuyenbay->sanbay1->thanhpho->name}} to {{$chuyenbay->sanbay2->thanhpho->name}}</div>
            <div>
                <img
                    src="{{asset('client/anh/Screenshot 2021-09-23 090535.png')}}"
                    alt=""
                    style="right: 10px"
                />
            </div>
        </div>

        <div class="thoigiandiadiem" style="display: flex">
            <div><i class="fas fa-plane icon"></i></div>
            <div style="display: flex; color: #837b7b">
                <div class="diemdi" style="margin-left: 10px">{{$chuyenbay->sanbay1->thanhpho->name}}  ({{$chuyenbay->sanbay1->thanhpho->mathanhpho}})</div>
                <div style="margin-left: 10px">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="diemden" style="margin-left: 10px">{{$chuyenbay->sanbay2->thanhpho->name}}  ({{$chuyenbay->sanbay2->thanhpho->mathanhpho}})</div>
                <div style="margin-left: 10px">|</div>
                <div style="margin-left: 10px">{{\Carbon\Carbon::parse($chuyenbay->ngaydi)->format('d-m-Y')}}</div>
            </div>
        </div>
        <div style="display: flex; color: #837b7b">
            <div style="margin-left: 25px">1 nguời lớn</div>
            <div style="margin-left: 10px">|</div>
            <div style="margin-left: 10px">Phổ thông</div>
        </div>
    </div>
    <div class="chitiet">
        <div class="row">
            <div class="col span-3-of-5">
                <div class="thongtin1" style="display: flex">
                    <div>
                        <i class="fas fa-plane icon;" style="color: #3399ff"></i>
                    </div>
                    <div style="margin-left: 15px">{{$chuyenbay->sanbay1->thanhpho->name}}  ({{$chuyenbay->sanbay1->thanhpho->mathanhpho}})</div>
                    <div style="margin-left: 15px">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    <div style="margin-left: 15px">{{$chuyenbay->sanbay2->thanhpho->name}}  ({{$chuyenbay->sanbay2->thanhpho->mathanhpho}})</div>
                    <a href="#">Thông tin chuyến bay</a>
                </div>
                <div class="ngay">
                    <div class="ngaybay">{{\Carbon\Carbon::parse($chuyenbay->ngaydi)->format('l, d F Y')}}</div>
                    <div style="display: flex; margin-top: 10px">
                        <div>
                            <img
                                src="{{asset($chuyenbay->maybay->hangbay->avt_url)}}"
                                alt=""
                                style="width: 45px; transform: translateY(-10%)"
                            />
                        </div>
                        <div style="margin-left: 10px">
                            <div>{{$chuyenbay->maybay->hangbay->name}}</div>
                            <div style="margin-top: 4px; color: #837b7b">Khuyến mãi</div>
                        </div>
                    </div>
                    <div style="display: flex">
                        <div>
                            <div>{{\Carbon\Carbon::parse($chuyenbay->ngaydi)->format('h:i')}}</div>
                            <div style="color: #837b7b">{{$chuyenbay->sanbay1->thanhpho->name}}  ({{$chuyenbay->sanbay1->thanhpho->mathanhpho}})</div>
                        </div>
                        <div style="margin-left: 15px; transform: translateY(20%)">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div style="margin-left: 15px">
                            <div>{{\Carbon\Carbon::parse($chuyenbay->ngayden)->format('h:i')}}</div>
                            <div style="color: #837b7b">{{$chuyenbay->sanbay2->thanhpho->name}}  ({{$chuyenbay->sanbay2->thanhpho->mathanhpho}})</div>
                        </div>
                        <div style="margin-left: 20px">
                            <div>{{\Carbon\Carbon::parse($chuyenbay->ngaydi)->diffInMinutes(\Carbon\Carbon::parse($chuyenbay->ngayden))}}p</div>
                            <div style="color: #837b7b">
                                <i
                                    class="fas fa-circle"
                                    style="color: blue; margin-right: 5px"
                                ></i
                                >Bay thẳng
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="b" style="display: flex">
                    <div><i class="fas fa-file-alt"></i></div>
                    <div
                        style="margin-left: 20px; font-size: 110%; font-weight: bold"
                    >
                        Thông tin bổ sung
                    </div>
                    <div>
                        <a
                            href="#"
                            style="
                    text-decoration: none;
                    position: absolute;
                    right: 25px;
                    font-weight: bold;
                  "
                        >Chi tiết</a
                        >
                    </div>
                </div>
                <div class="tien">
                    <div style="display: flex">
                        <div style="margin-left: 15px">{{$chuyenbay->sanbay1->thanhpho->mathanhpho}}</div>
                        <div style="margin-left: 15px">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div style="margin-left: 15px">{{$chuyenbay->sanbay2->thanhpho->mathanhpho}}</div>
                    </div>
                    <div style="margin-top: 15px">
                        <i
                            class="fa fa-info-circle"
                            style="margin-right: 15px; color: #3399ff"
                        ></i
                        >Không hoàn tiền
                    </div>
                    <div style="margin-top: 15px">
                        <i
                            class="fa fa-info-circle"
                            style="margin-right: 15px; color: #3399ff"
                        ></i
                        >Có áp dụng đổi lịch bay
                    </div>
                </div>
                <div class="tomtat">Tóm tắt</div>
                <div class="giave" style="display: flex">
                    <div style="width: 180px">Vietnam Airlines(Người lớn) x1</div>
                    <div style="margin-left: 15px; font-weight: 900">VND {{number_format($chuyenbay->giave)}}</div>
                </div>
                <div class="giave" style="display: flex">
                    <div style="width: 180px">Giá bạn trả</div>
                    <div style="margin-left: 15px; font-weight: 900">VND {{number_format($chuyenbay->giave)}}</div>
                </div>
                <div>
                    <a href="{{route('client.booking', ['chuyenbay' => $chuyenbay->machuyenbay])}}" class="btn">Tiếp tục</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
