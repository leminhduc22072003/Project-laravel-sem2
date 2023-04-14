@section("title")
    Thành phố
@endsection


@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thành phố</h1>
                    <a href="{{route("admin.thanhpho.create")}}" class="btn btn-outline-info float-right">
                        Thêm thành phố
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thành phố</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form method="get" action="{{route("admin.thanhpho.list")}}">
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" >
                                        <input type="text" value="{{app("request")->input("name")}}"  name="name" class="form-control float-right" placeholder="Tìm theo tên thành phố">
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
                                    <th>Tên thành phố</th>
                                    <th>Mã thành phố</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($thanhpho as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->mathanhpho}}</td>
                                        <td><a href="{{route("admin.thanhpho.edit",['id'=>$item->id])}}" class="btn btn-outline-info">+</a></td>
                                        <td>
                                            <form action="{{route("admin.thanhpho.delete",['id'=>$item->id])}}" method="post">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" onclick="return confirm('Xóa Thành Phố {{$item->name}} ?')" class="btn btn-outline-danger">-</button>
                                            </form>
                                        </td>
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
    {!! $thanhpho-> appends(app("request")->input())-> links() !!}
    </div>
@endsection

