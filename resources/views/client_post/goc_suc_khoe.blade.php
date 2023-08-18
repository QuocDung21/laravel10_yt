<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Góc sức khoẻ</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/post.css')}}">
   
</head>
<body style="background: #ededed; ">
    @include('partial.header')
    <div class="MainLayout_content__hCocE">
        <div>
            <div class="container2" style="margin-left: 3rem; margin-right: 3rem">
                <nav>
                    <ol class="Breadcrumbs_breadcrumbs__04vpL">
                        <li class="Breadcrumbs_item__e9mbT">
                            <a href="{{URL::to('/')}}">
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        <li class="Breadcrumbs_item__e9mbT">
                            <a href="{{URL::to('/goc-suc-khoe')}}">
                                <span>Góc sức khoẻ</span>
                            </a>
                        </li>
                        <li class="Breadcrumbs_item__e9mbT Breadcrumbs_item-active__3fOia">
                            <a href="#">
                                <span class="selected-category">Tin tức</span>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="Blog_blog-m0__j5UFs">
            <div class="container-wrapper">
                <div class="container2" style="margin-left: 3rem; margin-right: 3rem">
                    <div class="Blog_blog-wrapper___n8s_">
                        <img src="https://data-service.pharmacity.io/pmc-upload-media/production/pmc-ecm-asm/posts/banner-tool-suc-khoe-web-1.webp" alt="" class="Blog_banner__X5CGL">
                        <h1 class="Blog_blog-cate-label__ynl_J">
                            <span class="selected-category">Tin tức</span>

                        </h1>
                        <div class="Blog_blog-body__2FJge">
                            <div class="BlogList_blog-list__z0jDd">
                                <div class="BlogList_tabs__SVp3U">
                                    @foreach($cate_post as $item => $cate)
                                    <button class="BlogList_tab-name__QsGiZ @if($item === 0) BlogList_active__c9FUI @endif" data-category="{{$cate->cate_post_id}}">
                                        <span id="categoryName_{{$cate->cate_post_id}}">{{$cate->cate_post_name}}</span>
                                    </button>
                                    @endforeach
                                    
                                </div>
                                <script>
                                    $(document).ready(function() {
                                        $('.BlogList_tab-name__QsGiZ').on('click', function() {
                                          
                                            $('.BlogList_tab-name__QsGiZ').removeClass('BlogList_active__c9FUI');
                                    
                                            
                                            $(this).addClass('BlogList_active__c9FUI');

                                           
                                            var categoryName = $(this).find('span').text();
                                            $('.selected-category').text(categoryName);

                                            var categoryId = $(this).data('category');
                                            $('.BlogItem_blog-item-wrapper__vTNQY').hide();

                                            $('.BlogItem_blog-item-wrapper__vTNQY[data-category="' + categoryId + '"]').show();
                                        });
                                    });
                                    </script>
                                    
                                <div class="BlogList_tab-content__wAL7X">
                                    @foreach($post as $key => $p)
                                    <div class="BlogItem_blog-item-wrapper__vTNQY" data-category="{{$p->cate_post_id}}">
                                        <div class="BlogItem_blog-image__MVwbq">
                                            <a href="{!! URL::to('/tin-tuc/' . $p->post_slug) !!}">
                                                <img src="uploads/post/{{$p->post_image}}" alt="">
                                            </a>
                                        </div>
                                        <a href="{!! URL::to('/tin-tuc/' . $p->post_slug) !!}" class="BlogItem_blog-title__tciTc">
                                            <span>{{$p->post_title}}</span>
                                        </a>
                                        <div class="BlogItem_blog-content__DAmGV">
                                            <span></span>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                            
                            <div class="MenuRight_menu-right__Ed_5q">
                                <div class="MenuRight_banner__oOm_b">
                                    <img src="https://data-service.pharmacity.io/pmc-upload-media/production/pmc-ecm-asm/rectangle-926.webp" alt="">
                                </div>
                                <div class="MenuRight_popular-news__cCVHA">
                                    <span class="MenuRight_title__3lJ7U">
                                        CÁC BÀI MỚI NHẤT
                                    </span>
                                    <div class="MenuRight_list-new__YB1_2">
                                        @foreach($post_new as $key => $p)
                                        <a href="{!! URL::to('/tin-tuc/' . $p->post_slug) !!}" class="MenuRight_list-new-item__uRi_0">
                                            <img src="uploads/post/{{$p->post_image}}" alt="">
                                            <span>{{$p->post_title}}</span>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>