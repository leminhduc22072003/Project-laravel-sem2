@section("title")
    Sửa Hãng Bay
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Sửa Hãng Bay</h1>
                    <a href="{{route("admin.hangbay.list")}}" class="btn btn-outline-info float-right">
                        Quay lại
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active"> Sửa hãng bay</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit hãng bay</h3>
                </div>
                <form role="form" method="post" action="{{route("admin.hangbay.update", ['id' => $hangbay->id])}}">
                    @csrf
                    @method("put")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tên hãng bay</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$hangbay->name}}" placeholder="Tên hãng bay">
                            @error("name")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Link avatar</label>
                            <input type="text" class="form-control" name="avt_url" id="avt_url" value="{{$hangbay->avt_url}}" placeholder="Đường dẫn avt">
                            @error("avt_url")
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

