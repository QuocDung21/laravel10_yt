<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Danh mục bài viết</title>
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
              
              <h6 class="font-weight-bolder mb-0">Danh mục bài viết</h6>
              
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
                <div class="col-lg-9 col-12 mx-auto">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text"><strong>Thành công!</strong>  {{ session('success') }}</span>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text"><strong>Thất bại!</strong>  {{ session('error') }}</span>
                        </div>
                    @endif
                    
                    <div class="card card-body mt-4">
                    <form action="{{URL::to('/add-category-post')}}" method="POST">
                        @csrf
                        <h6 class="mb-0">Danh mục bài viết</h6>
                        <p class="text-sm mb-0">Thêm danh mục bài viết mới</p>
                        <hr class="horizontal dark my-3">
                        <label for="" class="form-label">Tên danh mục bài viết</label>
                        <input type="text" class="form-control" name="cate_post_name" onkeyup="ChangeToSlug()">
                        
                        
                        <div class="row mt-4">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Trạng thái
                                    </label>
                                   
                                    <div class="form-check form-switch ms-1">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="notify(this)"
                                             data-icon="ni ni-bell-55" >
                                        <input type="hidden" name="cate_post_status" id="hiddenStatusInput" value="1">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Slug
                                    </label>
                                   
                                    
                                        
                                        <input type="text" name="cate_post_slug" id="convert_slug" class="form-control">
                                        
                                    
                                </div>
                            </div>
                        </div>

                        
                        <hr class="horizontal dark my-3">
                        <button class="btn bg-gradient-primary m-0 ms-2" type="submit" name="add_post_cate">Thêm danh mục bài viết</button>
                    </form>

                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-12 mx-auto">
                   
                    <div class="card card-body mt-4">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên danh mục</th>
                                     
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cập nhật</th>
                                      <th class="text-secondary opacity-7"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($post as $p)
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-sm">{{ $p->cate_post_name}}</h6>
                                        </td>
                                        
                                        <td class="align-middle text-center text-sm">
                                            <?php
                                                if($p->cate_post_status==0){
                                                    echo '<span class="badge badge-sm bg-gradient-success">Hiện</span>';
                                                }else 
                                                    echo '<span class="badge badge-sm bg-gradient-secondary">Ẩn</span>';
                                                
                                            ?>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{$p->created_at}}
                                        </td>
                                        <td>
                                            <a href="{{URL::to('/move-up-post/'.$p->cate_post_id)}}" class="btn btn-link text-danger text-gradient px-3 mb-0" title="Di chuyển vị trí lên" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
                                                    <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
                                                </svg>
                                            </a>
                                            <a class="btn btn-link text-dark px-3 mb-0 edit-cate-post" href="#" title="Chỉnh sửa danh mục" data-post-id="{{$p->cate_post_id}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fas fa-pencil-alt text-dark me-2" ></i>Edit
                                            </a>
                                            <a onclick="return confirm('Are you sure to delete?')" class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{URL::to('/delete-cate-post/'.$p->cate_post_id)}}" title="Xoá danh mục">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form action="{{URL::to('/update-cate-post')}}" method="POST">
                @csrf
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa danh mục bài viết</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                
                    <input type="hidden" name="postId">
                    <label for="">Tên danh mục</label>
                    <input type="text" placeholder="Tên danh mục bài viết" class="form-control" name="postName">
                    <hr class="horizontal dark my-3">
                    <label for="">Trạng thái</label>
                    <select name="postStatus" id="postStatus" class="form-control">
                        <option value="0">Hiện</option>
                        <option value="1">Ẩn</option>
                    </select>
                
                </div>
                <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Thoát</button>
                <button type="submit" class="btn bg-gradient-primary">Lưu</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    <script>
        $(document).ready(function() {
            $('.edit-cate-post').click(function(){
                var postId = $(this).data('post-id');
                axios.get(`/get-cate-post-info/${postId}`)
                .then(function(response){
                    var catepostData = response.data;
                    $('#exampleModal input[name="postId"]').val(catepostData.cate_post_id);
                    $('#exampleModal input[name="postName"]').val(catepostData.cate_post_name);
                    // $('#exampleModal input[name="postStatus"]').val(catepostData.cate_post_status);
                    $('#postStatus').val(catepostData.cate_post_status);
                    // if (catepostData.cate_post_status == 0) {
                    //     $('#exampleModal input[name="postStatus"]').prop('checked', true);
                    // } else {
                    //     $('#exampleModal input[name="postStatus"]').prop('checked', false);
                    // }

                   
                })
                .catch(function(error) {
                    console.error(error);
                });
            })
        })

        function notify(checkbox){
            const hiddenInput = document.getElementById("hiddenStatusInput");
            if (checkbox.checked) {
                hiddenInput.value = "0";
            } else {
                hiddenInput.value = "1";
            }
        }
        function ChangeToSlug() {
            const inputText = document.querySelector('input[name="cate_post_name"]').value;

            
            const slug = slugify(inputText);

           
            document.getElementById('convert_slug').value = slug;
        }
        function slugify(text) {
            const slug = text
                .toString()
                .toLowerCase()
                .normalize("NFD") // Chuyển đổi Unicode thành các ký tự tách biệt (normalize)
                .replace(/[àáạảãâầấậẩẫăằắặẳẵ]/g, "a")
                .replace(/[èéẹẻẽêềếệểễ]/g, "e")
                .replace(/[ìíịỉĩ]/g, "i")
                .replace(/[òóọỏõôồốộổỗơờớợởỡ]/g, "o")
                .replace(/[ùúụủũưừứựửữ]/g, "u")
                .replace(/[ỳýỵỷỹ]/g, "y")
                .replace(/đ/g, "d")
                .replace(/[\u0300-\u036f]/g, "") // Loại bỏ dấu thanh, dấu huyền, dấu hỏi, dấu ngã, dấu nặng
                .replace(/\s+/g, "-") // Thay thế khoảng trắng bằng dấu -
                .replace(/[^\w\-]+/g, "") // Loại bỏ tất cả các ký tự không phải từ hoặc dấu -
                .replace(/\-\-+/g, "-") // Thay thế nhiều dấu - liên tiếp thành một dấu -
                .replace(/^-+/, "") // Loại bỏ dấu - ở đầu chuỗi
                .replace(/-+$/, ""); // Loại bỏ dấu - ở cuối chuỗi
            return slug;
        }
    </script>
    
</body>
</html>