<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Quản lý toa thuốc</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap2.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('partial.slidenav')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    {{-- <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol> --}}

                    <h6 class="font-weight-bolder mb-0">Danh sách toa thuốc</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">
                                    <?php
                            $name = Session::get('admin_name');
                            if($name){
                                echo $name;
                                
                            }
                            ?>
                                </span>
                            </a>
                        </li>

                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>

                        </li>


                    </ul>
                </div>
            </div>
        </nav>


        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">

                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Khách hàng</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Số điện thoại</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Trạng thái</th>



                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="">
                                        @foreach($prescription as $key => $pre)
                                        @php
                                        $stt = $loop->index + 1;
                                        @endphp
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <p class="text-xs text-secondary mb-0 product-stt mx-3"
                                                        style="margin-top: 10px; margin-right:8px">{{$stt}}</p>
                                                   
                                                    <div class="d-flex flex-column justify-content-center mx-3">
                                                        <h6 class="mb-0 text-sm">{{$pre->user_name}}</h6>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$pre->user_phone}}</p>
                                            </td>
                                            <td>
                                                @if($pre->prescription_status == 0)
                                                    <span class="badge badge-sm bg-gradient-warning">Chờ xử lý</span>
                                                @else
                                                    <span class="badge badge-sm bg-gradient-success">Đã xem</span>
                                                @endif
                                            </td>
                                            
                                            <td class="text-sm">
                                                <a href="#" class="view-bill" style="margin-right: 3rem" title="Xem toa thuốc"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalBill"
                                                    data-user-id="">
                                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="" onclick="return confirm('Are you sure to delete?')"
                                                    href=""
                                                    title="Xoá toa thuốc">
                                                    <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                </a>


                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>


                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>




    </main>
    <script src="{{asset('js/admin.js')}}"></script>

</body>

</html>