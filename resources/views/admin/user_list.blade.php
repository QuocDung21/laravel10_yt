<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Khách hàng</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap2.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/admin.js')}}"></script>

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
              
              <h6 class="font-weight-bolder mb-0">Danh sách khách hàng</h6>
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
            <div class="col-12">
              <div class="card mb-4">
                
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Khách hàng</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số điện thoại</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>

                         
                          
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody id="">
                        @foreach($user as $key => $us)
                        @php
                            $stt = $loop->index + 1;
                          @endphp
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <p class="text-xs text-secondary mb-0 product-stt" style="margin-top: 10px; margin-right:8px">{{$stt}}</p>
                                        <div>
                                          <img src="/uploads/user/{{$us->user_avatar}}" class="avatar avatar-sm me-3" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-sm">{{$us->user_name}}</h6>
                                          <p class="text-xs text-secondary mb-0">Mã: {{$us->user_id}}</p>
                                        </div>
                                      </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$us->user_phone}}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$us->user_email}}</p>
                                </td>
                                <td class="text-sm">
                                    <a href="#" class="view-bill" title="Xem đơn hàng" data-bs-toggle="modal" data-bs-target="#exampleModalBill" data-user-id="{{$us->user_id}}">
                                        <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="mx-3 edit-user" title="Chỉnh sửa thông tin" data-bs-toggle="modal" data-bs-target="#exampleModal" data-user-id="{{$us->user_id}}">
                                        <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                    </a>
                                    <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-user/'.$us->user_id)}}" title="Xoá tài khoản">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin khách hàng</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{URL::to('update-user')}}" method="POST">
                    @csrf
                    <input type="hidden" name="userid" value="">
                  <label>Tên</label>
                  <div class="input-group mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Tên khách hàng" value="">
                  </div>
                  <label>Số điện thoại</label>
                  <div class="input-group mb-3">
                    <input name="phone" type="text" class="form-control" placeholder="Số điện thoại" value="">
                  </div>
                  <label>Email</label>
                  <div class="input-group mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email" value="">
                  </div>
                  <label>Mật khẩu</label>
                  <div class="input-group mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Mật khẩu" value="">
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Lưu thông tin</button>
                  </div>
                  <br>
                </form>
                
              </div>
            
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function(){
            $('.edit-user').click(function(){
                var userId = $(this).data('user-id');
                axios.get(`/get-user-info/${userId}`)
                .then(function(response) {
                    var userData = response.data; // Dữ liệu của user từ Laravel

                    // Điền thông tin của user vào các trường
                    $('#exampleModal input[name="userid"]').val(userData.user_id);
                    $('#exampleModal input[name="name"]').val(userData.user_name);
                    $('#exampleModal input[name="phone"]').val(userData.user_phone);
                    $('#exampleModal input[name="email"]').val(userData.user_email);
                    $('#exampleModal input[name="password"]').val(userData.user_password);

                    // Gọi hàm để hiển thị modal
                    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
                    myModal.show();
                })
                .catch(function(error) {
                    console.error(error);
                });
            })
            $('.view-bill').click(function(){
                var userId = $(this).data('user-id');
                openUserOrdersModal(userId);

                
            })
        })
        function openUserOrdersModal(userId){
            axios.get(`/get-user-orders/${userId}`)
                .then(function(response) {
                var userOrders = response.data; // Danh sách đơn hàng của user

                // Hiển thị danh sách đơn hàng trong modal
                var modalBody = $('#exampleModalBill .modal-body');
                modalBody.empty();

                if (userOrders.length > 0) {
                    var ordersList = $('<ul>').addClass('list-group');

                        userOrders.forEach(function(order) {
                            var orderValueFormatted = order.bill_totalAll.toLocaleString('vi-VN', {
                                style: 'currency',
                                currency: 'VND'
                            });
                            var orderItem = $('<li>').addClass('list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg');

                            var orderInfo = $('<div>').addClass('d-flex flex-column');
                            orderInfo.append($('<h6>').addClass('mb-3 text-sm').text('Giao hàng tận nơi'));
                            orderInfo.append($('<span>').addClass('mb-2 text-xs').text('Mã đơn: ').append($('<span>').addClass('text-dark font-weight-bold ms-sm-2').text('#' + order.bill_id)));
                            orderInfo.append($('<span>').addClass('mb-2 text-xs').text('Ngày đặt: ').append($('<span>').addClass('text-dark font-weight-bold ms-sm-2').text(order.created_at)));
                            orderInfo.append($('<span>').addClass('text-xs').text('Giá trị đơn: ').append($('<span>').addClass('text-dark font-weight-bold ms-sm-2').text(orderValueFormatted)));

                                var orderLink = $('<a>').addClass('btn btn-link text-danger text-gradient px-3 mb-0 view-order-link').attr('href', '{{URL::to('/view-bill/')}}'+ '/' + order.bill_id).text('Xem đơn');


                            orderItem.append(orderInfo);
                            orderItem.append($('<div>').addClass('ms-auto text-end').append(orderLink));

                            ordersList.append(orderItem);
                        });

                    modalBody.append(ordersList);
                } else {
                    modalBody.text('Không có đơn hàng nào.');
                }

                // Gọi hàm để hiển thị modal
                var myModal = new bootstrap.Modal(document.getElementById('exampleModalBill'));
                myModal.show();
            })
            .catch(function(error) {
                console.error(error);
            });
        }
      </script>
      

<div class="modal fade" id="exampleModalBill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Đơn hàng</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">

                </li>
            </ul>
            
        </div>
        
      </div>
    </div>
  </div>
      
      
    
</body>
</html>