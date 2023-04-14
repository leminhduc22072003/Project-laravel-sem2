<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Airplane-login</title>
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/myStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('css/client.css')}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <style type="text/css">
        .login-form {
            width: 340px;
            margin: 50px auto;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .input-group-addon .fa {
            font-size: 18px;
        }
        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<section class="body-content">
    <div class="container">
        <div class="col-md-12">
            <h2 style="text-align: center">
                Đăng ký
            </h2>
            @if(@isset($error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endif
            <form action="{{route('client.user.post-register')}}" method="post" role="form">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Địa chỉ email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}" id="exampleFormControlInput1" placeholder="Địa chỉ email">
                    @error('email')
                    <p class="danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Mật khẩu</label>
                    <input class="form-control" type="password" name="password" value="{{old('password')}}" id="exampleFormControlInput1" placeholder="Mật khẩu">
                    @error('password')
                    <p class="danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Họ và tên</label>
                    <input class="form-control" name="name" value="{{old('name')}}" id="exampleFormControlInput1" placeholder="Họ và tên">
                    @error('name')
                    <p class="danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Số điện thoại</label>
                    <input class="form-control" name="sdt" value="{{old('sdt')}}" id="exampleFormControlInput1" placeholder="Số điện thoại">
                    @error('sdt')
                    <p class="danger">{{ $message }}</p>
                    @enderror
                </div>
                <a class="btn btn-secondary" href="{{route('client.auth.postLogin')}}" style="float:left"><i class="fas fa-long-arrow-alt-left"></i> Quay lại</a>
                <button class="btn btn-primary" type="submit" style="float:right">Đăng ký <i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
        </div>
    </div>
</section>
</body>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</html>
