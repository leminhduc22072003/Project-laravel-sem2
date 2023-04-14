@section("title")
    Quản lý vé máy bay
@endsection


@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý vé máy bay</h1>
{{--                    <a href="{{route("client.hoadon.create.step1")}}" class="btn btn-outline-info float-right">--}}
{{--                        Đặt vé--}}
{{--                    </a>--}}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Quản lý vé máy bay</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
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
    </section>
{{--    {!! $chuyenbay-> appends(app("request")->input())-> links() !!}--}}
    </div>
@endsection

