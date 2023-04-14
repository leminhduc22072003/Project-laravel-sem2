@section("title")
    Hãng Bay
@endsection


@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hãng Bay</h1>
                    <a href="{{route("admin.hangbay.create")}}" class="btn btn-outline-info float-right">
                        Thêm Hãng Bay
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Hãng bay</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th>Tên Hãng bay</th>
                                    <th>avt máy bay</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hangbay as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <img src="{{asset($item->avt_url)}}" style="width: 45px; transform: translateY(-20%);">
                                        </td>
                                        <td><a href="{{route("admin.hangbay.edit",['id'=>$item->id])}}" class="btn btn-outline-info">+</a></td>
                                        <td>
                                            <form action="{{route("admin.hangbay.delete",['id'=>$item->id])}}" method="post">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" onclick="return confirm('Xóa Hãng Bay {{$item->tenhangbay}} ?')" class="btn btn-outline-danger">-</button>
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
    </div>
@endsection

