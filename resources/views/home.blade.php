<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhà thuốc online</title>

    
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

    
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

   
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    {{-- <script src="{{asset('js/bootstrap.min.js')}}"></script> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
   
    
    
<style>

    
    p{
        margin-bottom: 0rem !important;
    }
    .container2 {
    width: 100% !important;
    padding-left: 30px !important;
  
    }

    .CategoryList_body__JQejT {
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .slider-frame {
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .slider-list {
    display: flex;
    justify-content: center;
    align-items: center;
    }


        .blog .carousel-indicators {
        left: 0;
        top: auto;
        bottom: -40px;

    }

    /* The colour of the indicators */
    .blog .carousel-indicators li {
        background: #a3a3a3;
        border-radius: 50%;
        width: 8px;
        height: 8px;
    }

    .blog .carousel-indicators .active {
    background: #707070;
    }
    .ProductItem_product-item__Scx6a .ProductItem_discount-price__YcO7h .ProductItem_discount-price-style__Z3DG7 {
    font-weight: 400;
    }
    .ProductItem_product-item__Scx6a .ProductItem_add-to-card__7P2PF.ProductItem_advise__M7DC8 {
        background-color: #f2f6fe;
        border: 1px solid #0f62f9;
        color: #0065ff;
    }
    .ProductItem_product-item__Scx6a .ProductItem_add-to-card-disabled__N5pDy {
        background: silver !important;
        cursor: not-allowed !important;
    }


</style>
<script>
    $('#blogCarousel').carousel({
				interval: 5000
		});
</script>
<script>
    $(document).ready(function(){
        $('.add-to-cart-button').click(function(){
            var id = $(this).data('id');
            var cart_product_id = $('.product_id_' + id).val();
            var cart_product_name = $('.product_name_' + id).val();
            var cart_product_img1 = $('.product_img1_' + id).val();
            var cart_product_price = $('.product_price_' + id).val();
            var cart_product_price_old = $('.product_price_old_' + id).val();
            var cart_product_quantity = $('.product_quantity_' + id).val();
            var cart_product_unit = $('.product_unit_' + id).val();
            var _token = $('input[name = "_token"]').val();
            $.ajax({
                url: '/add-cart-ajax',
                method: 'POST',
                data: {
                    cart_product_id: cart_product_id,
                    cart_product_name: cart_product_name,
                    cart_product_img1: cart_product_img1,
                    cart_product_price: cart_product_price,
                    cart_product_price_old: cart_product_price_old,
                    cart_product_unit: cart_product_unit,
                    cart_product_quantity: cart_product_quantity,
                    _token: _token
                },
                success: function(data) {
                    swal("Good job!", "You clicked the button!", "success")
                },
                error: function(xhr, status, error) {
                    console.log(xhr);
                    console.log(status);
                    console.log(error);
                }
            })
        })
    });
</script>
</head>
<body style="background: #ededed; "> 
    @include('partial.header')
    

    
       
            
            
    {{-- <div class="ButtonScrollToTop_scroll-to-top-wrapper__uYNan">
        <button class="Button_button__yfvRh ButtonScrollToTop_scroll-to-top__KGhc4">
            <img width="100%"  style="z-index: 101" src="{{asset('/img/icon_facebook.png')}}" alt="">
        </button>
    </div> --}}


    <div class="MainLayout_content__hCocE">
        
        <div class="container-wrapper" >
            {{-- <div class="BannerTop_banner-top__fJ1bR">
                <div class="BannerTop_left__HJEj0">
                    <div class="slider" tabindex="0" style="box-sizing: border-box; display: block; height: inherit; position: relative; width: 100%;">
                        <div class="slider-frame" style="box-sizing: border-box; display: block; height: 100%; margin: 0px; overflow: hidden; padding: 0px; position: relative; touch-action: pan-y pinch-zoom; transform: translate3d(0px, 0px, 0px);">

                        
                        </div>
                    </div>
                </div>
                <div class="BannerTop_right__J3l2j"></div>
            </div> --}}
            <div class="BannerTop_banner-top__fJ1bR" style="margin-right: 3rem; margin-left: 3rem">
                <div class="BannerTop_left__HJEj0">
                    <div class="slider" style="box-sizing: border-box; display: block; height: inherit; position: relative; width: 100%;">
                        <div class="slider-frame" style="box-sizing: border-box; display: block;  margin: 0px; overflow: hidden; padding: 0px; position: relative; touch-action: pan-y pinch-zoom; transform: translate3d(0px, 0px, 0px);">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" style="border-radius:15px !important; ">
                                    <div class="carousel-item active" >
                                    <img class="d-block w-100" src="https://data-service.pharmacity.io/pmc-ecm-webapp-config-api/production/banner/392x134-1684299714213.jpg" alt="First slide" >
                                    </div>
                                    <div class="carousel-item" >
                                    <img class="d-block w-100" src="https://data-service.pharmacity.io/pmc-ecm-webapp-config-api/production/banner/392x134-1684299714213.jpg" alt="Second slide" >
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="https://data-service.pharmacity.io/pmc-ecm-webapp-config-api/production/banner/392x134-1684299714213.jpg" alt="Third slide" >
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>
                        </div>
                    
                    </div>
                </div>
                
                    
                <div class="BannerTop_right__J3l2j">
                    <a href="">
                        <picture class="LoadingImage_loading-image__G19Wx LoadingImage_size-auto__mpMHs LoadingImage_load-success__9s5Ml BannerTop_image__AaPN2 cursor-point">
                            <span style="padding-top: 30.2483%;"></span>
                            <img src="https://data-service.pharmacity.io/pmc-ecm-webapp-config-api/production/banner/392x134-1684299714213.jpg" alt="" width="443" height="134">
                        </picture>
                    </a>
                    <a href="">
                        <picture class="LoadingImage_loading-image__G19Wx LoadingImage_size-auto__mpMHs LoadingImage_load-success__9s5Ml BannerTop_image__AaPN2 cursor-point">
                            <span style="padding-top: 30.2483%;"></span>
                            <img src="https://data-service.pharmacity.io/pmc-ecm-webapp-config-api/production/banner/E-CATALOG%20MAY_khau%20trang%20392x134%20new%20(1)-1684292112877.png" alt="" width="443" height="134">
                        </picture>
                    </a>
                </div>
            </div>

            <div class="lazyload-wrapper ">
                <div class="QuickAccessMenu_booking-care__5E2UX">
                    <div class="QuickAccessMenu_box__hBWlT">
                        <div class="QuickAccessMenu_col__VHFeq">
                            <div class="QuickAccessMenu_item__ot6cV" aria-hidden="true">
                                <div class="QuickAccessMenu_icon__XwLm4">
                                    <picture class="LoadingImage_loading-image__G19Wx LoadingImage_load-success__9s5Ml">
                                        <span style="padding-top: 100%"></span>
                                        <img src="https://data-service.pharmacity.io/pmc-upload-media/production/pmc-ecm-asm/home/homeservices/coupon-cua-toi.webp" alt="" width="48" height="48">
                                    </picture>
                                </div>
                                <div class="QuickAccessMenu_name__GALVC">Mã giảm giá</div>
                            </div>

                            <div class="QuickAccessMenu_item__ot6cV" aria-hidden="true">
                                <div class="QuickAccessMenu_icon__XwLm4">
                                    <picture class="LoadingImage_loading-image__G19Wx LoadingImage_load-success__9s5Ml">
                                        <span style="padding-top: 100%"></span>
                                        <img src="https://data-service.pharmacity.io/pmc-upload-media/production/pmc-ecm-asm/home/homeservices/tu-van-truc-tuyen.webp" alt="" width="48" height="48">
                                    </picture>
                                </div>
                                <div class="QuickAccessMenu_name__GALVC">Tư vấn trực tuyến</div>
                            </div>

                            <div class="QuickAccessMenu_item__ot6cV" aria-hidden="true">
                                <div class="QuickAccessMenu_icon__XwLm4">
                                    <picture class="LoadingImage_loading-image__G19Wx LoadingImage_load-success__9s5Ml">
                                        <span style="padding-top: 100%"></span>
                                        <img src="https://data-service.pharmacity.io/pmc-upload-media/production/pmc-ecm-asm/home/homeservices/ic-ecatalog.webp" alt="" width="48" height="48">
                                    </picture>
                                </div>
                                <div class="QuickAccessMenu_name__GALVC">Cẩm nang mua hàng</div>
                            </div>

                            <div class="QuickAccessMenu_item__ot6cV" aria-hidden="true">
                                <div class="QuickAccessMenu_icon__XwLm4">
                                    <picture class="LoadingImage_loading-image__G19Wx LoadingImage_load-success__9s5Ml">
                                        <span style="padding-top: 100%"></span>
                                        <img src="https://data-service.pharmacity.io/pmc-upload-media/production/pmc-ecm-asm/home/homeservices/he-thong-nha-thuoc.webp" alt="" width="48" height="48">
                                    </picture>
                                </div>
                                <div class="QuickAccessMenu_name__GALVC">Hệ thống nhà thuốc</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="CategoryList_category-list__9560x">
                <div class="CategoryList_header__nNKyn" style="margin-left: 40px">
                    <p class="CategoryList_title__Nhfps">Danh mục sản phẩm</p>
                </div>

                <div class="CategoryList_body__JQejT" style="margin-top: 20px">
                    <div class="slider" tabindex="0" style="box-sizing: border-box; display: block; height: inherit; position: relative; width: 100%; margin-left:30px">
                        <div class="slider-frame" style="box-sizing: border-box;display: block;height: 100%;margin: 0px;overflow: hidden;padding: 0px;position: relative;touch-action: pan-y pinch-zoom;transform: translate3d(0px, 0px, 0px);">
                            
                            <ul class="slider-list" style="height: 200px; display: flex; list-style:none;">
                                @foreach($categories as $key => $show_cate)
                                <li class="slider-slide slide-visible slide-current" style=" height: 172px;   margin: auto 0px;  top: 0px; transform: scale(1); transition: transform 0.4s linear 0s; vertical-align: top; width: 151.125px;">
                                    <a href="{{URL::to('/category/'.$show_cate->category_id)}}" class="CategoryList_category-item__1X6gg">
                                        <picture class="LoadingImage_loading-image__G19Wx LoadingImage_load-success__9s5Ml CategoryList_image__Z9Gmk">
                                            <span style="padding-top: 100%"></span>
                                            <img src="/uploads/category/{{$show_cate->category_img}}" alt="" width="100" height="100">
                                        </picture>
                                        <p>{{$show_cate->category_name}}</p>
                                    </a>
                                </li>
                                @endforeach
                                
                                
                            </ul>
                        </div>
                        <style type="text/css">.slider-slide > img { width: 100%; display: block; }
                            .slider-slide > img:focus { margin: auto; }
                        </style>
                    </div>
                </div>
            </div>
        </div>

       
        


        

        <div class="" style="margin-top: 2rem;">
            <div class="BannerPrescriptionDesktop_banner-prescription-wrapper__BfoFG">
                <div class="container">
                    <div class="BannerPrescriptionDesktop_body__W_2sD">
                        <div class="BannerPrescriptionDesktop_graphic-section__m0BnM">
                            <img src="https://www.pharmacity.vn/images/prescription/upoad-prescription-step-1.webp" alt="" width="214">
                            <img src="https://www.pharmacity.vn/images/prescription/upoad-prescription-step-2.webp" alt="" width="214">
                            <img src="https://www.pharmacity.vn/images/prescription/upoad-prescription-step-3.webp" alt="" width="214">
                        </div>
                        <div class="BannerPrescriptionDesktop_cta-section__7aRwp">
                            <div class="BannerPrescriptionDesktop_img-text__p8LKo">
                                <img src="{{asset('img/ntlp2.png')}}" alt=""  >
                            </div>
                            <a href="{{URL::to('/upload')}}">
                                <div class="BannerPrescriptionDesktop_btn-img__lfhJB">
                                    <img src="https://www.pharmacity.vn/images/prescription/btn-buy-now.webp" alt="" width="222">
                                </div>
                            </a>
                            <div class="BannerPrescriptionDesktop_group-link__Om3l9">
                                <a href="" class="BannerPrescriptionDesktop_open-chat-cs__u9Lzs">Chat ngay</a>
                                hoặc gọi Hotline
                                <a href="">0877 71 75 75</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="BannerPrescriptionDesktop_footer__nF_Ew">
                    <div class="container d-flex justify-content-center">
                        <div class="BannerPrescriptionDesktop_footer-content__GIvdB">
                            <div class="BannerPrescriptionDesktop_footer-item__Th19S">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M11.3991 11.9337L10.1015 13.2118C9.42493 12.8035 8.79636 12.3205 8.22762 11.7719C7.68001 11.2028 7.19726 10.5748 6.78825 9.89919L8.06701 8.60164C8.14375 8.52318 8.19557 8.42378 8.21595 8.31594C8.23634 8.2081 8.22437 8.09664 8.18156 7.99559L6.84886 4.88475C6.79618 4.7622 6.70124 4.66266 6.58132 4.60426C6.4614 4.54586 6.32449 4.53248 6.19554 4.56657L3.75074 5.21201C3.62834 5.24373 3.52038 5.31615 3.4446 5.41738C3.36882 5.5186 3.32974 5.64259 3.33378 5.76897C3.48948 8.6122 4.67173 11.3023 6.66098 13.3397C8.69911 15.3293 11.3902 16.5114 14.2342 16.6663C14.3604 16.6703 14.4842 16.6312 14.5852 16.5554C14.6862 16.4796 14.7584 16.3717 14.7899 16.2494L15.4359 13.8033C15.4702 13.6745 15.457 13.5376 15.3987 13.4176C15.3404 13.2977 15.2409 13.2027 15.1184 13.15L12.01 11.8179C11.9082 11.7741 11.7957 11.7618 11.6868 11.7824C11.578 11.803 11.4778 11.8557 11.3991 11.9337V11.9337Z" stroke="#0F62F9" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.2124 3.33325C12.659 3.33325 14.0464 3.90791 15.0693 4.93082C16.0922 5.95372 16.6668 7.34108 16.6668 8.78768" stroke="#5EAB46" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.2124 5.75732C12.0161 5.75732 12.7868 6.07658 13.3551 6.64486C13.9234 7.21314 14.2426 7.98389 14.2426 8.78756" stroke="#5EAB46" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <label for="">Dược sĩ tư vấn miễn phí</label>
                            </div>
                            <div class="BannerPrescriptionDesktop_devider__4hLmk"></div>
                            <div class="BannerPrescriptionDesktop_footer-item__Th19S">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10.459 15.6021L15.6012 10.46" stroke="#5DAC46" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.34277 6.34277L8.7458 8.7458" stroke="#0F62F9" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.5649 6.99702C13.7027 6.35799 13.6299 5.69151 13.3573 5.09733C13.0847 4.50315 12.627 4.01322 12.0528 3.70084C11.4785 3.38847 10.8185 3.27046 10.1716 3.36446C9.52465 3.45847 8.92556 3.75944 8.46395 4.22233L4.22223 8.46406C3.75922 8.92582 3.45824 9.52514 3.36436 10.1723C3.27048 10.8194 3.38874 11.4796 3.70145 12.0539C4.01415 12.6282 4.50447 13.0857 5.09898 13.358C5.6935 13.6303 6.36023 13.7028 6.99934 13.5644" stroke="#0F62F9" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.0303 16.6661C15.0383 16.6661 16.6661 15.0383 16.6661 13.0303C16.6661 11.0223 15.0383 9.39453 13.0303 9.39453C11.0223 9.39453 9.39453 11.0223 9.39453 13.0303C9.39453 15.0383 11.0223 16.6661 13.0303 16.6661Z" stroke="#5DAC46" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <label for="">Thuốc tốt giá rẻ</label>
                            <div class="BannerPrescriptionDesktop_devider__4hLmk"></div>
                            <div class="BannerPrescriptionDesktop_footer-item__Th19S">
                                <svg width="52" height="52" viewBox="0 0 52 52" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M30.8166 4.25172L38.4644 11.8999C38.6256 12.0611 38.7161 12.2796 38.716 12.5075V28.6633C38.716 29.1378 38.3312 29.5226 37.8567 29.5226C37.3822 29.5226 36.9974 29.1378 36.9974 28.6633V13.3669H31.9275C30.506 13.3669 29.3496 12.2104 29.3496 10.7889V5.7188H6.57792C6.10415 5.7188 5.71864 6.10424 5.71864 6.57811V45.4208C5.71864 45.8946 6.10407 46.2801 6.57792 46.2801H22.9925C23.467 46.2801 23.8518 46.6649 23.8518 47.1394C23.8518 47.6139 23.4671 47.9987 22.9925 47.9987H6.57792C5.15645 47.9987 4 46.8422 4 45.4207V6.57811C4 5.15658 5.15645 4 6.57792 4H30.209C30.4369 4 30.6554 4.09058 30.8166 4.25172ZM31.0683 10.7889C31.0683 11.2627 31.4537 11.6482 31.9276 11.6482H35.7824L31.0683 6.93407V10.7889Z" fill="#0F62F9"></path><path d="M17.4344 28.0618H32.3578C32.8323 28.0618 33.2172 28.4466 33.2171 28.9211C33.2171 29.3957 32.8323 29.7804 32.3578 29.7804H17.4344C16.96 29.7804 16.5752 29.3956 16.5752 28.9211C16.5752 28.4466 16.9599 28.0618 17.4344 28.0618Z" fill="#0F62F9"></path><path d="M13.1589 28.0618H10.3589C9.88435 28.0618 9.49962 28.4466 9.49962 28.9211C9.49962 29.3956 9.88444 29.7804 10.3589 29.7804H13.1589C13.6334 29.7804 14.0181 29.3956 14.0181 28.9211C14.0181 28.4466 13.6334 28.0618 13.1589 28.0618Z" fill="#0F62F9"></path><path d="M17.4344 32.8742H25.9989C26.4735 32.8742 26.8582 33.259 26.8582 33.7335C26.8582 34.208 26.4735 34.5928 25.9989 34.5928H17.4344C16.96 34.5928 16.5752 34.2079 16.5752 33.7335C16.5752 33.259 16.9599 32.8742 17.4344 32.8742Z" fill="#0F62F9"></path><path d="M13.1589 32.8742H10.3589C9.88435 32.8742 9.49962 33.259 9.49962 33.7335C9.49962 34.2079 9.88444 34.5928 10.3589 34.5928H13.1589C13.6334 34.5928 14.0181 34.2079 14.0181 33.7335C14.0181 33.259 13.6334 32.8742 13.1589 32.8742Z" fill="#0F62F9"></path><path d="M17.4345 37.6865C17.6613 37.6865 17.8822 37.7785 18.042 37.9383C18.2027 38.0982 18.2939 38.3199 18.2939 38.5459C18.2939 38.7719 18.2027 38.9937 18.042 39.1534C17.8822 39.3134 17.6614 39.4053 17.4345 39.4053C17.2085 39.4053 16.9868 39.3133 16.8269 39.1534C16.667 38.9937 16.5752 38.7719 16.5752 38.5459C16.5752 38.3199 16.6671 38.0982 16.8269 37.9383C16.9876 37.7784 17.2085 37.6865 17.4345 37.6865Z" fill="#0F62F9"></path><path d="M13.1589 37.6865H10.3589C9.88435 37.6865 9.49962 38.0714 9.49962 38.5458C9.49962 39.0204 9.88444 39.4051 10.3589 39.4051H13.1589C13.6334 39.4051 14.0181 39.0203 14.0181 38.5458C14.0182 38.0714 13.6334 37.6865 13.1589 37.6865Z" fill="#0F62F9"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M41.9292 37.3969C42.1721 37.3628 42.4199 37.344 42.6721 37.344C45.6099 37.344 48 39.734 48 42.672C48 45.6099 45.61 48 42.6722 48C39.8038 48 37.4589 45.7211 37.3497 42.8788L33.7891 46.4395C32.7506 47.478 31.386 47.9975 30.0219 47.9975C28.6574 47.9975 27.2934 47.4783 26.2546 46.4395C25.2483 45.4332 24.6941 44.0953 24.6941 42.6721C24.6941 41.2489 25.2483 39.911 26.2546 38.9046L33.06 32.0991C34.0662 31.0928 35.4041 30.5386 36.8272 30.5386C38.2503 30.5386 39.5882 31.0928 40.5945 32.0991C42.0259 33.5306 42.4707 35.5807 41.9292 37.3969ZM27.4698 45.2242C28.8769 46.6316 31.1666 46.6316 32.5737 45.2242L35.3688 42.4291L30.2649 37.3249L27.4698 40.1201C26.7881 40.8017 26.4127 41.7081 26.4127 42.6722C26.4127 43.6362 26.7881 44.5425 27.4698 45.2242ZM31.48 36.1095L36.584 41.2138L39.379 38.4186C40.7862 37.0114 40.7862 34.7216 39.379 33.3144C38.6975 32.6327 37.7911 32.2573 36.8271 32.2573C35.863 32.2573 34.9568 32.6327 34.2751 33.3144L31.48 36.1095ZM39.063 42.6721C39.063 44.366 40.2364 45.7905 41.8128 46.1772V39.167C40.2363 39.5536 39.063 40.978 39.063 42.6721ZM43.5314 39.1669V46.1772C45.1079 45.7905 46.2813 44.3659 46.2813 42.672C46.2813 40.978 45.1079 39.5536 43.5314 39.1669Z" fill="#0F62F9"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M30.8166 4.25172L38.4644 11.8999C38.6256 12.0611 38.7161 12.2796 38.716 12.5075V28.6633C38.716 29.1378 38.3312 29.5226 37.8567 29.5226C37.3822 29.5226 36.9974 29.1378 36.9974 28.6633V13.3669H31.9275C30.506 13.3669 29.3496 12.2104 29.3496 10.7889V5.7188H6.57792C6.10415 5.7188 5.71864 6.10424 5.71864 6.57811V45.4208C5.71864 45.8946 6.10407 46.2801 6.57792 46.2801H22.9925C23.467 46.2801 23.8518 46.6649 23.8518 47.1394C23.8518 47.6139 23.4671 47.9987 22.9925 47.9987H6.57792C5.15645 47.9987 4 46.8422 4 45.4207V6.57811C4 5.15658 5.15645 4 6.57792 4H30.209C30.4369 4 30.6554 4.09058 30.8166 4.25172ZM31.0683 10.7889C31.0683 11.2627 31.4537 11.6482 31.9276 11.6482H35.7824L31.0683 6.93407V10.7889Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M17.4344 28.0618H32.3578C32.8323 28.0618 33.2172 28.4466 33.2171 28.9211C33.2171 29.3957 32.8323 29.7804 32.3578 29.7804H17.4344C16.96 29.7804 16.5752 29.3956 16.5752 28.9211C16.5752 28.4466 16.9599 28.0618 17.4344 28.0618Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M13.1589 28.0618H10.3589C9.88435 28.0618 9.49962 28.4466 9.49962 28.9211C9.49962 29.3956 9.88444 29.7804 10.3589 29.7804H13.1589C13.6334 29.7804 14.0181 29.3956 14.0181 28.9211C14.0181 28.4466 13.6334 28.0618 13.1589 28.0618Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M17.4344 32.8742H25.9989C26.4735 32.8742 26.8582 33.259 26.8582 33.7335C26.8582 34.208 26.4735 34.5928 25.9989 34.5928H17.4344C16.96 34.5928 16.5752 34.2079 16.5752 33.7335C16.5752 33.259 16.9599 32.8742 17.4344 32.8742Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M13.1589 32.8742H10.3589C9.88435 32.8742 9.49962 33.259 9.49962 33.7335C9.49962 34.2079 9.88444 34.5928 10.3589 34.5928H13.1589C13.6334 34.5928 14.0181 34.2079 14.0181 33.7335C14.0181 33.259 13.6334 32.8742 13.1589 32.8742Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M17.4345 37.6865C17.6613 37.6865 17.8822 37.7785 18.042 37.9383C18.2027 38.0982 18.2939 38.3199 18.2939 38.5459C18.2939 38.7719 18.2027 38.9937 18.042 39.1534C17.8822 39.3134 17.6614 39.4053 17.4345 39.4053C17.2085 39.4053 16.9868 39.3133 16.8269 39.1534C16.667 38.9937 16.5752 38.7719 16.5752 38.5459C16.5752 38.3199 16.6671 38.0982 16.8269 37.9383C16.9876 37.7784 17.2085 37.6865 17.4345 37.6865Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M13.1589 37.6865H10.3589C9.88435 37.6865 9.49962 38.0714 9.49962 38.5458C9.49962 39.0204 9.88444 39.4051 10.3589 39.4051H13.1589C13.6334 39.4051 14.0181 39.0203 14.0181 38.5458C14.0182 38.0714 13.6334 37.6865 13.1589 37.6865Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M41.9292 37.3969C42.1721 37.3628 42.4199 37.344 42.6721 37.344C45.6099 37.344 48 39.734 48 42.672C48 45.6099 45.61 48 42.6722 48C39.8038 48 37.4589 45.7211 37.3497 42.8788L33.7891 46.4395C32.7506 47.478 31.386 47.9975 30.0219 47.9975C28.6574 47.9975 27.2934 47.4783 26.2546 46.4395C25.2483 45.4332 24.6941 44.0953 24.6941 42.6721C24.6941 41.2489 25.2483 39.911 26.2546 38.9046L33.06 32.0991C34.0662 31.0928 35.4041 30.5386 36.8272 30.5386C38.2503 30.5386 39.5882 31.0928 40.5945 32.0991C42.0259 33.5306 42.4707 35.5807 41.9292 37.3969ZM27.4698 45.2242C28.8769 46.6316 31.1666 46.6316 32.5737 45.2242L35.3688 42.4291L30.2649 37.3249L27.4698 40.1201C26.7881 40.8017 26.4127 41.7081 26.4127 42.6722C26.4127 43.6362 26.7881 44.5425 27.4698 45.2242ZM31.48 36.1095L36.584 41.2138L39.379 38.4186C40.7862 37.0114 40.7862 34.7216 39.379 33.3144C38.6975 32.6327 37.7911 32.2573 36.8271 32.2573C35.863 32.2573 34.9568 32.6327 34.2751 33.3144L31.48 36.1095ZM39.063 42.6721C39.063 44.366 40.2364 45.7905 41.8128 46.1772V39.167C40.2363 39.5536 39.063 40.978 39.063 42.6721ZM43.5314 39.1669V46.1772C45.1079 45.7905 46.2813 44.3659 46.2813 42.672C46.2813 40.978 45.1079 39.5536 43.5314 39.1669Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M22.018 9.09448V10.4707C22.9874 10.5938 23.899 10.8637 24.4884 11.1876L25.3781 11.6767L24.4 13.4563L23.5102 12.9672C23.2089 12.8016 22.6538 12.626 22.018 12.5221V15.3695C22.5009 15.5424 23.0059 15.7513 23.4328 16.0264C24.1781 16.5067 24.7986 17.261 24.7986 18.4168C24.7986 19.3779 24.4759 20.1851 23.855 20.7721C23.3349 21.2638 22.6782 21.5324 22.018 21.6673V23.5693H19.9874V21.7523C18.983 21.6639 17.9665 21.4135 17.0996 21.1007L16.1445 20.756L16.8338 18.8459L17.7888 19.1905C18.4929 19.4446 19.263 19.6309 19.9874 19.7117V16.823C19.4279 16.6209 18.8244 16.3636 18.3203 15.9939C17.5617 15.4377 17.0048 14.6115 17.0048 13.4222C17.0048 12.4066 17.4519 11.624 18.1668 11.12C18.7084 10.7382 19.3582 10.5459 19.9874 10.4595V9.09448H22.018ZM19.9874 12.5203C19.7037 12.5832 19.4864 12.6743 19.3368 12.7798C19.1557 12.9074 19.0355 13.0739 19.0355 13.4222C19.0355 13.8659 19.199 14.1202 19.521 14.3563C19.6557 14.455 19.811 14.5445 19.9874 14.6296V12.5203ZM22.018 19.5612C22.2114 19.486 22.3563 19.3945 22.4601 19.2964C22.6225 19.1428 22.768 18.8965 22.768 18.4168C22.768 18.1317 22.6681 17.9494 22.3328 17.7334C22.2372 17.6717 22.1324 17.6143 22.018 17.5591V19.5612Z" fill="#5DAC46"></path></svg>
                            </div>
                            <label for="">100% thuốc chính hãng</label>
                            <div class="BannerPrescriptionDesktop_devider__4hLmk"></div>
                            <div class="BannerPrescriptionDesktop_footer-item__Th19S">
                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none"><path d="M14.0563 6.20097C15.3145 4.93961 15.3145 2.89488 14.0563 1.63352C12.798 0.37216 10.7583 0.37216 9.49999 1.63352L7.5 3.63842L12.0563 8.20586L14.0563 6.20097Z" fill="#0F62F9"></path><path d="M3.22185 1.18267C3.95032 1.18267 4.63906 1.4615 5.15561 1.97932L6.81124 3.639L2.9437 7.51602L1.28808 5.85634C0.771521 5.33852 0.493376 4.64809 0.493376 3.91783C0.493376 3.18757 0.784766 2.49714 1.28808 1.97932C1.80463 1.4615 2.49337 1.18267 3.22185 1.18267ZM3.22185 0.691406C2.40066 0.691406 1.56622 1.01007 0.943706 1.63411C-0.314569 2.89547 -0.314569 4.94019 0.943706 6.20155L2.9437 8.20645L7.49998 3.639L5.49998 1.63411C4.87747 1.01007 4.05628 0.691406 3.22185 0.691406Z" fill="#0F62F9"></path><path d="M9.02295 9.28076H8.54613C8.44017 9.28076 8.34746 9.3737 8.34746 9.47992V9.95791C8.34746 10.0641 8.44017 10.1571 8.54613 10.1571H9.02295C9.12891 10.1571 9.22163 10.0641 9.22163 9.95791V9.47992C9.22163 9.3737 9.12891 9.28076 9.02295 9.28076Z" fill="#5DAC46"></path><path d="M7.61924 10.6885H7.39408C7.28812 10.6885 7.1954 10.7814 7.1954 10.8876V11.1134C7.1954 11.2196 7.28812 11.3125 7.39408 11.3125H7.61924C7.7252 11.3125 7.81792 11.2196 7.81792 11.1134V10.8876C7.81792 10.7681 7.7252 10.6885 7.61924 10.6885Z" fill="#5DAC46"></path><path d="M9.15554 6.58594H8.40058C8.29462 6.58594 8.2019 6.67888 8.2019 6.7851V7.54191C8.2019 7.64813 8.29462 7.74108 8.40058 7.74108H9.15554C9.2615 7.74108 9.35422 7.64813 9.35422 7.54191V6.7851C9.35422 6.67888 9.27475 6.58594 9.15554 6.58594Z" fill="#5DAC46"></path><path d="M7.73819 8.00684H7.26137C7.15541 8.00684 7.0627 8.09978 7.0627 8.206V8.68399C7.0627 8.79021 7.15541 8.88315 7.26137 8.88315H7.73819C7.84415 8.88315 7.93687 8.79021 7.93687 8.68399V8.206C7.95011 8.09978 7.8574 8.00684 7.73819 8.00684Z" fill="#5DAC46"></path><path d="M6.4668 9.28076H5.98998C5.88402 9.28076 5.79131 9.3737 5.79131 9.47992V9.95791C5.79131 10.0641 5.88402 10.1571 5.98998 10.1571H6.4668C6.57276 10.1571 6.66548 10.0641 6.66548 9.95791V9.47992C6.66548 9.3737 6.58601 9.28076 6.4668 9.28076Z" fill="#5DAC46"></path><path d="M10.4271 7.86084H9.67209C9.56613 7.86084 9.47341 7.95378 9.47341 8.06V8.81682C9.47341 8.92304 9.56613 9.01598 9.67209 9.01598H10.4271C10.533 9.01598 10.6257 8.92304 10.6257 8.81682V8.06C10.639 7.95378 10.5463 7.86084 10.4271 7.86084Z" fill="#5DAC46"></path><path d="M7.88421 5.31152H7.12925C7.02329 5.31152 6.93057 5.40447 6.93057 5.51069V6.2675C6.93057 6.37372 7.02329 6.46666 7.12925 6.46666H7.88421C7.99017 6.46666 8.08289 6.37372 8.08289 6.2675V5.51069C8.08289 5.40447 7.99017 5.31152 7.88421 5.31152Z" fill="#5DAC46"></path><path d="M6.61241 6.58594H5.85745C5.75149 6.58594 5.65878 6.67888 5.65878 6.7851V7.54191C5.65878 7.64813 5.75149 7.74108 5.85745 7.74108H6.61241C6.71837 7.74108 6.81109 7.64813 6.81109 7.54191V6.7851C6.81109 6.67888 6.71837 6.58594 6.61241 6.58594Z" fill="#5DAC46"></path><path d="M5.34085 7.86084H4.58588C4.47992 7.86084 4.38721 7.95378 4.38721 8.06V8.81682C4.38721 8.92304 4.47992 9.01598 4.58588 9.01598H5.34085C5.44681 9.01598 5.53952 8.92304 5.53952 8.81682V8.06C5.53952 7.95378 5.44681 7.86084 5.34085 7.86084Z" fill="#5DAC46"></path></svg>
                            </div>
                            <label for="">Đủ thuốc đúng chuẩn</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        
        <div class="lazyload-wrapper" style="background: #fff; ">
            <div class=" Recommend_block__SCYXW" style="margin-left: 3rem; margin-right:3rem; ">
                <span class="Recommend_title__NrRlE" style="margin-top:20px; margin-bottom:20px;">Sản phẩm mới</span>
                <div class="Recommend_list__UlAi3" style="margin-bottom:3rem;">
                    @foreach($product as $key => $show_product)
                    <form>
                        @csrf
                        <input type="hidden" value="{{$show_product->product_id}}" class="product_id_{{$show_product->product_id}}">
                        <input type="hidden" value="{{$show_product->product_name}}" class="product_name_{{$show_product->product_id}}">
                        <input type="hidden" value="{{$show_product->product_img1}}" class="product_img1_{{$show_product->product_id}}">
                        <input type="hidden" value="{{$show_product->product_price}}" class="product_price_{{$show_product->product_id}}">
                        <input type="hidden" value="{{$show_product->product_price_old}}" class="product_price_old_{{$show_product->product_id}}">
                        <input type="hidden" value="{{$show_product->productUnit}}" class="product_unit_{{$show_product->product_id}}">
                        <input type="hidden" value="1" class="product_quantity_{{$show_product->product_id}}">
                        <div class="lazyload-wrapper">
                            <div class="Recommend_list-item__108Zj">
                                <a href="{{URL::to('/detail/'.$show_product->product_id)}}" class="ProductItem_product-item__Scx6a">
                                    <div class="ProductItem_head__JbsLQ">
                                        <figure class="ProductItem_image__Q5HLa">
                                            <img src="/uploads/product/{{$show_product->product_img1}}" alt="" style="z-index: 1">
                                        </figure>
                                    </div>
                                    <div class="ProductItem_body__tGvw7">
                                        <div class="ProductItem_brand-null__Ur1zD"></div>
                                        <div class="ProductItem_title__dd1Vx">{{$show_product->product_name}}</div>
                                        <div class="ProductItem_original-price__Gs0ev">{{ number_format($show_product->product_price_old, 0, ',', '.') }} đ</div>
                                        <div class="ProductItem_discount-price__YcO7h">
                                            <span>{{ number_format($show_product->product_price, 0, ',', '.') }} đ
                                                <span class="ProductItem_discount-price-style__Z3DG7">/{{$show_product->productUnit}}</span>
                                            </span>
                                        </div>
                                        @if($show_product->product_out == 0)
                                            <button data-id="{{$show_product->product_id}}" id="addtocart" class="ProductItem_add-to-card__7P2PF add-to-cart-button" style="position: relative; z-index: 2;">Thêm vào giỏ hàng</button>
                                        @elseif($show_product->product_out == 1)
                                            <button class="ProductItem_add-to-card__7P2PF ProductItem_advise__M7DC8" style="z-index: 2; position:relative;">Tư vấn mua hàng</button>
                                        @elseif($show_product->product_out == 2)
                                            <button class="ProductItem_add-to-card__7P2PF ProductItem_add-to-card-disabled__N5pDy" style="z-index: 2; position:relative;">Tạm hết hàng</button>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        </div>
                    </form>
                    @endforeach


                    
                </div>
                <button class="Recommend_see-more-btn__vGG2L">Xem thêm</button>
            </div>
            
        </div>
        
        
        <br><br>
        <div class="container-wrapper">
            <div class="container">
                <div class="lazyload-wrapper ">
                    <div class="Blog_blog-wrapper__EN2bJ">
                        <div class="Blog_title__UcXCk">
                            <h2>Tin mới nhất</h2>
                            <span onclick="window.location.href='{{URL::to('/goc-suc-khoe')}}'">Xem tất cả ></span>
                        </div>
                        <div class="Blog_tabs__EOz_A">
                            @foreach($cate_post as $index => $ct_post)
                                <div class="Blog_tab-name__Jt5Nj @if($index === 0) Blog_active__Mfku_ @endif" data-category="{{$ct_post->cate_post_id}}">
                                    <span>{{$ct_post->cate_post_name}}</span>
                                </div>
                            @endforeach
                            
                        </div>
                        <div class="Blog_tab-content__L1dwk">
                            @foreach($post as $key => $p)
                            <div class="Blog_tab-content-item__2sAXW" data-category="{{$p->cate_post_id}}">
                                <div class="Blog_blog-image__E4aFt">
                                    <a href="{!! URL::to('/tin-tuc/' . $p->post_slug) !!}">
                                        <img src="uploads/post/{{$p->post_image}}" alt="" width="286" height="159">
                                    </a>
                                    
                                </div>
                                <div class="Blog_blog-title__iPMmy">
                                    <a href="{!! URL::to('/tin-tuc/' . $p->post_slug) !!}">
                                        <span class="cursor-point">{{$p->post_title}}</span>
                                    </a>
                                </div>
                                <div class="Blog_blog-content__L5KzE"></div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
       
       

        
        <div class="lazyload-wrapper ">
            <div class="OurService_our-service__tglfc">
                <div class="container">
                    <div class="OurService_box__5nUY9">


                        <div class="OurService_col__xr22g">
                            <a href="">
                                <div class="OurService_item__C6oMR">
                                    <div class="OurService_img__HhHsJ">
                                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M30.8166 4.25172L38.4644 11.8999C38.6256 12.0611 38.7161 12.2796 38.716 12.5075V28.6633C38.716 29.1378 38.3312 29.5226 37.8567 29.5226C37.3822 29.5226 36.9974 29.1378 36.9974 28.6633V13.3669H31.9275C30.506 13.3669 29.3496 12.2104 29.3496 10.7889V5.7188H6.57792C6.10415 5.7188 5.71864 6.10424 5.71864 6.57811V45.4208C5.71864 45.8946 6.10407 46.2801 6.57792 46.2801H22.9925C23.467 46.2801 23.8518 46.6649 23.8518 47.1394C23.8518 47.6139 23.4671 47.9987 22.9925 47.9987H6.57792C5.15645 47.9987 4 46.8422 4 45.4207V6.57811C4 5.15658 5.15645 4 6.57792 4H30.209C30.4369 4 30.6554 4.09058 30.8166 4.25172ZM31.0683 10.7889C31.0683 11.2627 31.4537 11.6482 31.9276 11.6482H35.7824L31.0683 6.93407V10.7889Z" fill="#0F62F9"></path><path d="M17.4344 28.0618H32.3578C32.8323 28.0618 33.2172 28.4466 33.2171 28.9211C33.2171 29.3957 32.8323 29.7804 32.3578 29.7804H17.4344C16.96 29.7804 16.5752 29.3956 16.5752 28.9211C16.5752 28.4466 16.9599 28.0618 17.4344 28.0618Z" fill="#0F62F9"></path><path d="M13.1589 28.0618H10.3589C9.88435 28.0618 9.49962 28.4466 9.49962 28.9211C9.49962 29.3956 9.88444 29.7804 10.3589 29.7804H13.1589C13.6334 29.7804 14.0181 29.3956 14.0181 28.9211C14.0181 28.4466 13.6334 28.0618 13.1589 28.0618Z" fill="#0F62F9"></path><path d="M17.4344 32.8742H25.9989C26.4735 32.8742 26.8582 33.259 26.8582 33.7335C26.8582 34.208 26.4735 34.5928 25.9989 34.5928H17.4344C16.96 34.5928 16.5752 34.2079 16.5752 33.7335C16.5752 33.259 16.9599 32.8742 17.4344 32.8742Z" fill="#0F62F9"></path><path d="M13.1589 32.8742H10.3589C9.88435 32.8742 9.49962 33.259 9.49962 33.7335C9.49962 34.2079 9.88444 34.5928 10.3589 34.5928H13.1589C13.6334 34.5928 14.0181 34.2079 14.0181 33.7335C14.0181 33.259 13.6334 32.8742 13.1589 32.8742Z" fill="#0F62F9"></path><path d="M17.4345 37.6865C17.6613 37.6865 17.8822 37.7785 18.042 37.9383C18.2027 38.0982 18.2939 38.3199 18.2939 38.5459C18.2939 38.7719 18.2027 38.9937 18.042 39.1534C17.8822 39.3134 17.6614 39.4053 17.4345 39.4053C17.2085 39.4053 16.9868 39.3133 16.8269 39.1534C16.667 38.9937 16.5752 38.7719 16.5752 38.5459C16.5752 38.3199 16.6671 38.0982 16.8269 37.9383C16.9876 37.7784 17.2085 37.6865 17.4345 37.6865Z" fill="#0F62F9"></path><path d="M13.1589 37.6865H10.3589C9.88435 37.6865 9.49962 38.0714 9.49962 38.5458C9.49962 39.0204 9.88444 39.4051 10.3589 39.4051H13.1589C13.6334 39.4051 14.0181 39.0203 14.0181 38.5458C14.0182 38.0714 13.6334 37.6865 13.1589 37.6865Z" fill="#0F62F9"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M41.9292 37.3969C42.1721 37.3628 42.4199 37.344 42.6721 37.344C45.6099 37.344 48 39.734 48 42.672C48 45.6099 45.61 48 42.6722 48C39.8038 48 37.4589 45.7211 37.3497 42.8788L33.7891 46.4395C32.7506 47.478 31.386 47.9975 30.0219 47.9975C28.6574 47.9975 27.2934 47.4783 26.2546 46.4395C25.2483 45.4332 24.6941 44.0953 24.6941 42.6721C24.6941 41.2489 25.2483 39.911 26.2546 38.9046L33.06 32.0991C34.0662 31.0928 35.4041 30.5386 36.8272 30.5386C38.2503 30.5386 39.5882 31.0928 40.5945 32.0991C42.0259 33.5306 42.4707 35.5807 41.9292 37.3969ZM27.4698 45.2242C28.8769 46.6316 31.1666 46.6316 32.5737 45.2242L35.3688 42.4291L30.2649 37.3249L27.4698 40.1201C26.7881 40.8017 26.4127 41.7081 26.4127 42.6722C26.4127 43.6362 26.7881 44.5425 27.4698 45.2242ZM31.48 36.1095L36.584 41.2138L39.379 38.4186C40.7862 37.0114 40.7862 34.7216 39.379 33.3144C38.6975 32.6327 37.7911 32.2573 36.8271 32.2573C35.863 32.2573 34.9568 32.6327 34.2751 33.3144L31.48 36.1095ZM39.063 42.6721C39.063 44.366 40.2364 45.7905 41.8128 46.1772V39.167C40.2363 39.5536 39.063 40.978 39.063 42.6721ZM43.5314 39.1669V46.1772C45.1079 45.7905 46.2813 44.3659 46.2813 42.672C46.2813 40.978 45.1079 39.5536 43.5314 39.1669Z" fill="#0F62F9"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M30.8166 4.25172L38.4644 11.8999C38.6256 12.0611 38.7161 12.2796 38.716 12.5075V28.6633C38.716 29.1378 38.3312 29.5226 37.8567 29.5226C37.3822 29.5226 36.9974 29.1378 36.9974 28.6633V13.3669H31.9275C30.506 13.3669 29.3496 12.2104 29.3496 10.7889V5.7188H6.57792C6.10415 5.7188 5.71864 6.10424 5.71864 6.57811V45.4208C5.71864 45.8946 6.10407 46.2801 6.57792 46.2801H22.9925C23.467 46.2801 23.8518 46.6649 23.8518 47.1394C23.8518 47.6139 23.4671 47.9987 22.9925 47.9987H6.57792C5.15645 47.9987 4 46.8422 4 45.4207V6.57811C4 5.15658 5.15645 4 6.57792 4H30.209C30.4369 4 30.6554 4.09058 30.8166 4.25172ZM31.0683 10.7889C31.0683 11.2627 31.4537 11.6482 31.9276 11.6482H35.7824L31.0683 6.93407V10.7889Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M17.4344 28.0618H32.3578C32.8323 28.0618 33.2172 28.4466 33.2171 28.9211C33.2171 29.3957 32.8323 29.7804 32.3578 29.7804H17.4344C16.96 29.7804 16.5752 29.3956 16.5752 28.9211C16.5752 28.4466 16.9599 28.0618 17.4344 28.0618Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M13.1589 28.0618H10.3589C9.88435 28.0618 9.49962 28.4466 9.49962 28.9211C9.49962 29.3956 9.88444 29.7804 10.3589 29.7804H13.1589C13.6334 29.7804 14.0181 29.3956 14.0181 28.9211C14.0181 28.4466 13.6334 28.0618 13.1589 28.0618Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M17.4344 32.8742H25.9989C26.4735 32.8742 26.8582 33.259 26.8582 33.7335C26.8582 34.208 26.4735 34.5928 25.9989 34.5928H17.4344C16.96 34.5928 16.5752 34.2079 16.5752 33.7335C16.5752 33.259 16.9599 32.8742 17.4344 32.8742Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M13.1589 32.8742H10.3589C9.88435 32.8742 9.49962 33.259 9.49962 33.7335C9.49962 34.2079 9.88444 34.5928 10.3589 34.5928H13.1589C13.6334 34.5928 14.0181 34.2079 14.0181 33.7335C14.0181 33.259 13.6334 32.8742 13.1589 32.8742Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M17.4345 37.6865C17.6613 37.6865 17.8822 37.7785 18.042 37.9383C18.2027 38.0982 18.2939 38.3199 18.2939 38.5459C18.2939 38.7719 18.2027 38.9937 18.042 39.1534C17.8822 39.3134 17.6614 39.4053 17.4345 39.4053C17.2085 39.4053 16.9868 39.3133 16.8269 39.1534C16.667 38.9937 16.5752 38.7719 16.5752 38.5459C16.5752 38.3199 16.6671 38.0982 16.8269 37.9383C16.9876 37.7784 17.2085 37.6865 17.4345 37.6865Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M13.1589 37.6865H10.3589C9.88435 37.6865 9.49962 38.0714 9.49962 38.5458C9.49962 39.0204 9.88444 39.4051 10.3589 39.4051H13.1589C13.6334 39.4051 14.0181 39.0203 14.0181 38.5458C14.0182 38.0714 13.6334 37.6865 13.1589 37.6865Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M41.9292 37.3969C42.1721 37.3628 42.4199 37.344 42.6721 37.344C45.6099 37.344 48 39.734 48 42.672C48 45.6099 45.61 48 42.6722 48C39.8038 48 37.4589 45.7211 37.3497 42.8788L33.7891 46.4395C32.7506 47.478 31.386 47.9975 30.0219 47.9975C28.6574 47.9975 27.2934 47.4783 26.2546 46.4395C25.2483 45.4332 24.6941 44.0953 24.6941 42.6721C24.6941 41.2489 25.2483 39.911 26.2546 38.9046L33.06 32.0991C34.0662 31.0928 35.4041 30.5386 36.8272 30.5386C38.2503 30.5386 39.5882 31.0928 40.5945 32.0991C42.0259 33.5306 42.4707 35.5807 41.9292 37.3969ZM27.4698 45.2242C28.8769 46.6316 31.1666 46.6316 32.5737 45.2242L35.3688 42.4291L30.2649 37.3249L27.4698 40.1201C26.7881 40.8017 26.4127 41.7081 26.4127 42.6722C26.4127 43.6362 26.7881 44.5425 27.4698 45.2242ZM31.48 36.1095L36.584 41.2138L39.379 38.4186C40.7862 37.0114 40.7862 34.7216 39.379 33.3144C38.6975 32.6327 37.7911 32.2573 36.8271 32.2573C35.863 32.2573 34.9568 32.6327 34.2751 33.3144L31.48 36.1095ZM39.063 42.6721C39.063 44.366 40.2364 45.7905 41.8128 46.1772V39.167C40.2363 39.5536 39.063 40.978 39.063 42.6721ZM43.5314 39.1669V46.1772C45.1079 45.7905 46.2813 44.3659 46.2813 42.672C46.2813 40.978 45.1079 39.5536 43.5314 39.1669Z" stroke="#0F62F9" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="square"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M22.018 9.09448V10.4707C22.9874 10.5938 23.899 10.8637 24.4884 11.1876L25.3781 11.6767L24.4 13.4563L23.5102 12.9672C23.2089 12.8016 22.6538 12.626 22.018 12.5221V15.3695C22.5009 15.5424 23.0059 15.7513 23.4328 16.0264C24.1781 16.5067 24.7986 17.261 24.7986 18.4168C24.7986 19.3779 24.4759 20.1851 23.855 20.7721C23.3349 21.2638 22.6782 21.5324 22.018 21.6673V23.5693H19.9874V21.7523C18.983 21.6639 17.9665 21.4135 17.0996 21.1007L16.1445 20.756L16.8338 18.8459L17.7888 19.1905C18.4929 19.4446 19.263 19.6309 19.9874 19.7117V16.823C19.4279 16.6209 18.8244 16.3636 18.3203 15.9939C17.5617 15.4377 17.0048 14.6115 17.0048 13.4222C17.0048 12.4066 17.4519 11.624 18.1668 11.12C18.7084 10.7382 19.3582 10.5459 19.9874 10.4595V9.09448H22.018ZM19.9874 12.5203C19.7037 12.5832 19.4864 12.6743 19.3368 12.7798C19.1557 12.9074 19.0355 13.0739 19.0355 13.4222C19.0355 13.8659 19.199 14.1202 19.521 14.3563C19.6557 14.455 19.811 14.5445 19.9874 14.6296V12.5203ZM22.018 19.5612C22.2114 19.486 22.3563 19.3945 22.4601 19.2964C22.6225 19.1428 22.768 18.8965 22.768 18.4168C22.768 18.1317 22.6681 17.9494 22.3328 17.7334C22.2372 17.6717 22.1324 17.6143 22.018 17.5591V19.5612Z" fill="#5DAC46"></path></svg>
                                    </div>
                                    <div class="OurService_info__x8v9M">
                                        <h3>100% THUỐC CHUẨN CHÍNH HÃNG</h3>
                                        <p>
                                            <span>Đủ thuốc chuẩn, tư vấn tốt</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="OurService_col__xr22g">
                            <a href="">
                                <div class="OurService_item__C6oMR">
                                    <div class="OurService_img__HhHsJ">
                                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.3214 19.4831C11.3214 11.123 18.1304 4.32148 26.4998 4.32148C34.8694 4.32148 41.6783 11.123 41.6784 19.4831C41.6784 22.7964 40.863 25.9543 39.1858 29.1374C37.7029 31.9516 35.6844 34.5471 33.7322 37.0572L33.7304 37.0595C31.2893 40.1984 28.7651 43.4441 27.1246 47.2678C27.0176 47.5173 26.7718 47.6791 26.4999 47.6791C26.228 47.6791 25.9823 47.5173 25.8752 47.2678C24.2346 43.4437 21.71 40.1976 19.2687 37.0585C17.3163 34.5483 15.2971 31.952 13.8141 29.1374C12.1368 25.9543 11.3214 22.7964 11.3214 19.4831ZM32.658 36.2251C36.5979 31.1594 40.3191 26.3746 40.3191 19.4831C40.3191 11.8716 34.1198 5.67929 26.4998 5.67929C18.8799 5.67929 12.6807 11.8717 12.6807 19.4831C12.6807 26.3746 16.4019 31.1593 20.3416 36.2251L20.3428 36.2266C22.5491 39.0635 24.8215 41.9855 26.4998 45.3802C28.1782 41.9852 30.4516 39.0621 32.658 36.2251Z" fill="#0F62F9"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M19.2687 37.0585C17.3163 34.5483 15.2971 31.952 13.8141 29.1374C12.1368 25.9543 11.3214 22.7964 11.3214 19.4831C11.3214 11.123 18.1304 4.32148 26.4998 4.32148C34.8694 4.32148 41.6783 11.123 41.6784 19.4831C41.6784 22.7964 40.863 25.9543 39.1858 29.1374C37.7029 31.9516 35.6844 34.5471 33.7322 37.0572L33.7304 37.0595C31.2893 40.1984 28.7651 43.4441 27.1246 47.2678C27.0176 47.5173 26.7718 47.6791 26.4999 47.6791C26.228 47.6791 25.9823 47.5173 25.8752 47.2678C24.2346 43.4437 21.71 40.1976 19.2687 37.0585ZM33.9951 37.2425C35.9413 34.74 37.9742 32.126 39.4704 29.2867C41.1698 26.0615 42 22.8526 42 19.4828C41.9999 10.9453 35.047 4 26.4999 4C17.9529 4 11 10.9453 11 19.4828C11 22.8526 11.8302 26.0615 13.5296 29.2867C15.026 32.1265 17.0599 34.7416 19.0064 37.2444L19.0148 37.2552C21.4602 40.3995 23.958 43.614 25.5797 47.394C25.7375 47.7617 26.0996 48 26.5 48C26.9004 48 27.2625 47.7617 27.4202 47.394C29.0418 43.6144 31.5393 40.4002 33.9844 37.2562L33.9951 37.2425ZM20.5957 36.0279L20.6057 36.0407C22.6837 38.7127 24.8407 41.4862 26.4999 44.6699C28.1593 41.4858 30.3171 38.7113 32.3953 36.0392L32.4042 36.0277L32.658 36.2251C30.5296 38.9618 28.339 41.7782 26.6802 45.0214C26.6194 45.1403 26.5592 45.2601 26.4998 45.3802C26.4405 45.2601 26.3804 45.1403 26.3196 45.0214C24.661 41.7786 22.4711 38.9632 20.3428 36.2266L20.3416 36.2251C16.4019 31.1593 12.6807 26.3746 12.6807 19.4831C12.6807 11.8717 18.8799 5.67929 26.4998 5.67929C34.1198 5.67929 40.3191 11.8716 40.3191 19.4831C40.3191 26.3746 36.5979 31.1594 32.658 36.2251L32.4042 36.0277C36.3531 30.9504 39.9976 26.2487 39.9976 19.4828C39.9976 12.0486 33.9423 6.00014 26.4999 6.00014C19.0576 6.00014 13.0023 12.0487 13.0023 19.4828C13.0023 26.2487 16.6469 30.9504 20.5957 36.0279Z" fill="#0F62F9"></path><path d="M35.9209 18.3116C35.3734 13.9721 31.8126 10.4982 27.4542 10.0515C25.568 9.85798 23.6953 10.2124 22.0382 11.0762C21.7235 11.2402 21.6014 11.6282 21.7654 11.943C21.9295 12.2577 22.3175 12.3797 22.6322 12.2157C24.0658 11.4684 25.6876 11.1621 27.3232 11.3297C31.0929 11.7161 34.1726 14.7201 34.646 18.4724C34.9715 21.0515 34.1142 23.5751 32.2941 25.3958C30.474 27.2166 27.9509 28.0747 25.3716 27.7503C23.6158 27.5294 21.9398 26.7116 20.6524 25.4472C19.3644 24.1824 18.5176 22.5219 18.268 20.7717C17.96 18.6121 18.4817 16.4639 19.7368 14.7226C19.7386 14.7201 19.7516 14.7112 19.7726 14.7112H21.1404C21.1591 14.7112 21.1761 14.7237 21.1814 14.7418L22.7979 20.1298C23.0551 20.9881 23.8301 21.5647 24.726 21.5647H29.1889C30.2989 21.5647 31.202 20.6616 31.202 19.5515V15.4395C31.202 15.0847 30.9144 14.797 30.5595 14.797H22.5394L22.4121 14.3726C22.2423 13.8066 21.7312 13.4264 21.1403 13.4264H19.7725C19.3435 13.4264 18.9404 13.6301 18.6944 13.9713C17.2439 15.9835 16.6407 18.4631 16.9959 20.9532C17.2852 22.9811 18.264 24.9027 19.7521 26.3641C21.2392 27.8244 23.178 28.7696 25.2113 29.0253C25.6246 29.0773 26.0361 29.1028 26.4449 29.1028C28.9802 29.1028 31.3922 28.1157 33.203 26.3042C35.3057 24.2009 36.2963 21.2876 35.9209 18.3116ZM29.917 16.0821V19.5516C29.917 19.9531 29.5903 20.2798 29.1888 20.2798H24.7259C24.4018 20.2798 24.1215 20.0712 24.0284 19.7608L22.9249 16.0822H29.917V16.0821Z" fill="#5DAC46"></path><path d="M23.0202 22.3357C22.288 22.3357 21.6924 22.9313 21.6924 23.6635C21.6924 24.3957 22.288 24.9914 23.0202 24.9914C23.7524 24.9914 24.3481 24.3957 24.3481 23.6635C24.3481 22.9313 23.7524 22.3357 23.0202 22.3357Z" fill="#5DAC46"></path><path d="M29.8728 22.3357C29.1406 22.3357 28.5449 22.9313 28.5449 23.6635C28.5449 24.3957 29.1406 24.9914 29.8728 24.9914C30.605 24.9914 31.2006 24.3957 31.2006 23.6635C31.2006 22.9313 30.605 22.3357 29.8728 22.3357Z" fill="#5DAC46"></path></svg>
                                    </div>
                                    <div class="OurService_info__x8v9M">
                                        <h3>NHÀ THUỐC GẦN BẠN</h3>
                                        <p>
                                            <span>Tìm ngay nhà thuốc gần nơi bạn sống và ghé thăm</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <form id="email-form" class="OurService_register-news__PxYGT" method="POST">
                       @csrf
                        <p style="color: rgb(45, 45, 45); font-size: 19px">Nhập <b style="font-weight: 600">Email</b> để nhận thông tin khuyến mãi từ nhà thuốc Lan Phương</p>
                        <div class="OurService_register-input__FOqxk">
                            <div class="InputTextField_input-text-field__Yvohj">
                                <div class="InputTextField_input-group__Cyzv4">
                                    <span class="InputTextField_icon-left__HBgoK">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M14.9178 7.375L11.2151 10.3859C10.5155 10.9409 9.53122 10.9409 8.83164 10.3859L5.09766 7.375" stroke="#8894A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M14.0901 17.5C16.6245 17.507 18.3327 15.4246 18.3327 12.8653V7.14168C18.3327 4.58235 16.6245 2.5 14.0901 2.5H5.90863C3.37417 2.5 1.66602 4.58235 1.66602 7.14168V12.8653C1.66602 15.4246 3.37417 17.507 5.90863 17.5H14.0901Z" stroke="#8E9AAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </span>
                                    <input type="email" name="email" class="InputTextField_has-icon-left__2_VWZ">
                                </div>
                            </div>
                        </div>
                        <button type="button" id="submit-button" class="Button_button__yfvRh OurService_register-btn__th2pr">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#submit-button').click(function() {
                    var email = $('input[name="email"]').val();

                    // Kiểm tra định dạng email hợp lệ
                    if (!isValidEmail(email)) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi',
                            text: 'Vui lòng nhập địa chỉ email hợp lệ.',
                            position: 'center'
                        });
                        return; // Ngừng thực hiện tiếp khi có lỗi định dạng email
                    }

                    // Gửi yêu cầu AJAX
                    $.ajax({
                        type: 'POST',
                        url: '/sendemail',
                        data: {
                            _token: '{{ csrf_token() }}',
                            email: email
                        },
                        success: function(response) {
                            if (response.message === 'Địa chỉ email đã tồn tại.') {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Lỗi',
                                    text: response.message,
                                    position: 'center'
                                });
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Thành công!',
                                    text: response.message,
                                    position: 'center'
                                });
                            }
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Lỗi',
                                text: 'Đã xảy ra lỗi khi đăng ký.',
                                position: 'center'
                            });
                        }
                    });
                });
            });
            function isValidEmail(email) {
                var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return regex.test(email);
            }
        </script>
        
    </div>
    
    
    @include('partial.footer')

    






 
<script>
    $(document).ready(function() {
        // Lấy danh mục đầu tiên có lớp active
        var initialCategory = $('.Blog_tab-name__Jt5Nj.Blog_active__Mfku_').data('category');

        // Hiển thị các bài viết thuộc danh mục đầu tiên
        $('.Blog_tab-content-item__2sAXW[data-category="' + initialCategory + '"]').show();

        $('.Blog_tab-name__Jt5Nj').on('click', function() {
            // Loại bỏ lớp active từ tất cả các nút danh mục
            $('.Blog_tab-name__Jt5Nj').removeClass('Blog_active__Mfku_');

            // Thêm lớp active cho nút danh mục được nhấp vào
            $(this).addClass('Blog_active__Mfku_');

            // Lấy giá trị data-category của nút danh mục
            var categoryId = $(this).data('category');

            // Ẩn tất cả các bài viết
            $('.Blog_tab-content-item__2sAXW').hide();

            // Hiển thị các bài viết thuộc danh mục tương ứng
            $('.Blog_tab-content-item__2sAXW[data-category="' + categoryId + '"]').show();
        });
    });

</script>
    
    
    
</body>
</html>