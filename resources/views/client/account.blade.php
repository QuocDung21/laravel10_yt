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
   
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    {{-- <script>
        $(document).ready(function(){
            $('#saveAccount').click(function(){
                var id = $(this).data('id');
                var user_id = $('.user_id_' + id).val();
                var user_name = $('.user_name_' +id ).val();
                var user_phone = $('.user_phone_' + id).val();
                var user_email = $('.user_email_' + id).val();
                var user_avatar = $('.user_avatar_' + id).val();
                var user_sex = $('.user_sex_' + id).val();
                var user_bithday = $('.user_bithday_' + id).val();
                var _token = $('input[name = "_token"]').val();
                $.ajax({
                    url: '/saveaccount',
                    method: 'POST',
                    data: {
                        user_id: user_id,
                        user_name: user_name,
                        user_phone: user_phone,
                        user_email: user_email,
                        user_avatar: user_avatar,
                        user_sex: user_sex,
                        user_bithday: user_bithday,
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
                });

            })
        });
    </script> --}}
    
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
                                <a href="">
                                    <span>Trang cá nhân</span>
                                </a>
                            </li>
                            <li class="Breadcrumbs_item__e9mbT Breadcrumbs_item-active__3fOia">
                                <a href="">
                                    <span>Chỉnh sửa thông tin cá nhân</span>
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
                                        <a href="">
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
                                            <h1>Chỉnh sửa thông tin cá nhân</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Desktop_big-box__1za1L">
                                <div class="AccountDetails_profile__FGo6h">
                                    <div class="AccountDetails_info__l9t6_">
                                        <div class="AccountDetails_avatar__EU49H">
                                            <div class="AccountDetails_photo-upload__IqaRG">
                                                <input value="" type="file" style="display: none" id="fileInput">
                                                <figure>
                                                    @if($user->user_avatar)
                                                        <img width="100%" id="selectedImage" src="/uploads/user/{{$user->user_avatar}}" alt="Selected Image">
                                                    @else
                                                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none"><path d="M22.0006 7.33398C21.5144 7.33398 21.0481 7.52714 20.7043 7.87096C20.3605 8.21477 20.1673 8.68109 20.1673 9.16732V20.1673H9.16732C8.68109 20.1673 8.21477 20.3605 7.87096 20.7043C7.52714 21.0481 7.33398 21.5144 7.33398 22.0006C7.33398 22.4869 7.52714 22.9532 7.87096 23.297C8.21477 23.6408 8.68109 23.834 9.16732 23.834H20.1673V34.834C20.1673 35.3202 20.3605 35.7865 20.7043 36.1303C21.0481 36.4742 21.5144 36.6673 22.0006 36.6673C22.4869 36.6673 22.9532 36.4742 23.297 36.1303C23.6408 35.7865 23.834 35.3202 23.834 34.834V23.834H34.834C35.3202 23.834 35.7865 23.6408 36.1303 23.297C36.4742 22.9532 36.6673 22.4869 36.6673 22.0006C36.6673 21.5144 36.4742 21.0481 36.1303 20.7043C35.7865 20.3605 35.3202 20.1673 34.834 20.1673H23.834V9.16732C23.834 8.68109 23.6408 8.21477 23.297 7.87096C22.9532 7.52714 22.4869 7.33398 22.0006 7.33398Z" fill="#8E9AAB"></path></svg>
                                                    @endif
                                                </figure>
                                                <button onclick="openFileInput()">Bấm để cập nhật ảnh mới</button>
                                            </div>
                                            
                                            <script>
                                                function openFileInput(){
                                                    const fileInput = document.getElementById('fileInput');
                                                    fileInput.click();
                                                }
                                                function handleFileSelect(event) {
                                                    const selectedImage = document.getElementById('selectedImage');
                                                    const file = event.target.files[0];

                                                    if (file) {
                                                        // Display the selected image
                                                        const reader = new FileReader();

                                                        reader.onload = function (e) {
                                                            selectedImage.setAttribute('src', e.target.result);
                                                        };

                                                        reader.readAsDataURL(file);
                                                        uploadImage(file);

                                                    }
                                                }
                                                function uploadImage(imageFile) {
                                                    const formData = new FormData();
                                                    formData.append('image', imageFile);

                                                    fetch('{{ route('upload-image') }}', {
                                                        method: 'POST',
                                                        body: formData,
                                                        headers: {
                                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                        }
                                                    })
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        // Handle the response (optional)
                                                        console.log(data.message);
                                                    })
                                                    .catch(error => {
                                                        // Handle errors (optional)
                                                        console.error('Error uploading image:', error);
                                                    });
                                                }
                                                const fileInput = document.getElementById('fileInput');
                                                fileInput.addEventListener('change', handleFileSelect);
                                            </script>
                                        </div>
                                    </div>
                                    <div class="AccountDetails_detail__6Y4TV">
                                        <form action="{{URL::to('/saveaccount')}}"  method="POST" class="AccountDetails_form__CupXc">
                                            @csrf
                                            
                                            <input type="hidden" name="user_id" value="{{ Session::get('user_id') }}">
                                            <div>
                                                <div class="InputTextField_input-text-field__Yvohj">
                                                    <label for="">Họ và tên
                                                        <span>*</span>
                                                    </label>
                                                    <div class="InputTextField_input-group__Cyzv4">
                                                        <input name="user_name" type="text" value="{{ $user->user_name }}" placeholder="Vui lòng nhập họ tên">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="AccountDetails_gender__lTEoz">
                                                <label for="">Giới tính</label>
                                                <input type="hidden" name="user_sex" value="">
                                                <div class="d-flex">
                                                    <div class="RadioButtonField_pc-radio-button__itHcm @if($user->user_sex == 0) RadioButtonField_checked__Zmmf2 @endif" onclick="updateGenderSelection(0)">
                                                        <label for="" class="RadioButtonField_container__ANwcN">
                                                            <span class="RadioButtonField_checkmark__lwaJp"></span>
                                                            <div>Nam</div>
                                                            <input type="radio" name="gender" value="0" onclick="updateHiddenFieldValue(this)">
                                                        </label>
                                                    </div>
                                                    <div class="RadioButtonField_pc-radio-button__itHcm @if($user->user_sex == 1) RadioButtonField_checked__Zmmf2 @endif" onclick="updateGenderSelection(1)">
                                                        <label for="" class="RadioButtonField_container__ANwcN">
                                                            <span class="RadioButtonField_checkmark__lwaJp"></span>
                                                            <div>Nữ</div>
                                                            <input type="radio" name="gender" value="1" onclick="updateHiddenFieldValue(this)">
                                                        </label>
                                                    </div>
                                                    <div class="RadioButtonField_pc-radio-button__itHcm @if($user->user_sex == 2) RadioButtonField_checked__Zmmf2 @endif" onclick="updateGenderSelection(2)">
                                                        <label for="" class="RadioButtonField_container__ANwcN">
                                                            <span class="RadioButtonField_checkmark__lwaJp"></span>
                                                            <div>Khác</div>
                                                            <input type="radio" name="gender" value="2" onclick="updateHiddenFieldValue(this)">
                                                        </label>
                                                    </div>
                                                </div>
                                                <script>
                                                    
                                                    function updateHiddenFieldValue(selectedRadio) {
                                                        // Get the selected value and update the hidden input field
                                                        const hiddenInput = document.querySelector('input[name="user_sex"]');
                                                        hiddenInput.value = selectedRadio.value;
                                                    }
                                                    function updateGenderSelection(selectedValue) {
                                                        // Get all the gender divs
                                                        const genderDivs = document.querySelectorAll('.RadioButtonField_pc-radio-button__itHcm');

                                                        // Loop through the divs to find the selected one
                                                        genderDivs.forEach((div, index) => {
                                                            if (index === selectedValue) {
                                                                div.classList.add('RadioButtonField_checked__Zmmf2');
                                                            } else {
                                                                div.classList.remove('RadioButtonField_checked__Zmmf2');
                                                            }
                                                        });

                                                        // Update the hidden input field
                                                        const hiddenInput = document.getElementById('user_sex');
                                                        hiddenInput.value = selectedValue;
                                                    }
                                                    
                                                </script>
                                            </div>
                                            <div class="DateField_date-field__RbdnW AccountDetails_birthday__2wGGM">
                                                <label for="">Ngày tháng năm sinh
                                                    <span>*</span>
                                                </label>
                                                <div class="DateField_group__wqSan">
                                                    <div class="react-date-picker react-date-picker--closed react-date-picker--enabled">
                                                        <input name="user_bithday" type="date" id="date-input" value="{{ $user->user_bithday }}">
                                                    </div>
                                                    <span class="DateField_icon-right__Ibunt" style="cursor: pointer">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.29102 10.6463C2.29102 4.84964 4.22352 2.91797 10.0193 2.91797C15.816 2.91797 17.7485 4.84964 17.7485 10.6463C17.7485 16.443 15.816 18.3746 10.0193 18.3746C4.22352 18.3746 2.29102 16.443 2.29102 10.6463Z" stroke="#112950" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.52148 7.77018H17.5282" stroke="#112950" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.6903 11.0514H13.6978" stroke="#112950" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.0242 11.0514H10.0317" stroke="#112950" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.35042 11.0514H6.35792" stroke="#112950" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.6903 14.2624H13.6978" stroke="#112950" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.0242 14.2624H10.0317" stroke="#112950" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.35042 14.2624H6.35792" stroke="#112950" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.36 1.70898V4.42732" stroke="#112950" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.6862 1.70898V4.42732" stroke="#112950" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                    </span>
                                                </div>
                                                <script>
                                                    document.querySelector('.DateField_icon-right__Ibunt').addEventListener('click', function() {
                                                        document.querySelector('#date-input').focus();
                                                    });

                                                </script>
                                            </div>
                                            <div class="InputTextField_input-text-field__Yvohj">
                                                <label for="">Số điện thoại</label>
                                                <div class="InputTextField_input-group__Cyzv4">
                                                    <input name="user_phone" type="text" value="{{ Session::get('user_phone') }}">
                                                </div>
                                            </div>
                                            <div class="AccountDetails_email__reTYC">
                                                <div class="InputTextField_input-text-field__Yvohj">
                                                    <label for="">Email
                                                        <span>*</span>
                                                    </label>
                                                    <div class="InputTextField_input-group__Cyzv4">
                                                        <input name="user_email" type="text" value="{{ $user->user_email }}">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <span class="AccountDetails_btn-change-pass__0J5mE" onclick="window.location.href='{{URL::to('/change-password')}}'">
                                                Đổi mật khẩu
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M8.5 5L15.5 12L8.5 19" stroke="#0F62F9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </span>
                                            <button type="submit" class="Button_button__yfvRh Button_button__primary__iFLao Button_button__disabled__Q4EiE AccountDetails_submit__dVI6m">
                                                Lưu
                                            </button>
                                        </form>
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