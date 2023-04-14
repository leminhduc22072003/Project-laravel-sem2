@section("title")
    Thêm Chuyến Bay
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("client-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Đặt vé</h1>
                    <a href="{{route("client.hoadon.list")}}" class="btn btn-outline-info float-right">
                        Quay lại
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm chuyến bay</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Đặt vé</h3>
                </div>
                <form role="form" method="get" action="{{route("client.hoadon.create.step2")}}" enctype="multipart/form-data">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="sanbaydi">Nơi đi</label>
                            <select name="sanbaydi" class="form-control">
                                @foreach($thanhpho as $item)
                                    <option  @if(old('noidi') == $item->id) selected @endif value="{{$item->id}}"> {{$item->name}} </option>
                                @endforeach
                                @error("noidi")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nơi đến</label>
                            <select name="sanbayden" class="form-control">
                                @foreach($thanhpho as $item)
                                    <option  @if(old('noiden') == $item->id) selected @endif value="{{$item->id}}"> {{$item->name}} </option>
                                @endforeach
                                @error("noiden")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày đi</label>
                            <input type="date" class="form-control" name="ngaydi" id="ngaydi"  value="{{old("ngaydi")}}" placeholder="Ngày đi">
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

