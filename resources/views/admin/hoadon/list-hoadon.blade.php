@section("title")
    Hóa Đơn
@endsection


@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hóa Đơn</h1>
                    <a href="{{route("admin.hoadon.create")}}" class="btn btn-outline-info float-right">
                        Thêm Hóa Đơn
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Hóa Đơn</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form method="get" action="{{route("admin.hoadon.list")}}">
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" >
                                        <input type="text" value="{{app("request")->input("idkh")}}"  name="idkh" class="form-control float-right" placeholder="Search by ID khách hàng">
                                        <select name="Brand" class="form-control float-right">
                                            <option value="">--Select ID--</option>
                                            @foreach($hoadon as $item)
                                                <option @if(app("request")->input("Brand")==$item->idkh)  selected @endif value="{{$item->idkh}}">{{$item->idkh}}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th>Tên khách hàng</th>
                                    <th>Mã chuyến bay</th>
                                    <th>Từ</th>
                                    <th>Đến</th>
                                    <th>Ngày đặt vé</th>
                                    <th>Trạng thái</th>
{{--                                    <th>Cập nhật</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hoadon as $item)
                                    <tr>
                                        <td>{{$item->user->name}}</td>
                                        <td>{{$item->chuyenbay->machuyenbay}}</td>
                                        <td>{{$item->chuyenbay->sanbay1->tensanbay}}</td>
                                        <td>{{$item->chuyenbay->sanbay2->tensanbay}}</td>
                                        <td>{{$item->chitiethoadon ? $item->chitiethoadon['ngaydatve'] : ""}}</td>
                                        <td>{{$item->chitiethoadon ? config('base.type_of_bill')[$item->chitiethoadon->trangthai] : ''}}</td>
                                        <td>{{$item->chitiethoadon ? $item->chitiethoadon->tongtien : ''}}</td>
{{--                                        <td><a href="{{route("admin.hoadon.edit",['id'=>$item->id])}}" class="btn btn-outline-info">+</a></td>--}}
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
    {!! $hoadon-> appends(app("request")->input())-> links() !!}
    </div>
@endsection
