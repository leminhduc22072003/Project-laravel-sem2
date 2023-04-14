@section("title")
    Máy Bay
@endsection


@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Máy Bay</h1>
                    <a href="{{route("admin.maybay.create")}}" class="btn btn-outline-info float-right">
                        Thêm Máy Bay
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Máy bay</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form method="get" action="{{route("admin.maybay.list")}}">
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" >
                                        <input type="text" value="{{app("request")->input("hangmaybay")}}"  name="hangmaybay" class="form-control float-right" placeholder="Tìm theo hãng">
                                        <input type="text" value="{{app("request")->input("tenmaybay")}}"  name="tenmaybay" class="form-control float-right" placeholder="Tìm theo tên ">
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
                                    <th>Hãng máy bay</th>
                                    <th>Tên máy bay</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($maybay as $item)
                                    <tr>
                                        <td>{{$item->hangbay->name}}</td>
                                        <td>{{$item->tenmaybay}}</td>
                                        <td><a href="{{route("admin.maybay.edit",['id'=>$item->id])}}" class="btn btn-outline-info">+</a></td>
                                        <td>
                                            <form action="{{route("admin.maybay.delete",['id'=>$item->id])}}" method="post">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" onclick="return confirm('Xóa Máy Bay {{$item->tenmaybay}} ?')" class="btn btn-outline-danger">-</button>
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
    {!! $maybay-> appends(app("request")->input())-> links() !!}
    </div>
@endsection

