@section("title")
    Sửa Thành Phố
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Sửa Thành Phố</h1>
                    <a href="{{route("admin.thanhpho.list")}}" class="btn btn-outline-info float-right">
                        Quay lại
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active"> Sửa thành phố</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Sửa thành phố</h3>
                </div>
                <form role="form" method="post" action="{{route("admin.thanhpho.store")}}">
                    @csrf
                    @method("put")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tên thành phố</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$thanhpho->name}}" placeholder="Tên thành phố">
                            @error("tenthanhpho")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Mã thành phố</label>
                            <input type="text" class="form-control" name="mathanhpho" id="mathanhpho" value="{{$thanhpho->mathanhpho}}" placeholder="Mã thành phố">
                            @error("mathanhpho")
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

