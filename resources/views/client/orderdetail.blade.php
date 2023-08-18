<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/client.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body style="background: #ededed; margin: 0 !important;">
    @include('partial.header')
    <main class="MainLayout_main-layout__riclp">
        <div class="MainLayout_content__hCocE">
            <div>
                <div class="" style="margin-left: 3rem; margin-right: 3rem;" >
                    <nav>
                        <ol class="Breadcrumbs_breadcrumbs__04vpL">
                            <li class="Breadcrumbs_item__e9mbT">
                                <a href="">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li class="Breadcrumbs_item__e9mbT">
                                <a href="">
                                    <span>Trang cá nhân</span>
                                </a>
                            </li>
                            <li class="Breadcrumbs_item__e9mbT">
                                <a href="">
                                    <span>Lịch sử đơn hàng</span>
                                </a>
                            </li>
                            <li class="Breadcrumbs_item__e9mbT Breadcrumbs_item-active__3fOia">
                                <a href="">
                                    <span>Chi tiết đơn hàng</span>
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="Desktop_account-page__KPTOD">
                <div class="" style="margin-right: 3rem; margin-left:3rem" >
                    <div class="Desktop_box__4Zolv">
                        <div class="Desktop_small__xDS4M">
                            <div class="AccountMenu_menu__t7684">
                                <div class="AccountMenu_head__Mo2N3">
                                    <div class="AccountMenu_avatar__kjhzy">K</div>
                                    <div class="AccountMenu_name__38VUE">
                                        <h3>{{ Session::get('user_name') }}</h3>
                                    </div>
                                    <div class="Ranking_ranking-wrapper__a1RJe"></div>
                                </div>
                                <div class="AccountMenu_box__DisFh">
                                    <ul>
                                        <a href="{{URL::to('/orders')}}">
                                            <li class="AccountMenu_active__P8X_O">
                                                <figure>
                                                    <svg stroke="#333333" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 13H5.76C6.52 13 7.21 13.43 7.55 14.11L8.44 15.9C9 17 10 17 10.24 17H13.77C14.53 17 15.22 16.57 15.56 15.89L16.45 14.1C16.79 13.42 17.48 12.99 18.24 12.99H21.98" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6 7L18 7" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 10L15 10" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </figure>
                                                <h3>Lịch sử đơn hàng</h3>
                                                <button>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M5.66699 3.33268L10.3337 7.99935L5.66699 12.666" stroke="#B2BAC6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </button>
                                            </li>
                                        </a>
                                        <a href="{{URL::to('/account')}}">
                                            <li class="">
                                                <figure>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#292D32"><path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.2101 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.8201 15.13 19.2101 15.74Z" stroke="inherit" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.7002 16.25C19.0002 17.33 19.8402 18.17 20.9202 18.47" stroke="inherit" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3.41016 22C3.41016 18.13 7.26018 15 12.0002 15C13.0402 15 14.0402 15.15 14.9702 15.43" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </figure>
                                                <h3 class="AccountMenu_menu-label__lHtVn">Chỉnh sửa thông tin cá nhân</h3>
                                                <button>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M5.66699 3.33268L10.3337 7.99935L5.66699 12.666" stroke="#B2BAC6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </button>
                                            </li>
                                        </a>
                                        <a href="{{URL::to('/address')}}">
                                            <li class="">
                                                <figure>
                                                    <svg stroke="#333333" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 13H5.76C6.52 13 7.21 13.43 7.55 14.11L8.44 15.9C9 17 10 17 10.24 17H13.77C14.53 17 15.22 16.57 15.56 15.89L16.45 14.1C16.79 13.42 17.48 12.99 18.24 12.99H21.98" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6 7L18 7" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 10L15 10" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </figure>
                                                <h3 class="">Sổ địa chỉ nhận hàng</h3>
                                                <button>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M5.66699 3.33268L10.3337 7.99935L5.66699 12.666" stroke="#B2BAC6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </button>
                                            </li>
                                        </a>
                                        <a href="">
                                            <li>
                                                <figure>
                                                    <svg fill="#333333" width="24" height="24" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.16764 5.66797C7.52431 5.66797 7.00098 6.1913 7.00098 6.8353C7.00098 7.47864 7.52431 8.0013 8.16764 8.0013C8.81098 8.0013 9.33431 7.47864 9.33431 6.8353C9.33431 6.1913 8.81098 5.66797 8.16764 5.66797ZM8.16764 9.0013C6.97298 9.0013 6.00098 8.02997 6.00098 6.8353C6.00098 5.63997 6.97298 4.66797 8.16764 4.66797C9.36231 4.66797 10.3343 5.63997 10.3343 6.8353C10.3343 8.02997 9.36231 9.0013 8.16764 9.0013Z" fill="inherit"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.16699 2.33398C5.68566 2.33398 3.66699 4.37198 3.66699 6.87598C3.66699 10.062 7.41633 13.166 8.16699 13.3313C8.91766 13.1653 12.667 10.0613 12.667 6.87598C12.667 4.37198 10.6483 2.33398 8.16699 2.33398ZM8.16699 14.334C6.97099 14.334 2.66699 10.6327 2.66699 6.87598C2.66699 3.81998 5.13433 1.33398 8.16699 1.33398C11.1997 1.33398 13.667 3.81998 13.667 6.87598C13.667 10.6327 9.36299 14.334 8.16699 14.334Z" fill="inherit"></path></svg>
                                                </figure>
                                                <h3 class="">Toa thuốc của tôi</h3>
                                                <button>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M5.66699 3.33268L10.3337 7.99935L5.66699 12.666" stroke="#B2BAC6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </button>
                                            </li>
                                        </a>
                                    </ul>
                                    <div class="AccountMenu_support__W_V9P">
                                        <div class="container"style="margin-left: 3rem; margin-right: 3rem;" >
                                            <div class="AccountMenu_liveChat__BSQ_T cursor-point">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><g><path d="M21.8906 7.07745H20.4407C19.9659 5.94791 19.2585 4.90634 18.3626 4.03789C16.9544 2.67284 15.1312 1.78339 13.229 1.53336C10.0768 1.11903 6.98733 2.3263 4.96486 4.76277C4.38445 5.462 3.91214 6.24449 3.56348 7.07745H2.10938C0.946266 7.07745 0 8.02372 0 9.18683V11.9993C0 13.1624 0.946266 14.1087 2.10938 14.1087H4.98984L4.68863 13.1871C3.81084 10.5015 4.30594 7.75836 6.04692 5.66094C7.75889 3.59844 10.3754 2.57666 13.0457 2.92761C16.3905 3.36725 19.0988 5.99403 19.6316 9.3155C19.9953 11.582 19.3609 13.8722 17.891 15.599C16.4178 17.3299 14.2746 18.3243 12.0108 18.3275C10.8418 18.329 9.89067 19.2754 9.89067 20.4368C9.89067 21.5999 10.8369 22.5462 12 22.5462C13.1632 22.5462 14.1094 21.5999 14.1094 20.4368V19.4869C15.9825 19.0421 17.6853 18.0103 18.9619 16.5105C19.582 15.782 20.0757 14.9771 20.4378 14.1087H21.8906C23.0537 14.1087 24 13.1624 24 11.9993V9.18678C24 8.02372 23.0537 7.07745 21.8906 7.07745ZM3.0968 12.7025H2.10938C1.72167 12.7025 1.40625 12.387 1.40625 11.9993V9.18683C1.40625 8.79913 1.72167 8.4837 2.10938 8.4837H3.10519C3.08016 8.58908 3.057 8.69502 3.03581 8.80124C2.77917 10.0871 2.80003 11.3956 3.0968 12.7025ZM12.7031 20.4368C12.7031 20.8245 12.3877 21.14 12 21.14C11.6123 21.14 11.2969 20.8245 11.2969 20.4368C11.2969 20.0496 11.618 19.7342 12.0127 19.7337C12.244 19.7334 12.4744 19.7243 12.7031 19.7067V20.4368ZM22.5938 11.9993C22.5938 12.387 22.2783 12.7025 21.8906 12.7025H20.8943C21.1735 11.5282 21.2164 10.3162 21.0201 9.0927C20.9873 8.88842 20.9467 8.68531 20.8992 8.4837H21.8906C22.2783 8.4837 22.5938 8.79913 22.5938 9.18683V11.9993Z" fill="#112950"></path><path d="M8 13C8.5 14.5 9.79 16 12 16C14.21 16 15.5 14.5 16 13" stroke="#112950" stroke-width="1.5" stroke-linecap="round"></path><path d="M9 10C9.55228 10 10 9.32843 10 8.5C10 7.67157 9.55228 7 9 7C8.44772 7 8 7.67157 8 8.5C8 9.32843 8.44772 10 9 10Z" fill="#112950"></path><path d="M15 10C15.5523 10 16 9.32843 16 8.5C16 7.67157 15.5523 7 15 7C14.4477 7 14 7.67157 14 8.5C14 9.32843 14.4477 10 15 10Z" fill="#112950"></path></g></svg>
                                                <b>0877 71 7575</b>
                                                <p>Tư vấn đặt hàng</p>
                                            </div>
                                                
                                        </div>
                                        
                                        <button onclick="window.location.href='{{ URL::to('/user-logout') }}'">Đăng xuất</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Desktop_big__tVnHI" style="padding: 24px">
                            <div class="Desktop_big-box__1za1L">
                                <div class="OrderDetail_wrap__rqAfx">
                                    <div class="OrderDetail_navigation__uzTER" onclick="window.location.href='{{URL::to('/orders')}}'">
                                        <svg class="cursor-point" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M8.5 5L15.5 12L8.5 19" stroke="#0F62F9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <span>Quay lại</span>
                                    </div>
                                    <div class="OrderDetail_head__UiJ0P">
                                        <p>Chi tiết đơn hàng
                                            <span>#{{$order->bill_id}}</span>
                                        </p>
                                    </div>
                                    <div class="TimeLineOrder_time-line__azbdi" >
                                        <div class="TimeLineOrder_time-box__fWsPC ">
                                            <div class="TimeLineOrder_time-scroll___56sN " style="height: auto">

                                                
                                                @if($order->bill_status == 0)
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66797 15.9993C3.66797 25.2487 6.75197 28.3327 16.0013 28.3327C25.2506 28.3327 28.3346 25.2487 28.3346 15.9993C28.3346 6.75002 25.2506 3.66602 16.0013 3.66602C6.75197 3.66602 3.66797 6.75002 3.66797 15.9993Z" fill="#5DAC46" stroke="#5DAC46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" fill="#5DAC46"></path><path d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Chờ xác nhận</h3>
                                                            <p>Đơn hàng của bạn đang đợi nhà thuốc Lan Phương xác nhận</p>
                                                        </div>
                                                    </div>
                                                @elseif($order->bill_status == 1)
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66797 15.9993C3.66797 25.2487 6.75197 28.3327 16.0013 28.3327C25.2506 28.3327 28.3346 25.2487 28.3346 15.9993C28.3346 6.75002 25.2506 3.66602 16.0013 3.66602C6.75197 3.66602 3.66797 6.75002 3.66797 15.9993Z" fill="#FEAA48"></path><path d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Đang xử lý</h3>
                                                            <p>Đơn hàng số #{{$order->bill_id}} của bạn đang được nhà thuốc Lan Phương chuẩn bị</p>
                                                        </div>
                                                    </div>
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66797 15.9993C3.66797 25.2487 6.75197 28.3327 16.0013 28.3327C25.2506 28.3327 28.3346 25.2487 28.3346 15.9993C28.3346 6.75002 25.2506 3.66602 16.0013 3.66602C6.75197 3.66602 3.66797 6.75002 3.66797 15.9993Z" fill="#5DAC46" stroke="#5DAC46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" fill="#5DAC46"></path><path d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Chờ xác nhận</h3>
                                                            <p>Đơn hàng của bạn đang đợi nhà thuốc Lan Phương xác nhận</p>
                                                        </div>
                                                    </div>
                                                @elseif($order->bill_status == 2)
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66797 15.9993C3.66797 25.2487 6.75197 28.3327 16.0013 28.3327C25.2506 28.3327 28.3346 25.2487 28.3346 15.9993C28.3346 6.75002 25.2506 3.66602 16.0013 3.66602C6.75197 3.66602 3.66797 6.75002 3.66797 15.9993Z" fill="#FEAA48"></path><path d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Đang giao</h3>
                                                            <p>Đơn hàng số #{{$order->bill_id}} của bạn đang được giao</p>
                                                        </div>
                                                    </div>
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66797 15.9993C3.66797 25.2487 6.75197 28.3327 16.0013 28.3327C25.2506 28.3327 28.3346 25.2487 28.3346 15.9993C28.3346 6.75002 25.2506 3.66602 16.0013 3.66602C6.75197 3.66602 3.66797 6.75002 3.66797 15.9993Z" fill="#FEAA48"></path><path d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Đang xử lý</h3>
                                                            <p>Đơn hàng số #{{$order->bill_id}} của bạn đang được nhà thuốc Lan Phương chuẩn bị</p>
                                                        </div>
                                                    </div>
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66797 15.9993C3.66797 25.2487 6.75197 28.3327 16.0013 28.3327C25.2506 28.3327 28.3346 25.2487 28.3346 15.9993C28.3346 6.75002 25.2506 3.66602 16.0013 3.66602C6.75197 3.66602 3.66797 6.75002 3.66797 15.9993Z" fill="#5DAC46" stroke="#5DAC46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" fill="#5DAC46"></path><path d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Chờ xác nhận</h3>
                                                            <p>Đơn hàng của bạn đang đợi nhà thuốc Lan Phương xác nhận</p>
                                                        </div>
                                                    </div>
                                                @elseif($order->bill_status == 3)
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66797 15.9993C3.66797 25.2487 6.75197 28.3327 16.0013 28.3327C25.2506 28.3327 28.3346 25.2487 28.3346 15.9993C28.3346 6.75002 25.2506 3.66602 16.0013 3.66602C6.75197 3.66602 3.66797 6.75002 3.66797 15.9993Z" fill="#5DAC46" stroke="#5DAC46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" fill="#5DAC46"></path><path d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Hoàn thành</h3>
                                                            <p>Cảm ơn bạn đã mua hàng tại nhà thuốc Lan Phương</p>
                                                        </div>
                                                    </div>
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66797 15.9993C3.66797 25.2487 6.75197 28.3327 16.0013 28.3327C25.2506 28.3327 28.3346 25.2487 28.3346 15.9993C28.3346 6.75002 25.2506 3.66602 16.0013 3.66602C6.75197 3.66602 3.66797 6.75002 3.66797 15.9993Z" fill="#FEAA48"></path><path d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Đang giao</h3>
                                                            <p>Đơn hàng số #{{$order->bill_id}} của bạn đang được giao</p>
                                                        </div>
                                                    </div>
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66797 15.9993C3.66797 25.2487 6.75197 28.3327 16.0013 28.3327C25.2506 28.3327 28.3346 25.2487 28.3346 15.9993C28.3346 6.75002 25.2506 3.66602 16.0013 3.66602C6.75197 3.66602 3.66797 6.75002 3.66797 15.9993Z" fill="#FEAA48"></path><path d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Đang xử lý</h3>
                                                            <p>Đơn hàng số #{{$order->bill_id}} của bạn đang được nhà thuốc Lan Phương chuẩn bị</p>
                                                        </div>
                                                    </div>
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66797 15.9993C3.66797 25.2487 6.75197 28.3327 16.0013 28.3327C25.2506 28.3327 28.3346 25.2487 28.3346 15.9993C28.3346 6.75002 25.2506 3.66602 16.0013 3.66602C6.75197 3.66602 3.66797 6.75002 3.66797 15.9993Z" fill="#5DAC46" stroke="#5DAC46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" fill="#5DAC46"></path><path d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Chờ xác nhận</h3>
                                                            <p>Đơn hàng của bạn đang đợi nhà thuốc Lan Phương xác nhận</p>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66638 16.0003C3.66638 25.2497 6.75038 28.3337 15.9997 28.3337C25.249 28.3337 28.333 25.2497 28.333 16.0003C28.333 6.75099 25.249 3.66699 15.9997 3.66699C6.75038 3.66699 3.66638 6.75099 3.66638 16.0003Z" fill="#F33060"></path><path d="M11.2536 15.9999L14.4189 19.1639L20.7469 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Huỷ</h3>
                                                            <p>Đơn hàng của bạn đã huỷ</p>
                                                        </div>
                                                    </div>
                                                    <div class="TimeLineOrder_time-item__Ww_li">
                                                        {{-- <div class="TimeLineOrder_time-date__dLh9X">
                                                            <span>18/07/2003</span>
                                                            <p>18:23</p>
                                                        </div> --}}
                                                        <div class="TimeLineOrder_time-check__yagGQ">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.66797 15.9993C3.66797 25.2487 6.75197 28.3327 16.0013 28.3327C25.2506 28.3327 28.3346 25.2487 28.3346 15.9993C28.3346 6.75002 25.2506 3.66602 16.0013 3.66602C6.75197 3.66602 3.66797 6.75002 3.66797 15.9993Z" fill="#5DAC46" stroke="#5DAC46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" fill="#5DAC46"></path><path d="M11.2539 15.9999L14.4192 19.1639L20.7472 12.8359" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                        </div>
                                                        <div class="TimeLineOrder_time-info__BW7R0">
                                                            <h3>Chờ xác nhận</h3>
                                                            <p>Đơn hàng của bạn đang đợi nhà thuốc Lan Phương xác nhận</p>
                                                        </div>
                                                    </div>
                                                    
                                                @endif
                                            </div>
                                        
                                            
                                            
                                        </div>
                                        <script>
                                            document.addEventListener("DOMContentLoaded", function (){
                                                const timelineContainer = document.getElementById("timelineContainer");
                                                const collapseButton = document.getElementById("collapseButton");
                                                const expandButton = document.getElementById("expandButton");
                                                function expandTimeline() {
                                                    timelineContainer.style.height = "auto";
                                                    expandButton.style.display = "none";
                                                    collapseButton.style.display = "block";
                                                }
                                                function collapseTimeline() {
                                                    timelineContainer.style.height = "150px";
                                                    expandButton.style.height = "45px";
                                                    expandButton.style.display = "block";
                                                    collapseButton.style.display = "none";
                                                }
                                                expandButton.addEventListener("click", expandTimeline);
                                                collapseButton.addEventListener("click", collapseTimeline);
                                            });
                                        </script>
                                    </div>
                                    <div class="OrderDetail_customer-info__Olb_l">
                                        <label for="" class="OrderDetail_title___xVCa">Thông tin khách hàng</label>
                                        <ul>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M7.89506 14.4409C5.43385 14.4409 3.33203 14.0579 3.33203 12.524C3.33203 10.9902 5.42052 9.57422 7.89506 9.57422C10.3563 9.57422 12.4581 10.9765 12.4581 12.5103C12.4581 14.0435 10.3696 14.4409 7.89506 14.4409Z" stroke="#8E9AAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.88971 7.4487C9.50486 7.4487 10.814 6.13961 10.814 4.52446C10.814 2.90931 9.50486 1.59961 7.88971 1.59961C6.27456 1.59961 4.96486 2.90931 4.96486 4.52446C4.95941 6.13416 6.25941 7.44325 7.8691 7.4487C7.87638 7.4487 7.88304 7.4487 7.88971 7.4487Z" stroke="#8E9AAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                <span>Tên người nhận</span>
                                                <p>{{$address->user_name}}</p>
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M5.46829 10.532C0.869638 5.93283 1.52356 3.82678 2.00833 3.14812C2.07061 3.03843 3.60562 0.740602 5.25103 2.08873C9.33518 5.45232 4.1647 4.97676 7.59423 8.40687C11.0245 11.8363 10.5489 6.66598 13.9119 10.7493C15.2601 12.3953 12.9622 13.9303 12.8532 13.9919C12.1745 14.4773 10.0677 15.1312 5.46829 10.532Z" stroke="#8E9AAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                <span>SĐT người nhận</span>
                                                <p>{{$address->user_phone}}</p>
                                            </li>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 16 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.67318 7.13966C9.67318 6.21881 8.92702 5.47266 8.00617 5.47266C7.086 5.47266 6.33984 6.21881 6.33984 7.13966C6.33984 8.05983 7.086 8.80599 8.00617 8.80599C8.92702 8.80599 9.67318 8.05983 9.67318 7.13966Z" stroke="#8E9AAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M7.99967 14C6.06766 14 3 10.6391 3 7.06576C3 4.26831 5.23807 2 7.99967 2C10.7613 2 13 4.26831 13 7.06576C13 10.6391 9.93234 14 7.99967 14Z" stroke="#8E9AAB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                <span>Địa chỉ giao hàng</span>
                                                <p>{{$address->user_address}}, {{$address->user_ward_text}}, {{$address->user_district_text}}, {{$address->user_city_text}}</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="OrderDetail_order-details__Ma_tv OrderDetail_customer-info__Olb_l">
                                        <label for="" class="OrderDetail_title___xVCa">Chi tiết đơn hàng</label>
                                        <ul>
                                            <li>
                                                <span>Mã đơn hàng</span>
                                                <p>#{{$order->bill_id}}</p>
                                            </li>
                                            <li>
                                                <span>Ngày mua hàng</span>
                                                <p>{{$order->bill_date}}</p>
                                            </li>
                                            <li>
                                                <span>Trạng thái</span>
                                                @if($order->bill_status == 0)
                                                    <b style="background-color: rgb(243, 48, 96)">Chờ xác nhận</b>
                                                @elseif($order->bill_status == 1)
                                                    <b style="background-color: rgb(243, 48, 96)">Đang xử lý</b>
                                                @elseif($order->bill_status == 2)
                                                    <b style="background-color: rgb(243, 48, 96)">Đang giao</b>
                                                @elseif($order->bill_status == 3)
                                                    <b style="background-color: rgb(243, 48, 96)">Hoàn thành</b>
                                                @else
                                                    <b style="background-color: rgb(243, 48, 96)">Huỷ</b>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="OrderDetail_purchased__2MLdf">
                                        <label for="" class="OrderDetail_title___xVCa">Sản phẩm đã mua</label>
                                        <div class="OrderDetail_purchased-box__VCIIP">
                                            @foreach($orderItems as $item)
                                            <div class="OrderDetail_purchased-item__kjCt4">
                                                <img src="/uploads/product/{{ $item->product->product_img1 }}" alt="" class="OrderDetail_purchased-photo__335Bn">
                                                <div class="OrderDetail_purchased-name__o7_nf">
                                                    <h3>{{ $item->product->product_name }}</h3>
                                                </div>
                                                <div class="OrderDetail_purchased-price__4AZJ8">
                                                    <div>
                                                        <span>{{ number_format($item->product->product_price_old) }} đ</span>
                                                        <p>{{ number_format($item->product->product_price) }} đ/
                                                            <i>{{$item->product->productUnit}}</i>
                                                        </p>
                                                    </div>
                                                    <b>x{{ $item->product_quantity }}</b>
                                                </div>
                                            </div>
                                            @endforeach

                                            

                                        </div>
                                    </div>
                                    <div class="OrderDetail_money__SepCZ">
                                        <div class="OrderDetail_money-detail__fpded">
                                            <div class="OrderDetail_money-head__mZQKl">Tổng tiền</div>
                                            <div class="OrderDetail_money-box__Q_ccK">
                                                <ul>
                                                    <li>
                                                        <span>Hàng hoá</span>
                                                        <p>
                                                            <del>190.000 đ</del>
                                                            {{number_format($order->bill_total)}} đ
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <span>Phiếu giảm giá
                                                            
                                                        </span>
                                                        <p>- {{number_format($order->bill_discount)}} đ</p>
                                                    </li>
                                                    <li>
                                                        <span>Phí vận chuyển
                                                            (Giao hàng tận nơi)
                                                        </span>
                                                        <p>{{number_format($order->bill_shipping)}} đ</p>
                                                    </li>
                                                    <li>
                                                        <span>Thành tiền
                                                            <span>(Đã bao gồm VAT)</span>
                                                        </span>
                                                        <p class="OrderDetail_money-orange__uxGIA">
                                                            {{number_format($order->bill_totalAll)}} đ
                                                        </p>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>