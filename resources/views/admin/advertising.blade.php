<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Quảng cáo</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
              <h6 class="font-weight-bolder mb-0">Bìa quảng cáo</h6>
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
            <section class="py-3">
                <div class="row">
                  

                    <div class="col-md-8 me-auto text-left">
                        <h5>Thêm banner quảng cáo</h5>
                    </div>
                  
                </div>
                @if(session('success'))
                <div class="alert alert-info" role="alert">
                    Thêm banner thành công!
                </div>
                @endif
                <div class="row mt-lg4 mt-2">
                    <div class="card">
                      <div class="card-body p-3">
                       <form action="{{URL::to('/add-banner')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          
                          <div class="col-lg-5 col-md-6">
                            <h6>Thêm banner</h6>
                            <input class="form-control" id="fileInput" type="file" name="banner_image">
                            <input type="hidden" id="croppedImageData" name="cropped_image_data" value="">
                            <br>
                            <select name="banner_status" id="" class="form-control">
                              <option value="0">Hiện</option>
                              <option value="1">Ẩn</option>
                            </select>
                            

                            
                            <button id="addButton" class="btn bg-gradient-dark ms-auto mb-0 js-btn-next mt-5" type="submit">Thêm</button>
                          
                          </div>
                          <div class="col-lg-7 col-md-6">
                            <div id="imageContainer">
                              <img id="imagePreview" width="100%" src="" alt="">
                            </div>
                            
                          </div>
                        </div>
                      </form>
                      
                        
                      </div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

                
                
                <script>
                  const fileInput = document.getElementById('fileInput');
                  const imageContainer = document.getElementById('imageContainer');
                  const croppedImageDataInput = document.getElementById('croppedImageData');
                  croppedImageDataInput.value = croppedImageData;
                 
                  let cropper;
              
                  fileInput.addEventListener('change', function() {
                      const file = fileInput.files[0];
                      if (file) {
                          const reader = new FileReader();
                          reader.addEventListener('load', function() {
                              const imageUrl = reader.result;
                             
                              const image = new Image();
                              image.src = imageUrl;
                              imageContainer.innerHTML = '';
                              imageContainer.appendChild(image);
              
                              cropper = new Cropper(image, {
                                  aspectRatio: 786 / 269, 
                                  viewMode: 1, 
                                  guides: true, 
                                  autoCropArea: 1, 
                              });
                          }); 
                          reader.readAsDataURL(file);
                      }
                  });
                  


                   


                  
              </script>
              <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.min.css">
              <script src="https://unpkg.com/cropperjs/dist/cropper.min.js"></script>
               
                <div class="row mt-lg-3 mt-2">
                  @foreach ($banner as $item)
                    <div class="col-lg-6 col-md-6 mb-4">
                      <div class="card">
                          <div class="card-body p-3">
                              <img  width="100%" src="/uploads/banner/{{$item->banner_path}}" alt="">

                              <hr class="horizontal dark">
                          <div class="row">
                            <div class="col-lg-7 col-md-7">
                                {{$item->created_at}} - Trạng thái:@if($item->banner_status == 0) Hiện @else Ẩn @endif
                            </div>
                            <div class="col-lg-5 col-md-5 d-flex justify-content-center">
                              @if($item->banner_status == 0)
                                <a onclick="return confirm('Are you sure want to hide!')" href="{{URL::to('/hidebanner/'.$item->banner_id)}}" class="btn bg-gradient-dark ms-auto mb-0 js-btn-next mt-5">Ẩn</a>
                              @else
                                <a onclick="return confirm('Are you sure want to show!')" href="{{URL::to('/showbanner/'.$item->banner_id)}}" class="btn bg-gradient-dark ms-auto mb-0 js-btn-next mt-5">Hiện</a>
                              @endif
                                <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/deletebanner/'.$item->banner_id)}}" class="btn bg-gradient-dark ms-auto mb-0 js-btn-next mt-5" >Xoá</a>
                            </div>
                          </div>
                          </div>
                          
                      </div>
                  </div>
                      
                  @endforeach

                    
                
                  
                    
                </div>
            </section>
        </div>
    </main>
    <script src="{{asset('js/admin.js')}}"></script>
    
</body>
</html>