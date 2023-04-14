@section("title")
    Sửa Máy Bay
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Sửa Máy Bay</h1>
                    <a href="{{route("admin.maybay.list")}}" class="btn btn-outline-info float-right">
                        Quay lại
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active"> Sửa máy bay</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit máy bay</h3>
                </div>
                <form role="form" method="post" action="{{route("admin.maybay.update")}}">
                    @csrf
                    @method("put")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Hãng máy bay</label>
                            <select name="idhangbay" class="form-control">
                                @foreach($hangbay as $item)
                                    <option  @if($maybay->idhangbay == $item->id) selected @endif value="{{$item->id}}"> {{$item->name}} </option>
                                @endforeach
                            </select>
                            @error("idhangbay")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Tên máy bay</label>
                            <input type="text" class="form-control" name="tenmaybay" id="tenmaybay"  value="{{$maybay->tenmaybay}}" placeholder="Tên máy bay">
                            @error("tenmaybay")
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

