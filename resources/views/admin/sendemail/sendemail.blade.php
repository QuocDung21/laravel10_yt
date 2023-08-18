<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Email nhận khuyến mãi</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap2.js')}}"></script>
    
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
              
              <h6 class="font-weight-bolder mb-0">Danh sách Email đăng ký nhận thông tin khuyến mãi</h6>
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
                @if(session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text"><strong>Thành công!</strong>  {{ session('message') }}</span>
                        </div>
                    @endif
              <div class="card mb-4">
                <div class="card-header pb-0 mb-3">
                    <div class="d-lg-flex">
                        <div>
                            <div class="ms-auto my-auto">
                                
                                {{-- <a class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" href="{{URL::to('/send-e')}}">Gửi</a> --}}
                                <a id="send-button" class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" href="javascript:void(0)">Gửi</a>
                            </div>
                        </div>
                        <div class="ms-auto my-auto mt-lg-0 mt-4">
                           
                        </div>
                        
                    </div>
                </div>
                
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table table-flush dataTable-table">
                      <thead class="thead-light">
                        <tr>
                            
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            <div class="d-flex">
                                <input type="checkbox" id="select-all" style="margin-right: 10px"> Chọn tất cả
                            </div>
                        </th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ngày đăng ký</th>
                          
                         
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody id="">
                        @foreach ($promotion as $item)
                            <tr>
                                <td>
                                    <input type="checkbox" class="item-checkbox" style="margin-left: 20px" data-email="{{ $item->email }}">
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm">{{$item->email}}</h6>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold product-price" >{{ $item->created_at }}</span>
                                </td>
                                <td>
                                    <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-email-promotion/'.$item->id)}}"  class="btn btn-link text-danger text-gradient px-3 mb-0" title="Xoá bài viết">
                                        <i class="far fa-trash-alt me-2"></i>Delete
                                      </a>
                                </td>
                            </tr>
                        @endforeach
                            
                        
                      </tbody>
                      
                      
                    </table>
                    <script>
                        $(document).ready(function() {
                            $('#select-all').click(function() {
                                $('.item-checkbox').prop('checked', $(this).prop('checked'));
                            });
                        });
                    </script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const sendButton = document.getElementById('send-button');
                            const checkboxes = document.querySelectorAll('.item-checkbox');
                    
                            sendButton.addEventListener('click', function() {
                                const selectedEmails = [];
                                checkboxes.forEach(function(checkbox) {
                                    if (checkbox.checked) {
                                        selectedEmails.push(checkbox.dataset.email);
                                    }
                                });
                    
                                if (selectedEmails.length > 0) {
                                    const emailString = selectedEmails.join(',');
                                    window.location.href = "{{ URL::to('/send-emails/') }}/" + emailString;
                                } else {
                                    alert('Vui lòng chọn ít nhất một địa chỉ email.');
                                }
                            });
                        });
                    </script>
                    

                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pagination mt-3">
            
            
           </div>
        
        </div>

        

        
    </main>
</body>
</html>