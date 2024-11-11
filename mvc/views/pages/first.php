<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../mvc/views/resource/css/first.css">
</head>
<body>
    <div class="container-fluid" id="background-image-div">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-6" id="content-index">
                <span >Tìm kiếm những Freelancer tài năng cùng với vô số dịch vụ về</span><br>
                <span id="text" style="border: none;"></span>
                <span class="blinking-cursor">|</span><br>
                <button id="troThanhFreelancer">Trở thành Freelancer</button>
                <button id="dangDuAnMoi">Đăng dự án mới</button><br>
                <div style="display: flex; align-items: center;">
                    <div class="timKiemTrangChu">
                        <div class="bi bi-search" style="font-size: 20px; color: gray; align-items: center;"></div>
                        <input type="search" placeholder="Bạn đang tìm dịch vụ gì?">
                    </div>
                    <button id="submit" type="submit">Tìm kiếm</button>
                </div>
            </div>
            <div class="col-5"></div>
        </div>
    </div>
</body>
<script src="../mvc/views/resource/js/trangchu.js"></script>
</html>