<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Đơn vị vận chuyển</title>
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
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
          navbar-scroll="true">
          <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
              {{-- <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
              </ol> --}}
              <h6 class="font-weight-bolder mb-0">Đơn vị vận chuyển</h6>
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
        <!-- End Navbar -->
        <div class="container-fluid py-4">
          
          
        
          <div class="row my-4">
            <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
              <div class="card">
                <div class="card-header pb-0">
                  <div class="row">
                    <div class="col-lg-6 col-7">
                      <h6>Nhanh</h6>
                      
                    </div>
                    
                  </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Đơn vị</th>
                           
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phí vận chuyển</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cập nhật</th>
                            <th class="text-secondary opacity-7"></th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach($shippingunit0 as $key => $shipping0)
                            <tr>
                              <td>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{$shipping0->shipping_name}}</h6>
                                  </div>
                              </td>

                              <td class="align-middle text-center text-sm">
                                @if($shipping0->shipping_status == 0)
                                  <span class="badge badge-sm bg-gradient-success product-status">Hiện</span>
                                @elseif($shipping0->shipping_status == 1)
                                  <span class="badge badge-sm bg-gradient-secondary product-status">Ẩn</span>
                                @else
                                  <span class="badge badge-sm bg-gradient-warning product-status">Chờ xử lý</span>
                                @endif
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold product-price" >{{ number_format($shipping0->shipping_price) }} ₫</span>
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$shipping0->created_at}}</span>
                              </td>
                              <td class="align-middle">
                                <a class="btn btn-link text-dark px-3 mb-0" href="" title="Chỉnh sửa đơn vị">
                                    <i class="fas fa-pencil-alt text-dark me-2" ></i>
                                </a>

                                <a onclick="return confirm('Are you sure to delete?')" class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ URL::to('/delete-shipping-unit/' . $shipping0->shipping_id) }}"
                                    title="Xoá đơn vị">
                                  <i class="far fa-trash-alt me-2"></i>
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
            <div class="col-lg-6 col-md-6">
              <div class="card h-100">
                <div class="card-header pb-0">
                  <h6>Tiêu chuẩn</h6>
                  
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên</th>
                           
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phí vận chuyển</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cập nhật</th>
                            <th class="text-secondary opacity-7"></th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($shippingunit1 as $key => $shipping1)
                            <tr>
                              <td>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{$shipping1->shipping_name}}</h6>
                                  </div>
                              </td>

                              <td class="align-middle text-center text-sm">
                                @if($shipping1->shipping_status == 0)
                                  <span class="badge badge-sm bg-gradient-success product-status">Hiện</span>
                                @elseif($shipping1->shipping_status == 1)
                                  <span class="badge badge-sm bg-gradient-secondary product-status">Ẩn</span>
                                @else
                                  <span class="badge badge-sm bg-gradient-warning product-status">Chờ xử lý</span>
                                @endif
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold product-price" >{{ number_format($shipping1->shipping_price) }} ₫</span>
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$shipping1->created_at}}</span>
                              </td>
                              <td class="align-middle">
                                <a class="btn btn-link text-dark px-3 mb-0" href="" title="Chỉnh sửa đơn vị">
                                    <i class="fas fa-pencil-alt text-dark me-2" ></i>
                                </a>

                                <a onclick="return confirm('Are you sure to delete?')" class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ URL::to('/delete-shipping-unit/' . $shipping1->shipping_id) }}"
                                    title="Xoá đơn vị">
                                  <i class="far fa-trash-alt me-2"></i>
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

          <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Thêm đơn vị vận chuyển
          </button>


          <footer class="footer pt-3  ">
            <div class="container-fluid">
              <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="copyright text-center text-sm text-muted text-lg-start">
                    © 2023 
                    
                </div>
                
              </div>
            </div>
          </footer>

          



          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Thêm đơn vị vận chuyển</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="{{URL::to('/add-shipping-unit')}}" method="POST">
                    @csrf
                        <h5 style="font-size: 14px">Tên đơn vị vận chuyển</h5>
                        <input name="shipping_name" type="text" class="form-control" placeholder="Nhập tên đơn vị vận chuyển" required>
                        <br>
                        <h5 style="font-size: 14px">Hình thức vận chuyển</h5>
                        <select name="shipping_method" id="" class="form-control">
                            
                            <option value="0">Nhanh</option>
                            <option value="1">Tiêu chuẩn</option>
                            
                        </select>
                        <br>
                        <h5 style="font-size: 14px">Trạng thái</h5>
                        <select name="shipping_status" id="" class="form-control">
                            
                            <option value="0">Hiện</option>
                            <option value="1">Ẩn</option>
                            <option value="2">Chờ xử lý</option>
                            
                        </select>
                        <br>
                        <h5 style="font-size: 14px">Phí vận chuyển (VNĐ)</h5>
                        <input name="shipping_price" type="number" class="form-control" placeholder="Nhập phí vận chuyển" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Button trigger modal -->
            
            
            
           
    </main>
    
</body>
</html>