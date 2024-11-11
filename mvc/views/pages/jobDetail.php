<head>
    <link rel="stylesheet" href="/live/mvc/views/resource/css/jobDetail.css">
</head>
<?php
    $CV = mysqli_fetch_array($data["chiTietCV"]);
    $tenNTD = mysqli_fetch_array($data["nguoiDung"]);
    $UT = mysqli_fetch_array($data["soUngTuyen"]);
    $NTD = mysqli_fetch_array($data["nhaTuyenDung"]); 

    $luong = number_format($CV["muc_luong"], 0, ',', '.');
    
?>
    <div class="container">
        <div class="row">
            <div class="col-0"></div>
            <div class="col-12">
                <div class="container" id="chiTietDuAn">
                    <div class="row">
                    <div class="col-md-8">  
                        <div class="hearChiTietDuAn">
                            <span>Chi tiết dự án</span>
                            <button class="chaoGia">Chào giá cho dự án</button>
                        </div>
                        <div class="moTaDuAn">
                            <p><b>Mô tả</b></p>
                            <p class="noiDungMoTa"><?php echo $CV["mo_ta_cong_viec"] ?></p>   
                        </div>

                        <div class="thongTinKhachHang">
                            <p>Thông tin khách hàng</p>
                            <img src="/live/mvc/views/resource/pictures/<?php echo $NTD["anh"]  ?>" width="40px" alt=""> &#160
                            <span class="tenKhachHang"><?php echo $tenNTD["ten_dang_nhap"] ?></span>
                        </div>
                        <div class="kiNang">
                            <p><b>Kỹ năng bắt buộc</b></p>
                            <div class="container-TAG">
                                <span><?php echo $CV["ky_nang_bat_buoc"] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="tomTatDuAn">
                        <table class="table table-striped" style=" margin-top:10px">
                            <thead>
                                <tr>
                                    <th colspan="2">Tóm tắt dự án</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ngân sách</td>
                                    <td><?php echo $luong ?>.000 VND</td>
                                </tr>
                                <tr>
                                    <td>Chào giá</td>
                                    <td><?php echo $UT["soUT"] ?></td>
                                </tr>
                                <tr>
                                    <td>Trạng thái</td>
                                    <td><?php echo $CV["trang_thai"] ?></td>
                                </tr>
                                <tr>
                                    <td>Ngày Đăng</td>
                                    <td><?php echo $CV["ngay_tao"] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-0"></div>
        </div>
    </div>
