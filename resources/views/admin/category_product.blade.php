<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Quản lý danh mục</title>
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
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
          navbar-scroll="true">
          <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
              {{-- <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
              </ol> --}}
              <h6 class="font-weight-bolder mb-0">Quản lý danh mục</h6>
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
            <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
              <div class="card">
                <div class="card-header pb-0">
                  <div class="row">
                    <div class="col-lg-6 col-7">
                      <h6>Danh sách danh mục</h6>
                      
                    </div>
                    <div class="col-lg-6 col-5 my-auto text-end">
                      <div class="dropdown float-lg-end pe-4">
                        <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-secondary"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên</th>
                           
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cập nhật</th>
                            <th class="text-secondary opacity-7"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($all_category_product as $key => $cate_pro)
                                <tr>
                                    <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="uploads/category/{{$cate_pro->category_img}}" class="avatar avatar-sm me-3" alt="">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $cate_pro->category_name}}</h6>
                                        
                                        </div>
                                    </div>
                                    </td>
                                    
                                    <td class="align-middle text-center text-sm">
                                        <?php
                                            if($cate_pro->category_status==1){
                                                echo '<span class="badge badge-sm bg-gradient-success">Hiện</span>';
                                            }else if($cate_pro->category_status==2){
                                                echo '<span class="badge badge-sm bg-gradient-secondary">Ẩn</span>';
                                            } else 
                                            echo '<span class="badge badge-sm bg-gradient-warning">Chờ xử lý</span>'
                                        ?>
                                    </td>
                                    <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $cate_pro->created_at}}</span>
                                    </td>
                                    <td class="align-middle">
                                          <a class="btn btn-link text-dark px-3 mb-0" href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" title="Chỉnh sửa danh mục">
                                              <i class="fas fa-pencil-alt text-dark me-2" ></i>Edit
                                          </a>

                                          <a onclick="return confirm('Are you sure to delete?')" class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" title="Xoá danh mục">
                                            <i class="far fa-trash-alt me-2"></i>Delete
                                          </a>

                                          

                                          <a href="{{ route('move-up-category', ['categoryId' => $cate_pro->category_id]) }}" class="btn btn-link text-danger text-gradient px-3 mb-0" title="Di chuyển vị trí lên" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
                                                <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
                                            </svg>
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
            <div class="col-lg-4 col-md-6">
              <div class="card h-100">
                <div class="card-header pb-0">
                  <h6>Thêm danh mục</h6>
                  
                </div>
                <div class="card-body p-3">
                    <form action="{{URL::to('/save-category-product')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="timeline timeline-one-side">
                            
                                <div class="timeline-block mb-3">
                                    <input type="text" class="form-control" placeholder="Nhập tên danh mục..." name="name_category" required="required">
                                
                                </div>
            
                                
            
                                <div class="timeline-block mb-3">
                                    <select class="form-control" name="status_category">
                                        <option value="0">-- Trạng thái --</option>
                                        <option value="1">Hiện</option>
                                        <option value="2">Ẩn</option>
                                    </select>
                                </div>

                                <div class="timeline-block mb-3">
                                    <input type="file" class="form-control" name="img_category" required="required" onchange="previewImage(event)">
                                </div>

                                

                        </div>
                        <img id="previewImg" class="w-40 border-radius-lg shadow" src="" alt="" style="display: none">
                        
                        <input type="submit" name="add_category" class="btn bg-gradient-info w-100 mt-4 mb-0" value="Thêm danh mục">
                    </form>
                    <script>
                      function previewImage(event) {
                          var input = event.target;
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();
                              reader.onload = function(e) {
                                  var previewImg = document.getElementById('previewImg');
                                  previewImg.src = e.target.result;
                                  previewImg.style.display = 'block'; // Hiển thị thẻ img
                              };
                              reader.readAsDataURL(input.files[0]);
                          } else {
                              var previewImg = document.getElementById('previewImg');
                              previewImg.src = '';
                              previewImg.style.display = 'none'; // Ẩn thẻ img
                          }
                      }
                      </script>
                </div>
              </div>
            </div>
          </div>
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
            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Chỉnh sửa danh mục
            </button>
            
            
            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa danh mục </h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                     
                     
                     
                        <div class="timeline timeline-one-side">
                         
                                <div class="timeline-block mb-3">
                                    <input type="text" class="form-control" value="" name="name_category" required="required">
                                
                                </div>
            
                                
            
                                <div class="timeline-block mb-3">
                                    <select class="form-control" name="status_category">
                                        <option value="0">-- Trạng thái --</option>
                                        <option value="1">Hiện</option>
                                        <option value="2">Ẩn</option>
                                    </select>
                                </div>

                                <div class="timeline-block mb-3">
                                    <input type="file" class="form-control" name="img_category" required="required">
                                </div>

                                

                        </div>

                        <div class="modal-footer">
                          <input type="submit" name="update_category" class="btn bg-gradient-primary" value="Cập nhật">
                         
                          
                          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Thoát</button>
                          
                          
                        </div>
                       
                        
                        
                    </form>
                   
                    
                    </div>
                    
                </div>
                </div>
            </div> --}}
    </main>
    <br><br><br><br><br><br>
    <script src="{{asset('js/admin.js')}}"></script>
    

    {{-- <script>
        var modal = document.getElementById("modal");
        var btn = document.getElementById("open-modal");
        var closeBtn = document.getElementsByClassName("close")[0];

        // Khi người dùng nhấp vào nút, mở modal
        btn.addEventListener("click", function() {
        modal.style.display = "block";
        });

        // Khi người dùng nhấp vào nút đóng, đóng modal
        closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
        });

        // Khi người dùng nhấp vào bất kỳ nơi nào bên ngoài modal, đóng modal
        window.addEventListener("click", function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        });
    </script> --}}
</body>
</html>