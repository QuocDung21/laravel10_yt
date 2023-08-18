<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://oms.pharmacity.vn/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://oms.pharmacity.vn/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://oms.pharmacity.vn/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="https://oms.pharmacity.vn/assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <title>Nhà thuốc online | Login</title>
    
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{asset('img/logo2.png')}}" alt="" width="200" height="65" style="border-radius: 30px;">
        </div>
        <div class="login-box-body">
            <form action="{{URL::to('/admin-dashboard')}}" method="post" autocomplete="off">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" required="required" name="admin_email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <div class="input-group">
                        <input type="text" class="form-control" required="required" name="admin_password">
                        <span class="input-group-btn">
                            <button type="button" class="TogglePasswordVisible">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                                    <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                                    <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                                </svg>
                            </button>
                        </span>
                    </div>
                </div>
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<p style="color: brown">',$message,'</p>';
                    Session::put('message', null);
                }
                ?>
                
                <div class="row">
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <label for="">
                                <input type="checkbox">  Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        
                        <input type="submit" value="Login" class="btn btn-primary btn-block btn-flat">
                    </div>
                </div>
                {{-- <button type="button" class="btn btn-primary btn-block btn-flat" onclick="window.location.href='{{URL('/login-facebook')}}'">Facebook</button>

                <button type="button" class="btn btn-primary btn-block btn-flat" onclick="window.location.href='{{URL('/login-google')}}'">Google</button> --}}

                
            </form>
        </div>
    </div>
</body>
</html>