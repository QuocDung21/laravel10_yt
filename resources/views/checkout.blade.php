<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanh toán</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
<style>
    .VoucherInputField_error-msg__kKPQn {
        margin-top: 4px;
        font-size: 11px;
        line-height: 13px;
        color: #f33060;
    }
    .VoucherInputField_error-msg__kKPQn2 {
        margin-top: 4px;
        font-size: 11px;
        line-height: 13px;
        color: #f33060;
    }
    .BaseVoucherApplyModal_base-voucher-apply-modal-overlay__Jljr4 {
        background-color: #2051a2b0;
        position: fixed;
        inset: 0;
        display: flex;
    }
    @media screen and (min-width: 1200px){
        .BaseVoucherApplyModal_base-voucher-apply-modal__2mOYK {
            max-width: 375px;
            width: calc(100% - 32px);
            border-radius: 12px;
            border-top-right-radius: 12px;
            margin-bottom: auto;
            max-height: calc(100% - 64px);
        }
    }
    .BaseVoucherApplyModal_base-voucher-apply-modal__2mOYK {
        margin: auto auto 0;
        max-height: calc(100% - 32px);
        padding: 0;
        overflow: hidden;
        box-sizing: border-box;
        border: none;
        background: #fff;
        border-radius: 0;
        display: flex;
        flex-direction: column;
        width: 100%;
        outline: none!important;
    }
    .BaseVoucherApplyModal_body__Jv4rx, .BaseVoucherApplyModal_content__CPi2g {
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }
    .BaseVoucherApplyModal_headerDesktop__7u_au {
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        max-height: 100%;
        justify-content: center;
        padding: 16px;
    }
    .BaseVoucherApplyModal_headerDesktop__7u_au .BaseVoucherApplyModal_titleDesktop__3PiW_ {
        font-weight: 700;
        font-size: 20px;
        line-height: 32px;
        margin: 0;
    }
    .BaseVoucherApplyModal_headerDesktop__7u_au .BaseVoucherApplyModal_closeIconDesktop___89ae {
        all: unset;
        position: absolute;
        top: 20px;
        right: 16px;
        cursor: pointer;
    }
    .BaseVoucherApplyModal_headerDesktop__7u_au .BaseVoucherApplyModal_closeIconDesktop___89ae svg {
        display: block;
        width: 24px;
        height: 24px;
    }
    .BaseVoucherApplyModal_body__Jv4rx {
        padding: 12px 16px;
        box-sizing: border-box;
    }
    .VoucherInputField_voucher-input__fT8vY {
        display: flex;
    }
    .VoucherInputField_voucher-input__fT8vY .VoucherInputField_input__t6hPa {
        flex: 1 1;
    }
    .InputTextField_input-text-field__Yvohj .InputTextField_input-group__Cyzv4 {
        position: relative;
    }
    .VoucherInputField_voucher-input__fT8vY .VoucherInputField_input__t6hPa input {
        padding: 8px!important;
        border-radius: 4px 0 0 4px!important;
    }
    .InputTextField_input-text-field__Yvohj .InputTextField_input-group__Cyzv4 input, .InputTextField_input-text-field__Yvohj .InputTextField_input-group__Cyzv4 textarea {
        outline: none;
        box-sizing: border-box;
        background-color: transparent;
        padding: 9px 0;
        border: none;
        border-top: 1px solid transparent;
        border-bottom: 1px solid #e5e5e5;
        font-size: .938rem;
        line-height: 18px;
        width: 100%;
        border-radius: 0;
        font-family: inherit;
    }
    .InputTextField_input-text-field__Yvohj.InputTextField_full-border__X_eEf .InputTextField_input-group__Cyzv4 input {
        border: 1px solid #e5e5e5;
        padding: 9px 8px;
        border-radius: 8px;
    }
    .InputTextField_input-text-field__Yvohj.InputTextField_size-lg__hbVRh .InputTextField_input-group__Cyzv4 input {
        padding: 17px 16px;
        border-radius: 12px;
    }
    .VoucherInputField_voucher-input__fT8vY .VoucherInputField_btn-submit__mZoAQ.VoucherInputField_disabled__ZwYPf {
        background-color: silver!important;
        cursor: not-allowed!important;
        border: none!important;
    }
    .Button_pc-button__GX6DG.Button_primary__iy__x {
        color: #fff;
        background-color: #0f62f9;
        border-color: #0f62f9;
    }
    .VoucherInputField_voucher-input__fT8vY .VoucherInputField_btn-submit__mZoAQ {
        padding: 6px 14px!important;
        border-radius: 0 4px 4px 0!important;
    }
    .VoucherApplyModal_coupon-promotion__jq7qf {
        margin-top: 8px;
    }
    .VoucherApplyModal_divider__IfeFr {
        margin: 16px -16px;
        height: 16px;
        background-color: #f2f4f5;
    }
    .VoucherApplyModal_voucher-list-title__Nr2Me {
        font-size: 15px;
        line-height: 18px;
        font-weight: 700;
        margin-bottom: 12px;
    }
    .VoucherApplyModal_voucher-list__fXFLl {
        overflow: auto;
    }
    .VoucherListEmpty_voucher-empty__6qgpV {
        text-align: center;
    }
    .VoucherListEmpty_voucher-empty__6qgpV img {
        max-width: 280px;
    }
    .VoucherListEmpty_voucher-empty__6qgpV .VoucherListEmpty_message__TL4DG {
        font-size: 17px;
        line-height: 22px;
        color: #112950;
    }
    .BaseVoucherApplyModal_footer__HdDqB {
        padding: 12px 16px;
        border-top: 1px solid #e5e5e5;
        text-align: center;
        position: sticky;
        position: -webkit-sticky;
        bottom: 0;
        background-color: #fff;
    }
    .BaseVoucherApplyModal_footer__HdDqB .BaseVoucherApplyModal_btnSubmit__i0o_s.BaseVoucherApplyModal_disabled__z_dj9 {
        cursor: not-allowed;
        background-color: silver;
        border: none;
    }
    .BaseVoucherApplyModal_footer__HdDqB .BaseVoucherApplyModal_btnSubmit__i0o_s {
        display: flex;
        justify-content: center;
        width: 100%;
        font-size: 17px;
        line-height: 22px;
        font-weight: 700;
        height: 54px;
    }
    
    .Button_button__yfvRh {
        cursor: pointer;
        padding: 8px 20px;
        outline: none;
        display: flex;
        align-items: center;
        border-radius: 0.75rem;
    }
    .Button_button__primary__iFLao {
        background-color: #0072bc;
        color: #fff;
        border: 1px solid #0072bc;
    }
    .BaseVoucherApplyModal_base-voucher-apply-modal__2mOYK {
        margin: auto auto 0;
        max-height: calc(100% - 32px);
        padding: 0;
        overflow: hidden;
        box-sizing: border-box;
        border: none;
        background: #fff;
        border-radius: 0;
        display: flex;
        flex-direction: column;
        width: 100%;
        outline: none!important;
    }
    .ShippingServices_body__J9Cot {
        padding: 8px 16px 16px;
    }
    .ShippingServices_group__feFkw .ShippingServices_group-title__OwITa {
        font-weight: 700;
        font-size: 17px;
        line-height: 22px;
        padding-bottom: 12px;
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .ShippingServices_group__feFkw .ShippingServices_group-title__OwITa svg {
        margin-right: 8px;
    }
    .ShippingServices_shipping-item__dlrPW {
        position: relative;
        padding-top: 12px;
        width: 100%;
    }
    .ShippingServices_shipping-item__dlrPW.ShippingServices_active__KSH2d .ShippingServices_content__mVJvO, .ShippingServices_shipping-item__dlrPW.ShippingServices_active__KSH2d .ShippingServices_name__4Ptet {
        background-color: #f2f6fe;
        border-color: #0072bc;
    }
    .ShippingServices_shipping-item__dlrPW.ShippingServices_select-able__Wwo2r .ShippingServices_content__mVJvO, .ShippingServices_shipping-item__dlrPW.ShippingServices_select-able__Wwo2r .ShippingServices_name__4Ptet {
        cursor: pointer;
    }
    .ShippingServices_shipping-item__dlrPW .ShippingServices_name__4Ptet {
        font-size: .75rem;
        line-height: 18px;
        color: #112950;
        padding: 3px 12px;
        border: 1px solid #e5e5e5;
        border-radius: 20px;
        position: absolute;
        top: 0;
        left: 20px;
        background-color: #fff;
    }
    .ShippingServices_shipping-item__dlrPW .ShippingServices_content__mVJvO {
        padding: 24px 16px 12px;
        display: flex;
        flex-direction: row;
        align-items: center;
        border-radius: 10px;
        border: 1px solid #e5e5e5;
        background-color: #fff;
    }
    .ShippingServices_shipping-item__dlrPW .ShippingServices_content__mVJvO .ShippingServices_info__oC2sC {
        flex: 1 1;
    }
    .ShippingServices_shipping-item__dlrPW .ShippingServices_content__mVJvO .ShippingServices_info__oC2sC .ShippingServices_row__k2jBo {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .ShippingServices_shipping-item__dlrPW .ShippingServices_content__mVJvO .ShippingServices_info__oC2sC .ShippingServices_row__k2jBo .ShippingServices_label__ToERL {
        font-size: .688rem;
        line-height: 13px;
        color: #8e9aab;
        flex: 0 0 94px;
    }
    .ShippingServices_shipping-item__dlrPW .ShippingServices_content__mVJvO .ShippingServices_info__oC2sC .ShippingServices_row__k2jBo .ShippingServices_value__kFEM0 {
        font-size: .813rem;
        line-height: 20px;
        color: #5dac46;
        margin-left: 4px;
        flex: 3 0;
    }
    .ShippingServices_shipping-item__dlrPW .ShippingServices_content__mVJvO .ShippingServices_info__oC2sC .ShippingServices_row__k2jBo {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .ShippingServices_shipping-item__dlrPW .ShippingServices_content__mVJvO .ShippingServices_info__oC2sC .ShippingServices_row__k2jBo .ShippingServices_label__ToERL {
        font-size: .688rem;
        line-height: 13px;
        color: #8e9aab;
        flex: 0 0 94px;
    }
    .ShippingServices_shipping-item__dlrPW .ShippingServices_content__mVJvO .ShippingServices_info__oC2sC .ShippingServices_row__k2jBo .ShippingServices_value__kFEM0 {
        font-size: .813rem;
        line-height: 20px;
        color: #5dac46;
        margin-left: 4px;
        flex: 3 0;
    }
    .ShippingServices_shipping-item__dlrPW.ShippingServices_active__KSH2d .ShippingServices_content__mVJvO .ShippingServices_select-icon__PYukh {
        background-color: #0072bc;
    }
    .ShippingServices_shipping-item__dlrPW.ShippingServices_select-able__Wwo2r .ShippingServices_content__mVJvO .ShippingServices_select-icon__PYukh {
        display: block;
    }
    .ShippingServices_shipping-item__dlrPW .ShippingServices_content__mVJvO .ShippingServices_select-icon__PYukh {
        width: 20px;
        height: 20px;
        border-radius: 100%;
        background-color: #e5e5e5;
        position: relative;
        margin-left: 12px;
        flex-shrink: 0;
        display: none;
    }
    .ShippingServices_shipping-item__dlrPW .ShippingServices_content__mVJvO .ShippingServices_select-icon__PYukh:after {
        content: "";
        display: block;
        position: absolute;
        width: 6px;
        height: 6px;
        border-radius: 100%;
        background-color: #fff;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    .Modal_footer__LiOtZ {
        padding: 12px 16px;
        border-top: 1px solid #e5e5e5;
        text-align: center;
        box-shadow: 0 0 16px rgba(0,0,0,.2);
        position: sticky;
        position: -webkit-sticky;
        bottom: 0;
        background-color: #fff;
    }
    .Modal_footer__LiOtZ button.Modal_back__8eLgL {
        margin-right: 16px;
    }
    .ModalCheckout_footer__qeson button:first-child {
        display: none;
    }
    .Button_pc-button__GX6DG.Button_secondary__wQTg8 {
        color: #5e6f88;
        background-color: #f2f4f5;
        border-color: #f2f4f5;
    }
    .Button_pc-button__GX6DG.Button_primary__iy__x {
        color: #fff;
        background-color: #0072bc;
        border-color: #0072bc;
    }
    .Button_pc-button__GX6DG.Button_bold__gYo6N {
        font-weight: 700;
    }
    .Modal_footer__LiOtZ button {
        min-width: 120px;
    }

    @media screen and (min-width: 1200px){
        .InfoItem_info-item__pkegI .InfoItem_info__chTLQ .InfoItem_info-main__TreRj {
            font-size: 16px;
        }
        .ModalCheckout_footer__qeson button {
            width: auto;
        }
        .InfoItem_info-item__pkegI .InfoItem_info__chTLQ .InfoItem_info-main__TreRj .InfoItem_value__moOvD {
            margin-top: 4px;
        }
        .ModalCheckout_footer__qeson button:first-child {
        display: inline-block;
    }
    }
    .InfoItem_info-item__pkegI .InfoItem_info__chTLQ .InfoItem_info-main__TreRj {
        flex: 1 1;
        font-weight: 400;
        font-size: 14px;
        line-height: 130%;
    }
    .ShippingServices_shipping-selected__xgo3F {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 8px;
        align-items: center;
    }
    .ShippingServices_shipping-selected__xgo3F .ShippingServices_price__YQoqG {
        font-weight: 600;
    }
    .InfoItem_info-item__pkegI:not(:first-child) {
        border-top: 1px solid #eee;
    }


    .Checkout_checkout-page__N8EvD *, .Checkout_checkout-page__N8EvD :after, .Checkout_checkout-page__N8EvD :before {
    box-sizing: border-box;
    }
    .CustomerInfo_customer-info___XQ6B span, .ShippingAddress_customer-info__Wdcc_ span {
        height: 14px;
        width: 1.5px;
        background-color: #8e9aab;
        margin: 0 8px;
        display: inline-block;
        position: relative;
        top: -1px;
        vertical-align: middle;
        border-radius: 1px;
    }
    .InfoItem_info-item__pkegI .InfoItem_info__chTLQ .InfoItem_info-main__TreRj .InfoItem_value__moOvD>:not(:first-child) {
        margin-top: 2px;
    }
    .InfoItem_info-item__pkegI.InfoItem_has-value__Qjn8d .InfoItem_info__chTLQ .InfoItem_info-main__TreRj .InfoItem_label__KvNVo {
        color: #8e9aab;
    }
    .MainLayout_main-layout__riclp .MainLayout_content__hCocE {
        flex-grow: 1;
    }
    .Checkout_checkout-page__N8EvD {
        color: #112950;
        box-sizing: border-box;
    }
    @media screen and (min-width: 1200px){
        .InfoItem_info-item__pkegI .InfoItem_info__chTLQ .InfoItem_info-main__TreRj .InfoItem_value__moOvD {
        margin-top: 4px;
    }
    }

    @media (max-width: 1400px){
        .container {
            max-width: calc(1320px + 3rem);
            padding-right: 1.5rem;
            padding-left: 1.5rem;
            box-sizing: border-box;
        }
    }

    .Checkout_checkout-page__N8EvD *, .Checkout_checkout-page__N8EvD :after, .Checkout_checkout-page__N8EvD :before {
        box-sizing: border-box;
    }
    .Checkout_breadcrumbs__A2Wrs {
        padding: 20px 0;
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
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item__e9mbT+.Breadcrumbs_item__e9mbT:before {
        float: left;
        margin-bottom: 7px;
        padding-right: 0.5rem;
        content: url(https://www.pharmacity.vn/icons/breadcrumb-dot.svg);
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item__e9mbT:before {
        font-size: 1rem;
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item__e9mbT+.Breadcrumbs_item__e9mbT {
        padding-left: 0.5rem;
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item__e9mbT+.Breadcrumbs_item__e9mbT {
        padding-left: 0.5rem;
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item-active__3fOia {
        opacity: 1!important;
        font-weight: 500;
    }
    .Breadcrumbs_breadcrumbs__04vpL .Breadcrumbs_item__e9mbT+.Breadcrumbs_item__e9mbT:before {
        float: left;
        margin-bottom: 7px;
        padding-right: 0.5rem;
        content: url(https://www.pharmacity.vn/icons/breadcrumb-dot.svg);
    }
    .Checkout_title__IrGV8 {
        font-weight: 700;
        font-size: 20px;
        line-height: 32px;
        color: #112950;
    }
    .Info_checkout-info__xynDA .Info_info-title__nt_DJ {
        display: none;
    }
    .Info_checkout-info__xynDA .Info_cart-title__l8uzY {
        margin-top: 12px;
    }
    .CheckoutSubTitle_checkout-sub-title__a_d_b {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .CheckoutSubTitle_checkout-sub-title__a_d_b .CheckoutSubTitle_title__YbNym {
        font-weight: 700;
        font-size: 1.063rem;
        line-height: 22px;
        margin-right: 8px;
    }
    .Info_checkout-info__xynDA .Info_link__ZqQbY {
        font-weight: 400;
        font-size: .813rem;
        line-height: 13px;
        color: #0f62f9;
        text-decoration: underline;
        white-space: nowrap;
        margin-left: auto;
    }
    .CompactContent_compact-content__kcEKx {
        position: relative;
        box-sizing: border-box;
    }
    .Order_order-list-wrap__SnqRx {
        margin-top: 16px;
    }
    .CompactContent_compact-content__kcEKx .CompactContent_container__sYVCu {
        overflow: hidden;
        transition: all .3s;
    }
    .Order_order-item__8eoCE {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 20px 0;
    }
    .Order_order-item__8eoCE .Order_banner__FDIHJ {
        width: 72px;
        flex-shrink: 0;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
    }
    .Order_order-item__8eoCE .Order_banner__FDIHJ:before {
        content: "";
        display: block;
        width: 100%;
        padding-top: 100%;
    }
    .Order_order-item__8eoCE .Order_banner__FDIHJ img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }
    .Order_order-item__8eoCE .Order_info__Vvj_e {
        margin-left: 16px;
        flex-direction: row;
        align-items: baseline;
        flex: 1 1;
        display: block;
        gap: 4px;
    }
    .Order_order-item__8eoCE .Order_info__Vvj_e .Order_name__18Hvn {
        flex: 3 0;
        font-size: 1rem;
        line-height: 24px;
    }
    .Order_order-item__8eoCE .Order_info__Vvj_e .Order_price__HN8bY {
        flex: 1 0;
    }
    .Order_order-item__8eoCE .Order_info__Vvj_e .Order_price__HN8bY .Order_origin__2PaKF {
        font-size: .75rem;
        line-height: 18px;
        color: #8e9aab;
        text-decoration: line-through;
    }
    .Order_order-item__8eoCE .Order_info__Vvj_e .Order_price__HN8bY .Order_current__OKNtr {
        font-size: .875rem;
        line-height: 18px;
        color: #0065ff;
    }
    .Order_order-item__8eoCE .Order_info__Vvj_e .Order_quantity__cmR4V {
        flex: 1 0;
        font-size: .875rem;
        line-height: 18px;
        text-align: center;
        display: none;
    }
    .Order_order-item__8eoCE .Order_info__Vvj_e .Order_totalAmount__Mwe_r {
        flex: 1 0;
        font-size: .875rem;
        line-height: 18px;
        color: #0065ff;
        text-align: right;
        display: none;
    }
    .ReceiveInfoTab_receive-info__Vl8dW {
        margin: 0 -24px;
        background: #f2f1f6;
        padding: 16px;
    }
    .ReceiveInfoTab_receive-info__Vl8dW .ReceiveInfoTab_tab__zQ_Dt {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 16px;
    }
    .ReceiveInfoTab_receive-info__Vl8dW .ReceiveInfoTab_tab__zQ_Dt .ReceiveInfoTab_tab-item__yBcmB {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 6px;
        font-weight: 500;
        font-size: 13px;
        line-height: 120%;
        color: #8e9aab;
        cursor: pointer;
    }
    .ReceiveInfoTab_receive-info__Vl8dW .ReceiveInfoTab_tab__zQ_Dt .ReceiveInfoTab_tab-item__yBcmB.ReceiveInfoTab_active__ztxnN {
        color: #0f62f9;
        position: relative;
    }
    .ReceiveInfoTab_receive-info__Vl8dW .ReceiveInfoTab_tab__zQ_Dt .ReceiveInfoTab_tab-item__yBcmB.ReceiveInfoTab_active__ztxnN .ReceiveInfoTab_select-box__4_Y_E {
        border: 2px solid #0f62f9;
    }
    .ReceiveInfoTab_receive-info__Vl8dW .ReceiveInfoTab_tab__zQ_Dt .ReceiveInfoTab_tab-item__yBcmB .ReceiveInfoTab_select-box__4_Y_E {
        display: block;
        width: 20px;
        height: 20px;
        border-radius: 100%;
        position: relative;
        border: 1px solid #e5e5e5;
        background-color: #fff;
    }
    .ReceiveInfoTab_receive-info__Vl8dW .ReceiveInfoTab_tab__zQ_Dt .ReceiveInfoTab_tab-item__yBcmB.ReceiveInfoTab_active__ztxnN .ReceiveInfoTab_select-box__4_Y_E:after {
        content: "";
        display: block;
        position: absolute;
        width: 10px;
        height: 10px;
        background-color: #0f62f9;
        border-radius: 100%;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    .ReceiveInfoTab_receive-info__Vl8dW .ReceiveInfoTab_content__TzgqL {
        border: 1px solid #9ebaed;
        border-radius: 8px;
        margin-top: 10px;
        background-color: #fff;
    }
    .InfoItem_info-item__pkegI {
        padding: 16px 20px;
        cursor: pointer;
    }
    .InfoItem_info-item__pkegI .InfoItem_info__chTLQ {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 12px;
    }
    .InfoItem_info-item__pkegI .InfoItem_info__chTLQ svg:first-child {
        width: 16px;
        height: 16px;
    }
    .InfoItem_info-item__pkegI .InfoItem_info__chTLQ svg.InfoItem_fill__9nKcF, .InfoItem_info-item__pkegI .InfoItem_info__chTLQ svg.InfoItem_fill__9nKcF path {
        fill: #112950;
    }
    .InfoItem_info-item__pkegI .InfoItem_info__chTLQ svg {
        flex-shrink: 0;
    }
    .InfoItem_info-item__pkegI .InfoItem_info__chTLQ .InfoItem_info-main__TreRj {
        flex: 1 1;
        font-weight: 400;
        font-size: 14px;
        line-height: 130%;
    }
    .InfoItem_info-item__pkegI .InfoItem_info__chTLQ .InfoItem_info-main__TreRj .InfoItem_label__KvNVo {
        color: #112950;
    }
    .Info_checkout-info__xynDA .Info_checkout-info-section__3bs6L {
        padding: 24px;
        margin: 0 -24px;
        border-top: 1px solid #e5e5e5;
    }
    .CheckoutSubTitle_checkout-sub-title__a_d_b {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .CheckoutSubTitle_checkout-sub-title__a_d_b .CheckoutSubTitle_title__YbNym {
        font-weight: 700;
        font-size: 1.063rem;
        line-height: 22px;
        margin-right: 8px;
    }
    .PaymentMethod_payment-method-content__Mwlfb {
        padding-top: 12px;
    }
    .PaymentMethod_payment-method-list__RN_pv.PaymentMethod_desktop__87RGS {
        max-width: 440px;
    }
    .PaymentMethod_payment-method-list__RN_pv, .PaymentMethod_payment-method-list__RN_pv * {
        box-sizing: border-box;
    }
    .PaymentMethod_pmt-item__xLsSo.PaymentMethod_active__KaSrA {
        border-color: #9ebaed;
        background-color: #f2f6fe;
    }
    .PaymentMethod_pmt-item__xLsSo.PaymentMethod_select-able__9T36A {
        cursor: pointer;
    }
    .PaymentMethod_payment-method-list__RN_pv .PaymentMethod_pmt-item__xLsSo {
        max-width: none;
    }
    .PaymentMethod_pmt-item__xLsSo {
        display: flex;
        flex-direction: row;
        align-items: center;
        border: 1px solid #e5e5e5;
        border-radius: 12px;
        padding: 16px;
        max-width: 348px;
        width: 100%;
        position: relative;
    }
    .PaymentMethod_pmt-item__xLsSo .PaymentMethod_icon__CyEz3 {
        width: 24px;
        height: 24px;
        flex-shrink: 0;
    }
    .PaymentMethod_pmt-item__xLsSo .PaymentMethod_info__wZSot {
        flex: 1 1;
        margin-left: 16px;
        font-size: 14px;
        line-height: 18px;
    }
    .PaymentMethod_pmt-item__xLsSo .PaymentMethod_info__wZSot .PaymentMethod_name__mWhRk {
        font-weight: 700;
    }
    .PaymentMethod_pmt-item__xLsSo .PaymentMethod_info__wZSot .PaymentMethod_description___mt3Z {
        color: #8e9aab;
        margin-top: 6px;
    }
    .PaymentMethod_pmt-item__xLsSo.PaymentMethod_active__KaSrA .PaymentMethod_select-icon__NhfbH {
        background-color: #0065ff;
    }
    .PaymentMethod_pmt-item__xLsSo .PaymentMethod_select-icon__NhfbH {
        width: 20px;
        height: 20px;
        border-radius: 100%;
        background-color: #e5e5e5;
        position: relative;
        margin-left: 16px;
        flex-shrink: 0;
    }
    .PaymentMethod_pmt-item__xLsSo .PaymentMethod_select-icon__NhfbH:after {
        content: "";
        display: block;
        position: absolute;
        width: 6px;
        height: 6px;
        border-radius: 100%;
        background-color: #fff;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    .PaymentMethod_payment-method-list__RN_pv .PaymentMethod_pmt-item__xLsSo:not(:first-child) {
        margin-top: 12px;
    }
    .PaymentMethod_pmt-item__xLsSo.PaymentMethod_select-able__9T36A {
        cursor: pointer;
    }
    .ReceiveInfoTab_receive-info__Vl8dW .ReceiveInfoTab_tab__zQ_Dt .ReceiveInfoTab_tab-item__yBcmB.ReceiveInfoTab_active__ztxnN:after {
        position: absolute;
        content: "";
        width: 12px;
        height: 12px;
        background-color: #fff;
        border-top: 1px solid #9ebaed;
        border-right: 1px solid #9ebaed;
        bottom: -16px;
        left: calc(50% - 6px);
        transform: rotate(-45deg);
    }
    .Summary_checkout-summary__AQg5g, .Summary_checkout-summary__AQg5g * {
        box-sizing: border-box;
    }
    .Summary_checkout-summary__AQg5g .Summary_box__m1YmJ {
        padding: 24px;
        margin: 0 -24px;
        border-top: 1px solid #e5e5e5;
    }
    .Summary_checkout-summary__AQg5g .Summary_box__m1YmJ .Summary_title__OuCA_ {
        font-weight: 700;
        font-size: 17px;
        line-height: 22px;
    }
    .Summary_checkout-summary__AQg5g .Summary_content-between__UCQnB {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .VoucherApply_btn-change-voucher__1cOEa, .VoucherApply_button-select-voucher__LWzYC {
        color: #0f62f9;
        line-height: 24px;
        outline: none;
        background-color: transparent;
        cursor: pointer;
    }
    .VoucherApply_btn-change-voucher__1cOEa {
        font-size: 14px;
        text-decoration: underline;
        border: none;
        padding: 0;
    }
    .Summary_checkout-summary__AQg5g .Summary_box__m1YmJ .Summary_separate__26FAP {
        margin-left: -1.5rem;
        margin-right: -1.5rem;
        height: 1px;
        background-color: #e5e5e5;
    }
    .Summary_checkout-summary__AQg5g .Summary_box__m1YmJ>:not(:first-child) {
        margin-top: 16px;
    }
    .Summary_checkout-summary__AQg5g .Summary_box__m1YmJ .Summary_title__OuCA_ {
        font-weight: 700;
        font-size: 14px;
        line-height: 22px;
    }
    .TextAreaField_input-text-field__g7VN3 .TextAreaField_input-group__aaA_N {
        position: relative;
        border: 1px solid #e5e5e5;
        border-radius: 12px;
    }
    .TextAreaField_input-text-field__g7VN3 .TextAreaField_input-group__aaA_N textarea {
        resize: none;
        display: block;
        min-height: 74px;
    }
    .TextAreaField_input-text-field__g7VN3 .TextAreaField_input-group__aaA_N textarea {
        border: none;
        outline: none;
        box-sizing: border-box;
        background-color: transparent;
        padding: 10px 12px;
        font-size: .938rem;
        line-height: 18px;
        width: 100%;
        border-radius: 0;
        font-family: inherit;
    }
    .TextAreaField_input-text-field__g7VN3 .TextAreaField_input-group__aaA_N .TextAreaField_count__p1_H0 {
        bottom: 2px;
        right: 12px;
        font-size: 12px;
        line-height: 24px;
        color: #8e9aab;
        text-align: right;
        padding-right: 12px;
    }
    .Summary_checkout-summary__AQg5g .Summary_box__m1YmJ {
        padding: 24px;
        margin: 0 -24px;
        border-top: 1px solid #e5e5e5;
    }
    .Checkout_title__IrGV8 {
        font-weight: 700;
        font-size: 24px;
        line-height: 32px;
        color: #112950;
    }
    .Summary_checkout-summary__AQg5g .Summary_base-amount__jw8at .Summary_current__85VT4 {
        margin-left: 8px;
        font-weight: 700;
    }
    .Summary_checkout-summary__AQg5g .Summary_label__65snn {
        font-weight: 400;
        font-size: 1rem;
        line-height: 24px;
    }
    .Summary_checkout-summary__AQg5g .Summary_vat-included__skbkn {
        white-space: nowrap;
    }
    .Summary_checkout-summary__AQg5g .Summary_sub-label__Q87x9 {
        font-weight: 400;
        font-size: 12px;
        line-height: 18px;
        color: #b2bac5;
    }
    .Summary_checkout-summary__AQg5g .Summary_total-amount__FX00V {
        font-weight: 700;
        color: #0f62f9;
        margin-left: 8px;
        white-space: nowrap;
    }
    .Summary_checkout-summary__AQg5g .Summary_box__m1YmJ>:not(:first-child) {
        margin-top: 16px;
    }
    .Summary_button-submit-order__lEc_5 {
        background: #feaa48;
        border-radius: 12px;
        width: 100%;
        border: none;
        outline: none;
        padding: 16px;
        cursor: pointer;
        font-weight: 700;
        font-size: 1.063rem;
        line-height: 22px;
        color: #fff;
    }
    @media screen and (min-width: 1200px){
        .Checkout_checkout-page__N8EvD {
            padding-bottom: 24px;
        }
        .Summary_checkout-summary__AQg5g .Summary_box-button-submit-order__3JugJ {
            display: block;
        }
        .Summary_checkout-summary__AQg5g .Summary_base-amount__jw8at .Summary_current__85VT4 {
            line-height: 32px;
        }
        .Summary_checkout-summary__AQg5g .Summary_base-amount__jw8at .Summary_current__85VT4 {
            font-size: 20px;
            line-height: 18px;
        }
        .Summary_checkout-summary__AQg5g .Summary_total-amount__FX00V {
            font-size: 20px;
            line-height: 32px;
        }
        .Summary_checkout-summary__AQg5g .Summary_box__m1YmJ:not(:first-child) {
            margin-top: 12px;
        }
        .Summary_checkout-summary__AQg5g .Summary_box__m1YmJ {
            margin: 0;
            border-top: none;
        }

        .Checkout_box__90o3y {
            background-color: #fff;
            padding: 24px;
            border-radius: 12px;
        }
        .Summary_checkout-summary__AQg5g .Summary_box__m1YmJ {
            margin: 0;
            border-top: none;
        }
        .Checkout_right-content__ESczr {
            flex: 0 0 30%;
            max-width: 440px;
        }
        .Checkout_content__C3vpR>:not(:first-child) {
            margin-left: 24px;
        }
        .PaymentMethod_pmt-item__xLsSo .PaymentMethod_info__wZSot {
            font-size: 16px;
            line-height: 18px;
        }
        .PaymentMethod_payment-method-content__Mwlfb {
            padding-bottom: 0;
        }
        .Checkout_box__90o3y {
            background-color: #fff;
            padding: 24px;
            border-radius: 12px;
        }
        .Info_checkout-info__xynDA .Info_checkout-info-section__3bs6L {
            padding: 24px;
            margin: 12px 0 0;
            border-top: none;
        }
        .InfoItem_info-item__pkegI .InfoItem_info__chTLQ .InfoItem_info-main__TreRj {
            font-size: 16px;
        }
        .InfoItem_info-item__pkegI .InfoItem_info__chTLQ svg:first-child {
            width: 20px;
            height: 20px;
        }
        .ReceiveInfoTab_receive-info__Vl8dW .ReceiveInfoTab_tab__zQ_Dt .ReceiveInfoTab_tab-item__yBcmB {
            font-size: 16px;
        }
        .ReceiveInfoTab_receive-info__Vl8dW .ReceiveInfoTab_tab__zQ_Dt {
            gap: 48px;
        }
        .ReceiveInfoTab_receive-info__Vl8dW {
            margin: 0;
            padding: 16px 0;
            background-color: transparent;
        }
        .Order_order-item__8eoCE .Order_info__Vvj_e .Order_price__HN8bY, .Order_order-item__8eoCE .Order_info__Vvj_e .Order_quantity__cmR4V, .Order_order-item__8eoCE .Order_info__Vvj_e .Order_totalAmount__Mwe_r {
            display: block;
        }
        .Order_order-item__8eoCE .Order_info__Vvj_e {
            display: flex;
        }
        .Checkout_content__C3vpR {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }
        .Checkout_left-content__ShDJC {
            flex: 1 0;
        }
        .Checkout_box__90o3y {
            background-color: #fff;
            padding: 24px;
            border-radius: 12px;
        }
        .Info_checkout-info__xynDA .Info_info-title__nt_DJ {
            display: block;
        }
        .Info_checkout-info__xynDA .Info_link__ZqQbY {
            margin-left: 8px;
        }

    }
    /* Modal */
    .Modal_base-modal-overlay__e_4nO {
    background-color: #2051a2b0;
    position: fixed;
    inset: 0;
    display: flex;
    }
    .Modal_base-modal-content__TMVaT {
        margin: auto auto 0;
        max-height: calc(100% - 32px);
        padding: 0;
        overflow: hidden;
        box-sizing: border-box;
        border: none;
        background: #fff;
        border-radius: 0;
        border-top-right-radius: 24px;
        border-top-left-radius: 24px;
        display: flex;
        flex-direction: column;
        width: 100%;
        outline: none!important;
    }
    .Modal_header__Efm1l {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        padding: 12px 16px;
    }
    .Modal_header__Efm1l .Modal_title__ZcknN {
        font-weight: 700;
        font-size: 20px;
        line-height: 32px;
    }
    .Modal_header__Efm1l .Modal_close-icon__Nz3e1 {
        margin-left: 8px;
        border: none;
        outline: none;
        border-radius: 0;
        background-color: transparent;
        padding: 2px;
        cursor: pointer;
    }
    .Modal_header__Efm1l .Modal_close-icon__Nz3e1 svg {
        display: block;
        width: 24px;
        height: 24px;
    }
    .Modal_body__cNW47 {
        padding: 12px 16px;
        overflow: auto;
    }
    .Tab_app-tab__LoxYH.Tab_center__U239Z {
        text-align: center;
    }
    .Tab_app-tab__LoxYH {
        border-bottom: 1px solid #f2f4f5;
    }
    .Tab_app-tab__LoxYH .Tab_tab-item__TiFM8 {
        padding: 8px 20px;
        font-weight: 700;
        font-size: .765rem;
        line-height: 18px;
        color: #b2bac6;
        position: relative;
        display: inline-block;
        cursor: pointer;
    }
    .Tab_app-tab__LoxYH .Tab_tab-item__TiFM8.Tab_active__RJZQ2 {
        color: #0072bc;
    }
    .Tab_app-tab__LoxYH .Tab_tab-item__TiFM8.Tab_active__RJZQ2:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        height: 2px;
        width: 32px;
        border-radius: 2px 2px 0 0;
        background-color: #0072bc;
    }
    .AddressModal_address-edit-form__Aj5g6 {
        margin-top: 16px;
    }
    .AddressUpdate_address-form__3Lp59 {
        color: #112950;
    }
    .AddressUpdate_address-form__3Lp59 div.AddressUpdate_input__5v3Z_ {
        margin-top: 1rem;
    }
    .InputTextField_input-text-field__Yvohj label {
        font-size: .75rem;
        line-height: 18px;
    }
    .InputTextField_input-text-field__Yvohj label span {
        margin-left: 3px;
        color: #f33060;
    }
    .InputTextField_input-text-field__Yvohj .InputTextField_input-group__Cyzv4 {
        position: relative;
    }
    .InputTextField_input-text-field__Yvohj .InputTextField_input-group__Cyzv4 input, .InputTextField_input-text-field__Yvohj .InputTextField_input-group__Cyzv4 textarea {
        outline: none;
        box-sizing: border-box;
        background-color: transparent;
        padding: 9px 0;
        border: none;
        border-top: 1px solid transparent;
        border-bottom: 1px solid #e5e5e5;
        font-size: .938rem;
        line-height: 18px;
        width: 100%;
        border-radius: 0;
        font-family: inherit;
    }
    .AddressUpdate_address-form__3Lp59 .AddressUpdate_input-phone__ocVmt {
        position: relative;
    }
    .AddressUpdate_address-form__3Lp59 div.AddressUpdate_input__5v3Z_ {
        margin-top: 1rem;
    }
    .InputTextField_feedback__5PBft {
        color: #f33060;
        font-size: .75rem;
        line-height: 18px;
        margin-top: 2px;
    }
    .AddressUpdate_address-form__3Lp59 .AddressUpdate_address__lmkWy {
        margin-top: 1rem;
    }
    .SelectDropdownAddressField_select-address-wrapper__4F3t7 .SelectDropdownAddressField_select-address__AiKI_ {
        position: relative;
        width: 100%;
        border-bottom: 1px solid #e5e5e5;
        box-sizing: border-box;
    }
    .SelectDropdownAddressField_value-container__2rAtc {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
        margin-top: 6px;
        padding-bottom: 15px;
    }
    .SelectDropdownAddressField_value-container__2rAtc input {
        width: 90%;
        height: 95%;
        box-sizing: border-box;
        border: 0;
        font-size: 16px;
        
        text-overflow: ellipsis;
    }
    .SelectDropdownAddressField_value-container__2rAtc .SelectDropdownAddressField_right-group__Qum0T {
        display: flex;
    }
    .SelectDropdownAddressField_select-address-wrapper__4F3t7 .SelectDropdownAddressField_select-address__AiKI_ .SelectDropdownAddressField_value-container__2rAtc .SelectDropdownAddressField_right-group__Qum0T svg {
        stroke: #ccc;
        cursor: pointer;
    }
    .InputTextField_input-text-field__Yvohj:not(:first-child) {
        margin-top: 1rem;
    }

    .TextAreaField_input-text-field__g7VN3:not(:first-child) {
        margin-top: 1rem;
    }
    .TextAreaField_input-text-field__g7VN3 label {
        font-size: .75rem;
        line-height: 18px;
    }
    .TextAreaField_input-text-field__g7VN3 .TextAreaField_input-group__aaA_N {
        position: relative;
        border: 1px solid #e5e5e5;
        border-radius: 12px;
    }
    .TextAreaField_input-text-field__g7VN3 .TextAreaField_input-group__aaA_N textarea {
        resize: none;
        display: block;
        min-height: 74px;
    }
    .TextAreaField_input-text-field__g7VN3 .TextAreaField_input-group__aaA_N textarea {
        border: none;
        outline: none;
        box-sizing: border-box;
        background-color: transparent;
        padding: 10px 12px;
        font-size: .800rem;
        line-height: 18px;
        width: 100%;
        border-radius: 0;
        font-family: inherit;
    }
    .TextAreaField_input-text-field__g7VN3 .TextAreaField_input-group__aaA_N .TextAreaField_count__p1_H0 {
        bottom: 2px;
        right: 12px;
        font-size: 14px;
        line-height: 24px;
        color: #8e9aab;
        text-align: right;
        padding-right: 12px;
    }
    .Button_pc-button__GX6DG.Button_primary__iy__x {
        color: #fff;
        background-color: #0f62f9;
        border-color: #0f62f9;

    }
    .Button_pc-button__GX6DG.Button_full-width__L7dF2 {
        width: 100%;
    }
    .Button_pc-button__GX6DG {
        outline: none;
        font-size: 17px;
        line-height: 22px;
        padding: 15px 16px;
        border-radius: 12px;
        cursor: pointer;
        border: 1px solid transparent;
    }
    .AddressModal_btn-submit-address-form__HvilQ {
        margin-top: 24px;
    }
    .SelectDropdownAddressField_select-address-wrapper__4F3t7 label {
        font-size: .75rem;
        line-height: 18px;
    }
    .SelectDropdownAddressField_select-address-wrapper__4F3t7 .SelectDropdownAddressField_select-address__AiKI_ .SelectDropdownAddressField_dropdown-menu__TPD7E {
        position: absolute;
        left: 0;
        right: 0;
        top: 45px;
        z-index: 1;
        border: 1px solid #0072bc;
        background-color: #fff;
        box-shadow: 0 0 12px rgba(0,0,0,.12);
        border-radius: 4px;
        box-sizing: border-box;
        overflow: hidden;
    }
    .SelectDropdownAddressField_select-address-wrapper__4F3t7 .SelectDropdownAddressField_select-address__AiKI_ .SelectDropdownAddressField_dropdown-menu__TPD7E .SelectDropdownAddressField_tabs__F00iZ {
        display: flex;
        justify-content: space-evenly;
        height: 40px;
        align-items: center;
        border-bottom: 1px solid #f2f4f5;
        margin-bottom: 10px;
        font-size: 15px;
    }
    .SelectDropdownAddressField_select-address-wrapper__4F3t7 .SelectDropdownAddressField_select-address__AiKI_ .SelectDropdownAddressField_dropdown-menu__TPD7E .SelectDropdownAddressField_tabs__F00iZ .SelectDropdownAddressField_tab-item__rTvAT.SelectDropdownAddressField_active__6_seZ {
        color: #0072bc;
    }
    .SelectDropdownAddressField_select-address-wrapper__4F3t7 .SelectDropdownAddressField_select-address__AiKI_ .SelectDropdownAddressField_dropdown-menu__TPD7E .SelectDropdownAddressField_tabs__F00iZ .SelectDropdownAddressField_tab-item__rTvAT {
        position: relative;
        color: #b2bac6;
        cursor: pointer;
    }
    .SelectDropdownAddressField_select-address-wrapper__4F3t7 .SelectDropdownAddressField_select-address__AiKI_ .SelectDropdownAddressField_dropdown-menu__TPD7E .SelectDropdownAddressField_tabs__F00iZ .SelectDropdownAddressField_tab-item__rTvAT.SelectDropdownAddressField_active__6_seZ:after {
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 44px;
        max-width: 100%;
        height: 3px;
        content: "";
        display: block;
        background: #0072bc;
        border-radius: 99px 99px 0 0;
    }
    .SelectDropdownAddressField_select-address-wrapper__4F3t7 .SelectDropdownAddressField_select-address__AiKI_ .SelectDropdownAddressField_dropdown-menu__TPD7E .SelectDropdownAddressField_tab-content__SnP3_ {
        overflow-y: auto;
        height: 250px;
    }
    .SelectDropdownAddressField_select-address-wrapper__4F3t7 .SelectDropdownAddressField_select-address__AiKI_ .SelectDropdownAddressField_dropdown-menu__TPD7E .SelectDropdownAddressField_tab-content__SnP3_ .SelectDropdownAddressField_option__Asa9X {
        display: flex;
        justify-content: space-between;
        padding: 8px 12px;
        cursor: pointer;
    }
    @media screen and (min-width: 1200px){
        .Modal_base-modal-content__TMVaT {
            max-width: 395px;
            width: calc(100% - 32px);
            border-radius: 12px;
            border-top-right-radius: 12px;
            margin-bottom: auto;
            max-height: calc(100% - 64px);
        }
    }
    .custom-select {
        /* Áp dụng các kiểu dáng tùy chỉnh cho thẻ select ở đây */
        width: 350px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f5f5f5;
        color: #333;
        margin-top: 10px
    }
    .AddressUpdate_address-form__3Lp59>label {
        margin-top: 16px;
    }
    .CheckBoxField_pc-checkbox-field__Di_CZ {
        display: block;
        position: relative;
        padding-left: 24px;
        
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-weight: 400;
        font-size: .875rem;
        line-height: 18px;
    }
    .CheckBoxField_pc-checkbox-field__Di_CZ input {
        cursor: pointer;
        margin-right: 5px
    }
    .CheckBoxField_pc-checkbox-field__Di_CZ input:checked~.CheckBoxField_checkmark__TFYYY {
        background-color: #0072bc;
        border-color: #0072bc;
    }
    .CheckBoxField_pc-checkbox-field__Di_CZ .CheckBoxField_checkmark__TFYYY:after {
        position: absolute;
        top: 45%;
        left: 50%;
        width: 5px;
        height: 9px;
        border: solid #fff;
        border-width: 0 2px 2px 0;
        transform: translate(-50%,-50%) rotate(45deg);
    }


    .Modal_body__cNW47 {
        padding: 12px 16px;
        overflow: auto;
    }
    .AddressModal_address-list__V3IMd {
        padding: 16px 0;
    }
    .AddressItem_address-item__RSO4x.AddressItem_selected__5xQY4 {
        background: #f2f6fe;
        box-shadow: 0 0 0 1px #0072bc;
    }
    .AddressItem_address-item__RSO4x {
        padding: 12px 20px;
        border-radius: 12px;
        background-color: #fff;
        box-shadow: 0 0 12px rgba(15,61,145,.12);
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
    }
    .AddressItem_address-item__RSO4x .AddressItem_info__sQ3dK {
        font-size: 14px;
        line-height: 24px;
    }
    .AddressItem_address-item__RSO4x .AddressItem_info__sQ3dK .AddressItem_head-info__zijKc {
        margin-bottom: 4px;
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .AddressItem_address-item__RSO4x .AddressItem_info__sQ3dK .AddressItem_head-info__zijKc .AddressItem_address-default__p_F59 {
        font-size: 12px;
        font-weight: 400;
        line-height: 22px;
        color: #5dac46;
        display: flex;
        align-items: center;
        margin-left: 8px;
    }
    .AddressItem_address-item__RSO4x .AddressItem_info__sQ3dK .AddressItem_head-info__zijKc .AddressItem_address-default__p_F59 svg {
        width: 12px;
        height: 12px;
        margin-right: 4px;
    }
    .AddressItem_address-item__RSO4x .AddressItem_info__sQ3dK .AddressItem_btn-edit__BxaVH {
        font-size: 12px;
        line-height: 18px;
        color: #0f62f9;
        -webkit-text-decoration-line: underline;
        text-decoration-line: underline;
        border: none;
        outline: none;
        background-color: transparent;
        cursor: pointer;
    }
    .AddressModal_address-list__V3IMd>:not(:first-child) {
        margin-top: 20px;
    }
    .AddressItem_address-item__RSO4x.AddressItem_selected__5xQY4 .AddressItem_select__xkmny {
        background-color: #0072bc;
        border-color: #0072bc;
    }
    .AddressItem_address-item__RSO4x .AddressItem_select__xkmny {
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        border-radius: 100%;
        border: 1px solid #adadad;
        background-color: #fff;
        margin-left: 16px;
        padding: 5px;
        box-sizing: border-box;
    }
    .AddressItem_address-item__RSO4x .AddressItem_select__xkmny .AddressItem_select-in__Zoi7m {
        width: 8px;
        height: 8px;
        background-color: #fff;
        border-radius: 100%;
    }


</style>
</head>
<body style="background-color: #f0f2f5">
    @include('partial.header')

    <div class="MainLayout_content__hCocE">
        <div class="Checkout_checkout-page__N8EvD " style="margin-right: 3rem; margin-left:3rem">
            <nav>
                <ol class="Breadcrumbs_breadcrumbs__04vpL Checkout_breadcrumbs__A2Wrs">
                    <li class="Breadcrumbs_item__e9mbT">
                        <a href="{{URL::to('/')}}">
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li class="Breadcrumbs_item__e9mbT">
                        <a href="{{URL::to('/cart')}}">
                            <span>Giỏ hàng</span>
                        </a>
                    </li>
                    <li class="Breadcrumbs_item__e9mbT Breadcrumbs_item-active__3fOia">
                        <a href="#">
                            <span>Thanh toán</span>
                        </a>
                    </li>
                </ol>
            </nav>

            <div class="Checkout_content__C3vpR">
                <div class="Info_checkout-info__xynDA Checkout_left-content__ShDJC">
                    <div class="Checkout_box__90o3y">
                        <div class="Checkout_title__IrGV8 Info_info-title__nt_DJ">Giỏ hàng</div>
                        <div class="CheckoutSubTitle_checkout-sub-title__a_d_b Info_cart-title__l8uzY">
                            
                            <div class="CheckoutSubTitle_title__YbNym">
                                Giỏ hàng
                                
                                <span class="Info_lines-count__Ped7S">(<span id="slsp">3</span> sản phẩm - <span id="total2"></span>)</span>

                            </div>
                            <a href="{{URL::to('/cart')}}" class="Info_link__ZqQbY" >Nhấn để thay đổi</a>
                        </div>
                        <div class="CompactContent_compact-content__kcEKx Order_order-list-wrap__SnqRx">
                            <div class="CompactContent_container__sYVCu" style="height: fit-content">
                                <div>
                                    
                                    @php
                                            $total = 0;
                                            $productCount = 0;
                                    @endphp
                                    @if(Session::has('cart'))
                                        @foreach(Session::get('cart') as $key => $show_cart)
                                            @php
                                                $subtotal = $show_cart['product_price'] * $show_cart['product_quantity'];
                                                $total += $subtotal;
                                                $productCount++;
                                            @endphp
                                        <div name="">
                                            <div class="Order_order-item__8eoCE">
                                                <div class="Order_banner__FDIHJ cursor-point">
                                                    <img src="/uploads/product/{{$show_cart['product_img1']}}" alt="">
                                                </div>
                                                <div class="Order_info__Vvj_e">
                                                    <div class="Order_name__18Hvn">{{$show_cart['product_name']}}</div>
                                                    <div class="Order_price__HN8bY">
                                                        <div class="Order_origin__2PaKF">{{ str_replace(',', '.', number_format($show_cart['product_price_old'], 0, ',', '.')) }}
                                                                                                                                                                                đ</div>
                                                        <div class="Order_current__OKNtr">{{ str_replace(',', '.', number_format($show_cart['product_price'], 0, ',', '.')) }}
                                                                                        /{{$show_cart['product_unit']}}</div>
                                                    </div>
                                                    <div class="Order_quantity__cmR4V">{{$show_cart['product_quantity']}}</div>
                                                    <div class="Order_totalAmount__Mwe_r">{{ str_replace(',', '.', number_format($subtotal, 0, ',', '.')) }} đ</div>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach
                                    @endif

                                    
                                   

                                    

                                    

                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="" name="">
                        <div class="ReceiveInfoTab_receive-info__Vl8dW">
                            <div class="ReceiveInfoTab_tab__zQ_Dt">
                                <div class="ReceiveInfoTab_tab-item__yBcmB ReceiveInfoTab_active__ztxnN">
                                    <span class="ReceiveInfoTab_select-box__4_Y_E"></span>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M13.125 4.375H11.375V2.625C11.375 1.92881 11.0984 1.26113 10.6062 0.768845C10.1139 0.276562 9.44619 0 8.75 0C8.05381 0 7.38613 0.276562 6.89384 0.768845C6.40156 1.26113 6.125 1.92881 6.125 2.625V4.375H4.375C4.14294 4.375 3.92038 4.46719 3.75628 4.63128C3.59219 4.79538 3.5 5.01794 3.5 5.25V7H1.75C1.51794 7 1.29538 7.09219 1.13128 7.25628C0.967187 7.42038 0.875 7.64294 0.875 7.875C0.875 8.10706 0.967187 8.32962 1.13128 8.49372C1.29538 8.65781 1.51794 8.75 1.75 8.75H7.875V9.625H0.875C0.642936 9.625 0.420376 9.71719 0.256282 9.88128C0.0921873 10.0454 0 10.2679 0 10.5C0 10.7321 0.0921873 10.9546 0.256282 11.1187C0.420376 11.2828 0.642936 11.375 0.875 11.375H6.125V12.25H3.5V13.125C3.5 13.3571 3.59219 13.5796 3.75628 13.7437C3.92038 13.9078 4.14294 14 4.375 14H13.125C13.3571 14 13.5796 13.9078 13.7437 13.7437C13.9078 13.5796 14 13.3571 14 13.125V5.25C14 5.01794 13.9078 4.79538 13.7437 4.63128C13.5796 4.46719 13.3571 4.375 13.125 4.375ZM9.625 4.375H7.875V2.625C7.875 2.39294 7.96719 2.17038 8.13128 2.00628C8.29538 1.84219 8.51794 1.75 8.75 1.75C8.98206 1.75 9.20462 1.84219 9.36872 2.00628C9.53281 2.17038 9.625 2.39294 9.625 2.625V4.375Z" fill="#8E9AAB"></path></svg>
                                    Giao hàng tận nơi
                                </div>
                                <div class="ReceiveInfoTab_tab-item__yBcmB">
                                    <span class="ReceiveInfoTab_select-box__4_Y_E"></span>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M12.1625 0.4375C11.9875 0.175 11.725 0 11.375 0H2.625C2.275 0 2.0125 0.175 1.8375 0.4375C0 3.9375 0 4.1125 0 4.375C0 5.3375 0.7875 6.125 1.75 6.125V13.125C1.75 13.65 2.1 14 2.625 14H11.375C11.9 14 12.25 13.65 12.25 13.125V6.125C13.2125 6.125 14 5.3375 14 4.375C14 4.1125 14 3.9375 12.1625 0.4375ZM8.75 12.25V8.75H5.25V12.25H3.5V5.8625C3.7625 6.0375 4.025 6.125 4.375 6.125C4.9 6.125 5.3375 5.8625 5.6875 5.5125C6.0375 5.8625 6.475 6.125 7 6.125C7.525 6.125 7.9625 5.8625 8.3125 5.5125C8.6625 5.8625 9.1 6.125 9.625 6.125C9.975 6.125 10.2375 6.0375 10.5 5.8625V12.25H8.75Z" fill="#8E9AAB"></path></svg>
                                    Nhận hàng tại nhà thuốc

                                </div>
                            </div>
                            @php
                                $selectedAddress = null; // Biến để lưu trữ địa chỉ được chọn
                            @endphp

                            @foreach($addresses as $address)
                            @if ($address->is_default == 1)
                                @php
                                    $selectedAddress = $address; // Lưu địa chỉ được chọn
                                @endphp
                            @endif
                            @endforeach

                            @if ($selectedAddress)
                                <div class="ReceiveInfoTab_content__TzgqL" >
                                    <div class="InfoItem_info-item__pkegI InfoItem_has-value__Qjn8d" onclick="showFormShowAddress()">
                                        <div class="InfoItem_info__chTLQ">
                                            <svg class="InfoItem_fill__9nKcF" width="16" height="16" viewBox="0 0 16 16" fill="white"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.16764 5.66797C7.52431 5.66797 7.00098 6.1913 7.00098 6.8353C7.00098 7.47864 7.52431 8.0013 8.16764 8.0013C8.81098 8.0013 9.33431 7.47864 9.33431 6.8353C9.33431 6.1913 8.81098 5.66797 8.16764 5.66797ZM8.16764 9.0013C6.97298 9.0013 6.00098 8.02997 6.00098 6.8353C6.00098 5.63997 6.97298 4.66797 8.16764 4.66797C9.36231 4.66797 10.3343 5.63997 10.3343 6.8353C10.3343 8.02997 9.36231 9.0013 8.16764 9.0013Z" fill="inherit"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.16699 2.33398C5.68566 2.33398 3.66699 4.37198 3.66699 6.87598C3.66699 10.062 7.41633 13.166 8.16699 13.3313C8.91766 13.1653 12.667 10.0613 12.667 6.87598C12.667 4.37198 10.6483 2.33398 8.16699 2.33398ZM8.16699 14.334C6.97099 14.334 2.66699 10.6327 2.66699 6.87598C2.66699 3.81998 5.13433 1.33398 8.16699 1.33398C11.1997 1.33398 13.667 3.81998 13.667 6.87598C13.667 10.6327 9.36299 14.334 8.16699 14.334Z" fill="inherit"></path></svg>
                                            <div class="InfoItem_info-main__TreRj">
                                                <div class="InfoItem_label__KvNVo">Địa chỉ nhận hàng</div> 
                                                <div class="InfoItem_value__moOvD">
                                                    
                                                    <div class="ShippingAddress_customer-info__Wdcc_">
                                                        {{ $selectedAddress->user_name }}
                                                        <span></span>
                                                        {{ $selectedAddress->user_phone }}
                                                    </div>
                                                    <div >{{ $selectedAddress->user_address }}, {{ $selectedAddress->user_ward_text }}, {{ $selectedAddress->user_district_text }}, {{ $selectedAddress->user_city_text }}</div>
                                                </div>
                                            </div>
                                            <svg class="InfoItem_stroke__Tk_pS" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M8.5 5L15.5 12L8.5 19" stroke="#0F62F9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        </div>
                                    </div>
                                    <div class="InfoItem_info-item__pkegI InfoItem_has-value__Qjn8d" onclick="showformExpress()">
                                        <div class="InfoItem_info__chTLQ">
                                            <svg class="InfoItem_fill__9nKcF" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M22.3199 10.8452L21.6984 8.35915C21.8683 8.32305 21.9958 8.1723 21.9958 7.9917V7.59087C21.9958 6.72059 21.2878 6.01259 20.4175 6.01259H17.5867V5.1858C17.5867 4.75755 17.2383 4.40918 16.81 4.40918H2.37994C1.95169 4.40918 1.60331 4.75755 1.60331 5.1858V12C1.60331 12.2075 1.77155 12.3758 1.97911 12.3758C2.18663 12.3758 2.35491 12.2076 2.35491 12V5.1858C2.35491 5.17198 2.36611 5.16077 2.37994 5.16077H16.81C16.8238 5.16077 16.835 5.17198 16.835 5.1858V12.0001C16.835 12.2076 17.0033 12.3759 17.2108 12.3759C17.4183 12.3759 17.5866 12.2077 17.5866 12.0001V11.5741H22.0195C22.0199 11.5741 22.0202 11.5742 22.0205 11.5742C22.0209 11.5742 22.0212 11.5742 22.0215 11.5742C22.567 11.5745 23.0302 11.9326 23.1893 12.4259H22.0208C21.8133 12.4259 21.645 12.5942 21.645 12.8017V13.6034C21.645 14.2526 22.1732 14.7808 22.8225 14.7808H23.2484V16.4343H22.2658C21.943 15.5022 21.057 14.8309 20.0166 14.8309C18.9762 14.8309 18.0902 15.5022 17.7675 16.4343H17.5865V13.6033C17.5865 13.3958 17.4183 13.2275 17.2107 13.2275C17.0032 13.2275 16.8349 13.3958 16.8349 13.6033V16.4342H9.0383C8.71552 15.5021 7.82953 14.8308 6.78914 14.8308C5.74875 14.8308 4.86272 15.5021 4.53998 16.4342H2.37994C2.36611 16.4342 2.35491 16.423 2.35491 16.4091V15.5824H3.9833C4.19081 15.5824 4.35909 15.4142 4.35909 15.2066C4.35909 14.999 4.19086 14.8308 3.9833 14.8308H0.375797C0.168281 14.8308 0 14.999 0 15.2066C0 15.4142 0.168234 15.5824 0.375797 15.5824H1.60336V16.4091C1.60336 16.8374 1.95173 17.1858 2.37998 17.1858H4.40986C4.40977 17.1941 4.4092 17.2024 4.4092 17.2108C4.4092 18.5231 5.47688 19.5907 6.78914 19.5907C8.10141 19.5907 9.16908 18.5231 9.16908 17.2108C9.16908 17.2024 9.16852 17.1941 9.16842 17.1858H17.6373C17.6372 17.1941 17.6367 17.2024 17.6367 17.2108C17.6367 18.5231 18.7043 19.5907 20.0166 19.5907C21.3289 19.5907 22.3965 18.5231 22.3965 17.2108C22.3965 17.2024 22.396 17.1941 22.3959 17.1858H23.6242C23.8317 17.1858 24 17.0175 24 16.81V12.8016C24 11.812 23.2698 10.9898 22.3199 10.8452ZM17.5867 6.76413H20.4175C20.8734 6.76413 21.2443 7.13501 21.2443 7.59087V7.6159H17.5867V6.76413ZM17.5867 10.8226V8.36745H20.9258L21.5396 10.8226H17.5867ZM6.78914 18.8393C5.89125 18.8393 5.16075 18.1088 5.16075 17.2109C5.16075 16.3129 5.89125 15.5825 6.78914 15.5825C7.68703 15.5825 8.41753 16.3129 8.41753 17.2109C8.41753 18.1088 7.68703 18.8393 6.78914 18.8393ZM20.0167 18.8393C19.1188 18.8393 18.3883 18.1088 18.3883 17.2109C18.3883 16.3129 19.1188 15.5825 20.0167 15.5825C20.9146 15.5825 21.6451 16.3129 21.6451 17.2109C21.6451 18.1088 20.9146 18.8393 20.0167 18.8393ZM23.2485 14.0292H22.8225C22.5877 14.0292 22.3966 13.8382 22.3966 13.6033V13.1774H23.2484V14.0292H23.2485Z" fill="black"></path><path d="M6.78859 16.4341C6.36034 16.4341 6.01196 16.7825 6.01196 17.2107C6.01196 17.639 6.36034 17.9873 6.78859 17.9873C7.21684 17.9873 7.56521 17.639 7.56521 17.2107C7.56521 16.7825 7.21684 16.4341 6.78859 16.4341Z" fill="black"></path><path d="M20.0166 16.4341C19.5884 16.4341 19.24 16.7825 19.24 17.2107C19.24 17.639 19.5884 17.9873 20.0166 17.9873C20.4449 17.9873 20.7932 17.639 20.7932 17.2107C20.7932 16.7825 20.4449 16.4341 20.0166 16.4341Z" fill="black"></path><path d="M5.98788 13.2275H1.17786C0.970344 13.2275 0.802063 13.3958 0.802063 13.6033C0.802063 13.8109 0.970297 13.9791 1.17786 13.9791H5.98788C6.1954 13.9791 6.36368 13.8109 6.36368 13.6033C6.36368 13.3958 6.1954 13.2275 5.98788 13.2275Z" fill="black"></path><path d="M13.068 8.12688C12.9213 7.98016 12.6833 7.98016 12.5366 8.12693L9.19477 11.4687L7.45632 9.73024C7.30955 9.58347 7.07161 9.58347 6.92489 9.73024C6.77813 9.877 6.77813 10.1149 6.92489 10.2617L8.92909 12.2658C9.00245 12.3392 9.09863 12.3759 9.19477 12.3759C9.29091 12.3759 9.38715 12.3392 9.46046 12.2658L13.068 8.65835C13.2147 8.51153 13.2147 8.27364 13.068 8.12688Z" fill="black"></path></svg>
                                            <div class="InfoItem_info-main__TreRj">
                                                <div class="InfoItem_label__KvNVo">
                                                    Phương thức vận chuyển
                                                </div>
                                                <div class="InfoItem_value__moOvD">
                                                    @foreach($shipping as $key => $ship)
                                                    <div class="ShippingServices_shipping-selected__xgo3F">
                                                        {{$ship->shipping_name}}
                                                        <div class="ShippingServices_price__YQoqG">{{number_format($ship->shipping_price)}} đ</div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                
                                            </div>
                                            <svg class="InfoItem_stroke__Tk_pS" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M8.5 5L15.5 12L8.5 19" stroke="#0F62F9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="ReceiveInfoTab_content__TzgqL" onclick="showFormAddress()">
                                    <div class="InfoItem_info-item__pkegI">
                                        <div class="InfoItem_info__chTLQ">
                                            <svg class="InfoItem_fill__9nKcF" width="16" height="16" viewBox="0 0 16 16" fill="white"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.16764 5.66797C7.52431 5.66797 7.00098 6.1913 7.00098 6.8353C7.00098 7.47864 7.52431 8.0013 8.16764 8.0013C8.81098 8.0013 9.33431 7.47864 9.33431 6.8353C9.33431 6.1913 8.81098 5.66797 8.16764 5.66797ZM8.16764 9.0013C6.97298 9.0013 6.00098 8.02997 6.00098 6.8353C6.00098 5.63997 6.97298 4.66797 8.16764 4.66797C9.36231 4.66797 10.3343 5.63997 10.3343 6.8353C10.3343 8.02997 9.36231 9.0013 8.16764 9.0013Z" fill="inherit"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.16699 2.33398C5.68566 2.33398 3.66699 4.37198 3.66699 6.87598C3.66699 10.062 7.41633 13.166 8.16699 13.3313C8.91766 13.1653 12.667 10.0613 12.667 6.87598C12.667 4.37198 10.6483 2.33398 8.16699 2.33398ZM8.16699 14.334C6.97099 14.334 2.66699 10.6327 2.66699 6.87598C2.66699 3.81998 5.13433 1.33398 8.16699 1.33398C11.1997 1.33398 13.667 3.81998 13.667 6.87598C13.667 10.6327 9.36299 14.334 8.16699 14.334Z" fill="inherit"></path></svg>
                                            <div class="InfoItem_info-main__TreRj">
                                                <div class="InfoItem_label__KvNVo">Nhập địa chỉ nhận hàng</div>
                                            </div>
                                            <svg class="InfoItem_fill__9nKcF" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M9.99992 3.33325C9.7789 3.33325 9.56694 3.42105 9.41066 3.57733C9.25438 3.73361 9.16658 3.94557 9.16658 4.16659V9.16658H4.16659C3.94557 9.16658 3.73361 9.25438 3.57733 9.41066C3.42105 9.56694 3.33325 9.7789 3.33325 9.99992C3.33325 10.2209 3.42105 10.4329 3.57733 10.5892C3.73361 10.7455 3.94557 10.8333 4.16659 10.8333H9.16658V15.8333C9.16658 16.0543 9.25438 16.2662 9.41066 16.4225C9.56694 16.5788 9.7789 16.6666 9.99992 16.6666C10.2209 16.6666 10.4329 16.5788 10.5892 16.4225C10.7455 16.2662 10.8333 16.0543 10.8333 15.8333V10.8333H15.8333C16.0543 10.8333 16.2662 10.7455 16.4225 10.5892C16.5788 10.4329 16.6666 10.2209 16.6666 9.99992C16.6666 9.7789 16.5788 9.56694 16.4225 9.41066C16.2662 9.25438 16.0543 9.16658 15.8333 9.16658H10.8333V4.16659C10.8333 3.94557 10.7455 3.73361 10.5892 3.57733C10.4329 3.42105 10.2209 3.33325 9.99992 3.33325V3.33325Z" fill="#112950"></path></svg>
                                        </div>
                                    </div>
                                </div>

                            @endif


                            
                            

                            

                        </div>
                    </div> 

                    <div class="Info_checkout-info-section__3bs6L Checkout_box__90o3y">
                        <div class="CheckoutSubTitle_checkout-sub-title__a_d_b">
                            <div class="CheckoutSubTitle_title__YbNym">Chọn hình thức thanh toán</div>
                        </div>
                        <div class="PaymentMethod_payment-method-content__Mwlfb">
                            <div class="PaymentMethod_payment-method-list__RN_pv PaymentMethod_desktop__87RGS">

                                <div id="cash" class="PaymentMethod_pmt-item__xLsSo  PaymentMethod_select-able__9T36A PaymentMethod_active__KaSrA" onclick="selectPaymentMethod(this)">
                                    <div class="PaymentMethod_icon__CyEz3">
                                        <img src="uploads/image/tienmat.png" alt="" width="100%">
                                    </div>
                                    <div class="PaymentMethod_info__wZSot">
                                        <div class="PaymentMethod_name__mWhRk">Tiền mặt</div>
                                        <div class="PaymentMethod_description___mt3Z">
                                            Thanh toán bằng tiền mặt khi nhận hàng
                                        </div>
                                    </div>
                                    <div class="PaymentMethod_select-icon__NhfbH">
                                        <input name="payments" type="hidden" value="cash">
                                    </div>
                                </div>
                                <div id="vnpay"  class="PaymentMethod_pmt-item__xLsSo PaymentMethod_select-able__9T36A" onclick="selectPaymentMethod(this)">
                                    <div class="PaymentMethod_icon__CyEz3">
                                        <img src="uploads/image/vnpay.png" alt="" width="100%">
                                    </div>
                                    <div class="PaymentMethod_info__wZSot">
                                        <div class="PaymentMethod_name__mWhRk">VNPay</div>
                                        <div class="PaymentMethod_description___mt3Z">
                                            Thanh toán bằng VNPay
                                        </div>
                                    </div>
                                    <div class="PaymentMethod_select-icon__NhfbH">
                                        <input name="payments" type="hidden" value="vnpay">
                                    </div>
                                </div>

                                <div id="momo" class="PaymentMethod_pmt-item__xLsSo PaymentMethod_select-able__9T36A  " onclick="selectPaymentMethod(this)">
                                    <div class="PaymentMethod_icon__CyEz3">
                                        <img src="uploads/image/momo.png" alt="" width="100%">
                                    </div>
                                    <div class="PaymentMethod_info__wZSot">
                                        <div class="PaymentMethod_name__mWhRk">MoMo</div>
                                        <div class="PaymentMethod_description___mt3Z">
                                            Thanh toán bằng MoMo
                                        </div>
                                    </div>
                                    <div class="PaymentMethod_select-icon__NhfbH">
                                        <input name="payments" type="hidden" value="momo">
                                    </div>
                                </div>

                                
                                

                                
                                
                                


                                
                            </div>
                        </div>
                    </div> 
                </div> 

                <div class="Summary_checkout-summary__AQg5g Checkout_right-content__ESczr">
                    <form action="{{URL::to('/pay')}}" method="POST">
                    @csrf
                        <div class="Summary_box__m1YmJ Checkout_box__90o3y">
                            <div class="Summary_title__OuCA_ Summary_content-between__UCQnB">
                                Mã khuyến mãi
                                <a class="VoucherApply_btn-change-voucher__1cOEa" onclick="showformDiscount()">
                                    Chọn mã
                                </a>
                            </div>
                            <div class="Summary_separate__26FAP"></div>
                            <div class="Summary_title__OuCA_">Ghi chú đơn hàng</div>
                            
                                <div class="TextAreaField_input-text-field__g7VN3">
                                    <div class="TextAreaField_input-group__aaA_N">
                                        <textarea name="bill_note" id="textArea"  maxlength="225" style="min-height: 40px"></textarea>
                                        <div id="charCount" class="TextAreaField_count__p1_H0">0/255</div>
                                    </div>
                                </div>
                                <script>
                                    document.getElementById('textArea').addEventListener('input', function() {
                                    var text = this.value;
                                    var maxLength = parseInt(this.getAttribute('maxlength'));
                                    
                                    // Đếm số ký tự đã nhập và cập nhật vào phần tử hiển thị
                                    var charCountElement = document.getElementById('charCount');
                                    charCountElement.textContent = text.length + '/' + maxLength;
                                });
                                </script>
                            
                        </div>
                        <div class="Summary_box__m1YmJ Checkout_box__90o3y">
                        
                            <input type="hidden" value="{{ Session::get('user_id') }}" name="user_id">
                            <input type="hidden" value="cash" name="payment_method">
                            <input type="hidden" value="" name="bill_date">
                            <input type="hidden" value="" name="bill_totalAll">
                            <input type="hidden" value="" name="bill_total">
                            <input type="hidden" value="0" name="bill_discount">
                            <input type="hidden" value="" name="bill_shipping">
                            
                            @if ($selectedAddress)
                            <input type="hidden" value="{{$selectedAddress->id_address}}" name="id_address">
                            @endif

                            @foreach(Session::get('cart') as $key => $show_cart)
                                <input type="hidden" value="{{$show_cart['product_id']}}" name="product_id[{{$key}}]">
                                <input type="hidden" value="{{$show_cart['product_quantity']}}" name="product_quantity[{{$key}}]">
                                <input type="hidden" value="{{$show_cart['product_price']}}" name="product_price[{{$key}}]">
                                <input type="hidden" value="{{$show_cart['product_price_old']}}" name="product_price_old[{{$key}}]">
                                
                            @endforeach

                            

                            <div class="Checkout_title__IrGV8">Tổng tiền</div>
                            <div class="Summary_content-between__UCQnB">
                                <div class="Summary_label__65snn">Tạm tính</div>
                                <div class="Summary_base-amount__jw8at">
                                    <b class="Summary_current__85VT4" id="total">0</b>
                                </div>
                            </div>
                            
                            <div class="Summary_content-between__UCQnB" id="discountPriceDiv" style="display:none;">
                                <div>
                                    <div class="Summary_label__65snn">Phiếu giảm giá</div>
                                    
                                </div>
                                <div class="Summary_shipping-fee__UBvPO"  >- <span id="discountPriceValue">0</span> </div>
                            </div>
                            <div class="Summary_content-between__UCQnB" id="discountPercentDiv" style="display:none;">
                                <div>
                                    <div class="Summary_label__65snn">Phiếu giảm giá</div>
                                    <div class="Summary_sub-label__Q87x9">( <span id="discountPercentValue">0</span> %)</div>
                                    
                                </div>
                                <div class="Summary_shipping-fee__UBvPO"  >- <span id="discountAmountValue"></span> </div>
                            </div>
                            

                            <div class="Summary_content-between__UCQnB">
                                @foreach($shipping as $key => $ship)
                                <div>
                                    <div class="Summary_label__65snn">Phí vận chuyển</div>
                                    @if($ship->shipping_method == 0)
                                        <div class="Summary_sub-label__Q87x9">(Nhanh)</div>
                                    @else
                                        <div class="Summary_sub-label__Q87x9">(Tiêu chuẩn)</div>
                                    @endif
                                </div>
                                <div class="Summary_shipping-fee__UBvPO" id="shipping">{{number_format($ship->shipping_price)}} đ</div>
                                @endforeach
                            </div>
                            <div class="Summary_content-between__UCQnB">
                                <div class="">
                                    <span class="Summary_label__65snn">Thành tiền</span>
                                    <span class="Summary_sub-label__Q87x9 Summary_vat-included__skbkn">(Đã bao gồm VAT)</span>
                                </div>
                                <div style="display:none !important;" id="totalAmountAfterDiscount"></div>
                                <div class="Summary_total-amount__FX00V" id="totalAll">000 đ</div>
                            </div>
                            
                            <div class="Summary_box-button-submit-order__3JugJ">
                                <button type="submit" class="Summary_button-submit-order__lEc_5" id="btncash">Đặt hàng</button>
                                <button type="button" onclick="window.location.href='{{URL::to('/vnpay-payments')}}'" class="Summary_button-submit-order__lEc_5" id="btnvnpay" style="display:none">Thanh toán VNPay</button>
                                <button type="button" onclick="window.location.href='{{URL::to('/momo-payments')}}'" class="Summary_button-submit-order__lEc_5" id="btnmomo" style="display:none">Thanh toán Momo</button>
                               
                            </div>
                        
                            
                        </div>
                    </form>
                    <script>
                        const divCash = document.getElementById('cash');
                        const divVNPay = document.getElementById('vnpay');
                        const divMomo = document.getElementById('momo');
                        const btnCash = document.getElementById('btncash');
                        const btnVnpay = document.getElementById('btnvnpay');
                        const btnMomo = document.getElementById('btnmomo');
                        divCash.addEventListener('click', () => {
                            btnCash.style.display = 'block'; 
                            btnVnpay.style.display = 'none';  
                            btnMomo.style.display = 'none';
                        });
                        divVNPay.addEventListener('click', () => {
                            btnCash.style.display = 'none'; 
                            btnVnpay.style.display = 'block';  
                            btnMomo.style.display = 'none';
                        });
                        divMomo.addEventListener('click', () => {
                            btnCash.style.display = 'none'; 
                            btnVnpay.style.display = 'none';  
                            btnMomo.style.display = 'block';
                        });
                        

                    </script>

                    <script>
                        var currentDate = new Date();  // Lấy ngày hiện tại
                        var formattedDate = currentDate.toISOString().split('T')[0];  // Chuyển định dạng thành yyyy-mm-dd

                        var hiddenInput = document.querySelector("input[name='bill_date']");
                        hiddenInput.value = formattedDate;
                        var selectedPaymentMethod = "";
                        function selectPaymentMethod(element) {
                            // Xóa class "PaymentMethod_active__KaSrA" từ tất cả các div
                            var paymentMethodDivs = document.getElementsByClassName("PaymentMethod_pmt-item__xLsSo");
                            for (var i = 0; i < paymentMethodDivs.length; i++) {
                                paymentMethodDivs[i].classList.remove("PaymentMethod_active__KaSrA");
                            }
                    
                            // Thêm class "PaymentMethod_active__KaSrA" vào div được chọn
                            element.classList.add("PaymentMethod_active__KaSrA");
                    
                            
                            
                            // Lấy giá trị của input bên trong div được chọn
                            var selectedInput = element.querySelector("input[name='payments']");
                            var selectedValue = selectedInput.value;
                    


                            var hiddenInput = document.querySelector("input[name='payment_method']");
                            hiddenInput.value = selectedValue;
                            
                            
                    
                            selectedPaymentMethod = selectedValue;
                            // Sử dụng giá trị để làm gì đó
                            console.log("Selected value: " + selectedValue);

                            var paymentType = paymentMethod.querySelector('input[name="payments"]').value;

       
                            
                        }
                       
                    </script>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <div style="position: relative; z-index:10; display:none;" id="formAddress">
        <div class="ReactModal__Overlay ReactModal__Overlay--after-open Modal_base-modal-overlay__e_4nO">
            <div class="ReactModal__Content ReactModal__Content--after-open Modal_base-modal-content__TMVaT">
                <div class="Modal_header__Efm1l">
                    <div class="Modal_title__ZcknN" >Thay đổi địa chỉ nhận hàng</div>
                    <button class="Modal_close-icon__Nz3e1" onclick="hideFormAddress()">
                        <svg stroke="#112950" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="1.5"><path d="M17.9964 6L6.00391 17.9925" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.0125 18.0125L6 6" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
                <div class="Modal_body__cNW47" style="margin: 5px">
                    <div class="Tab_app-tab__LoxYH Tab_center__U239Z" >
                        <div class="Tab_tab-item__TiFM8" onclick="showFormShowAddress()">Chọn địa chỉ có sẵn</div>
                        <div class="Tab_tab-item__TiFM8 Tab_active__RJZQ2">Thêm địa chỉ mới</div>
                    </div>
                    <div class="AddressModal_address-edit-form__Aj5g6" >
                        <form action="{{URL::to('/addAddress')}}" method="POST" class="AddressUpdate_address-form__3Lp59" onsubmit="return FormAddress()">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Session::get('user_id') }}">
                            <div class="InputTextField_input-text-field__Yvohj AddressUpdate_input__5v3Z_">
                                <label for="">Tên người nhận
                                    <span>*</span>
                                </label>
                                <div class="InputTextField_input-group__Cyzv4">
                                    <input name="user_name" type="text" class="AddressUpdate_input__5v3Z_" placeholder="Nhập tên người nhận">
                                </div>
                                <div style="display: none" id="erName" class="InputTextField_feedback__5PBft">Vui lòng nhập thông tin!</div>
                            </div>
                            <div class="AddressUpdate_input-phone__ocVmt">
                                <div class="InputTextField_input-text-field__Yvohj AddressUpdate_input__5v3Z_">
                                    <label for="">Số điện thoại
                                        <span>*</span>
                                    </label>
                                    <div class="InputTextField_input-group__Cyzv4">
                                        <input name="user_phone" type="text" placeholder="0000-000-000" class="AddressUpdate_input__5v3Z_" value="{{ Session::get('user_phone') }}">
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="SelectDropdownAddressField_select-address-wrapper__4F3t7 AddressUpdate_address__lmkWy">
                                <label for="">Tỉnh/Thành phố</label>
                                <div class="SelectDropdownAddressField_select-address__AiKI_">
                                    <input type="hidden" value="1" name="user_city_text" id="user_city_text">
                                    <select name="user_city" id="city" class="custom-select" >
                                        <option value="">Chọn tỉnh thành</option>
                                        
                                        
                                    </select>
                                    
                                    
                                </div>
                            </div>
                            <div class="SelectDropdownAddressField_select-address-wrapper__4F3t7 AddressUpdate_address__lmkWy">
                                <label for="">Quận/Huyện</label>
                                <div class="SelectDropdownAddressField_select-address__AiKI_">
                                        <input type="hidden" value="" name="user_district_text" id="user_district_text">
                                        <select name="user_district" id="district" class="custom-select" >
                                            <option value="">Chọn quận huyện</option>
                                            
                                        </select>
                                  
                                    
                                </div>
                            </div>
                            <div class="SelectDropdownAddressField_select-address-wrapper__4F3t7 AddressUpdate_address__lmkWy">
                                <label for="">Phường/Xã</label>
                                <div class="SelectDropdownAddressField_select-address__AiKI_">
                                    
                                        <input type="hidden" value="" name="user_ward_text" id="user_ward_text">
                                        <select name="user_ward" id="ward" class="custom-select">
                                            <option value="">Chọn phường xã</option>
                                            
                                        </select>
                                        
                                   
                                    
                                </div>
                            </div>
                            <script>
                                function updateAddressText() {
                                  var selectElement1 = document.getElementById("city");
                                  var selectElement2 = document.getElementById("district");
                                  var selectElement3 = document.getElementById("ward");

                                  var selectedOption1 = selectElement1.options[selectElement1.selectedIndex];
                                  var selectedOption2 = selectElement2.options[selectElement2.selectedIndex];
                                  var selectedOption3 = selectElement3.options[selectElement3.selectedIndex];

                                  var cityName = selectedOption1.text;
                                  var districtName = selectedOption2.text;
                                  var wardName = selectedOption3.text;
                                  
                                  document.getElementById("user_city_text").value = cityName;
                                  document.getElementById("user_district_text").value = districtName;
                                  document.getElementById("user_ward_text").value = wardName;
                                }
                            </script>
                            <div class="InputTextField_input-text-field__Yvohj InputTextField_error__K4FKX">
                                <label for="">Địa chỉ người nhận
                                    <span>*</span>
                                </label>
                                <div class="InputTextField_input-group__Cyzv4">
                                    <input name="user_address" type="text" placeholder="Ví dụ: Số nhà/tên toà nhà cụ thể..." onclick="updateAddressText()">
                                </div>
                                <div style="display: none" id="erAddress" class="InputTextField_feedback__5PBft">Vui lòng nhập thông tin!</div>
                            </div>
                            <div class="InputTextField_input-text-field__Yvohj">
                                <label for="">Email</label>
                                <div class="InputTextField_input-group__Cyzv4">
                                    
                                    <input name="user_email" type="text" placeholder="Nhập địa chỉ email" value="{{ Session::get('user_email') }}">
                                    
                                </div>
                            </div>
                            <div class="TextAreaField_input-text-field__g7VN3">
                                <label for="">Ghi chú</label>
                                <div class="TextAreaField_input-group__aaA_N">
                                    <textarea name="user_note" id="user_note"  maxlength="255" placeholder="Nếu bạn có lời nhắn thêm, vui lòng cho biết"></textarea>
                                    <div class="TextAreaField_count__p1_H0" id="char_count">0/225</div>
                                </div>
                            </div>
                            <label for="" class="CheckBoxField_pc-checkbox-field__Di_CZ CheckBoxField_checkbox-center__GvELE">
                                <input type="checkbox" name="is_default" value="0" onclick="toggleCheckboxValue(this)">
                                Đặt làm địa chỉ mặc định
                            </label>
                            <button type="submit" class="Button_pc-button__GX6DG Button_primary__iy__x AddressModal_btn-submit-address-form__HvilQ Button_full-width__L7dF2">
                                Xác nhận
                            </button>
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="position: relative; z-index:11; display:none;" id="formShowAddress">
        <div class="ReactModal__Overlay ReactModal__Overlay--after-open Modal_base-modal-overlay__e_4nO">
            <div class="ReactModal__Content ReactModal__Content--after-open Modal_base-modal-content__TMVaT">
                <div class="Modal_header__Efm1l">
                    <div class="Modal_title__ZcknN">Thay đổi địa chỉ nhận hàng</div>
                    <button class="Modal_close-icon__Nz3e1" onclick="hideformShowAddress()">
                        <svg stroke="#112950" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="1.5"><path d="M17.9964 6L6.00391 17.9925" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.0125 18.0125L6 6" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
                <div class="Modal_body__cNW47">
                    <div class="Tab_app-tab__LoxYH Tab_center__U239Z">
                        <div class="Tab_tab-item__TiFM8 Tab_active__RJZQ2">
                            Chọn địa chỉ có sẵn
                        </div>
                        <div class="Tab_tab-item__TiFM8" onclick="showFormAddress()">Thêm địa chỉ mới</div>
                    </div>
                    <form id="formUpdateMD" >
                        @csrf
                        <div class="AddressModal_address-list__V3IMd">
                        
                    
                          
                        
                        @if(Session::has('user_id'))
                            
                        @foreach($addresses as $address)
                        <input type="hidden" value="{{ Session::get('user_id') }}" name="user_id">
                        
                            
                            <div class="AddressItem AddressItem_address-item__RSO4x @if ($address->is_default == 1) AddressItem_selected__5xQY4 @endif" onclick="toggleAddressItem(this, '{{ $address->id_address }}')" data-id="{{ $address->id_address }}" >
                                <div class="AddressItem_info__sQ3dK">
                                    <div class="AddressItem_head-info__zijKc">
                                        @if ($address->is_default == 1)
                                        <span class="AddressItem_address-default__p_F59">
                                            <svg width="61" height="60" viewBox="0 0 61 60" fill="#5DAC46"><path d="M30.5 0C13.9573 0 0.5 13.4573 0.5 30C0.5 46.5427 13.9573 60 30.5 60C47.0427 60 60.5 46.5427 60.5 30C60.5 13.4573 47.0427 0 30.5 0Z" fill="inherit"></path><path d="M45.7057 23.6432L29.4555 39.8929C28.968 40.3804 28.3281 40.6258 27.6881 40.6258C27.0482 40.6258 26.4082 40.3804 25.9207 39.8929L17.7958 31.768C16.8181 30.7907 16.8181 29.2105 17.7958 28.2332C18.7732 27.2554 20.3529 27.2554 21.3307 28.2332L27.6881 34.5906L42.1708 20.1083C43.1482 19.1306 44.7279 19.1306 45.7057 20.1083C46.683 21.0857 46.683 22.6654 45.7057 23.6432Z" fill="#FAFAFA"></path></svg>
                                            Mặc định
                                        </span>
                                        @endif
                                    </div>
                                    <div>{{ $address->user_name }}</div>
                                    <div>{{ $address->user_phone }}</div>
                                    <div>
                                        {{ $address->user_address }}, {{ $address->user_ward_text }}, {{ $address->user_district_text }}, {{ $address->user_city_text }}

                                        <button class="AddressItem_btn-edit__BxaVH">Chỉnh sửa</button>
                                    </div>
                                </div>
                                <input style="display: none" type="checkbox" class="checkboxMD" @if ($address->is_default == 1) checked @endif>
                                <div class="AddressItem_select__xkmny">
                                    
                                    <div class="AddressItem_select-in__Zoi7m"></div>
                                    
                                </div>
                            </div>
                           

                        @endforeach
                        @endif
                        
                        <button id="update-address"  class="Button_pc-button__GX6DG Button_primary__iy__x Button_full-width__L7dF2">
                            Xác nhận
                        </button>
                    
                        
                        </div>
                    </form>
                <script>
                    var selectedDivId = null;
                    function toggleAddressItem(element, divId) {
                       
                       // Xóa lớp "AddressItem_selected__5xQY4" khỏi tất cả các phần tử
                       var addressItems = document.querySelectorAll(".AddressItem");
                       var checkbox = element.querySelector(".checkboxMD");
                       

                       addressItems.forEach(function(item) {
                           item.classList.remove("AddressItem_selected__5xQY4");
                           item.classList.remove("AddressItem_address-default__p_F59");
                           var checkbox = item.querySelector(".checkboxMD");
                           checkbox.checked = false;
                       });
               
                       // Thêm hoặc xóa lớp "AddressItem_selected__5xQY4" cho phần tử được nhấp
                       element.classList.toggle("AddressItem_selected__5xQY4");
                       var isSelected = element.classList.contains("AddressItem_selected__5xQY4");
                       
                       checkbox.checked = isSelected;
                       
                       selectedDivId = divId;

                   }

                    $(document).ready(function() {
                        

                        
                        
                        $('.checkboxMD').click(function() {
                            var isChecked = $(this).is(':checked');
                            var parentDiv = $(this).closest('.AddressItem');

                            if (isChecked) {
                                selectedDivId = parentDiv.attr('data-id'); // Lưu trữ ID của div được chọn
                            } else {
                                selectedDivId = null; // Đặt lại biến selectedDivId khi checkbox bị bỏ chọn
                            }
                        });
                        $('#update-address').click(function(e) {
                            e.preventDefault();
                    
                            
                            
                            var formData = {
                                user_id: $('input[name="user_id"]').val(),
                                address_id: selectedDivId,
                                _token: '{{ csrf_token() }}'
                              
                            };
                    
                            // Gửi yêu cầu Ajax tới controller
                            $.ajax({
                                url: '/update-address-md',
                                type: 'POST',
                                data: formData,
                                
                                success: function(response) {
                                    // Xử lý phản hồi từ controller (nếu cần)
                                    console.log(response);
                                },
                                error: function(xhr, status, error) {
                                    // Xử lý lỗi (nếu có)
                                    
                                    
                                    console.log(formData);
                                    console.log("Error:", error);
                                    console.log("Status:", status);
                                    console.log("XHR object:", xhr);
                                }
                            });
                            location.reload();
                        });
                    });
                </script>
                
               
                </div>
            </div>
        </div>
    </div>
    <div style="position: relative; z-index:17; display:none;" id="formExpress">
        <div class="ReactModal__Overlay ReactModal__Overlay--after-open Modal_base-modal-overlay__e_4nO">
            <div class="ReactModal__Content ReactModal__Content--after-open Modal_base-modal-content__TMVaT">
                <div class="Modal_header__Efm1l">
                    <div class="Modal_title__ZcknN">Chọn đơn vị vận chuyển</div>
                    <button class="Modal_close-icon__Nz3e1" onclick="hideformExpress()">
                        <svg stroke="#112950" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="1.5"><path d="M17.9964 6L6.00391 17.9925" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.0125 18.0125L6 6" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
                <div class="Modal_body__cNW47 ShippingServices_body__J9Cot">
                    <div class="ShippingServices_group__feFkw">
                        <div class="ShippingServices_group-title__OwITa">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="#5E6F88"><path d="M11.0345 7.09216C11.8087 7.44977 11.8087 8.55023 11.0345 8.90784L6.91931 10.8085C6.25667 11.1146 5.5 10.6306 5.5 9.90071L5.5 6.09929C5.5 5.36938 6.25667 4.88539 6.91931 5.19145L11.0345 7.09216Z" fill="inherit"></path></svg>
                            Nhanh
                        </div>
                        <div class="ShippingServices_shipping-list__V89bK">

                            {{-- ShippingServices_active__KSH2d ShippingServices_select-able__Wwo2r --}}
                            @foreach($orders0 as $key => $order0)
                            <div style="margin-top: 5px" class="ShippingServices_shipping-item__dlrPW shipping-item" onclick="selectShippingItem({{ $order0->shipping_id }})" data-is-default="{{$order0->is_default}}">
                                <div class="ShippingServices_name__4Ptet">
                                    {{$order0->shipping_name}}
                                </div>
                                <div class="ShippingServices_content__mVJvO">
                                    <div class="ShippingServices_info__oC2sC">
                                        <div class="ShippingServices_row__k2jBo">
                                            <span class="ShippingServices_label__ToERL">Hình thức</span>
                                            <span class="ShippingServices_value__kFEM0">Nhanh</span>
                                        </div>
                                        <div class="ShippingServices_row__k2jBo">
                                            <span class="ShippingServices_label__ToERL">Phí vận chuyện: </span>
                                            <span class="ShippingServices_value__kFEM0">{{number_format($order0->shipping_price)}} đ</span>
                                        </div>
                                    </div>
                                    <div class="ShippingServices_select-icon__PYukh"></div>
                                </div>
                            </div>
                            @endforeach
                            

                            <script>
                                // Đợi tất cả nội dung trang web được tải xong
                                $(document).ready(function() {
                                    // Lặp qua tất cả các div có class shipping-item
                                    $(".shipping-item").each(function() {
                                        // Kiểm tra xem div có attribute data-is-default="1" không
                                        if ($(this).data("is-default") === 1) {
                                            // Nếu có, thêm class mặc định cho div này
                                            $(this).addClass("ShippingServices_active__KSH2d ShippingServices_select-able__Wwo2r");
                                        }
                                    });

                                    // Lắng nghe sự kiện click cho các div có class shipping-item
                                    $(".shipping-item").on("click", function() {
                                        // Xóa hết class ShippingServices_active__KSH2d và ShippingServices_select-able__Wwo2r trên tất cả các div
                                        $(".shipping-item").removeClass("ShippingServices_active__KSH2d ShippingServices_select-able__Wwo2r");

                                        // Thêm class ShippingServices_active__KSH2d và ShippingServices_select-able__Wwo2r vào div được nhấn
                                        $(this).addClass("ShippingServices_active__KSH2d ShippingServices_select-able__Wwo2r");
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="ShippingServices_group__feFkw">
                        <div class="ShippingServices_group-title__OwITa">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="#5E6F88"><path d="M11.0345 7.09216C11.8087 7.44977 11.8087 8.55023 11.0345 8.90784L6.91931 10.8085C6.25667 11.1146 5.5 10.6306 5.5 9.90071L5.5 6.09929C5.5 5.36938 6.25667 4.88539 6.91931 5.19145L11.0345 7.09216Z" fill="inherit"></path></svg>
                            Tiêu chuẩn
                        </div>
                        <div class="ShippingServices_shipping-list__V89bK">
                            @foreach($orders1 as $key => $order1)
                            <div style="margin-top: 5px" class="ShippingServices_shipping-item__dlrPW shipping-item" onclick="selectShippingItem({{ $order1->shipping_id }})" data-is-default="{{$order1->is_default}}">
                                <div class="ShippingServices_name__4Ptet">
                                    {{$order1->shipping_name}}
                                </div>
                                <div class="ShippingServices_content__mVJvO">
                                    <div class="ShippingServices_info__oC2sC">
                                        <div class="ShippingServices_row__k2jBo">
                                            <span class="ShippingServices_label__ToERL">Hình thức</span>
                                            <span class="ShippingServices_value__kFEM0">Tiêu chuẩn</span>
                                        </div>
                                        <div class="ShippingServices_row__k2jBo">
                                            <span class="ShippingServices_label__ToERL">Phí vận chuyện: </span>
                                            <span class="ShippingServices_value__kFEM0">{{number_format($order1->shipping_price)}} đ</span>
                                        </div>
                                    </div>
                                    <div class="ShippingServices_select-icon__PYukh"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="Modal_footer__LiOtZ ModalCheckout_footer__qeson">
                    <script>
                        function selectShippingItem(selectedItemId) {
                            // Lấy thẻ input có id="selectedShippingItemId"
                            const input = document.getElementById('selectedShippingItemId');
                    
                            // Gán giá trị của selectedItemId vào thẻ input
                            input.value = selectedItemId;
                        }
                    </script>
                    <form action="{{URL::to('/update-shipping-method')}}" method="POST">
                        @csrf
                        <input type="hidden" id="selectedShippingItemId" name="selected_shipping_item_id" value="">
                        <button type="button" class="Button_pc-button__GX6DG Button_secondary__wQTg8 Modal_back__8eLgL" onclick="hideformExpress()">Bỏ qua</button>
                        <button type="submit" class="Button_pc-button__GX6DG Button_primary__iy__x Button_bold__gYo6N">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    
    </div>
    <div  style="position: relative; z-index: 13;display:none; " id="formDiscount">
        <div class="ReactModal__Overlay ReactModal__Overlay--after-open Modal_base-modal-overlay__e_4nO">
            <div class="ReactModal__Content ReactModal__Content--after-open Modal_base-modal-content__TMVaT">
            
                <div class="BaseVoucherApplyModal_content__CPi2g">
                    <div class="BaseVoucherApplyModal_headerDesktop__7u_au">
                        <h2 class="BaseVoucherApplyModal_titleDesktop__3PiW_">Mã giảm giá của bạn</h2>
                        <button class="BaseVoucherApplyModal_closeIconDesktop___89ae" onclick="hideformDiscount()">
                            <svg stroke="#112950" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="1.5"><path d="M17.9964 6L6.00391 17.9925" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.0125 18.0125L6 6" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="BaseVoucherApplyModal_body__Jv4rx">
                            <form id="checkCodeForm">
                                @csrf
                                <div class="VoucherInputField_voucher-input__fT8vY">
                                    <div class="InputTextField_input-text-field__Yvohj VoucherInputField_input__t6hPa InputTextField_full-border__X_eEf InputTextField_size-lg__hbVRh">
                                        <div class="InputTextField_input-group__Cyzv4">
                                            <input name="discount_code" type="text" placeholder="Nhập mã giảm giá" class="VoucherInputField_input__t6hPa discountCode" value="">
                                        </div>
                                    </div>
                                    <button type="submit" class="Button_pc-button__GX6DG Button_primary__iy__x VoucherInputField_btn-submit__mZoAQ">Áp dụng</button>
                                </div>
                                <div class="VoucherInputField_error-msg__kKPQn" style="display: none;">Mã giảm giá không hợp lệ</div>
                                <div class="VoucherInputField_error-msg__kKPQn2" style="display: none;">Vui lòng nhập mã giảm giá</div>
                            </form>
                            <script>
                                $(document).ready(function() {
                                    $("#checkCodeForm").submit(function(event) {
                                        event.preventDefault(); // Ngăn form submit mặc định
                            
                                        
                                        
                                        
                                        var discount_code = $('.discountCode').val();
                                        var _token = $('input[name = "_token"]').val();
                                        
                                        $.ajax({
                                            type: "POST",
                                            url: '/check-code',
                                            data: {
                                                discount_code:discount_code,
                                                _token:_token
                                            },
                                            success: function(response) {
                                                if (response) {
                                                    // Nếu có dữ liệu trả về từ server, xử lý kết quả tại đây
                                                    if (response.success) {
                                                        // Mã giảm giá hợp lệ
                                                        
                                                        $(".VoucherInputField_error-msg__kKPQn").hide();

                                                        // Lấy giá trị tổng tiền hiện tại
                                                        const currentTotalAmount = parseFloat($("#total").text().replace(/\D/g, ''));

                                                        // Khai báo biến để lưu giá trị tổng tiền sau khi giảm giá
                                                        let newTotalAmount = currentTotalAmount;

                                                        // Khai báo biến lưu giá trị của mã giảm giá discount_price
                                                        let discountPriceValue = 0;

                                                        // Khai báo biến lưu giá trị của mã giảm giá discount_percent
                                                        let discountPercentValue = 0;

                                                        // Trừ giảm giá dựa trên discount_price nếu có
                                                        if (response.discount_price !== null) {
                                                            discountPriceValue = parseFloat(response.discount_price);
                                                            newTotalAmount -= discountPriceValue;
                                                        }

                                                        // Trừ giảm giá dựa trên discount_percent nếu có
                                                        if (response.discount_percent !== null) {
                                                            discountPercentValue = parseFloat(response.discount_percent);
                                                            const discountAmount = (currentTotalAmount * discountPercentValue) / 100;
                                                            newTotalAmount -= discountAmount;
                                                        }

                                                        // Hiển thị tổng tiền sau khi giảm giá trong div mới
                                                        const totalAmountAfterDiscountDiv = $("#totalAmountAfterDiscount");
                                                        totalAmountAfterDiscountDiv.text(formatCurrency(newTotalAmount));
                                                        updateTotalAll();

                                                        if (response.discount_price !== null) {
                                                            // Hiển thị giá trị discount_price
                                                            const discountPriceDiv = $("#discountPriceDiv");
                                                            discountPriceValue = parseFloat(response.discount_price);
                                                            const discountPriceValueDiv = $("#discountPriceValue");
                                                            discountPriceValueDiv.text(formatCurrency(discountPriceValue)); // Định dạng tiền VND và hiển thị giá trị discount_price
                                                            discountPriceDiv.show(); // Hiển thị div chứa giá trị discount_price
                                                            updateTotalAll();
                                                            // Ẩn div chứa giá trị discount_percent (nếu có)
                                                            const discountPercentDiv = $("#discountPercentDiv");
                                                            discountPercentDiv.hide();
                                                            $('input[name="bill_discount"]').val(discountPriceValue);
                                                        } else if (response.discount_percent !== null) {
                                                            // Hiển thị giá trị discount_percent
                                                            const discountPercentDiv = $("#discountPercentDiv");
                                                            discountPercentValue = parseFloat(response.discount_percent);
                                                            const discountPercentValueDiv = $("#discountPercentValue");
                                                            discountPercentValueDiv.text(discountPercentValue); // Đặt giá trị discount_percent vào div, thêm dấu % vào sau giá trị
                                                            const discountAmount = (currentTotalAmount * discountPercentValue) / 100;

                                                            const discountAmountValue = $("#discountAmountValue");
                                                            discountAmountValue.text(formatCurrency(discountAmount)); // Định dạng tiền VND và hiển thị số tiền giảm
                                                            discountPercentDiv.show(); // Hiển thị div chứa giá trị discount_percent
                                                            updateTotalAll();
                                                            // Ẩn div chứa giá trị discount_price (nếu có)
                                                            const discountPriceDiv = $("#discountPriceDiv");
                                                            discountPriceDiv.hide();
                                                            $('input[name="bill_discount"]').val(discountAmount);
                                                        } else {
                                                            // Ẩn cả hai div chứa giá trị discount_price và discount_percent
                                                            const discountPriceDiv = $("#discountPriceDiv");
                                                            discountPriceDiv.hide();

                                                            const discountPercentDiv = $("#discountPercentDiv");
                                                            discountPercentDiv.hide();
                                                        }


                                                        
                                                        

                                                        alert("Mã giảm giá hợp lệ!");
                                                        $("#formDiscount").hide();
                                                        console.log(discountPriceValue);
                                                        console.log(response);
                                                        
                                                        
                                                        
                                                    } else {
                                                        // Mã giảm giá không hợp lệ, hiển thị thông báo lỗi trên modal
                                                        $(".VoucherInputField_error-msg__kKPQn").show();
                                                    }
                                                } else {
                                                    // Không có dữ liệu trả về từ server, có thể là do người dùng chưa nhập gì
                                                    // Hiển thị thông báo lỗi trong modal
                                                    $(".VoucherInputField_error-msg__kKPQn").show();
                                                }
                                            },
                                            error: function(xhr) {
                                                console.log(discount_code);
                                                console.error(xhr);
                                            }
                                        });
                                    });
                                });
                            </script>
                            <script>
                                function formatCurrency(amount) {
                                    // Sử dụng hàm Intl.NumberFormat để định dạng số tiền
                                    const formatter = new Intl.NumberFormat('vi-VN', {
                                        style: 'currency',
                                        currency: 'VND',
                                    });

                                    // Trả về số tiền đã được định dạng
                                    return formatter.format(amount);
                                    }
                            </script>
                        
                            <div class="VoucherApplyModal_coupon-promotion__jq7qf"></div>
                            <div class="VoucherApplyModal_divider__IfeFr"></div>
                            <div class="VoucherApplyModal_voucher-list-title__Nr2Me">Chọn mã giảm giá</div>
                            <div class="VoucherApplyModal_voucher-list__fXFLl">
                                <div class="VoucherListEmpty_voucher-empty__6qgpV">
                                    <img src="img/iconhappy.png" alt="pom-empty">
                                    <div class="VoucherListEmpty_message__TL4DG">Không có mã giảm giá nào</div>
                                </div>
                            </div>
                        </div>
                        <div class="BaseVoucherApplyModal_footer__HdDqB">
                            <button disabled="" class="Button_button__yfvRh Button_button__primary__iFLao Button_button__disabled__Q4EiE BaseVoucherApplyModal_btnSubmit__i0o_s BaseVoucherApplyModal_disabled__z_dj9" type="submit">Đồng ý</button>
                        </div>
                    </div>
                
                </div>
            </div>
        
    </div>
</div>
<script>
    window.addEventListener('DOMContentLoaded', function() {
      // Lấy giá trị từ thẻ <div> có id="shipping"
      const shippingDiv = document.getElementById('shipping');
      const shippingValue = shippingDiv.innerText.trim(); // Giá trị từ thẻ <div>

      // Xử lý chuỗi để loại bỏ ký tự không cần thiết và giữ lại chỉ số
      const numberValue = shippingValue.replace(/\D/g, ''); // Chỉ lấy số từ chuỗi

      // Đặt giá trị vào thuộc tính value của thẻ <input> có name="bill_discount"
      document.querySelector('input[name="bill_shipping"]').value = numberValue;
    });
  </script>
<script>
    window.addEventListener('DOMContentLoaded', function() {
      // Lấy giá trị từ thẻ <div> có id="shipping"
      const shippingDiv = document.getElementById('shipping');
      const shippingValue = shippingDiv.innerText.trim(); // Giá trị từ thẻ <div>

      // Xử lý chuỗi để loại bỏ ký tự không cần thiết và giữ lại chỉ số
      const numberValue = shippingValue.replace(/\D/g, ''); // Chỉ lấy số từ chuỗi

      // Đặt giá trị vào thuộc tính value của thẻ <input> có name="bill_discount"
      document.querySelector('input[name="bill_shipping"]').value = numberValue;
    });
  </script>
   


    <script>
        function toggleCheckboxValue(checkbox) {
            if (checkbox.checked) {
                checkbox.value = "1";  // Khi được chọn, giá trị là "1"
            } else {
                checkbox.value = "0";  // Khi không được chọn, giá trị là "0"
            }
        }
        function FormAddress(){
            var nameInput = document.querySelector('input[name="user_name"]');
            
            var addressInput = document.querySelector('input[name="user_address"]');
            var erName = document.getElementById('erName');
            
            var erAddress = document.getElementById('erAddress');

            if (nameInput.value.trim() === '') {
                erName.style.display = 'block';
                return false; // Ngăn chặn việc submit form
            }
            
            if (addressInput.value.trim() === '') {
                erAddress.style.display = 'block';
                return false;
            }
            return true;
        }
    </script>
    <script>
        var textarea = document.getElementById('user_note');
        var charCount = document.getElementById('char_count');

        textarea.addEventListener('input', function() {
            var text = textarea.value;
            var currentLength = text.length;
            charCount.textContent = currentLength + '/255';
        });

    </script>
    <script>
        function hideFormAddress(){
            var formAddress = document.getElementById('formAddress');
            formAddress.style.display = 'none';
        }
        function showFormAddress(){
            var formAddress = document.getElementById('formAddress');
            formAddress.style.display = 'inline';

            var formShowAddress = document.getElementById('formShowAddress');
            formShowAddress.style.display = 'none';
        }

        function hideformShowAddress(){
            var formShowAddress = document.getElementById('formShowAddress');
            formShowAddress.style.display = 'none';
        }
        function showFormShowAddress(){
            var formShowAddress = document.getElementById('formShowAddress');
            formShowAddress.style.display = 'inline';

            var formAddress = document.getElementById('formAddress');
            formAddress.style.display = 'none';
        }
        function hideformExpress(){
            var formExpress = document.getElementById('formExpress');
            formExpress.style.display = 'none';
        }
        function showformExpress(){
            var showformExpress = document.getElementById('formExpress');
            showformExpress.style.display = 'inline';
        }
        function showformDiscount(){
            var showformDiscount = document.getElementById('formDiscount')
            showformDiscount.style.display = 'inline';
        }
        function hideformDiscount(){
            var hideformDiscount = document.getElementById('formDiscount')
            hideformDiscount.style.display = 'none';
        }
        

    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");

        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function (result) {
            renderCity(result.data);
        });
        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function () {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                const result = data.filter(n => n.Id === this.value);

                for (const k of result[0].Districts) {
                    district.options[district.options.length] = new Option(k.Name, k.Id);
                }
                }
            };
            district.onchange = function () {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Id);
                }
                }
            };
        }
        
    


    </script>



    
        
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const cartItems = document.querySelectorAll('.CartItem_cart-item__oeS59');
        const totalElement = document.getElementById('total');

        function updateTotal() {
            const subtotalElements = document.querySelectorAll('.Order_totalAmount__Mwe_r');
            let total = 0;
            subtotalElements.forEach(function(subtotalElement) {
                const subtotal = parseFloat(subtotalElement.textContent.replace(/\D/g, ''));
                total += subtotal;
            });
            totalElement.textContent = formatCurrency(total);
            const billTotalInput = document.querySelector('input[name="bill_total"]');
            billTotalInput.value = total;

        }

        function formatCurrency(amount) {
            return amount.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
        }
        updateTotal();
    });
</script>
<script>
    function updateTotalAll() {
        // Giá trị tổng tiền sau khi đã áp dụng giảm giá
        const totalAmountAfterDiscount = parseFloat($("#totalAmountAfterDiscount").text().replace(/\D/g, ''));

        // Giá trị phí vận chuyển
        const shipping = parseFloat($("#shipping").text().replace(/\D/g, ''));

        // Tính tổng tiền
        const totalAll = totalAmountAfterDiscount + shipping;

        // Hiển thị tổng tiền trong div có id "totalAllDiv"
        const totalAllDiv = document.getElementById("totalAll");
        totalAllDiv.textContent = formatCurrency(totalAll); // Giả sử bạn đã có hàm formatCurrency để định dạng tiền VND

        const billTotalAllInput = document.querySelector('input[name="bill_totalAll"]');
        billTotalAllInput.value = totalAll;
    }
    updateTotalAll();
    const totalAmountAfterDiscountInput = document.getElementById("totalAmountAfterDiscountInput");
    const shippingInput = document.getElementById("shippingInput");

    totalAmountAfterDiscountInput.addEventListener("change", updateTotalAll);
    shippingInput.addEventListener("change", updateTotalAll);
</script>


<script>
    $(document).ready(function() {
            updateTotalAll();
        });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const cartItems = document.querySelectorAll('.CartItem_cart-item__oeS59');
        const totalElement = document.getElementById('totalAmountAfterDiscount');

        function updateTotal() {
            const subtotalElements = document.querySelectorAll('.Order_totalAmount__Mwe_r');
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
        updateTotal();
    });
</script>

<script>
    // Lấy thẻ HTML dựa vào ID
    var productCountContainer = document.getElementById('slsp');

    // Đặt nội dung của $productCount vào thẻ HTML
    productCountContainer.innerText =  <?php echo $productCount; ?>;
</script>

</body>
</html>