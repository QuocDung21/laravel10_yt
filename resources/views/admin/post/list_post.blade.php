<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Danh sách bài viết</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin2.css')}}">
    <link rel="stylesheet" href="{{asset('css/soft-ui-dashboard.css')}}">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap2.js')}}"></script>
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
              
              <h6 class="font-weight-bolder mb-0">Danh sách bài viết</h6>
              
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
            

            <div class="row">
                <div class="col-lg-12 col-12 mx-auto">
                   
                    <div class="card card-body mt-4">
                        <div class="table-responsive p-0">
                            <table class=" align-items-center mb-0">
                                <thead>
                                    <tr>
                                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên bài viết</th>
                                     
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hình ảnh</th>
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mô tả bài viết</th>
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Danh mục bài viết</th>
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                                      <th class="text-secondary opacity-7"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($show_post as $key => $post)
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-sm">{{$post->post_title}}</h6>
                                        </td>
                                        <td class="px-3">
                                            <img width="268" height="150" src="uploads/post/{{$post->post_image}}" alt="">
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">{!! $post->post_desc !!}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs text-secondary mb-0">{{$post->cate_post_name}}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            @if($post->post_status == 0)
                                                <span class="badge badge-sm bg-gradient-success product-status">Hiện</span>
                                            @else
                                                <span class="badge badge-sm bg-gradient-secondary product-status">Ẩn</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-link text-dark px-3 mb-0 edit-cate-post" href="#" title="Chỉnh sửa bài viết" >
                                                <i class="fas fa-pencil-alt text-dark me-2" ></i>Edit
                                            </a>
                                            <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-post/'.$post->post_id)}}"  class="btn btn-link text-danger text-gradient px-3 mb-0" title="Xoá bài viết">
                                                <i class="far fa-trash-alt me-2"></i>Delete
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
          
    </main>
</body>
</html>