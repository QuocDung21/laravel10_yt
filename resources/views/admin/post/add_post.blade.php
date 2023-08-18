<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Thêm bài viết mới</title>
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
    <script src="{{asset('/ckeditor/ckeditor/ckeditor.js')}}"></script>
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
              
              <h6 class="font-weight-bolder mb-0">Thêm bài viết</h6>
              
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
                    <form action="{{URL::to('/save-post')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="mb-0">Thêm bài viết</h6>
                        <p class="text-sm mb-0">Thêm bài viết mới</p>
                        <hr class="horizontal dark my-3">
                        <label for="" class="form-label">Tên bài viết</label>
                        <input type="text" class="form-control" name="post_title" onkeyup="ChangeToSlug()" required>
                        
                        
                        <div class="row mt-4">
                            <div class="col-12 col-md-2">
                                <div class="form-group">
                                    <label>
                                        Trạng thái
                                    </label>
                                   
                                    <div class="form-check form-switch ms-1">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="notify(this)"
                                             data-icon="ni ni-bell-55" >
                                        <input type="hidden" name="post_status" id="hiddenStatusInput" value="1">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-10">
                                <div class="form-group">
                                    <label>
                                        Slug
                                    </label>
                                   
                                    
                                        
                                        <input type="text" name="post_slug" id="convert_slug" class="form-control">
                                        
                                    
                                </div>
                            </div>
                        </div>
                        <label for="">Tóm tắt bài viết</label>
                        <textarea name="post_desc" id="ckeditor" cols="30" rows="2" class="form-control"></textarea>
                        <script>
                          CKEDITOR.replace('ckeditor');
                        </script>
                        <br>
                        <label for="">Nội dung bài viết</label>
                        <textarea name="post_content" id="ckeditor2" cols="30" rows="10" class="form-control"></textarea>
                        <script>
                          CKEDITOR.replace('ckeditor2');
                        </script>
                        <br>
                        <div class="row mt-4">
                          <div class="col-12 col-md-6">
                              <div class="form-group">
                                <label for="">Hình ảnh bài viết</label>
                                <input type="file" class="form-control" id="imageInput" name="post_image" required>
                                <br>
                                <label for="">Chỉ định danh mục</label>
                                <select name="cate_post_id" id="" class="form-control">
                                  @foreach($cate_post as $cate)
                                  <option value="{{$cate->cate_post_id}}">{{$cate->cate_post_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                          </div>
                          <div class="col-12 col-md-6">
                              <div class="form-group">
                                  <img src="" alt="" id="previewImage" width="280" height="156">
                                  
                                      
                                  
                              </div>
                          </div>
                        </div>
                        
                        <br>

                     
                        

                        
                        <hr class="horizontal dark my-3">
                        <button class="btn bg-gradient-primary m-0 ms-2" type="submit" name="add_post">Thêm bài viết</button>
                    </form>

                        
                    </div>
                </div>
            </div>


            
            
        </div>
          
    </main>
    <script>
      document.getElementById('imageInput').addEventListener('change', function(event) {
          const selectedFile = event.target.files[0]; // Lấy tệp đã chọn

          if (selectedFile) {
              const reader = new FileReader();

              // Đọc tệp và cập nhật thuộc tính src của thẻ <img>
              reader.onload = function(e) {
                  document.getElementById('previewImage').src = e.target.result;
              };

              reader.readAsDataURL(selectedFile);
          }
      });
    </script>
    <script>
      function notify(checkbox){
            const hiddenInput = document.getElementById("hiddenStatusInput");
            if (checkbox.checked) {
                hiddenInput.value = "0";
            } else {
                hiddenInput.value = "1";
            }
        }
        function ChangeToSlug() {
            const inputText = document.querySelector('input[name="post_title"]').value;

            
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