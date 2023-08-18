<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
<style>
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V {
        border: 1px solid #d9d9d9;
        background-color: #fafafa;
        border-radius: 12px;
        padding: 16px;
    }
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V .DesktopImagesUploader_box-content__cf6oa {
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 1px dashed #d9d9d9;
        border-radius: 8px;
        padding: 16px;
    }
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V .DesktopImagesUploader_box-content__cf6oa svg {
        margin-top: 4px;
        margin-bottom: 24px;
    }
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V .DesktopImagesUploader_box-content__cf6oa h6 {
        font-weight: 400;
        margin: 0;
        font-size: 16px;
        color: #000;
        line-height: 24px;
    }
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V .DesktopImagesUploader_box-content__cf6oa p {
        margin: 8px 0 0;
        font-size: 14px;
        color: #5e6f88;
    }
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V .DesktopImagesUploader_btn-upload__VroSb {
        border-radius: 12px;
        padding: 4px 16px;
        margin-top: 20px;
    }
    .Button_pc-button__GX6DG.Button_primary__iy__x {
        color: #fff;
        background-color: #0065ff;
        border-color: #0065ff;
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
    .Desktop_upload-prescription-container__KhXZl {
        display: flex;
        margin: 24px 0;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 {
        padding: 24px;
        flex: 70% 1;
        background-color: #fff;
        border-radius: 12px;
        display: flex;
        justify-content: center;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_upload-content__SDIk9 {
        display: flex;
        flex-direction: column;
        max-width: 550px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_title-step__oDPFe {
        display: flex;
        align-items: center;
        margin: 0 0 12px;
        font-size: 20px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_title-step__oDPFe span {
        font-size: 16px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_number-circle__y06sq {
        margin-right: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        background: #0f62f9;
        border-radius: 50%;
        width: 24px;
        height: 24px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 p {
        font-size: 14px;
        color: #112950;
        margin: 0;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 p {
        font-size: 14px;
        color: #112950;
        margin: 0;
    }
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V {
        border: 1px solid #d9d9d9;
        background-color: #fafafa;
        border-radius: 12px;
        padding: 16px;
    }
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V .DesktopImagesUploader_box-content__cf6oa {
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 1px dashed #d9d9d9;
        border-radius: 8px;
        padding: 16px;
    }
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V .DesktopImagesUploader_box-content__cf6oa svg {
        margin-top: 4px;
        margin-bottom: 24px;
    }
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V .DesktopImagesUploader_box-content__cf6oa h6 {
        font-weight: 400;
        margin: 0;
        font-size: 16px;
        color: #000;
        line-height: 24px;
    }
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V .DesktopImagesUploader_box-content__cf6oa p {
        margin: 8px 0 0;
        font-size: 12px;
        color: #5e6f88;
    }
    .DesktopImagesUploader_upload-prescription-input-container__9_rjN .DesktopImagesUploader_upload-action-box__3VY_V .DesktopImagesUploader_btn-upload__VroSb {
        border-radius: 12px;
        padding: 4px 16px;
        margin-top: 20px;
    }
    .Button_pc-button__GX6DG.Button_primary__iy__x {
        color: #fff;
        background-color: #0065ff;
        border-color: #0065ff;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-result__TSaln {
        margin: 16px 0;
        display: flex;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-result__TSaln .Desktop_uploaded-image__Dpnaj {
        position: relative;
        width: 97px;
        height: 100px;
        margin-right: 16px;
        border-radius: 8px;
        border: 1px solid #e5e5e5;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-result__TSaln .Desktop_remove-btn__QhnKL {
        cursor: pointer;
        position: absolute;
        top: 4px;
        right: 4px;
        display: flex;
        justify-content: center;
        background-color: #e5e5e5;
        padding: 4px;
        border-radius: 50%;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-result__TSaln .Desktop_remove-btn__QhnKL svg {
        width: 15px;
        height: 15px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-result__TSaln .Desktop_uploaded-image__Dpnaj img {
        cursor: pointer;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 8px;
        width: 100%;
        height: 100%;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_form__zDFM9 label {
        font-size: 16px;
        font-weight: 500;
    }
    .InputTextField_input-text-field__Yvohj label {
        font-size: .75rem;
        line-height: 18px;
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
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_title-step__oDPFe {
        display: flex;
        align-items: center;
        margin: 0 0 12px;
        font-size: 20px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_title-step__oDPFe span {
        font-size: 16px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_number-circle__y06sq {
        margin-right: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        background: #0f62f9;
        border-radius: 50%;
        width: 24px;
        height: 24px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_user-info__ZWUS_ {
        display: flex;
        align-items: flex-start;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_form__zDFM9 .Desktop_name-input__LoYEF {
        margin-right: 16px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_user-info__ZWUS_>div {
        flex: 1 1;
        margin-top: unset!important;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_form__zDFM9 label {
        font-size: 16px;
        font-weight: 500;
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
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_form__zDFM9 .Desktop_name-input__LoYEF {
        margin-right: 16px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_btn-confirm-upload__vFpnK.Desktop_disabled__fm36_ {
        background: silver;
        cursor: not-allowed;
        border: none;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-area__UgUX3 .Desktop_btn-confirm-upload__vFpnK {
        font-size: 16px;
        display: flex;
        justify-content: center;
        cursor: pointer;
        padding: 10px 16px;
        margin: 24px 0;
        width: 100%;
    }
    .Button_button__disabled__Q4EiE {
     
        cursor: not-allowed;
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
        background-color: #0f62f9;
        color: #fff;
        border: 1px solid #0f62f9;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-tips__cZJlN {
        margin-left: 32px;
        flex: 30% 1;
        background-color: #fff;
        border-radius: 12px;
        padding: 24px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-tips__cZJlN h4 {
        margin: 0;
        font-size: 20px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-tips__cZJlN .Desktop_prescription-image__QSM1B {
        width: 100%;
        margin: 16px 0 0;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-tips__cZJlN .Desktop_description__r6KNn {
        padding: 0 18px;
    }
    .Desktop_upload-prescription-container__KhXZl .Desktop_upload-tips__cZJlN .Desktop_description__r6KNn p {
        margin: 8px 0;
    }

 
</style>
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
</head>
<body style="background: #ededed">
    @include('partial.header')

    <div class="MainLayout_content__hCocE">
        <div class="container">
            <div class="Desktop_upload-prescription-container__KhXZl">
                <div class="Desktop_upload-area__UgUX3">
                 
                    <div class="Desktop_upload-content__SDIk9">

                        <h4 class="Desktop_title-step__oDPFe">
                            <span class="Desktop_number-circle__y06sq">1</span>
                            Chụp ảnh toa thuốc
                        </h4>
                        <p>Tối đa 5 hình và dung lượng mỗi hình không quá 10MB</p>
                        <p style="margin-bottom: 16px">Toa thuốc phải hợp lệ: đủ và rõ ràng thông tin, còn nguyên vẹn và còn hiệu lực (trong 5 ngày).</p>
                        <input type="file" accept=".jpg, .png, .svg, .jpeg" multiple style="display: none;" id="myInputFile">
                        <div class="DesktopImagesUploader_upload-prescription-input-container__9_rjN">
                            <div class="DesktopImagesUploader_upload-action-box__3VY_V">
                                <div class="DesktopImagesUploader_box-content__cf6oa">
                                    <svg width="33" height="42" viewBox="0 0 33 42" fill="none"><path d="M32.5594 10.5281L22.4719 0.440625C22.1906 0.159375 21.8109 0 21.4125 0H1.5C0.670313 0 0 0.670313 0 1.5V40.5C0 41.3297 0.670313 42 1.5 42H31.5C32.3297 42 33 41.3297 33 40.5V11.5922C33 11.1938 32.8406 10.8094 32.5594 10.5281ZM20.7188 3.45938L29.5406 12.2812H20.7188V3.45938ZM29.625 38.625H3.375V3.375H17.5312V13.5C17.5312 14.0221 17.7387 14.5229 18.1079 14.8921C18.4771 15.2613 18.9779 15.4688 19.5 15.4688H29.625V38.625Z" fill="#338EC9"></path><path d="M18.4269 20.8641L14.7801 25.5141L12.8535 23.0578C12.8184 23.013 12.7736 22.9768 12.7224 22.9518C12.6713 22.9269 12.6151 22.914 12.5582 22.914C12.5013 22.914 12.4451 22.9269 12.3939 22.9518C12.3428 22.9768 12.2979 23.013 12.2629 23.0578L7.58473 29.0204C7.54145 29.0756 7.51459 29.142 7.50723 29.2118C7.49988 29.2816 7.51231 29.3521 7.54312 29.4151C7.57392 29.4782 7.62185 29.5313 7.68144 29.5685C7.74102 29.6056 7.80984 29.6252 7.88004 29.625H25.1254C25.4395 29.625 25.6129 29.2641 25.4207 29.0204L19.0223 20.8641C18.9867 20.8192 18.9415 20.7829 18.8899 20.758C18.8384 20.7331 18.7819 20.7201 18.7246 20.7201C18.6673 20.7201 18.6108 20.7331 18.5593 20.758C18.5077 20.7829 18.4625 20.8192 18.4269 20.8641ZM9.37536 17.7188C9.37536 18.216 9.5729 18.693 9.92453 19.0446C10.2762 19.3962 10.7531 19.5938 11.2504 19.5938C11.7476 19.5938 12.2246 19.3962 12.5762 19.0446C12.9278 18.693 13.1254 18.216 13.1254 17.7188C13.1254 17.2215 12.9278 16.7446 12.5762 16.3929C12.2246 16.0413 11.7476 15.8438 11.2504 15.8438C10.7531 15.8438 10.2762 16.0413 9.92453 16.3929C9.5729 16.7446 9.37536 17.2215 9.37536 17.7188Z" fill="#338EC9"></path></svg>
                                    <h6>Đăng ảnh toa thuốc ở đây</h6>
                                    <p>Kéo hình ảnh hoặc bấm vào đây để đăng tải hình ảnh toa thuốc lên đây</p>
                                    <button class="Button_pc-button__GX6DG Button_primary__iy__x DesktopImagesUploader_btn-upload__VroSb" id="openInputFile">
                                        Chọn ảnh
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        
                        <div class="Desktop_upload-result__TSaln" style="display:none" id="myImageDiv"></div>




                        <form class="Desktop_form__zDFM9" action="{{URL::to('/upload-prescription')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="hiddenImageInput" name="hiddenImageInput">
                            @if (Session::has('user_id'))
                            <input type="hidden" name="userId" value="{{Session::get('user_id')}}">
                            @else
                            <input type="hidden" name="userId" value="0">
                            @endif
                            <div class="InputTextField_input-text-field__Yvohj">
                                <label for="">Ghi chú</label>
                                <div class="InputTextField_input-group__Cyzv4">
                                    <input type="text" placeholder="Vui lòng để lại thông tin ghi chú cho dược sỹ" autocomplete="on" name="uploadDesc">
                                </div>
                            </div>
                            <h4 class="Desktop_title-step__oDPFe" style="margin-top: 24px">
                                <span class="Desktop_number-circle__y06sq">2</span>
                                Nhập thông tin liên hệ
                            </h4>
                            <div class="Desktop_user-info__ZWUS_">
                                <div class="InputTextField_input-text-field__Yvohj Desktop_name-input__LoYEF">
                                    <label for="">Họ và tên
                                        <span>*</span>
                                    </label>
                                    <div class="InputTextField_input-group__Cyzv4">
                                        @if (Session::has('user_id'))
                                        <input type="text" value="{{Session::get('user_name')}}" placeholder="Vui lòng nhập họ và tên" class="Desktop_name-input__LoYEF" name="uploadName">
                                        @else
                                        <input type="text" placeholder="Vui lòng nhập họ và tên" class="Desktop_name-input__LoYEF" name="uploadName">
                                        @endif

                                    </div>
                                </div>
                                <div class="InputTextField_input-text-field__Yvohj">
                                    <label for="">
                                        Số điện thoại
                                        <span>*</span>
                                    </label>
                                    <div class="InputTextField_input-group__Cyzv4">
                                        <input type="text" placeholder="Vui lòng nhập số điện thoại" name="uploadPhone">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="Button_button__yfvRh Button_button__primary__iFLao Button_button__disabled__Q4EiE Desktop_btn-confirm-upload__vFpnK Desktop_disabled__fm36_">
                                Gửi toa thuốc
                            </button>
                        </form>
                        
                    
                        
                    </div>
               
                </div>
                <div class="Desktop_upload-tips__cZJlN">
                    <h4>Toa thuốc minh hoạ</h4>
                    <img src="https://www.pharmacity.vn/images/prescription-tips.png" alt="" class="Desktop_prescription-image__QSM1B">
                    <div class="Desktop_description__r6KNn">
                        <p>1. Có thông tin đơn vị phát hành toa thuốc</p>
                        <p>2. Có chi tiết thông tin bệnh nhân, chuẩn đoán bệnh</p>
                        <p>3. Có tên thuốc, hàm lượng, số lượng, liều dùng</p>
                        <p>4. Còn hiệu lực: Toa thuốc chỉ có hiệu lực trong vòng <b>5 ngày</b> kể từ ngày kê toa</p>
                        <p>5. Có chữ ký và họ tên bác sĩ kê toa</p>
                        <p>Lưu ý: Hình ảnh toa thuốc phải đầy đủ, không cắt xén, mất nét</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var form = document.querySelector('.Desktop_form__zDFM9');
        var nameInput = document.querySelector('.Desktop_name-input__LoYEF input');
        var phoneInput = document.querySelector('.InputTextField_input-text-field__Yvohj input[type="text"][placeholder="Vui lòng nhập số điện thoại"]');
        var submitButton = document.querySelector('.Desktop_btn-confirm-upload__vFpnK');

        var validateForm = function() {
            if (nameInput.value.trim() !== '' && phoneInput.value.trim() !== '') {
            submitButton.classList.remove('Desktop_disabled__fm36_');
            } else {
            submitButton.classList.add('Button_button__primary__iFLao');
            }
        };

        form.addEventListener('input', validateForm);
    </script>
    <script>
        var button = document.getElementById('openInputFile');
        var imageDiv = document.getElementById('myImageDiv');
        var inputFile = document.getElementById('myInputFile');
        var hiddenImageInput = document.getElementById('hiddenImageInput');
        var maxImages = 5;
        var imageCount = 0;
        var selectedImageNames = []; // Mảng lưu tên các ảnh được chọn
    
        button.addEventListener('click', function() {
            inputFile.click();
        });
    
        inputFile.addEventListener('change', function(event) {
            var files = event.target.files;
            if (files && files.length > 0) {
                for (var i = 0; i < files.length; i++) {
                    if (imageCount >= maxImages) {
                        break;
                    }
    
                    var file = files[i];
    
                    // Kiểm tra dung lượng của ảnh (10MB = 10 * 1024 * 1024 bytes)
                    if (file.size <= 10 * 1024 * 1024) {
                        selectedImageNames.push(file.name); // Thêm tên file vào mảng
                        imageCount++;
    
                        // Hiển thị ảnh
                        var imageContainer = document.createElement('div');
                        imageContainer.classList.add('Desktop_uploaded-image__Dpnaj');
                        imageContainer.classList.add('imageContainer');
    
                        var removeBtn = document.createElement('div');
                        removeBtn.classList.add('Desktop_remove-btn__QhnKL');
                        removeBtn.innerHTML = `
                            <svg stroke="#112950" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="1.5">
                                <path d="M17.9964 6L6.00391 17.9925" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M18.0125 18.0125L6 6" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        `;
    
                        var imageElement = document.createElement('img');
                        imageElement.src = URL.createObjectURL(file);
                        imageElement.alt = file.name;
                        imageElement.height = 100;
                        imageElement.width = 100;
    
                        removeBtn.addEventListener('click', function() {
                            var indexToRemove = selectedImageNames.indexOf(file.name);
                            if (indexToRemove !== -1) {
                                selectedImageNames.splice(indexToRemove, 1);
                            }
                            imageContainer.remove();
                            imageCount--;
                            button.disabled = false;
                        });
    
                        imageContainer.appendChild(removeBtn);
                        imageContainer.appendChild(imageElement);
                        imageDiv.appendChild(imageContainer);
                    } else {
                        alert('Dung lượng ảnh vượt quá 10MB, vui lòng chọn ảnh khác.');
                    }
    
                    if (imageCount >= maxImages) {
                        button.disabled = true;
                    }
                }
    
                // Gán giá trị của mảng tên ảnh vào trường input ẩn
                hiddenImageInput.value = selectedImageNames.join(',');
                imageDiv.style.display = 'flex';
            } else {
                imageDiv.style.display = 'none';
                imageDiv.innerHTML = '';
                imageCount = 0;
                button.disabled = false;
                selectedImageNames = []; // Reset mảng tên ảnh khi không có ảnh được chọn
            }
        });
    </script>
    
    {{-- <script>
        var button = document.getElementById('openInputFile');
        var imageDiv = document.getElementById('myImageDiv');
        var inputFile = document.getElementById('myInputFile');
        const hiddenImageInput = document.getElementById('hiddenImageInput');
        var maxImages = 5;
        var imageCount = 0;

        var selectedImageNames = [];

        button.addEventListener('click', function() {
            inputFile.click();
        });

        inputFile.addEventListener('change', function(event) {
            var files = event.target.files;
            if (files && files.length > 0) {
            for (var i = 0; i < files.length; i++) {
                if (imageCount >= maxImages) {
                    break;
                }

                var file = files[i];

                var reader = new FileReader();
                reader.onload = (function(file) {
                return function(event) {
                    var imageContainer = document.createElement('div');
                    imageContainer.classList.add('Desktop_uploaded-image__Dpnaj');
                    imageContainer.classList.add('imageContainer');

                    var removeBtn = document.createElement('div');
                    removeBtn.classList.add('Desktop_remove-btn__QhnKL');
                    removeBtn.innerHTML = `
                    <svg stroke="#112950" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="1.5">
                        <path d="M17.9964 6L6.00391 17.9925" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M18.0125 18.0125L6 6" stroke="inherit" stroke-width="inherit" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    `;

                    var imageElement = document.createElement('img');
                    imageElement.src = event.target.result;
                    imageElement.alt = file.name;
                    imageElement.height = 100;
                    imageElement.width = 100;

                    removeBtn.addEventListener('click', function() {
                        imageContainer.remove();
                        imageCount--;
                        button.disabled = false;
                    });

                    imageContainer.appendChild(removeBtn);
                    imageContainer.appendChild(imageElement);
                    imageDiv.appendChild(imageContainer);
                    imageCount++;
                    selectedImages.push(event.target.result);

                    if (imageCount >= maxImages) {
                        button.disabled = true;
                    }
                };
                })(file);

                reader.readAsDataURL(file);
            }

                imageDiv.style.display = 'flex';
                hiddenImageInput.value = JSON.stringify(selectedImages);
            } else {
                imageDiv.style.display = 'none';
                imageDiv.innerHTML = '';
                imageCount = 0;
                button.disabled = false;
                selectedImages = [];
                hiddenImageInput.value = '';
            }
        });
    </script> --}}

    @include('partial.footer')
</body>
</html>