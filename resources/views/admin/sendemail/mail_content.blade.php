<!DOCTYPE html>
<html>
<head>
    <style>

        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            background-color: #ffffff;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .discount {
            color: #e74c3c;
            font-size: 26px;
            font-weight: bold;
        }
        .discount2 {
            
            font-size: 16px;
            font-weight: bold;
        }
        .content {
            margin-bottom: 20px;
            text-align: center;
        }
        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #3498db;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            color: #888888;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            
            <h1>Thông Báo Khuyến Mãi</h1>
        </div>
        <div class="content">
            <p>Xin chào bạn,</p>
            <p>Chúng tôi rất vui thông báo về chương trình khuyến mãi đặc biệt dành riêng cho bạn.</p>
            <p class="discount">GIẢM GIÁ 20% CHO MỖI HOÁ ĐƠN KHI THANH TOÁN </p>
            <p class="discount2">ÁP DỤNG MÃ GIẢM GIÁ: CODE01</p>
            <p>Hãy nhanh chóng ghé thăm cửa hàng của chúng tôi để không bỏ lỡ cơ hội đặc biệt này!</p>
            <a href="{{URL::to('/')}}" class="cta-button">Xem Sản Phẩm</a>
        </div>
        <div class="footer">
            <p>Nếu bạn không muốn nhận email khuyến mãi nữa, vui lòng <a href="#">hủy đăng ký</a>.</p>
            <p>Hỗ trợ khách hàng: 0877717575</p>
        </div>
    </div>
</body>
</html>
