<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Góc sức khoẻ</title>
    <link rel="stylesheet" href="{{asset('css/post.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
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
                                <span class="selected-category">{{$post_sl->cate_post_name}}</span>
                            </a>
                        </li>
                    </ol>
                </nav>
                <div class="BlogDetail_blog-detail-wrapper__QJEqf">
                    <div class="BlogDetail_blog-detail-content__Hy8Ze">
                        <div class="BlogDetail_blogDetailTitle__b5TZc">
                            <h1>
                                {{$post_sl->post_title}}
                            </h1>
                        </div>
                        <div class="BlogDetail_blog-content__Tvryj">
                            {!!$post_sl->post_content!!}
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
                                        <img src="/uploads/post/{{$p->post_image}}" alt="">
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
    
</body>
</html>