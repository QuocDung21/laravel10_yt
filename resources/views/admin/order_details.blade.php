<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Chi tiết đơn hàng</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap2.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
              
              <h6 class="font-weight-bolder mb-0">Chi tiết đơn hàng</h6>
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
            {{-- <div class="alert alert-warning" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Warning!</strong> This is a warning alert—check it out that has an icon too!</span>
            </div> --}}
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card mb-4">
                        <div class="card-header p-3 pb-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6>Đơn hàng #{{$bill->bill_id}}</h6>
                                    <p class="text-sm mb-0">Thanh toán: 
                                        @if($bill->bill_payments == 'cash')
                                            <b>Tiền mặt</b> 
                                        @elseif($bill->bill_payments == 'momo')
                                            <b>MoMo</b>
                                        @elseif($bill->bill_payments == 'vnpay')
                                            <b>VNPAY</b>
                                        @else
                                            <b>Viettel Money</b>
                                        @endif
                                        
                                    </p>
                                    <p class="text-sm">Ngày đặt:
                                        <b>{{$bill->created_at}}</b>
                                    </p>
                                    <p class="text-sm">Trạng thái: 
                                        @if($bill->bill_status == 0)
                                            <span class="badge badge-sm bg-gradient-success">Chờ xác nhận</span>
                                        @elseif($bill->bill_status == 1)
                                            <span class="badge badge-sm bg-gradient-success">Đang xử lý</span>
                                        @elseif($bill->bill_status == 2)
                                            <span class="badge badge-sm bg-gradient-success">Đang giao</span>
                                        @elseif($bill->bill_status == 3)
                                            <span class="badge badge-sm bg-gradient-success">Hoàn thành</span>
                                        @else 
                                            <span class="badge badge-sm bg-gradient-success">Đã huỷ</span>
                                        @endif
                                    </p>
                                    
                                </div>
                                @if($bill->bill_status == 1)
                                    <a onclick="return confirm('Xác nhận hoàn thành đơn hàng!')" href="{{URL::to('/update3/'.$bill->bill_id)}}"  class="btn bg-gradient-info ms-auto mb-0" style="margin-right: 5px"> 
                                        Hoàn thành
                                    </a>
                                    <a onclick="return confirm('Xác nhận vận chuyển đơn hàng!')" href="{{URL::to('/update2/'.$bill->bill_id)}}" class="btn bg-gradient-warning ms-auto mb-0" style="margin-right: 5px">
                                        Giao hàng
                                    </a>
                                    <a onclick="return confirm('Xác nhận in đơn hàng!')" href="{{URL::to('/print-bill/'.$bill->bill_id)}}" class="btn bg-gradient-success ms-auto mb-0" style="margin-right: 5px">
                                        In đơn hàng
                                    </a>
                                    <a onclick="return confirm('Xác nhận huỷ đơn hàng!')" href="{{URL::to('/cancel-bill/'.$bill->bill_id)}}" class="btn bg-gradient-danger ms-auto mb-0" style="margin-right: 5px">
                                        Huỷ
                                    </a>
                                    <a href="{{URL::to('/order-list')}}" class="btn bg-gradient-secondary ms-auto mb-0">
                                        Thoát
                                    </a>
                                @elseif($bill->bill_status == 2)
                                    <a onclick="return confirm('Xác nhận hoàn thành đơn hàng!')" href="{{URL::to('/update3/'.$bill->bill_id)}}"  class="btn bg-gradient-info ms-auto mb-0" style="margin-right: 5px"> 
                                        Hoàn thành
                                    </a>
                                    
                                    <a onclick="return confirm('Xác nhận huỷ đơn hàng!')" href="{{URL::to('/cancel-bill/'.$bill->bill_id)}}" class="btn bg-gradient-danger ms-auto mb-0" style="margin-right: 5px">
                                        Huỷ
                                    </a>
                                    <a href="{{URL::to('/order-list')}}" class="btn bg-gradient-secondary ms-auto mb-0">
                                        Thoát
                                    </a>
                                @elseif($bill->bill_status == 3)
                                    <a onclick="return confirm('Xác nhận vận chuyển đơn hàng!')" href="{{URL::to('/update2/'.$bill->bill_id)}}" class="btn bg-gradient-warning ms-auto mb-0" style="margin-right: 5px">
                                        Hoàn tác giao hàng
                                    </a>
                                    <a onclick="return confirm('Xác nhận in đơn hàng!')" target="_blank" href="{{URL::to('/print-bill/'.$bill->bill_id)}}" class="btn bg-gradient-success ms-auto mb-0" style="margin-right: 5px">
                                        In đơn hàng
                                    </a>
                                    <a onclick="return confirm('Xác nhận huỷ đơn hàng!')" href="{{URL::to('/cancel-bill/'.$bill->bill_id)}}" class="btn bg-gradient-danger ms-auto mb-0" style="margin-right: 5px">
                                        Huỷ
                                    </a>
                                    <a href="{{URL::to('/order-list')}}" class="btn bg-gradient-secondary ms-auto mb-0">
                                        Thoát
                                    </a>
                                @else
                                    <a onclick="return confirm('Xác nhận hoàn thành đơn hàng!')" href="{{URL::to('/update3/'.$bill->bill_id)}}"  class="btn bg-gradient-info ms-auto mb-0" style="margin-right: 5px"> 
                                        Hoàn tác hoàn thành
                                    </a>
                                    <a onclick="return confirm('Xác nhận vận chuyển đơn hàng!')" href="{{URL::to('/update2/'.$bill->bill_id)}}" class="btn bg-gradient-warning ms-auto mb-0" style="margin-right: 5px">
                                        Hoàn tác giao hàng
                                    </a>
                                    <a href="{{URL::to('/order-list')}}" class="btn bg-gradient-secondary ms-auto mb-0">
                                        Thoát
                                    </a>
                                @endif

                                
                                
                            </div>
                        </div>
                        <div class="card-body p-3 pt-0">
                            @foreach ($orderItems as $item)
                            <hr class="horizontal dark mt-0 mb-4 mt-4">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="d-flex">
                                        <div>
                                            <img src="/uploads/product/{{ $item->product->product_img1 }}" alt="" class="avatar avatar-xxl me-3">
                                        </div>
                                        <div>
                                            <h6 class="text-lg mb-0 mt-2 mb-3">{{ $item->product->product_name }}</h6>
                                            <p class="text-sm mb-3">Số lượng: {{ $item->product_quantity }} {{ $item->product->productUnit }}</p>
                                            <p class="text-sm mb-3">Danh mục: {{ $item->category->category_name }} / {{ $item->categorydetail->category_detail_name }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            
                            <hr class="horizontal dark mt-0 mb-4 mt-4">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-12">
                                    <h6 class="mb-3">Thông tin khách hàng</h6>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <span class="mb-2 text-xs">Tên người nhận: 
                                                    <span class="text-dark font-weight-bold ms-2">{{$address->user_name}}</span>
                                                </span>
                                                <span class="mb-2 text-xs">SĐT người nhận: 
                                                    <span class="text-dark font-weight-bold ms-2">{{$address->user_phone}}</span>
                                                </span>
                                                <span class="mb-2 text-xs">Email người nhận: 
                                                    <span class="text-dark font-weight-bold ms-2">{{$address->user_email}}</span>
                                                </span>
                                                <span class="mb-2 text-xs">Địa chỉ giao hàng: 
                                                    <span class="text-dark font-weight-bold ms-2">{{$address->user_address}}, {{$address->user_ward_text}}, {{$address->user_district_text}}, {{$address->user_city_text}}</span>
                                                </span>
                                                <span class="mb-2 text-xs">Ghi chú giao hàng: 
                                                    <span class="text-dark font-weight-bold ms-2">{{$address->user_note}}</span>
                                                </span>
                                                <span class="mb-2 text-xs">Ghi chú đơn hàng: 
                                                    <span class="text-dark font-weight-bold ms-2">{{$bill->bill_note}}</span>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-6 col-12">
                                    <h6 class="mb-3">Tổng tiền</h6>
                                    <div class="d-flex justify-content-between">
                                        <span class="mb-2 text-sm">Tạm tính:</span>
                                        <span class="text-dark font-weight-bold ms-2">{{number_format($bill->bill_total)}} đ</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="mb-2 text-sm">Phiếu giảm giá:</span>
                                        <span class="text-dark font-weight-bold ms-2">- {{number_format($bill->bill_discount)}} đ</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="mb-2 text-sm">Phí vận chuyển:</span>
                                        <span class="text-dark font-weight-bold ms-2">{{number_format($bill->bill_shipping)}} đ</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        <span class="mb-2 text-lg">Thành tiền: </span>
                                        <span class="text-dark text-lg ms-2 font-weight-bold">{{number_format($bill->bill_totalAll)}} đ</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <br><br><br><br>
    <script src="{{asset('js/admin.js')}}"></script>
</body>
</html>