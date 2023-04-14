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
                    <h1>Thêm chuyến bay</h1>
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
                    <h3 class="card-title">Thêm chuyến bay</h3>
                </div>
                <form role="form" method="post" action="{{route("client.hoadon.store")}}" enctype="multipart/form-data">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Mã Chuyến bay	</label>
                            <select name="idchuyenbay" class="form-control">
                                @foreach($chuyenbay as $item)
                                    <option @if(old("idchuyenbay") == $item->id) selected @endif value="{{$item->id}}">{{$item->machuyenbay}}</option>
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
                                    <option @if(old("idve") == $k) selected @endif value="{{$k}}">{{$item}}</option>
                                @endforeach
                            </select>
                            @error("idchuyenbay")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-secondary" href="{{route('client.hoadon.create.step1')}}" style="float:left"><i class="fas fa-long-arrow-alt-left"></i> Quay lại</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

