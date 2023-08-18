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
                                <a href="{{URL::to('/')}}">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li class="Breadcrumbs_item__e9mbT">
                                <a href="{{URL::to('/account')}}">
                                    <span>Trang cá nhân</span>
                                </a>
                            </li>
                            <li class="Breadcrumbs_item__e9mbT Breadcrumbs_item-active__3fOia">
                                <a href="">
                                    <span>Đổi mật khẩu</span>
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
                                    @if($user->user_avatar)
                                        <div class="AccountMenu_avatar__kjhzy">
                                            <figure>
                                                <img src="/uploads/user/{{$user->user_avatar}}" alt="" width="100%">
                                            </figure>
                                        </div>
                                    @else
                                        <div class="AccountMenu_avatar__kjhzy">K</div>
                                    @endif
                                    <div class="AccountMenu_name__38VUE">
                                        <h3>{{ $user->user_name }}</h3>
                                    </div>
                                    <div class="Ranking_ranking-wrapper__a1RJe"></div>
                                </div>
                                <div class="AccountMenu_box__DisFh">
                                    <ul>
                                        <a href="{{URL::to('/orders')}}">
                                            <li>
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
                                            <li class="AccountMenu_active__P8X_O">
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
                                            <li>
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
                            <div class="CommonHeaderMobile_fixed-header-mobile-wrapper__9H2nW common-header-profile">
                                <div class="CommonHeaderMobile_common-header-mobile__WPYuo">
                                    <div class="container d-flex justify-content-between align-items-center">
                                        <div class="CommonHeaderMobile_left-content__tD7mq">
                                            <button class="Button_button__yfvRh CommonHeaderMobile_btn-back__oOYHL" onclick="window.location.href='{{URL::to('/account')}}'">
                                                <svg stroke="black" width="10" height="16" viewBox="0 0 10 16" fill="none"><path d="M8.5 15L1.5 8L8.5 1" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </button>
                                            <h1>Đổi mật khẩu</h1>
                                        </div>
                                        <div class="CommonHeaderMobile_group-cart__LnPfk"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <form action="{{URL::to('/new-change-password/'.$user->user_id)}}" method="POST" class="ChangePassword_change-password__OCi4k" >
                                    @csrf
                                    <div class="InputTextField_input-text-field__Yvohj">
                                        <input type="hidden" value="{{$user->user_id}}" name="user_id_change">
                                        <label for="">Mật khẩu hiện tại
                                            <span>*</span>
                                        </label>
                                        <div class="InputTextField_input-group__Cyzv4">
                                            <span class="InputTextField_icon-left__HBgoK">
                                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none"><path d="M11.7239 6.83548V5.04464C11.698 2.94548 9.97471 1.26548 7.87638 1.29131C5.82055 1.31714 4.15805 2.97214 4.12305 5.02798V6.83548" stroke="#8894A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.92448 10.7969V12.6477" stroke="#8894A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92435 6.35352C3.13685 6.35352 1.54102 7.66018 1.54102 11.5793C1.54102 15.4993 3.13685 16.806 7.92435 16.806C12.7118 16.806 14.3085 15.4993 14.3085 11.5793C14.3085 7.66018 12.7118 6.35352 7.92435 6.35352Z" stroke="#8894A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </span>
                                            <input name="user_password_account" type="password" placeholder="Nhập mật khẩu hiện tại" class="InputTextField_has-icon-left__2_VWZ InputTextField_has-icon-right__73PvG" value="" >
                                            <span id="hidepass" class="InputTextField_icon-right__5zgn0 InputTextField_pointer__IoUxi">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M12.1083 7.89172L7.8916 12.1084C7.34994 11.5667 7.0166 10.8251 7.0166 10.0001C7.0166 8.35006 8.34993 7.01672 9.99993 7.01672C10.8249 7.01672 11.5666 7.35006 12.1083 7.89172Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.8501 4.80828C13.3918 3.70828 11.7251 3.10828 10.0001 3.10828C7.05845 3.10828 4.31678 4.84161 2.40845 7.84161C1.65845 9.01661 1.65845 10.9916 2.40845 12.1666C3.06678 13.1999 3.83345 14.0916 4.66678 14.8083" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.0166 16.2749C7.9666 16.6749 8.97493 16.8916 9.99993 16.8916C12.9416 16.8916 15.6833 15.1583 17.5916 12.1583C18.3416 10.9833 18.3416 9.00828 17.5916 7.83328C17.3166 7.39994 17.0166 6.99161 16.7083 6.60828" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.925 10.5834C12.7083 11.7584 11.75 12.7167 10.575 12.9334" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.89175 12.1083L1.66675 18.3333" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.3334 1.66663L12.1084 7.89163" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                
                                            </span>
                                            <span id="showpass" class="InputTextField_icon-right__5zgn0 InputTextField_pointer__IoUxi" style="display:none">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M12.9833 10.0001C12.9833 11.6501 11.6499 12.9834 9.99993 12.9834C8.34993 12.9834 7.0166 11.6501 7.0166 10.0001C7.0166 8.35006 8.34993 7.01672 9.99993 7.01672C11.6499 7.01672 12.9833 8.35006 12.9833 10.0001Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.0001 16.8916C12.9418 16.8916 15.6834 15.1583 17.5918 12.1583C18.3418 10.9833 18.3418 9.00831 17.5918 7.83331C15.6834 4.83331 12.9418 3.09998 10.0001 3.09998C7.05845 3.09998 4.31678 4.83331 2.40845 7.83331C1.65845 9.00831 1.65845 10.9833 2.40845 12.1583C4.31678 15.1583 7.05845 16.8916 10.0001 16.8916Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </span>
                                            <script>
                                                var showPass = document.getElementById('showpass');
                                                var hidePass = document.getElementById('hidepass');
                                                var inputPass = document.querySelector('input[name="user_password_account"]');
                                                showPass.addEventListener('click', function () {
                                                    inputPass.type = 'password';
                                                    showPass.style.display = 'none';
                                                    hidePass.style.display = 'block';
                                                })
                                                hidePass.addEventListener('click', function () {
                                                    inputPass.type = 'text';
                                                    showPass.style.display = 'block';
                                                    hidePass.style.display = 'none';
                                                })
                                            </script>
                                            
                                        </div>
                                        @if(Session::has('error'))
                                            <div id="checkpass_V" class="InputTextField_feedback__5PBft">{{Session::get('error')}}</div>
                                        @endif
                                    </div>
                                    <div class="InputTextField_input-text-field__Yvohj">
                                        <label for="">Mật khẩu mới
                                            <span>*</span>
                                        </label>
                                        <div class="InputTextField_input-group__Cyzv4">
                                            <span class="InputTextField_icon-left__HBgoK">
                                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none"><path d="M11.7239 6.83548V5.04464C11.698 2.94548 9.97471 1.26548 7.87638 1.29131C5.82055 1.31714 4.15805 2.97214 4.12305 5.02798V6.83548" stroke="#8894A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.92448 10.7969V12.6477" stroke="#8894A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92435 6.35352C3.13685 6.35352 1.54102 7.66018 1.54102 11.5793C1.54102 15.4993 3.13685 16.806 7.92435 16.806C12.7118 16.806 14.3085 15.4993 14.3085 11.5793C14.3085 7.66018 12.7118 6.35352 7.92435 6.35352Z" stroke="#8894A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </span>
                                            <input name="user_password_account_2" type="password" placeholder="Nhập mật khẩu mới" class="InputTextField_has-icon-left__2_VWZ InputTextField_has-icon-right__73PvG" value="">
                                            <span id="hidepass2" class="InputTextField_icon-right__5zgn0 InputTextField_pointer__IoUxi">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M12.1083 7.89172L7.8916 12.1084C7.34994 11.5667 7.0166 10.8251 7.0166 10.0001C7.0166 8.35006 8.34993 7.01672 9.99993 7.01672C10.8249 7.01672 11.5666 7.35006 12.1083 7.89172Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.8501 4.80828C13.3918 3.70828 11.7251 3.10828 10.0001 3.10828C7.05845 3.10828 4.31678 4.84161 2.40845 7.84161C1.65845 9.01661 1.65845 10.9916 2.40845 12.1666C3.06678 13.1999 3.83345 14.0916 4.66678 14.8083" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.0166 16.2749C7.9666 16.6749 8.97493 16.8916 9.99993 16.8916C12.9416 16.8916 15.6833 15.1583 17.5916 12.1583C18.3416 10.9833 18.3416 9.00828 17.5916 7.83328C17.3166 7.39994 17.0166 6.99161 16.7083 6.60828" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.925 10.5834C12.7083 11.7584 11.75 12.7167 10.575 12.9334" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.89175 12.1083L1.66675 18.3333" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.3334 1.66663L12.1084 7.89163" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                
                                            </span>
                                            <span id="showpass2" class="InputTextField_icon-right__5zgn0 InputTextField_pointer__IoUxi" style="display:none">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M12.9833 10.0001C12.9833 11.6501 11.6499 12.9834 9.99993 12.9834C8.34993 12.9834 7.0166 11.6501 7.0166 10.0001C7.0166 8.35006 8.34993 7.01672 9.99993 7.01672C11.6499 7.01672 12.9833 8.35006 12.9833 10.0001Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.0001 16.8916C12.9418 16.8916 15.6834 15.1583 17.5918 12.1583C18.3418 10.9833 18.3418 9.00831 17.5918 7.83331C15.6834 4.83331 12.9418 3.09998 10.0001 3.09998C7.05845 3.09998 4.31678 4.83331 2.40845 7.83331C1.65845 9.00831 1.65845 10.9833 2.40845 12.1583C4.31678 15.1583 7.05845 16.8916 10.0001 16.8916Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </span>
                                            
                                        </div>
                                        @if(Session::has('error2'))
                                            <div id="checkpass_V" class="InputTextField_feedback__5PBft">{{Session::get('error2')}}</div>
                                        @endif
                                    </div>
                                    <div class="InputTextField_input-text-field__Yvohj">
                                        <label for="">Nhập lại mật khẩu mới
                                            <span>*</span>
                                        </label>
                                        <div class="InputTextField_input-group__Cyzv4">
                                            <span class="InputTextField_icon-left__HBgoK">
                                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none"><path d="M11.7239 6.83548V5.04464C11.698 2.94548 9.97471 1.26548 7.87638 1.29131C5.82055 1.31714 4.15805 2.97214 4.12305 5.02798V6.83548" stroke="#8894A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.92448 10.7969V12.6477" stroke="#8894A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M7.92435 6.35352C3.13685 6.35352 1.54102 7.66018 1.54102 11.5793C1.54102 15.4993 3.13685 16.806 7.92435 16.806C12.7118 16.806 14.3085 15.4993 14.3085 11.5793C14.3085 7.66018 12.7118 6.35352 7.92435 6.35352Z" stroke="#8894A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </span>
                                            <input name="user_password_account_3" type="password" placeholder="Nhập lại mật khẩu mới" class="InputTextField_has-icon-left__2_VWZ InputTextField_has-icon-right__73PvG" value="">
                                            <span id="hidepass3" class="InputTextField_icon-right__5zgn0 InputTextField_pointer__IoUxi">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M12.1083 7.89172L7.8916 12.1084C7.34994 11.5667 7.0166 10.8251 7.0166 10.0001C7.0166 8.35006 8.34993 7.01672 9.99993 7.01672C10.8249 7.01672 11.5666 7.35006 12.1083 7.89172Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.8501 4.80828C13.3918 3.70828 11.7251 3.10828 10.0001 3.10828C7.05845 3.10828 4.31678 4.84161 2.40845 7.84161C1.65845 9.01661 1.65845 10.9916 2.40845 12.1666C3.06678 13.1999 3.83345 14.0916 4.66678 14.8083" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.0166 16.2749C7.9666 16.6749 8.97493 16.8916 9.99993 16.8916C12.9416 16.8916 15.6833 15.1583 17.5916 12.1583C18.3416 10.9833 18.3416 9.00828 17.5916 7.83328C17.3166 7.39994 17.0166 6.99161 16.7083 6.60828" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.925 10.5834C12.7083 11.7584 11.75 12.7167 10.575 12.9334" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.89175 12.1083L1.66675 18.3333" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.3334 1.66663L12.1084 7.89163" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                
                                            </span>
                                            <span id="showpass3" class="InputTextField_icon-right__5zgn0 InputTextField_pointer__IoUxi" style="display:none">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M12.9833 10.0001C12.9833 11.6501 11.6499 12.9834 9.99993 12.9834C8.34993 12.9834 7.0166 11.6501 7.0166 10.0001C7.0166 8.35006 8.34993 7.01672 9.99993 7.01672C11.6499 7.01672 12.9833 8.35006 12.9833 10.0001Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.0001 16.8916C12.9418 16.8916 15.6834 15.1583 17.5918 12.1583C18.3418 10.9833 18.3418 9.00831 17.5918 7.83331C15.6834 4.83331 12.9418 3.09998 10.0001 3.09998C7.05845 3.09998 4.31678 4.83331 2.40845 7.83331C1.65845 9.00831 1.65845 10.9833 2.40845 12.1583C4.31678 15.1583 7.05845 16.8916 10.0001 16.8916Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </span>
                                            <script>
                                                var showPass3 = document.getElementById('showpass3');
                                                var hidePass3 = document.getElementById('hidepass3');
                                                var inputPass3 = document.querySelector('input[name="user_password_account_3"]');
                                                showPass3.addEventListener('click', function () {
                                                    inputPass3.type = 'password';
                                                    showPass3.style.display = 'none';
                                                    hidePass3.style.display = 'block';
                                                })
                                                hidePass3.addEventListener('click', function () {
                                                    inputPass3.type = 'text';
                                                    showPass3.style.display = 'block';
                                                    hidePass3.style.display = 'none';
                                                })
                                            </script>
                                        </div>
                                        @if(Session::has('error3'))
                                            <div id="checkpass_V" class="InputTextField_feedback__5PBft">{{Session::get('error3')}}</div>
                                        @endif
                                    </div>
                                    
                                    
                                    <input type="submit" class="Button_button__yfvRh Button_button__primary__iFLao ChangePassword_btn-login__GkREK" value="Xác nhận">
                                    <br>
                                    @if(Session::has('success'))
                                    <div class="CreatePasswordCard_createPasswordCardWrapper__oHXNJ">
                                        <div class="CreatePasswordCard_content__LQLEP " >{{Session::get('success')}}</div>
                                    </div>
                                    @endif
                                    
                                </form>
                                <script>
                                    function validateChangePassword(event){
                                        
                                        var user_password_account_V = document.querySelector('input[name="user_password_account"]').value;
                                        var user_password_account_2V = document.querySelector('input[name="user_password_account_2"]').value;
                                        var user_password_account_3V = document.querySelector('input[name="user_password_account_3"]').value;
                                        var checkpass_V = document.querySelector('.checkpass_V');
                                        var specialCharRegex_V = /[!@#$%^&*(),.?":{}|<>]/;
                                        
                                        if(user_password_account_V === ''){
                                            checkpass_V.textContent = 'Thông tin này là bắt buộc. Vui lòng nhập đầy đủ.';
                                            checkpass_V.style.display = 'block';
                                            return false;
                                        } else{
                                            checkpass_V.style.display = 'none';
                                        }
                                        return true;

                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>