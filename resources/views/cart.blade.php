<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
<style>
    .MainLayout_main-layout__riclp .MainLayout_content__hCocE {
        flex-grow: 1;
    }
    .Cart_cart-page__kClbp {
        letter-spacing: 0;
        background-color: #f0f2f5;
    }
    .Breadcrumbs_breadcrumbs__04vpL {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 1rem 0;
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item__e9mbT {
        display: flex;
        align-items: center;
        color: #112950;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
        opacity: .3;
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item__e9mbT a {
        color: #112950;
        text-decoration: none!important;
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item__e9mbT+.Breadcrumbs_item__e9mbT {
        padding-left: 0.5rem;
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item-active__3fOia {
        opacity: 1!important;
        font-weight: 500;
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item__e9mbT {
        display: flex;
        align-items: center;
        color: #112950;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
        opacity: .3;
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item__e9mbT a {
        color: #112950;
        text-decoration: none!important;
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item__e9mbT+.Breadcrumbs_item__e9mbT:before {
        float: left;
        margin-bottom: 7px;
        padding-right: 0.5rem;
        content: url(https://www.pharmacity.vn/icons/breadcrumb-dot.svg);
    }
    .Cart_cart-page__kClbp .Cart_content__gK7Nu {
        padding-bottom: 16px;
    }
    .Cart_cart-page__kClbp .Cart_content__gK7Nu .Cart_box__FKQ6C {
        align-items: flex-start;
    }
    .justify-content-between {
        justify-content: space-between!important;
    }
    .d-flex {
        display: flex!important;
    }
    .CartList_cart-list-container__3Ph23 {
        width: 67%;
    }
    .TotalCart_total-cart-container__zIAY9 {
        width: 31%;
        position: sticky;
        top: 156px;
    }
    .CartList_cart-list__yYyqP {
        padding: 24px;
        box-sizing: border-box;
        border-radius: 12px;
        background-color: #fff;
    }
    .CartList_header__uYc74 {
        align-items: center;
    }
    .justify-content-between {
        justify-content: space-between!important;
    }
    .CartList_header__uYc74 .CartList_title__2MGsm {
        font-size: 20px;
        font-weight: 700;
        line-height: 32px;
        color: #112950;
    }
    .CartList_header__uYc74 .CartList_title__2MGsm>svg {
        display: none;
        display: inline-block;
        width: 10px;
        height: 16px;
    }
    .CartList_header__uYc74 .CartList_btn-delete-cart__QOMVr {
        font-size: .875rem;
        font-weight: 400;
        line-height: 20px;
        color: #0065ff;
        cursor: pointer;
    }
    .Cart_cart-page__kClbp a {
        color: #000;
        color: initial;
        text-decoration: none;
    }
    .CartList_cart-list__yYyqP .CartList_content__uSLn0 table {
        width: 100%;
        border-spacing: 0;
    }
    @media screen and (min-width: 1200px){
        .CartList_cart-list__yYyqP .CartList_content__uSLn0 table thead {
            display: table-header-group;
        }
        .CartList_cart-list__yYyqP .CartList_content__uSLn0 table thead th.CartList_product__0438x {
            text-align: left;
        }
        .CartList_cart-list__yYyqP .CartList_content__uSLn0 table thead th {
            padding: 14px 0;
            border-bottom: 1px solid #d6dce8;
            font-weight: 500;
        }
        .CartList_cart-list__yYyqP .CartList_content__uSLn0 table thead th {
            padding: 14px 0;
            border-bottom: 1px solid #d6dce8;
            font-weight: 500;
        }

    }
    .CartItem_cart-item__oeS59 td:first-child {
        padding-left: 0;
    }
    .CartItem_cart-item__oeS59 td {
        padding: 20px 8px;
    }
    .CartItem_cart-item__oeS59 .CartItem_product-col__5yb6n {
        align-items: center;
        width: 40%;
    }
    .CartItem_cart-item__oeS59 .CartItem_product-col__5yb6n a {
        display: flex;
        align-items: center;
        gap: 16px;
    }
    .Cart_cart-page__kClbp a {
        color: #000;
        color: initial;
        text-decoration: none;
    }
    .CartItem_cart-item__oeS59 .CartItem_product-col__5yb6n figure {
        width: 72px;
        margin: 0;
    }
    .CartItem_cart-item__oeS59 .CartItem_product-col__5yb6n h3 {
        width: calc(100% - 88px);
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
        letter-spacing: 0;
        margin: 0;
    }
    .CartItem_cart-item__oeS59 .CartItem_price-col___nuBR {
        text-align: center;
    }
    .CartItem_cart-item__oeS59 td {
        padding: 20px 8px;
    }
    .Cart_cart-page__kClbp p {
        margin: 0;
    }
    .CartItem_cart-item__oeS59 .CartItem_price-old__4bbv8 {
        font-size: 12px;
        font-weight: 400;
        line-height: 18px;
        color: #8e9aab;
    }
    .CartItem_cart-item__oeS59 .CartItem_price-current__qT_vp {
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        color: #0065ff;
    }
    .CartItem_cart-item__oeS59 .CartItem_quantity-col__f1SqD {
        width: 0;
    }
    .CartItem_cart-item__oeS59 .CartItem_quantity-col__f1SqD .CartItem_quantity-input__5mxnE {
        padding: 0;
        border: none;
        width: unset;
    }
    .Quantity_quantity__fVK1i {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 110px;
        border: 1px solid #e5e5e5;
        border-radius: 3px;
        padding: 5px;
    }
    .CartItem_cart-item__oeS59 .CartItem_quantity-col__f1SqD .CartItem_quantity-input__5mxnE input {
        width: 35px;
        border: 1px solid #e5e5e5;
        border-right: none;
        border-left: none;
        text-align: center;
        background-color: transparent;
        color: #000;
        font-weight: 400;
        font-size: 15px;
        line-height: 18px;
        height: auto;
        border-radius: 0;
        height: 30px;
        padding: 0;
        box-sizing: border-box;
    }
    .Quantity_quantity__fVK1i input {
        border: none;
        width: 28px;
        text-align: center;
        background: #0065ff;
        color: #fff;
        height: 24px;
        font-size: 12px;
        border-radius: 5px;
    }
    .Quantity_quantity__fVK1i button {
        border: 0;
        background-color: transparent;
        color: #112950;
        cursor: pointer;
        font-size: 22px;
        width: 24px;
        padding: 0;
        text-align: center;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .Cart_cart-page__kClbp button {
        font-family: inherit;
        cursor: pointer;
        border: none;
    }
    .CartItem_cart-item__oeS59 .CartItem_quantity-col__f1SqD .CartItem_quantity-input__5mxnE button {
        border: 1px solid #e5e5e5;
        width: 35px;
        height: 30px;
        color: #0f62f9;
    }
    .CartItem_cart-item__oeS59 .CartItem_quantity-col__f1SqD .CartItem_quantity-input__5mxnE button:first-child {
        border-radius: 4px 0 0 4px;
    }
    .CartItem_cart-item__oeS59 .CartItem_quantity-col__f1SqD .CartItem_quantity-input__5mxnE button:last-child {
        border-radius: 0 4px 4px 0;
    }
    .CartItem_cart-item__oeS59 .CartItem_total-price-col__2edyM {
        font-weight: 400;
        font-size: 16px;
        line-height: 18px;
        color: #0065ff;
        text-align: center;
        width: 160px;
    }
    .CartItem_cart-item__oeS59 td:last-child {
        padding-right: 0;
    }
    .CartItem_cart-item__oeS59 .CartItem_action__BM8qk {
        width: 0;
    }
    .CartItem_cart-item__oeS59 td {
        padding: 20px 8px;
    }
    .CartItem_cart-item__oeS59 .CartItem_action__BM8qk button {
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        align-items: center;
        padding: 0;
        background-color: transparent;
    }
    .TotalCart_total-cart-container__zIAY9 {
        width: 31%;
        position: sticky;
        top: 156px;
    }
    .TotalCart_total-cart__mIMtg {
        border-radius: 12px;
        padding: 24px;
        box-sizing: border-box;
        background-color: #fff;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_header__ufGnv {
        font-size: 20px;
        font-weight: 700;
        line-height: 32px;
        color: #112950;
        margin-bottom: 22px;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_content__AMkpM .TotalCart_item__a1Lt_ {
        display: flex;
        justify-content: space-between;
        margin-bottom: 18px;
    }
    .Cart_cart-page__kClbp p {
        margin: 0;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_content__AMkpM .TotalCart_item__a1Lt_ p b {
        font-size: 17px;
        font-weight: 700;
        line-height: 22px;
        color: #0f62f9;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_footer__ysUJW {
        position: relative;
        flex-wrap: wrap;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_footer__ysUJW button.TotalCart_btn-order-more__sjocf {
        color: #0f62f9;
        background-color: #f2f6fe;
        max-width: 135px;
        border: 1px solid #0f62f9;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_footer__ysUJW button {
        padding: 4px;
        border-radius: 12px;
        width: 100%;
        min-height: 54px;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_footer__ysUJW button p b {
        font-size: 14px;
        font-weight: 700;
        line-height: 15px;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_footer__ysUJW button.TotalCart_btn-continue-order__pNESu, .TotalCart_total-cart__mIMtg .TotalCart_footer__ysUJW button.TotalCart_btn-start-checkout___8Dt7 {
        color: #fff;
        background-color: #feaa48;
        flex: 1 1;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_footer__ysUJW button:not(:first-child) {
        margin-left: 12px;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_footer__ysUJW button.TotalCart_btn-continue-order__pNESu p b, .TotalCart_total-cart__mIMtg .TotalCart_footer__ysUJW button.TotalCart_btn-start-checkout___8Dt7 p b {
        font-size: 17px;
        line-height: 22px;
        margin-right: 5px;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_footer__ysUJW button p svg {
        vertical-align: middle;
    }
    .TotalCart_total-cart__mIMtg .TotalCart_footer__ysUJW button span {
        font-size: 9px;
        font-weight: 200;
        line-height: 13px;
        display: block;
        margin: 0 auto;
        text-align: center;
    }
    .CartList_cart-list-container__3Ph23 .CartList_promotion-hint__F3h62 {
        padding: 8px 24px;
        font-size: 14px;
        line-height: 18px;
        color: #f33060;
    }
    @media screen and (min-width: 1200px){
        .CartList_cart-list-container__3Ph23 .CartList_promotion-hint__F3h62 {
            padding: 0;
            margin-top: 12px;
        }
    }


</style>




</head>
<body style="background-color: #f0f2f5">
    @include('partial.header')
    
    <div class="MainLayout_content__hCocE">
        <div class="Cart_cart-page__kClbp" style="margin-right: 3rem; margin-left:3rem">
            <div class="">
                <nav>
                    <ol class="Breadcrumbs_breadcrumbs__04vpL">
                        <li class="Breadcrumbs_item__e9mbT">
                            <a href="{{URL::to('/')}}">
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        <li class="Breadcrumbs_item__e9mbT Breadcrumbs_item-active__3fOia">
                            <a href="">
                                <span>Giỏ hàng</span>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="Cart_content__gK7Nu ">
                <div class="Cart_box__FKQ6C d-flex justify-content-between">
                    <div class="CartList_cart-list-container__3Ph23">
                        <div class="CartList_cart-list__yYyqP">
                            <div class="CartList_header__uYc74 d-flex justify-content-between">
                                <span class="CartList_title__2MGsm">
                                    <svg width="10" height="16" stroke="#112950" viewBox="0 0 10 16" fill="none" style="margin-right: 1rem;"><path d="M8.5 15L1.5 8L8.5 1" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    Giỏ hàng
                                </span>
                                <a href="{{URL::to('/delete-all-cart')}}" class="CartList_btn-delete-cart__QOMVr">
                                    <span>Xoá tất cả giỏ hàng</span>
                                </a>
                            </div>
                            {{-- @php
                                echo '<pre>';
                                print_r(Session::get('cart'));
                                echo '</pre>';
                            @endphp --}}
                            <div class="CartList_content__uSLn0">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="CartList_product__0438x">Sản phẩm</th>
                                            <th>Đơn giá</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <form id="updateCartForm" action="{{URL::to('/update-item-product')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @php
                                            $total = 0;
                                        @endphp
                                    
                                        <table>
                                            <tbody>
                                                @if(Session::has('cart'))
                                                    @foreach(Session::get('cart') as $key => $show_cart)
                                                        @php
                                                            $subtotal = $show_cart['product_price'] * $show_cart['product_quantity'];
                                                            $total += $subtotal;
                                                        @endphp
                                                        <tr class="CartItem_cart-item__oeS59">
                                                            <td class="CartItem_product-col__5yb6n">
                                                                <a href="">
                                                                    <figure>
                                                                        <img height="72" width="72" src="/uploads/product/{{$show_cart['product_img1']}}" alt="{{$show_cart['product_name']}}">
                                                                    </figure>
                                                                    <h3>
                                                                        <div>{{$show_cart['product_name']}}</div>
                                                                    </h3>
                                                                </a>
                                                            </td>
                                                            <td class="CartItem_price-col___nuBR">
                                                                <p class="CartItem_price-old__4bbv8">
                                                                    <del>{{ number_format($show_cart['product_price_old']) }} đ</del>
                                                                </p>
                                                                <p class="CartItem_price-current__qT_vp">
                                                                    {{ number_format($show_cart['product_price']) }} đ
                                                                </p>
                                                            </td>
                                                            <td class="CartItem_quantity-col__f1SqD">
                                                                <div>
                                                                    <div class="Quantity_quantity__fVK1i CartItem_quantity-input__5mxnE">
                                                                        <button class="decrement-quantity-btn">
                                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M4.58341 10.8334C4.47291 10.8334 4.36693 10.7895 4.28879 10.7114C4.21065 10.6332 4.16675 10.5273 4.16675 10.4167V9.58341C4.16675 9.47291 4.21065 9.36693 4.28879 9.28879C4.36693 9.21065 4.47291 9.16675 4.58341 9.16675H15.4167C15.5273 9.16675 15.6332 9.21065 15.7114 9.28879C15.7895 9.36693 15.8334 9.47291 15.8334 9.58341V10.4167C15.8334 10.5273 15.7895 10.6332 15.7114 10.7114C15.6332 10.7895 15.5273 10.8334 15.4167 10.8334H4.58341Z" fill="#112950"></path></svg>
                                                                        </button>
                                                                        <input value="{{$show_cart['product_quantity']}}" min="1" class="quantity-input" name="cart-quantity[{{$show_cart['session_id']}}]" id="soLuong">
                                                                        <button class="increment-quantity-btn">
                                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M9.99992 3.33325C9.7789 3.33325 9.56694 3.42105 9.41066 3.57733C9.25438 3.73361 9.16658 3.94557 9.16658 4.16659V9.16658H4.16659C3.94557 9.16658 3.73361 9.25438 3.57733 9.41066C3.42105 9.56694 3.33325 9.7789 3.33325 9.99992C3.33325 10.2209 3.42105 10.4329 3.57733 10.5892C3.73361 10.7455 3.94557 10.8333 4.16659 10.8333H9.16658V15.8333C9.16658 16.0543 9.25438 16.2662 9.41066 16.4225C9.56694 16.5788 9.7789 16.6666 9.99992 16.6666C10.2209 16.6666 10.4329 16.5788 10.5892 16.4225C10.7455 16.2662 10.8333 16.0543 10.8333 15.8333V10.8333H15.8333C16.0543 10.8333 16.2662 10.7455 16.4225 10.5892C16.5788 10.4329 16.6666 10.2209 16.6666 9.99992C16.6666 9.7789 16.5788 9.56694 16.4225 9.41066C16.2662 9.25438 16.0543 9.16658 15.8333 9.16658H10.8333V4.16659C10.8333 3.94557 10.7455 3.73361 10.5892 3.57733C10.4329 3.42105 10.2209 3.33325 9.99992 3.33325V3.33325Z" fill="#112950"></path></svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="CartItem_total-price-col__2edyM">
                                                                <p>{{number_format($subtotal)}} đ</p>
                                                            </td>
                                                            <td class="CartItem_action__BM8qk">
                                                                <button onclick="window.location.href='{{ url('delete-item-product/'.$show_cart['session_id']) }}'">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M19.3238 9.4668C19.3238 9.4668 18.7808 16.2018 18.4658 19.0388C18.3158 20.3938 17.4788 21.1878 16.1078 21.2128C13.4988 21.2598 10.8868 21.2628 8.27881 21.2078C6.95981 21.1808 6.13681 20.3768 5.98981 19.0458C5.67281 16.1838 5.13281 9.4668 5.13281 9.4668" stroke="#5E6F88" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.708 6.23828H3.75" stroke="#5E6F88" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.4406 6.239C16.6556 6.239 15.9796 5.684 15.8256 4.915L15.5826 3.699C15.4326 3.138 14.9246 2.75 14.3456 2.75H10.1126C9.53358 2.75 9.02558 3.138 8.87558 3.699L8.63258 4.915C8.47858 5.684 7.80258 6.239 7.01758 6.239" stroke="#5E6F88" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                
                                                @endif
                                            </tbody>
                                        </table>
                                        
                                    </form>
                                    

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="CartList_promotion-hint__F3h62">
                            Lưu ý: Các hình thức khuyến mãi sẽ áp dụng tại trang thanh toán (nếu có)
                        </div>
                    </div>
                    <div class="TotalCart_total-cart-container__zIAY9">
                        <form>
                            @if(Session::has('cart'))
                                @foreach(Session::get('cart') as $key => $show_cart)
                                    @csrf
                                    <div class="product-item" data-id="{{$show_cart['product_id']}}">
                                        <input type="hidden" value="{{$show_cart['product_id']}}" class="product_id_{{$show_cart['product_id']}}">
                                        <input type="hidden" value="{{$show_cart['product_name']}}" class="product_name_{{$show_cart['product_id']}}">
                                        <input type="hidden" value="{{$show_cart['product_img1']}}" class="product_img1_{{$show_cart['product_id']}}">
                                        <input type="hidden" value="{{$show_cart['product_price']}}" class="product_price_{{$show_cart['product_id']}}">
                                        <input type="hidden" value="{{$show_cart['product_price_old']}}" class="product_price_old_{{$show_cart['product_id']}}">
                                        <input type="hidden" value="{{$show_cart['product_unit']}}" class="product_unit_{{$show_cart['product_id']}}">
                                        <input type="hidden" value="{{$show_cart['product_quantity']}}" class="product_quantity_{{$show_cart['product_id']}}">
                                    </div>
                                @endforeach
                            
                            
                                

                                <div class="TotalCart_total-cart__mIMtg">
                                    <div class="TotalCart_header__ufGnv">Tổng tiền</div>
                                    <div class="TotalCart_content__AMkpM">
                                        <div class="TotalCart_item__a1Lt_">
                                            
                                            <span>Tạm tính</span>
                                            <p>
                                                <b id="total">0 đ</b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="TotalCart_footer__ysUJW d-flex justify-content-between">
                                        <button type="button" class="TotalCart_btn-order-more__sjocf" onclick="window.location.href='{{URL::to('/')}}'">
                                            <p>
                                                <b>Mua thêm</b>
                                            </p>
                                        </button>
                                        <button type="button" id="addToCheckOut" class="TotalCart_btn-start-checkout___8Dt7" onclick="window.location.href='{{URL::to('/checkout')}}';">
                                            {{-- onclick="window.location.href='{{URL::to('/checkout')}}';" --}}

                                            <p>
                                                <b>Đặt hàng</b>
                                                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="white"><path d="M8.5 5L15.5 12L8.5 19" stroke="inherit" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </p>
                                            <span>Giao hàng tận nơi hoặc nhận tại nhà thuốc</span>
                                        </button>
                                    </div>
                                </div>
                            
                            @endif
                        </form>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('updateCartForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của form
    
            var formData = new FormData(this);
    
            // Gửi yêu cầu AJAX để cập nhật giỏ hàng
            var xhr = new XMLHttpRequest();
            xhr.open('POST', this.action);
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Yêu cầu AJAX hoàn thành thành công
                        // Chuyển hướng ngược trở lại trang giỏ hàng
                        window.location.href = '{{ url('/cart') }}';
                    } else {
                        // Xử lý lỗi khi yêu cầu AJAX thất bại (nếu cần)
                    }
                }
            };
            xhr.send(formData);
        });
    </script>
    
<script>
    
   
    document.addEventListener('DOMContentLoaded', function() {
        const cartItems = document.querySelectorAll('.CartItem_cart-item__oeS59');
        const totalElement = document.getElementById('total');

        function updateTotal() {
            const subtotalElements = document.querySelectorAll('.CartItem_total-price-col__2edyM p');
            let total = 0;
            subtotalElements.forEach(function(subtotalElement) {
                const subtotal = parseFloat(subtotalElement.textContent.replace(/\D/g, ''));
                total += subtotal;
            });
            totalElement.textContent = formatCurrency(total);
        }

        function formatCurrency(amount) {
            return amount.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
        }

        cartItems.forEach(function(cartItem) {
            const decrementBtn = cartItem.querySelector('.Quantity_quantity__fVK1i button:first-child');
            const incrementBtn = cartItem.querySelector('.Quantity_quantity__fVK1i button:last-child');
            const quantityInput = cartItem.querySelector('.Quantity_quantity__fVK1i input');
            const subtotalElement = cartItem.querySelector('.CartItem_total-price-col__2edyM p');

            const initialQuantity = parseInt(quantityInput.value);
            const productPrice = parseFloat(cartItem.querySelector('.CartItem_price-current__qT_vp').textContent.replace(/\D/g, ''));
            const initialSubtotal = initialQuantity * productPrice;

            subtotalElement.textContent = formatCurrency(initialSubtotal);

            decrementBtn.addEventListener('click', function() {
                let quantity = parseInt(quantityInput.value);
                if (quantity > 1) {
                    quantity--;
                    quantityInput.value = quantity;
                    const subtotal = quantity * productPrice;
                    subtotalElement.textContent = formatCurrency(subtotal);
                    

                    
                    updateTotal();
                }
            })

            incrementBtn.addEventListener('click', function() {
                let quantity = parseInt(quantityInput.value);
                quantity++;
                quantityInput.value = quantity;
                const subtotal = quantity * productPrice;
                subtotalElement.textContent = formatCurrency(subtotal);

                

                updateTotal();
            });
        });

        updateTotal();
    });
</script>





    
</body>
</html>