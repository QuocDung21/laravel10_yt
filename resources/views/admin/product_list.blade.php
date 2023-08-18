<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Danh sách sản phẩm</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap2.js')}}"></script>
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
              
              <h6 class="font-weight-bolder mb-0">Danh sách sản phẩm</h6>
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
                          
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sản phẩm</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Danh mục</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Giá nhập vào</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Giá bán ra</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cập nhật</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody id="product-list">
                        
                        @foreach($products as $key => $show_product)
                          @php
                            $stt = ($products->currentPage() - 1) * $products->perPage() + $key + 1;
                          @endphp
                          
                            <tr data-category-id="{{$show_product->category_id}}">
                              
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <p class="text-xs text-secondary mb-0 product-stt" style="margin-top: 10px; margin-right:8px">{{ $stt }}</p>
                                  <div>
                                    <img src="/uploads/product/{{$show_product->product_img1}}" class="avatar avatar-sm me-3" alt="user1">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{$show_product->product_name}}</h6>
                                    <p class="text-xs text-secondary mb-0">Mã: {{$show_product->product_id}}</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">{{$show_product->category_name}}</p>
                                <p class="text-xs text-secondary mb-0">{{$show_product->category_detail_name}}</p>
                                <p class="text-xs text-secondary mb-0" style="display: none">{{$show_product->category_id}}</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                @if($show_product->product_status == 1)
                                  <span class="badge badge-sm bg-gradient-success product-status">Hiện</span>
                                @elseif($show_product->product_status == 2)
                                  <span class="badge badge-sm bg-gradient-secondary product-status">Ẩn</span>
                                @else
                                  <span class="badge badge-sm bg-gradient-warning product-status">Chờ xử lý</span>
                                @endif
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold product-price" data-price="{{$show_product->product_price_in}}">{{ number_format($show_product->product_price_in) }} ₫</span>
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold product-price" data-price="{{$show_product->product_price}}">{{ number_format($show_product->product_price) }} ₫</span>
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$show_product->created_at_product}}</span>
                              </td>
                              <td class="align-middle">
                                <a href="{{URL::to('/edit-product/'.$show_product->product_id)}}" class="text-secondary font-weight-bold text-xs">Edit</a>
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
          <div class="pagination mt-3">
            {{ $products->links('admin.custom_pagination') }}
            
           </div>
        
        </div>

        

        
    </main>
    
    <!-- Bộ lọc -->
    <div class="fixed-plugin">
      <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
      </a>
      <div class="card shadow-lg " style="width:300px">
        <div class="card-header pb-0 pt-3 ">
          <div class="float-start">
            <h5 class="mt-3 mb-0">Bộ lọc</h5>
            
          </div>
          <div class="float-end mt-4">
            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
              <i class="fa fa-close"></i>
            </button>
          </div>
          
        </div>
        {{-- <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span> --}}
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
          
          <div id="price-filter">
            <h6 class="mb-0">Giá bán</h6>
          
          
            <div class="badge-colors my-2 text-start">
              

              <input type="checkbox" value="1"> Dưới 100,000 ₫
              <br>
              <input type="checkbox" value="2"> 100,000 ₫ đến 300,000 ₫
              <br>
              <input type="checkbox" value="3"> 300,000 đến 500,000 ₫
              <br>
              <input type="checkbox" value="4"> Trên 500,000 đ
            </div>
          </div>
          <hr class="horizontal dark my-sm-4">

          <div id="status-filter">
            <h6 class="mb-0">Trạng thái</h6>
          
          
            <div class="badge-colors my-2 text-start">
              

              <input type="checkbox" value="1"> Hiện
              <br>
              <input type="checkbox" value="2"> Ẩn
              <br>
              <input type="checkbox" value="0"> Chờ xử lý
              
            </div>
          </div>
          
          
          
          
          <hr class="horizontal dark my-sm-4">

          <div id="category-filter">
            <h6 class="mb-0">Danh mục</h6>
            <div class="badge-colors my-2 text-start">
              @foreach($categories as $key => $show_category)
              <label>
                <input type="checkbox" class="category-checkbox" value="{{$show_category->category_id}}"> {{$show_category->category_name}}
              </label>
              <br>
              @endforeach
            </div>
          </div>
          
          

          

        </div>
      </div>
    </div>
    {{-- <script>
      $(document).ready(function() {
          $('#price-filter input[type="checkbox"], #status-filter input[type="checkbox"], .category-checkbox').on('click', function() {
              var priceFilters = [];
              var statusFilters = [];
              var categoryFilters = [];
  
              $('#price-filter input[type="checkbox"]:checked').each(function() {
                  priceFilters.push($(this).val());
              });
  
              $('#status-filter input[type="checkbox"]:checked').each(function() {
                  statusFilters.push($(this).val());
              });
  
              $('.category-checkbox:checked').each(function() {
                  categoryFilters.push($(this).val());
              });
  
              // Lọc tất cả các sản phẩm và ẩn hoặc hiển thị dựa trên các giá trị đã chọn
              $('#product-list tr').each(function() {
                  var price = parseFloat($(this).find('.product-price').data('price'));
                  var status = $(this).find('.product-status').text().trim();
                  var category_id = $(this).data('category-id');
  
                  var shouldDisplay = (
                      (priceFilters.length === 0 || (
                          (priceFilters.includes('1') && price < 100000) ||
                          (priceFilters.includes('2') && price >= 100000 && price <= 300000) ||
                          (priceFilters.includes('3') && price > 300000 && price <= 500000) ||
                          (priceFilters.includes('4') && price > 500000)
                      )) &&
                      (statusFilters.length === 0 || (
                          (statusFilters.includes('1') && status === 'Hiện') ||
                          (statusFilters.includes('2') && status === 'Ẩn') ||
                          (statusFilters.includes('0') && status === 'Chờ xử lý')
                      )) &&
                      (categoryFilters.length === 0 || categoryFilters.includes(category_id.toString()))
                  );
  
                  if (shouldDisplay) {
                      $(this).show();
                  } else {
                      $(this).hide();
                  }
              });
          });
      });
  </script> --}}

  
  

    <script>
      $(document).ready(function() {
        $('#price-filter input[type="checkbox"], #status-filter input[type="checkbox"], .category-checkbox').on('click', function() {
          var priceFilters = [];
          var statusFilters = [];
          var categoryFilters = [];
    
          $('#price-filter input[type="checkbox"]:checked').each(function() {
            priceFilters.push($(this).val());
          });
    
          $('#status-filter input[type="checkbox"]:checked').each(function() {
            statusFilters.push($(this).val());
          });
    
          $('.category-checkbox:checked').each(function() {
            categoryFilters.push($(this).val());
          });
    
          // Lọc sản phẩm và hiển thị hoặc ẩn dựa trên các giá trị đã chọn
          var displayedProducts = $('#product-list tr').filter(function() {
            var price = parseFloat($(this).find('.product-price').data('price'));
            var status = $(this).find('.product-status').text().trim();
            var category_id = $(this).data('category-id');
    
            var shouldDisplay = (
              (priceFilters.length === 0 || (
                (priceFilters.includes('1') && price < 100000) ||
                (priceFilters.includes('2') && price >= 100000 && price <= 300000) ||
                (priceFilters.includes('3') && price > 300000 && price <= 500000) ||
                (priceFilters.includes('4') && price > 500000)
              )) &&
              (statusFilters.length === 0 || (
                (statusFilters.includes('1') && status === 'Hiện') ||
                (statusFilters.includes('2') && status === 'Ẩn') ||
                (statusFilters.includes('0') && status === 'Chờ xử lý')
              )) &&
              (categoryFilters.length === 0 || categoryFilters.includes(category_id.toString()))
            );
    
            if (shouldDisplay) {
              $(this).show();
            } else {
              $(this).hide();
            }
    
            return shouldDisplay;
          });
    
          // Cập nhật lại STT dựa trên danh sách sản phẩm hiển thị
          displayedProducts.each(function(index) {
            $(this).find('.product-stt').text(index + 1);
          });
        });
      });
    </script>
    
    
    
    
    <script>
      // $(document).ready(function() {
      //     $('#price-filter input[type="checkbox"]').on('click', function() {
      //         var filters = [];

      //         $('#price-filter input[type="checkbox"]:checked').each(function() {
      //             filters.push($(this).val());
      //         });

      //         // Lọc sản phẩm và hiển thị hoặc ẩn dựa trên các giá trị đã chọn
      //         $('#product-list tr').each(function() {
      //             var price = parseFloat($(this).find('.product-price').data('price'));

      //             if (filters.includes('1') && price < 100000) {
      //                 $(this).show();
      //             } else if (filters.includes('2') && price >= 100000 && price <= 300000) {
      //                 $(this).show();
      //             } else if (filters.includes('3') && price > 300000 && price <= 500000) {
      //                 $(this).show();
      //             } else if (filters.includes('4') && price > 500000) {
      //                 $(this).show();
      //             } else {
      //                 $(this).hide();
      //             }
      //         });
      //     });
      // });


      // $(document).ready(function() {
      //   $('#price-filter input[type="checkbox"]').on('click', function() {
      //     var filters = [];

      //     $('#price-filter input[type="checkbox"]:checked').each(function() {
      //       filters.push($(this).val());
      //     });

      //     // Lọc sản phẩm và hiển thị hoặc ẩn dựa trên các giá trị đã chọn
      //     $('#product-list tr').each(function() {
      //       var price = parseFloat($(this).find('.product-price').data('price'));

      //       if ((filters.length === 0) || (filters.includes('1') && price < 100000) || (filters.includes('2') && price >= 100000 && price <= 300000) || (filters.includes('3') && price > 300000 && price <= 500000) || (filters.includes('4') && price > 500000)) {
      //         $(this).show();
      //       } else {
      //         $(this).hide();
      //       }
      //     });
      //   });
      // });

      // $(document).ready(function() {
      //   $('#status-filter input[type="checkbox"]').on('click', function() {
      //     var filters = [];

      //     $('#status-filter input[type="checkbox"]:checked').each(function() {
      //       filters.push($(this).val());
      //     });

      //     // Lọc sản phẩm và hiển thị hoặc ẩn dựa trên các giá trị đã chọn
      //     $('#product-list tr').each(function() {
      //       var status = $(this).find('.product-status').text().trim();

      //       if ((filters.length === 0) || (filters.includes('1') && status === 'Hiện') || (filters.includes('2') && status === 'Ẩn') || (filters.includes('0') && status === 'Chờ xử lý')) {
      //         $(this).show();
      //       } else {
      //         $(this).hide();
      //       }
      //     });
      //   });
      // });

    </script>




    <script src="{{asset('js/admin.js')}}"></script>
    
</body>
</html>