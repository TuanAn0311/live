<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/live/mvc/views/resource/css/first.css">
    <link rel="stylesheet" href="/live/mvc/views/resource/css/formOverLay.css">
    
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
                <button id="dangDuAnMoi" onclick="openForm()">Đăng dự án mới</button><br>
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
<?php
$con = mysqli_connect("localhost","root","","dacs2");
$_SESSION['ma_nha_tuyen_dung'] = 1;// lấy khi login   
?>
    <div class="overlay" id="formOverlay">
        <div class="form-container">
            
            <form action="http://localhost/live/cong_viec/them_cong_viec" method="POST">
                <span class="close-button" onclick="closeForm()">×</span>
                <h2>Nhập thông tin bài đăng</h2>
                <input type="hidden" name="ma_nha_tuyen_dung" Value="1">
                
                <div class="mb-4 mt-4" style="text-align:center">
                    <span>Hôm nay là: <?php echo date('d-m-Y H:i:s') ?></span>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">tiêu đề </label>
                    <input type="text" id="disabledTextInput" name="tieu_de_cong_viec" class="form-control" placeholder="Nhập tiêu đề" require_once>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Mô tả công việc </label>
                    <textarea type="text" id="disabledTextInput" name="mo_ta_cong_viec" class="form-control" placeholder="Nhập mô tả" require_once></textarea>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Mức giá cho đặt trước</label>
                    <input type="number" id="disabledTextInput" name="muc_luong" class="form-control" placeholder="0" require_once>
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Chuyên ngành chính</label>
                    <select id="disabledSelect" class="form-select" name="ma_chuyen_nganh">
                        <option disabled>Chọn chuyên ngành </option>
                        <?php 
                            $sql_chuyen_nghanh = "SELECT * FROM chuyen_nganh";
                            $query = mysqli_query($con,$sql_chuyen_nghanh);
                            while ($chuyen_nganh=mysqli_fetch_array($query)) {
                            echo '<option Value="'.$chuyen_nganh['ma_chuyen_nganh'].'">'.$chuyen_nganh['ten_chuyen_nganh'].'</option>';
                            }
                        ?>
                    </select>
                </div>   
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Kỷ năng bắt buộc</label>
                    <input type="text" id="disabledTextInput" name="ky_nang_bat_buoc" class="form-control" placeholder="Nhập ký năng bắt buộc" require_once>
                </div>
                <div style="text-align:center"><button type="submit" class="btn btn-primary">Đăng bài</button></div>
            </form>
        </div>
    </div>

</body>
<script src="../mvc/views/resource/js/trangchu.js"></script>
<script src="../mvc/views/resource/js/formOverLay.js"></script>
</html>