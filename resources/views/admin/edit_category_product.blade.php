<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Chỉnh sửa danh mục</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
   
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
              @foreach($edit_category_product as $key => $edit_value)
              <h6 class="font-weight-bolder mb-0">{{$edit_value->category_name}}</h6>
              @endforeach
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
            


            <div class="col-lg-6 col-md-6">
              <div class="card h-100">
                <div class="card-header pb-0">
                  <h6>Thông tin</h6>
                  
                </div>
                <div class="card-body p-3">
                    @foreach($edit_category_product as $key => $edit_value)
                    <form action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="timeline timeline-one-side">
                            
                                <div class="timeline-block mb-3">
                                    <input type="text" class="form-control" value="{{$edit_value->category_name}}" name="name_category" required="required" placeholder="Nhập tên danh mục...">
                                
                                </div>
            
                                
            
                                <div class="timeline-block mb-3">
                                    <select class="form-control" name="status_category" >
                                        <option value="0"<?php if($edit_value->category_status == 0) echo 'selected'?>>Chờ xử lý</option>
                                        <option value="1"<?php if($edit_value->category_status == 1) echo 'selected'?>>Hiện</option>
                                        <option value="2"<?php if($edit_value->category_status == 2) echo 'selected'?>>Ẩn</option>
                                    </select>
                                </div>

                                <div class="timeline-block mb-3">
                                    <input type="file" class="form-control" name="img_category"  onchange="previewImage(event)">
                                </div>
                                

                             
                                  
                        </div>
                        <img id="previewImg" class="w-40 border-radius-lg shadow" src="/uploads/category/{{$edit_value->category_img}}" alt="" >
                    
                        <input onclick="return confirm('Are you sure to update?')" type="submit" name="update_category_product" class="btn bg-gradient-info w-100 mt-4 mb-0" value="Cập nhật thông tin">
                    </form>
                    
                    @endforeach
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="card h-100">
                  <div class="card-header pb-0">
                    <h6>Thêm danh mục con</h6>
                    
                  </div>
                  <div class="card-body p-3">
                      <form action="{{URL::to('/save-category-product-2/'.$edit_value->category_id)}}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="timeline timeline-one-side">
                              
                                  <div class="timeline-block mb-3">
                                      <input type="text" class="form-control" placeholder="Nhập tên danh mục con..." name="name_category_2" required="required">
                                  
                                  </div>
              
                                  
              
                                  <div class="timeline-block mb-3">
                                      <select class="form-control" name="status_category_2">
                                          <option value="0">Chờ xử lý</option>
                                          <option value="1">Hiện</option>
                                          <option value="2">Ẩn</option>
                                      </select>
                                  </div>
  
                                  <div class="timeline-block mb-3">
                                      <input type="file" class="form-control" name="img_category_2" required="required" onchange="previewImage2(event)">
                                  </div>
                                 
                                  
  
                          </div>
                          <img id="previewImg2" class="w-40 border-radius-lg shadow" src="" alt="" style="display: none">
                          
                          <input type="submit" name="add_category_2" class="btn bg-gradient-info w-100 mt-4 mb-0" value="Thêm danh mục con">
                      </form>
                      
                  </div>
                </div>
              </div>
              
          </div>

          

          
          <div class="col-lg-12 col-md-6">
            <div class="card h-100">
                <div class="card-header pb-0">
                  <h6>Danh sách danh mục con</h6>
                  
                </div>
                <div class="card-body p-3">
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
                       @foreach($category_by_id as $key => $category_detail)
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="/uploads/category-detail/{{$category_detail->category_detail_img}}" alt="" class="avatar avatar-sm me-3">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">
                                  {{$category_detail->category_detail_name}}
                                </h6>
                                <a href="" class="text-xs mb-0">
                                   7 sản phẩm
                                </a>
                                
                                
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <?php
                                if($category_detail->category_detail_status==1){
                                    echo '<span class="badge badge-sm bg-gradient-success">Hiện</span>';
                                }else if($category_detail->category_detail_status==2){
                                    echo '<span class="badge badge-sm bg-gradient-secondary">Ẩn</span>';
                                }else 
                                        echo '<span class="badge badge-sm bg-gradient-warning">Chờ xử lý</span>'
                            ?>
                            
                        </td>

                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $category_detail->created_at}}</span>
                          </td>
                          <td class="align-middle">

                            <a class="btn btn-link px-3 mb-0" href="{{ URL::to('/show-product-cate/' . $category_detail->category_id . '/' . $category_detail->category_detail_id) }}" >
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                              </svg> &nbsp;  Add
                          </a>
                          {{-- <a class="btn btn-link text-dark px-3 mb-0 edit-category" href="{{URL::to('edit-category-product/'.$category_detail->category_detail_id)}}" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-pencil-alt text-dark me-2" ></i>Edit
                            </a> --}}

                            <a class="btn btn-link text-dark px-3 mb-0 edit-category" href="#" data-toggle="modal" data-target="#exampleModalCenter" data-category-id="{{ $category_detail->category_detail_id }}">
                              <i class="fas fa-pencil-alt text-dark me-2"></i>Edit
                          </a>
                          
                          

                            <a onclick="return confirm('Are you sure to delete?')" class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{URL::to('/delete-category-product-2/'.$category_detail->category_detail_id)}}">
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

          
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
          </button>
          

          {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa danh mục con</h5>
                </div>
          
                <div class="modal-body">
                  <form method="POST" action="" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="timeline timeline-one-side">
                      <div class="timeline-block mb-3">
                        <input type="text" class="form-control" value="" name="name_category_detail" required="required" placeholder="Nhập tên danh mục...">
                      </div>
                      <div class="timeline-block mb-3">
                        <select class="form-control" name="status_category_detail">
                          <option value="0">-- Trạng thái --</option>
                          <option value="1">Hiện</option>
                          <option value="2">Ẩn</option>
                        </select>
                      </div>
                      <div class="timeline-block mb-3">
                        <input type="file" class="form-control" name="img_category_detail" onchange="previewImage4(event)">
                      </div>
                    </div>
                    <img id="previewImg4" class="w-40 border-radius-lg shadow" src="" alt="">
                  </form>
                </div>
          
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                  <input type="submit" class="btn btn-primary" value="Cập nhật">
                </div>
              </div>
            </div>
          </div> --}}
          
          

         

          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa danh mục con</h5>
                </div>
          
                <div class="modal-body">
                  <div class="timeline timeline-one-side">
                    @foreach($category_by_id as $key => $category_detail)
                    @php
                    $selected_category_detail_id = $category_detail->category_detail_id;
                    @endphp
                    @if($category_detail->category_detail_id == $selected_category_detail_id)
                    <form class="updateCategoryForm" action="{{ URL::to('/update-category-detail/' . $category_detail->category_id . '/' . $category_detail->category_detail_id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="timeline-block mb-3">
                        <input type="text" class="form-control" value="{{ $category_detail->category_detail_name }}" name="name_category_detail" required="required" placeholder="Nhập tên danh mục...">
                      </div>
                      <div class="timeline-block mb-3">
                        <select class="form-control" name="status_category_detail">
                          <option value="0">Chờ xử lý</option>
                          <option value="1">Hiện</option>
                          <option value="2">Ẩn</option>
                        </select>
                      </div>
                    
                      <div class="timeline-block mb-3">
                        <input type="file" class="form-control" name="img_category_detail" onchange="previewImage4(event)">
                      </div>
                    </div>
                        <img id="previewImg4" class="w-40 border-radius-lg shadow" src="" alt="">
                      
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        <input type="submit" class="btn btn-primary" value="Cập nhật">
                      </div>
                    </form>
                    @break
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          

          
          
      
    </main>

{{--   
    <script>
      $(document).ready(function() {
        var categoryIdToUpdate = null;

        $('.updateCategoryForm').submit(function(event) {
          event.preventDefault();
          var form = $(this);

          // Gửi request update thông tin danh mục
          $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: new FormData(form[0]),
            processData: false,
            contentType: false,
            success: function(response) {
              console.log('Update thành công');
              $('#exampleModalCenter').modal('hide');
            },
            error: function(xhr, status, error) {
              console.log('Lỗi update danh mục:', error);
            }
          });
        });

        $('.edit-category').click(function() {
          var categoryId = $(this).data('category-id');
          var categoryDetail = getCategoryDetailById(categoryId);
          if (categoryDetail) {
            $('#exampleModalCenter input[name="name_category_detail"]').val(categoryDetail.category_detail_name);
            $('#exampleModalCenter select[name="status_category_detail"]').val(categoryDetail.category_detail_status);
            $('#exampleModalCenter img#previewImg4').attr('src', '/uploads/category-detail/' + categoryDetail.category_detail_img);

            categoryIdToUpdate = categoryDetail.category_detail_id;

            // Cập nhật giá trị của action attribute
            var currentPageId = window.location.href.split('/').pop();
            var formAction = '/update-category-detail/' + currentPageId + '/' + categoryIdToUpdate;
            $('#updateCategoryForm').attr('action', formAction);

            $('#exampleModalCenter').modal('show');
          }
        });

        $('#exampleModalCenter').on('click', 'button[data-dismiss="modal"]', function() {
          categoryIdToUpdate = null;
          $('#exampleModalCenter').modal('hide');
        });

        // Xử lý sự kiện khi nhấn nút "Cập nhật"
        $('#updateCategoryForm').submit(function(event) {
          event.preventDefault();

          if (categoryIdToUpdate) {
            // Gửi request update thông tin danh mục
            $.ajax({
              url: $(this).attr('action'),
              type: 'POST',
              data: new FormData($(this)[0]),
              processData: false,
              contentType: false,
              success: function(response) {
                console.log('Update thành công');
                $('#exampleModalCenter').modal('hide');
              },
              error: function(xhr, status, error) {
                console.log('Lỗi update danh mục:', error);
              }
            });
          }
        });

        function getCategoryDetailById(categoryId) {
          var categoryDetails = 
          var categoryDetail = categoryDetails.find(function(category) {
            return category.category_detail_id === categoryId;
          });
          return categoryDetail;
        }
      });

    </script> --}}

    <script>
      $(document).ready(function() {
        $('.edit-category').click(function() {
          var categoryId = $(this).data('category-id');
          var categoryDetail = getCategoryDetailById(categoryId);
          if (categoryDetail) {
            $('#exampleModalCenter input[name="name_category_detail"]').val(categoryDetail.category_detail_name);
            $('#exampleModalCenter select[name="status_category_detail"]').val(categoryDetail.category_detail_status);
            $('#exampleModalCenter img#previewImg4').attr('src', '/uploads/category-detail/' + categoryDetail.category_detail_img);
    
            // Cập nhật giá trị của action attribute
            var formAction = '/update-category-detail/' + categoryDetail.category_id + '/' + categoryDetail.category_detail_id;
            $('.updateCategoryForm').attr('action', formAction);
    
            $('#exampleModalCenter').modal('show');
          }
        });
    
        $('#exampleModalCenter').on('click', 'button[data-dismiss="modal"]', function() {
          $('#exampleModalCenter').modal('hide');
        });
    
        // Hàm lấy thông tin danh mục theo ID
        function getCategoryDetailById(categoryId) {
          var categoryDetails = <?php echo json_encode($category_by_id); ?>;
          var categoryDetail = categoryDetails.find(function(category) {
            return category.category_detail_id === categoryId;
          });
          return categoryDetail;
        }
      });
    </script>
    
    


    
   
   
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
      function previewImage2(event) {
          var input = event.target;
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                  var previewImg = document.getElementById('previewImg2');
                  previewImg.src = e.target.result;
                  previewImg.style.display = 'block'; // Hiển thị thẻ img
              };
              reader.readAsDataURL(input.files[0]);
          } else {
              var previewImg = document.getElementById('previewImg2');
              previewImg.src = '';
              previewImg.style.display = 'none'; // Ẩn thẻ img
          }
      }
      function previewImage3(event) {
          var input = event.target;
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                  var previewImg = document.getElementById('previewImg3');
                  previewImg.src = e.target.result;
                  previewImg.style.display = 'block'; // Hiển thị thẻ img
              };
              reader.readAsDataURL(input.files[0]);
          } else {
              var previewImg = document.getElementById('previewImg3');
              previewImg.src = '';
              previewImg.style.display = 'none'; // Ẩn thẻ img
          }
      }
      function previewImage4(event) {
          var input = event.target;
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                  var previewImg = document.getElementById('previewImg4');
                  previewImg.src = e.target.result;
                  previewImg.style.display = 'block'; // Hiển thị thẻ img
              };
              reader.readAsDataURL(input.files[0]);
          } else {
              var previewImg = document.getElementById('previewImg4');
              previewImg.src = '';
              previewImg.style.display = 'none'; // Ẩn thẻ img
          }
      }
      </script>
    
    <script src="{{asset('js/admin.js')}}"></script>
    
   
</body>
</html>