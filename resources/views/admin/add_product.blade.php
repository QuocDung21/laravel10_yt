<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Thêm sản phẩm mới</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin2.css')}}">
    <link rel="stylesheet" href="{{asset('css/soft-ui-dashboard.css')}}">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap2.js')}}"></script>
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
              
              <h6 class="font-weight-bolder mb-0">Thêm sản phẩm mới</h6>
              
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
            
            <form action="{{URL::to('/add-product')}}" method="post" enctype="multipart/form-data" id="form-edit">
                {{ csrf_field() }}
                <div class="col-12  m-auto bg-white  p-3 border-radius-xl " >
                <h4>Thêm sản phẩm</h4>
                <br>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                    <div class="multisteps-form__content">
                        <div class="row mt-3">    
                            <div class="col-12">
                                <label for="">Tên sản phẩm</label>
                                <input name="nameProduct" type="text" placeholder="Nhập tên sản phẩm..." value="" class="form-control" required>
                            </div>
                            
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-4">
                                <label for="">Giá nhập vào (VNĐ)</label>
                                <input name="priceProductIn" type="number" placeholder="0" class="form-control" value="" required>
                            </div>
                            <div class="col-4">
                                <label for="">Giá bán ra (VNĐ)</label>
                                <input name="priceProductOut" type="number" placeholder="0" class="form-control" value="" required>
                            </div>
                            <div class="col-4">
                                <label for="">Giá bán ra cũ (VNĐ)</label>
                                <input name="priceProductOld" type="number" placeholder="0" class="form-control" value="">
                            </div>
                            
                        </div>
                        <br>
                        <div class="row mt-3">
                            
                            <div class="col-4">
                                <label for="">Danh mục</label>
                                <select name="categoryProduct" id="categoryProductSelect" class="form-control">
                                    @foreach($categories as $key => $cate)
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="categoryDetailContainer" class="col-4">
                                <label for="">Phân loại</label>
                                <select name="categoryDetail" id="categoryDetailSelect" class="form-control" required>
                                    @foreach($categories as $cate)
                                        @foreach($categories_detail as $detail)
                                            @if($detail->category_id == $cate->category_id)
                                                <option value="{{ $detail->category_detail_id }}">
                                                    {{ $detail->category_detail_name }}
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
                                <input name="unitProduct" type="text" placeholder="Nhập đơn vị tính..." value="" class="form-control" required>
                            </div>

                            <div class="col-3">
                                <label for="">Chỉ định</label>
                                <select name="outProduct" id="" class="form-control">
                                    <option value="0" >Bán trực tuyến</option>
                                    <option value="1" >Bán theo đơn</option>
                                    <option value="2" >Hết hàng</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="">Trạng thái</label>
                                <select name="statusProduct" id="" class="form-control">
                                    <option value="0">Chờ xử lý</option>
                                    <option value="1">Hiện</option>
                                    <option value="2">Ẩn</option>
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
                                
                                <img id="previewImg1" src="" alt="" class="w-100 border-radius-lg shadow-lg mt-3">
                            </div>
                            <div class="col-3">
                                <img id="previewImg2" src="" alt="" class="w-100 border-radius-lg shadow-lg mt-3">                                
                            </div>

                            <div class="col-3">
                                <img id="previewImg3" src="" alt="" class="w-100 border-radius-lg shadow-lg mt-3">
                            </div>

                            <div class="col-3">
                                <img id="previewImg4" src="" alt="" class="w-100 border-radius-lg shadow-lg mt-3">
                            </div>
                        </div>
                        

                        

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="">Mô tả ngắn</label>
                                <textarea  name="descProduct" rows="1" class="form-control" id="ckeditor"  placeholder="Nhập mô tả ngắn..."></textarea>
                                <script>
                                    CKEDITOR.replace('ckeditor');
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

                                <div class="row mt-3">
                                    <div class="col-4">
                                        <input name="title[]" type="text" class="form-control" placeholder="Nhập tiêu đề..."
                                            value="">
                                        <button class="btn btn-sm btn-outline-dark mb-0 delete-description" type="button"
                                            style="margin-top: 10px">Xoá thông tin</button>
                                    </div>
                                    <div class="col-8">
                                        <textarea name="content[]" rows="3" class="form-control"
                                            placeholder="Nhập nội dung..."></textarea>
                                    </div>
                                </div>
                                <hr class="horizontal dark hrDesc">
                        

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                    </div>
                    <div class="col-8">
                        <input type="submit" name="update_product" class="btn bg-gradient-info w-100 mt-4 mb-0" value="Thêm sản phẩm">
                    </div>
                    <div class="col-2">
                    </div>
                </div>
            </form>
           
        </div>
          
    </main>

   
    <script>
        // Xử lý sự kiện thay đổi danh mục
        document.getElementById('categoryProductSelect').addEventListener('change', function() {
            var category_id = this.value;
    
            // Gửi yêu cầu AJAX để lấy danh sách phân loại dựa vào category_id
            fetch(`/get-category-details/${category_id}`)
                .then(response => response.json())
                .then(data => {
                    // Xóa tất cả các phần tử trong danh sách phân loại hiện tại
                    var select = document.getElementById('categoryDetailSelect');
                    select.innerHTML = '';
    
                    // Thêm các tùy chọn phân loại mới dựa trên dữ liệu từ phản hồi AJAX
                    data.forEach(detail => {
                        var option = document.createElement('option');
                        option.value = detail.category_detail_id;
                        option.innerText = detail.category_detail_name;
                        select.appendChild(option);
                    });
                });
        });
    </script>
    <script>

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

    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
</body>
</html>