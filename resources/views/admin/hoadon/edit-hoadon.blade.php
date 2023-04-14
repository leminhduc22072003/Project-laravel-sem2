@section("title")
    Sửa Hóa Đơn
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Sửa Hóa Đơn</h1>
                    <a href="{{route("admin.hoadon.list")}}" class="btn btn-outline-info float-right">
                        Quay lại
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active"> Sửa Hóa Đơn</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> Sửa Hóa Đơn</h3>
                </div>
                <form role="form" method="post" action="{{route("admin.hoadon.update", ['id' => $hoadon->id])}}">
                    @csrf
                    @method("put")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tên khách hàng</label>
                            <select name="user_id" class="form-control">
                                @foreach($users as $item)
                                    <option @if($hoadon->user_id == $item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            @error("user_id")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Mã Chuyến bay	</label>
                            <select name="idchuyenbay" class="form-control">
                                @foreach($chuyenbay as $item)
                                    <option @if($hoadon->idchuyenbay == $item->id) selected @endif value="{{$item->id}}">{{$item->machuyenbay}}</option>
                                @endforeach
                            </select>
                            @error("idchuyenbay")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Loại vé</label>
                            <select name="loaive" class="form-control">
                                @foreach(config('base.type_of_class') as $k => $item)
                                    <option @if($hoadon->idve == $k) selected @endif value="{{$k}}">{{$item}}</option>
                                @endforeach
                            </select>
                            @error("loaive")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Ngày Đặt Vé</label>
                            <input type="date" class="form-control" name="ngaydatve" id="ngaydatve" value="{{$hoadon->chitiethoadon->ngaydatve}}" placeholder="Ngày đặt">
                            @error("ngaydatve")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <select name="trangthai" class="form-control">
                                @foreach(config('base.type_of_bill') as $k => $item)
                                    <option @if($hoadon->chitiethoadon->trangthai == $k) selected @endif value="{{$k}}">{{$item}}</option>
                                @endforeach
                            </select>
                            @error("trangthai")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
