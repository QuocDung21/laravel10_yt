<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Mã giảm giá</title>
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
              <h6 class="font-weight-bolder mb-0">Mã giảm giá</h6>
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
                      <h6>Danh sách voucher giảm giá</h6>
                      
                    </div>
                    
                  </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Voucher</th>
                           
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mức giảm</th>
                            <th class="text-secondary opacity-7"></th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach($show_voucher as $key => $voucher)
                                <tr>
                                    <td>
                                    <div class="d-flex px-2 py-1">
                                        
                                        <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$voucher->discount_voucher}}</h6>
                                        
                                        </div>
                                    </div>
                                    </td>
                                    
                                    <td class="align-middle text-center text-sm">
                                        @if($voucher->discount_status == 0)
                                            <span class="badge badge-sm bg-gradient-success product-status">Hiện</span>
                                        @elseif($voucher->discount_status == 1)
                                            <span class="badge badge-sm bg-gradient-secondary product-status">Ẩn</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-warning product-status">Chờ xử lý</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">
                                        @if($voucher->discount == 1)
                                            <span class="text-secondary text-xs font-weight-bold">{{number_format($voucher->discount_price)}} đ</span>
                                        @else
                                            <span class="text-secondary text-xs font-weight-bold">{{$voucher->discount_percent}} %</span>
                                        @endif

                                    </td>
                                    <td class="align-middle">
                                          <a class="btn btn-link text-dark px-3 mb-0" href="" title="Chỉnh sửa mã giảm giá">
                                              <i class="fas fa-pencil-alt text-dark me-2" ></i>
                                          </a>

                                          <a onclick="return confirm('Are you sure to delete?')" class="btn btn-link text-danger text-gradient px-3 mb-0" href="" title="Xoá mã giảm giá">
                                            <i class="far fa-trash-alt me-2"></i>
                                          </a>

                                          
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

            <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="row">
                      <div class="col-lg-6 col-7">
                        <h6>Danh sách mã code giảm giá</h6>
                        
                      </div>
                      
                    </div>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                      <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mã code</th>
                             
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mức giảm</th>
                              <th class="text-secondary opacity-7"></th>
                            </tr>
                          </thead>
                          <tbody>
                                @foreach($show_code as $key => $code)
                                  <tr>
                                      <td>
                                      <div class="d-flex px-2 py-1">
                                          
                                          <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-sm">{{$code->discount_code}}</h6>
                                          
                                          </div>
                                      </div>
                                      </td>
                                      
                                      <td class="align-middle text-center text-sm">
                                        @if($code->discount_status == 0)
                                            <span class="badge badge-sm bg-gradient-success product-status">Hiện</span>
                                        @elseif($code->discount_status == 1)
                                            <span class="badge badge-sm bg-gradient-secondary product-status">Ẩn</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-warning product-status">Chờ xử lý</span>
                                        @endif
                                      </td>
                                      <td class="align-middle text-center">
                                        @if($code->discount == 1)
                                            <span class="text-secondary text-xs font-weight-bold">{{number_format($code->discount_price)}} đ</span>
                                        @else
                                            <span class="text-secondary text-xs font-weight-bold">{{$code->discount_percent}} %</span>
                                        @endif
                                      </td>
                                      <td class="align-middle">
                                            <a class="btn btn-link text-dark px-3 mb-0" href="" title="Chỉnh sửa mã giảm giá">
                                                <i class="fas fa-pencil-alt text-dark me-2" ></i>
                                            </a>
  
                                            <a onclick="return confirm('Are you sure to delete?')" class="btn btn-link text-danger text-gradient px-3 mb-0" href="" title="Xoá mã giảm giá">
                                              <i class="far fa-trash-alt me-2"></i>
                                            </a>
  
                                            
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
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Thêm mã giảm giá
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
          <!-- Button trigger modal -->
            
            
          
    </main>

            <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Thêm mã giảm giá</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{URL::to('/add-discount')}}" method="POST">
                        @csrf
                        <h5 style="font-size: 14px">Hình thức</h5>
                        <select name="selectOption" id="selectOption" class="form-control" onchange="showSelectedDiv()">
                            <option value="0">Mã code</option>
                            <option value="1">Voucher</option>
                        </select>
                        <br>
                        <div id="codeDiv" >
                            
                            <input type="text" class="form-control" name="discount_code" placeholder="Nhập mã code">
                        </div>
                        <div id="voucherDiv" style="display: none;">
                            
                            <input type="text" class="form-control" name="discount_voucher" placeholder="Nhập tên voucher">
                            
                        
                        </div>

                        
                        <div class="d-flex">
                            <div class="d-flex">
                                <input name="" type="checkbox" id="percentDiscountCheckbox" onclick="showDiscountDiv('percentDiscountDiv', 0)">&nbsp;<h5 style="font-size: 14px; margin-top: 9px">Giảm theo %</h5>
                            </div>
                            <div class="d-flex" style="margin-left: 20px">
                                <input name="" type="checkbox" id="amountDiscountCheckbox" onclick="showDiscountDiv('amountDiscountDiv', 1)">&nbsp;<h5 style="font-size: 14px; margin-top: 9px">Giảm theo VNĐ</h5>
                            </div>
                            <input type="hidden" value="" name="discount" id="discountInput">
                        </div>

                        
                        <div></div>
                        <div id="percentDiscountDiv" style="display: none;">
                            <h5 style="font-size: 14px">Nhập % giảm (%)</h5>
                            <input name="discount_percent" type="number" class="form-control">
                        </div>
                        <div id="amountDiscountDiv" style="display: none;">
                            <h5 style="font-size: 14px">Nhập số tiền giảm (VNĐ)</h5>
                            <input name="discount_price" type="number" class="form-control">
                        </div>
                        <br>
                        <h5 style="font-size: 14px">Trạng thái</h5>
                        <select name="discount_status" id="" class="form-control">
                            <option value="0">Hiện</option>
                            <option value="1">Ẩn</option>
                            <option value="2">Chờ xử lý</option>
                        </select>
                        
                        


                        <script>
                            const percentDiscountCheckbox = document.getElementById('percentDiscountCheckbox');
                            const amountDiscountCheckbox = document.getElementById('amountDiscountCheckbox');
                        
                            percentDiscountCheckbox.addEventListener('change', function () {
                                if (this.checked) {
                                    amountDiscountCheckbox.checked = false;
                                }
                            });
                        
                            amountDiscountCheckbox.addEventListener('change', function () {
                                if (this.checked) {
                                    percentDiscountCheckbox.checked = false;
                                }
                            });
                        </script>
                        <script>
                            function showDiscountDiv(divId, value) {
                                const div = document.getElementById(divId);
                        
                                const percentDiscountDiv = document.getElementById('percentDiscountDiv');
                                const amountDiscountDiv = document.getElementById('amountDiscountDiv');
                                const discountInput = document.getElementById('discountInput');
                        
                                if (divId === "percentDiscountDiv") {
                                    percentDiscountDiv.style.display = "block";
                                    amountDiscountDiv.style.display = "none";
                                } else {
                                    percentDiscountDiv.style.display = "none";
                                    amountDiscountDiv.style.display = "block";
                                }
                        
                                discountInput.value = value;
                            }
                        </script>
                        <script>
                            // Lấy ngày hiện tại
                            const currentDate = new Date();
                        
                            // Chuyển đổi định dạng ngày hiện tại thành yyyy-mm-dd
                            const formattedDate = currentDate.toISOString().slice(0, 10);
                        
                            // Tìm đến phần tử input và cập nhật giá trị mặc định là ngày hiện tại
                            const effectiveDateInput = document.getElementById('effectiveDate');
                            effectiveDateInput.value = formattedDate;
                        </script>

                        <script>
                            function showSelectedDiv() {
                                const selectOption = document.getElementById('selectOption');
                                const selectedValue = selectOption.value;

                                const codeDiv = document.getElementById('codeDiv');
                                const voucherDiv = document.getElementById('voucherDiv');

                                if (selectedValue === "0") {
                                    codeDiv.style.display = "block";
                                    voucherDiv.style.display = "none";
                                } else {
                                    codeDiv.style.display = "none";
                                    voucherDiv.style.display = "block";
                                }
                            }
                        </script>
                        
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                </form>
            </div>
            </div>
        </div>
    
</body>
</html>