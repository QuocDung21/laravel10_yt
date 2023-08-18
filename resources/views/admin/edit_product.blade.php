<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Chỉnh sửa thông tin sản phẩm</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
              <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{URL::to('/product-list')}}">Danh sách sản phẩm</a></li>
                @foreach($product as $key => $show_product)
                    <li class="breadcrumb-item text-sm text-dark active" >{{$show_product->product_name}}</li>
                    @break
                @endforeach
             
              
              </ol>
               
                    <h6 class="font-weight-bolder mb-0"></h6>
              
          

              
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
            @foreach($product as $key => $show_product)
            <form action="{{URL::to('/update-product/'.$show_product->product_id)}}" method="post" enctype="multipart/form-data" id="form-edit">
                {{ csrf_field() }}
                <div class="col-12  m-auto bg-white  p-3 border-radius-xl " >
                <h4>Chỉnh sửa thông tin sản phẩm</h4>
                <br>
                @if (Session::has('successUpDate'))
                    <div class="alert alert-success">
                        {{ Session::get('successUpDate') }}
                    </div>
                @endif
                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="">Tên sản phẩm</label>
                                <input name="nameProduct" type="text" placeholder="Nhập tên sản phẩm..." value="{{$show_product->product_name}}" class="form-control" required>
                            </div>
                            
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-4">
                                <label for="">Giá nhập vào (VNĐ)</label>
                                <input name="priceProductIn" type="number" placeholder="0" class="form-control" value="{{$show_product->product_price_in}}" required>
                            </div>
                            <div class="col-4">
                                <label for="">Giá bán ra (VNĐ)</label>
                                <input name="priceProductOut" type="number" placeholder="0" class="form-control" value="{{$show_product->product_price}}" required>
                            </div>
                            <div class="col-4">
                                <label for="">Giá cũ (VNĐ)</label>
                                <input name="priceProductOld" type="number" placeholder="0" class="form-control" value="{{$show_product->product_price_old}}">
                            </div>
                            
                        </div>
                        <br>
                        <div class="row mt-3">
                            
                            <div class="col-4">
                                <label for="">Danh mục</label>
                                <select name="categoryProduct" id="categoryProductSelect" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->category_id }}" {{ $category->category_id == $show_product->category_id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="categoryDetailContainer" class="col-4">
                                <label for="">Phân loại</label>
                                <select name="categoryDetail" id="categoryDetailSelect" class="form-control" required>
                                    @foreach($categories as $category)
                                        @foreach($category_details as $category_detail)
                                            @if($category_detail->category_id == $category->category_id)
                                                <option value="{{ $category_detail->category_detail_id }}" {{ $category_detail->category_detail_id == $show_product->category_detail_id ? 'selected' : '' }}>
                                                    {{ $category_detail->category_detail_name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row mt-3">
                            
                            <div class="col-3">
                                <label for="">Đơn vị tính</label>
                                <input name="unitProduct" type="text" placeholder="Nhập đơn vị tính..." value="{{$show_product->productUnit}}" class="form-control" required>
                            </div>

                            <div class="col-3">
                                <label for="">Chỉ định</label>
                                <select name="outProduct" id="" class="form-control">
                                    <option value="0" <?php if($show_product->product_out == 0) echo 'selected'?>>Bán trực tuyến</option>
                                    <option value="1" <?php if($show_product->product_out == 1) echo 'selected'?>>Bán theo đơn</option>
                                    <option value="2" <?php if($show_product->product_out == 2) echo 'selected'?>>Hết hàng</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="">Trạng thái</label>
                                <select name="statusProduct" id="" class="form-control">
                                    <option value="0"<?php if($show_product->product_status == 0) echo 'selected'?>>Chờ xử lý</option>
                                    <option value="1"<?php if($show_product->product_status == 1) echo 'selected'?>>Hiện</option>
                                    <option value="2"<?php if($show_product->product_status == 2) echo 'selected'?>>Ẩn</option>
                                </select>
                            </div>
                            
                        </div>
                        <br>

                        
                            
                        <div class="row mt-3">
                            <div class="col-3">
                                <label for="">Hình ảnh (1)</label>
                                <input name="imgProduct1" type="file" class="form-control" onchange="previewImage1(event)">
                            </div>

                            <div class="col-3">
                                <label for="">Hình ảnh (2)</label>
                                <input name="imgProduct2" type="file" class="form-control" onchange="previewImage2(event)">
                            </div>
                            <div class="col-3">
                                <label for="">Hình ảnh (3)</label>
                                <input name="imgProduct3" type="file" class="form-control" onchange="previewImage3(event)">
                            </div>

                            <div class="col-3">
                                <label for="">Hình ảnh (4)</label>
                                <input name="imgProduct4" type="file" class="form-control" onchange="previewImage4(event)">
                            </div>
                        </div>

                        
                        

                        <div class="row mt-3">
                            <div class="col-3">
                                
                                <img id="previewImg1" src="/uploads/product/{{$show_product->product_img1}}" alt="" class="w-100 border-radius-lg shadow-lg mt-3">
                            </div>
                            <div class="col-3">
                                <img id="previewImg2" src="/uploads/product/{{$show_product->product_img2}}" alt="" class="w-100 border-radius-lg shadow-lg mt-3">                                
                            </div>

                            <div class="col-3">
                                <img id="previewImg3" src="/uploads/product/{{$show_product->product_img3}}" alt="" class="w-100 border-radius-lg shadow-lg mt-3">
                            </div>

                            <div class="col-3">
                                <img id="previewImg4" src="/uploads/product/{{$show_product->product_img4}}" alt="" class="w-100 border-radius-lg shadow-lg mt-3">
                            </div>
                        </div>
                        

                        

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="">Mô tả ngắn</label>
                                <textarea id="ckeditor1"  name="descProduct" rows="2" class="form-control" placeholder="Nhập mô tả ngắn...">{{$show_product->product_desc}}</textarea>
                                <script >
                                    CKEDITOR.replace('ckeditor1');
                                </script>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
            <div class="card mt-4" >
                <div class="card-header d-flex">
                  <h6 class="mb-0">Thông tin sản phẩm</h6>
                  <button class="btn btn-sm bg-gradient-dark my-sm-auto mt-2 mb-0 ms-auto mb-auto" type="button" id="btnAddDesc">Thêm thông tin</button>
                  
                </div>
                <div class="card-body">
                    <div id="description-container">
                        @foreach($descriptions as $key => $description)
                            <div class="row mt-3">
                                <div class="col-4">
                                    <input name="title[]" type="text" class="form-control" placeholder="Nhập tiêu đề..."
                                        value="{{ $description->description_title }}">
                                    <button class="btn btn-sm btn-outline-dark mb-0 delete-description" type="button"
                                        style="margin-top: 10px">Xoá thông tin</button>
                                </div>
                                <div class="col-8">
                                    <textarea name="content[]" rows="3" class="form-control"
                                        placeholder="Nhập nội dung...">{{ $description->description_detail }}</textarea>
                                </div>
                            </div>
                            <hr class="horizontal dark hrDesc">
                        @endforeach

                    </div>
                </div>
            </div>
            <script>
                // Thêm mô tả khi nhấp vào nút "Thêm mô tả"
                var btnAddDesc = document.getElementById('btnAddDesc');
                btnAddDesc.addEventListener('click', function() {
                    var container = document.getElementById('description-container');

                    var newRow = document.createElement('div');
                    newRow.className = 'row mt-3';

                    var col1 = document.createElement('div');
                    col1.className = 'col-4';

                    var input = document.createElement('input');
                    input.name = 'title[]';
                    input.type = 'text';
                    input.className = 'form-control';
                    input.placeholder = 'Nhập tiêu đề...';

                    var button = document.createElement('button');
                    button.className = 'btn btn-sm btn-outline-dark mb-0 delete-description';
                    button.type = 'button';
                    button.style.marginTop = '10px';
                    button.textContent = 'Xoá mô tả';

                    col1.appendChild(input);
                    col1.appendChild(button);

                    var col2 = document.createElement('div');
                    col2.className = 'col-8';

                    var textarea = document.createElement('textarea');
                    textarea.name = 'content[]';
                    textarea.rows = 3;
                    textarea.className = 'form-control';
                    textarea.placeholder = 'Nhập nội dung...';

                    col2.appendChild(textarea);

                    newRow.appendChild(col1);
                    newRow.appendChild(col2);

                    container.appendChild(newRow);

                    var hr = document.createElement('hr');
                    hr.className = 'horizontal dark';
                    container.appendChild(hr);
                });
                //// Kiểm tra phần thêm mô tả
                /// Update lỗi
            </script>

            <div class="row mt-3">
                <div class="col-2">
                </div>
                <div class="col-8">
                    <input type="submit" name="update_product" class="btn bg-gradient-info w-100 mt-4 mb-0" value="Cập nhật sản phẩm">
                </div>
                <div class="col-2">
                </div>
            </div>
            </form>
            @endforeach
        </div>
    </main>
    <script>
        // Lấy danh sách tất cả các form có id được chỉ định
        const forms = document.querySelectorAll('form[id="form-edit"]');
    
        // Ẩn tất cả các form trừ form đầu tiên
        for (let i = 1; i < forms.length; i++) {
            forms[i].remove();
        }
    </script>
    

  
    
    

    <script>
        $(document).ready(function() {
            // Bắt sự kiện thay đổi trên danh mục cha
            $('#categoryProductSelect').on('change', function() {
                var category_id = $(this).val();

                // Gửi yêu cầu AJAX để lấy danh sách danh mục con tương ứng
                $.ajax({
                    url: '/get-category-details/' + category_id,
                    type: 'GET',
                    success: function(data) {
                        var categoryDetailSelect = $('#categoryDetailSelect');

                        // Xóa tất cả các option hiện tại trong danh mục con
                        categoryDetailSelect.empty();

                        // Thêm option mặc định
                        categoryDetailSelect.append('<option value="">-- Chọn danh mục con --</option>');

                        // Thêm các option danh mục con từ dữ liệu nhận được
                        $.each(data, function(index, category_detail) {
                            categoryDetailSelect.append('<option value="' + category_detail.category_detail_id + '">' + category_detail.category_detail_name + '</option>');
                        });

                        // Kiểm tra giá trị mặc định của danh mục con
                        var selectedCategoryDetail = categoryDetailSelect.val();
                        if (selectedCategoryDetail === "") {
                            // Hiển thị thông báo yêu cầu chọn một danh mục con khác
                            alert("Vui lòng phân loại lại sản phẩm!");
                        }
                    },
                    error: function() {
                        // Xử lý lỗi nếu có
                    }
                });
            });
        });


      




        document.addEventListener('click', function(event) {
                if (event.target.classList.contains('delete-description')) {
                    var row = event.target.closest('.row');
                        var hr = row.nextElementSibling;
                        row.remove();
                        if (hr && hr.tagName === 'HR') {
                            hr.remove();
                        }
                }
            });

        
            
            function previewImage1(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var previewImg = document.getElementById('previewImg1');
                        previewImg.src = e.target.result;
                        previewImg.style.display = 'block'; // Hiển thị thẻ img
                    };
                    reader.readAsDataURL(input.files[0]);
                } else {
                    var previewImg = document.getElementById('previewImg1');
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
    
</body>
</html>