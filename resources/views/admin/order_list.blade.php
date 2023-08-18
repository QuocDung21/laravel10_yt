<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Quản lý đơn hàng</title>
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
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
              </ol> --}}
              
              <h6 class="font-weight-bolder mb-0">Quản lý đơn hàng</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
              <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                  <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
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
                  <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa fa-bell cursor-pointer"></i>
                  </a>
                 
                </li>

                
              </ul>
            </div>
          </div>
        </nav>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4 btn-link " >
                    <div class="card" style="cursor: pointer">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-10">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-capitalize font-weight-bold">Tất cả đơn hàng</p>
                              <h5 class="font-weight-bolder mb-0">
                                {{ count($order0) + count($order1) + count($order2) + count($order3) + count($order4)}}
                               
                              </h5>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4 btn-link " >
                    <div class="card" style="cursor: pointer" onclick="showCXN()">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-capitalize font-weight-bold">Chờ xác nhận</p>
                              <h5 class="font-weight-bolder mb-0">
                                {{ count($order0) }}
                               
                              </h5>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4 btn-link " >
                    <div class="card" style="cursor: pointer" onclick="showDXL()">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-capitalize font-weight-bold">Đang xử lý</p>
                              <h5 class="font-weight-bolder mb-0">
                                {{ count($order1) }}
                               
                              </h5>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4 btn-link " >
                    <div class="card" style="cursor: pointer" onclick="showDG()">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-capitalize font-weight-bold">Đang giao</p>
                              <h5 class="font-weight-bolder mb-0">
                                {{ count($order2) }}
                               
                              </h5>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4 btn-link " >
                    <div class="card" style="cursor: pointer" onclick="showHT()">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-capitalize font-weight-bold">Hoàn thành</p>
                              <h5 class="font-weight-bolder mb-0">
                                {{ count($order3) }}
                               
                              </h5>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4 btn-link " >
                    <div class="card" style="cursor: pointer" onclick="showDH()">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-capitalize font-weight-bold">Đã huỷ</p>
                              <h5 class="font-weight-bolder mb-0">
                                {{ count($order4) }}
                               
                              </h5>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid py-4" id="choxacnhan" >
            <div class="row">
                <div class="col-md-7 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Chờ xác nhận ({{ count($order0) }})</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <ul class="list-group">
                                @foreach($order0 as $key => $order0)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">Giao hàng tận nơi</h6>
                                        <span class="mb-2 text-xs">Mã đơn:  
                                            <span class="text-dark font-weight-bold ms-sm-2">#{{$order0->bill_id}}</span>
                                        </span>
                                        <span class="mb-2 text-xs">Ngày đặt:  
                                            <span class="text-dark font-weight-bold ms-sm-2">{{$order0->created_at}}</span>
                                        </span>
                                        <span class="text-xs">Giá trị đơn:  
                                            <span class="text-dark font-weight-bold ms-sm-2">{{number_format($order0->bill_totalAll)}} đ</span>
                                        </span>
                                    </div>
                                    <div class="ms-auto text-end">
                                        
                                        <a href="{{URL::to('/update-bill-status/'.$order0->bill_id)}}" class="btn btn-link text-danger text-gradient px-3 mb-0" >
                                            Xác nhận đơn
                                        </a>

                                        <a onclick="return confirm('Xác nhận huỷ đơn hàng!')" href="{{URL::to('/cancel-bill/'.$order0->bill_id)}}" class="btn btn-link text-dark px-3 mb-0">
                                            Huỷ
                                        </a>
                                    </div>
                                </li>
                                @endforeach

                                
                            </ul>
                        </div>
                        
                    </div>
                </div>  
            </div>
        </div>
        <div class="container-fluid py-4" id="dangxuly" style="display: none">
            <div class="row">
                <div class="col-md-7 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Đang xử lý ({{ count($order1) }})</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <ul class="list-group">
                                @foreach($order1 as $key => $order1)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">Giao hàng tận nơi</h6>
                                        <span class="mb-2 text-xs">Mã đơn:  
                                            <span class="text-dark font-weight-bold ms-sm-2">#{{$order1->bill_id}}</span>
                                        </span>
                                        <span class="mb-2 text-xs">Ngày đặt:  
                                            <span class="text-dark font-weight-bold ms-sm-2">{{$order1->created_at}}</span>
                                        </span>
                                        <span class="text-xs">Giá trị đơn:  
                                            <span class="text-dark font-weight-bold ms-sm-2">{{number_format($order1->bill_totalAll)}} đ</span>
                                        </span>
                                    </div>
                                    <div class="ms-auto text-end">
                                        
                                        <a href="{{URL::to('/view-bill/'.$order1->bill_id)}}" class="btn btn-link text-danger text-gradient px-3 mb-0" >
                                            Xem đơn
                                        </a>

                                        <a onclick="return confirm('Xác nhận huỷ đơn hàng!')" href="{{URL::to('/cancel-bill/'.$order1->bill_id)}}" class="btn btn-link text-dark px-3 mb-0">
                                            Huỷ
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                     
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4" id="danggiao" style="display: none">
            <div class="row">
                <div class="col-md-7 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Đang giao ({{ count($order2) }})</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <ul class="list-group">
                                
                                @foreach($order2 as $key => $order2)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">Giao hàng tận nơi</h6>
                                        <span class="mb-2 text-xs">Mã đơn:  
                                            <span class="text-dark font-weight-bold ms-sm-2">#{{$order2->bill_id}}</span>
                                        </span>
                                        <span class="mb-2 text-xs">Ngày đặt:  
                                            <span class="text-dark font-weight-bold ms-sm-2">{{$order2->created_at}}</span>
                                        </span>
                                        <span class="text-xs">Giá trị đơn:  
                                            <span class="text-dark font-weight-bold ms-sm-2">{{number_format($order2->bill_totalAll)}} đ</span>
                                        </span>
                                    </div>
                                    <div class="ms-auto text-end">
                                        
                                        <a href="{{URL::to('/view-bill/'.$order2->bill_id)}}" class="btn btn-link text-danger text-gradient px-3 mb-0" >
                                            Xem đơn
                                        </a>

                                        <a onclick="return confirm('Xác nhận huỷ đơn hàng!')" href="{{URL::to('/cancel-bill/'.$order2->bill_id)}}" class="btn btn-link text-dark px-3 mb-0">
                                            Huỷ
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                     
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4" id="hoanthanh" style="display: none">
            <div class="row">
                <div class="col-md-7 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Hoàn thành ({{ count($order3) }})</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <ul class="list-group">
                                
                                @foreach($order3 as $key => $order3)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">Giao hàng tận nơi</h6>
                                        <span class="mb-2 text-xs">Mã đơn:  
                                            <span class="text-dark font-weight-bold ms-sm-2">#{{$order3->bill_id}}</span>
                                        </span>
                                        <span class="mb-2 text-xs">Ngày đặt:  
                                            <span class="text-dark font-weight-bold ms-sm-2">{{$order3->created_at}}</span>
                                        </span>
                                        <span class="text-xs">Giá trị đơn:  
                                            <span class="text-dark font-weight-bold ms-sm-2">{{number_format($order3->bill_totalAll)}} đ</span>
                                        </span>
                                    </div>
                                    <div class="ms-auto text-end">
                                        
                                        <a href="{{URL::to('/view-bill/'.$order3->bill_id)}}" class="btn btn-link text-danger text-gradient px-3 mb-0" >
                                            Xem đơn
                                        </a>

                                        {{-- <a onclick="return confirm('Xác nhận huỷ đơn hàng!')" href="{{URL::to('/cancel-bill/'.$order3->bill_id)}}" class="btn btn-link text-dark px-3 mb-0">
                                            Huỷ
                                        </a> --}}
                                    </div>
                                </li>
                                @endforeach
                     
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4" id="dahuy" style="display: none">
            <div class="row">
                <div class="col-md-7 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Đã huỷ ({{ count($order4) }})</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <ul class="list-group">
                                
                                @foreach($order4 as $key => $order4)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">Giao hàng tận nơi</h6>
                                        <span class="mb-2 text-xs">Mã đơn:  
                                            <span class="text-dark font-weight-bold ms-sm-2">#{{$order4->bill_id}}</span>
                                        </span>
                                        <span class="mb-2 text-xs">Ngày đặt:  
                                            <span class="text-dark font-weight-bold ms-sm-2">{{$order4->created_at}}</span>
                                        </span>
                                        <span class="text-xs">Giá trị đơn:  
                                            <span class="text-dark font-weight-bold ms-sm-2">{{number_format($order4->bill_totalAll)}} đ</span>
                                        </span>
                                    </div>
                                    <div class="ms-auto text-end">
                                        
                                        <a href="{{URL::to('/view-bill/'.$order4->bill_id)}}" class="btn btn-link text-danger text-gradient px-3 mb-0" >
                                            Xem đơn
                                        </a>

                                        
                                    </div>
                                </li>
                                @endforeach
                     
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script>
    function showCXN(){
        var choxacnhan = document.getElementById('choxacnhan');
        var dangxuly = document.getElementById('dangxuly');
        var danggiao = document.getElementById('danggiao');
        var hoanthanh = document.getElementById('hoanthanh');
        var dahuy = document.getElementById('dahuy');

        choxacnhan.style.display = 'block';
        dangxuly.style.display = 'none';
        danggiao.style.display = 'none';
        hoanthanh.style.display = 'none';
        dahuy.style.display = 'none';
    }
    function showDXL(){
        var choxacnhan = document.getElementById('choxacnhan');
        var dangxuly = document.getElementById('dangxuly');
        var danggiao = document.getElementById('danggiao');
        var hoanthanh = document.getElementById('hoanthanh');
        var dahuy = document.getElementById('dahuy');

        choxacnhan.style.display = 'none';
        dangxuly.style.display = 'block';
        danggiao.style.display = 'none';
        hoanthanh.style.display = 'none';
        dahuy.style.display = 'none';
    }
    function showDG(){
        var choxacnhan = document.getElementById('choxacnhan');
        var dangxuly = document.getElementById('dangxuly');
        var danggiao = document.getElementById('danggiao');
        var hoanthanh = document.getElementById('hoanthanh');
        var dahuy = document.getElementById('dahuy');

        choxacnhan.style.display = 'none';
        dangxuly.style.display = 'none';
        danggiao.style.display = 'block';
        hoanthanh.style.display = 'none';
        dahuy.style.display = 'none';
    }
    function showHT(){
        var choxacnhan = document.getElementById('choxacnhan');
        var dangxuly = document.getElementById('dangxuly');
        var danggiao = document.getElementById('danggiao');
        var hoanthanh = document.getElementById('hoanthanh');
        var dahuy = document.getElementById('dahuy');

        choxacnhan.style.display = 'none';
        dangxuly.style.display = 'none';
        danggiao.style.display = 'none';
        hoanthanh.style.display = 'block';
        dahuy.style.display = 'none';
    }
    function showDH(){
        var choxacnhan = document.getElementById('choxacnhan');
        var dangxuly = document.getElementById('dangxuly');
        var danggiao = document.getElementById('danggiao');
        var hoanthanh = document.getElementById('hoanthanh');
        var dahuy = document.getElementById('dahuy');

        choxacnhan.style.display = 'none';
        dangxuly.style.display = 'none';
        danggiao.style.display = 'none';
        hoanthanh.style.display = 'none';
        dahuy.style.display = 'block';
    }
</script>
<script src="{{asset('js/admin.js')}}"></script>
</body>
</html>