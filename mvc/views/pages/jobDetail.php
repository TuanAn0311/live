<head>
    <link rel="stylesheet" href="/live/mvc/views/resource/css/jobDetail.css">
    <link rel="stylesheet" href="/live/mvc/views/resource/css/rutGonText.css">
    <style>
        /* Styles for the form overlay */
        
    </style>
</head>
<?php
    $con = mysqli_connect("localhost","root","","dacs2");
    $CV = mysqli_fetch_array($data["chiTietCV"]);
    $tenNTD = mysqli_fetch_array($data["nguoiDung"]);
    $UT = mysqli_fetch_array($data["soUngTuyen"]);
    $NTD = mysqli_fetch_array($data["nhaTuyenDung"]); 
    
    $luong = number_format($CV["muc_luong"], 0, ',', '.');

    $_SESSION['ma_nguoi_tim_viec'] = 3;// khi login vao thi luu vao session , lay ma nguoi tim viec tu ma nguoi dung
    $_SESSION['ma_cong_viec'] = $CV['ma_cong_viec'];
    $_SESSION['trang_thai_ung_tuyen'] = "Hoàn thành";
    
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
                            <button class="chaoGia"  onclick="openForm()">Chào giá cho dự án</button>
                        </div>
                        <div class="moTaDuAn">
                            <p><b>Mô tả</b></p>
                            <p class="noiDungMoTa"><?php echo $CV["mo_ta_cong_viec"] ?></p>   
                        </div>

                        <div class="thongTinKhachHang">
                            <p>Thông tin khách hàng</p>
                            <img src="/live/mvc/views/resource/pictures/<?php echo $NTD["anh"]  ?>" width="5%" alt=""> &#160
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
                                    <td><?php echo $luong ?>.000 VNĐ</td>
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
        <div class="row">
            <?php
                while ($DanhSachMaNTV = mysqli_fetch_array($data["danhSachMaNguoiTimViec"])) {
                    $sql = "SELECT * FROM nguoi_tim_viec WHERE ma_nguoi_tim_viec = ". $DanhSachMaNTV['ma_nguoi_tim_viec'];
                    $query = mysqli_query($con, $sql);
                    $nguoiTV = mysqli_fetch_array($query);

                    $sql2 ="SELECT * FROM ung_tuyen WHERE ma_cong_viec = ". $CV['ma_cong_viec'] ." and ma_nguoi_tim_viec=" . $DanhSachMaNTV['ma_nguoi_tim_viec'];
                    $ung_tuyen = mysqli_fetch_array(mysqli_query($con,$sql2));
            ?>
            <div class="container" id="danh_sach_chao_gia">
                <div class="row" id="header_gui_chao_gia">
                    <div class="col-9">
                        <img src="/live/mvc/views/resource/pictures/<?php echo $nguoiTV['anh'] ?>" width="5%" style="border-radius:50%; object-fit: cover;" alt="">
                        <span id="ten">&#160<?php echo $nguoiTV['ho_ten'] ?></span>
                    </div>
                    <div class="col-3">
                        <span class="box_gia_va_thoi_gian">
                            <span class="gia_chao"><?php echo number_format($ung_tuyen['chao_gia'], 0, ',', '.') ?> VNĐ</span>
                            <span>&#160 / &#160</span>
                            <span class="so_ngay_hoan_thanh"><?php echo $ung_tuyen['so_ngay_hoan_thanh'] ?> ngày</span>
                        </span>
                    </div>
                </div>
                <div class="row" id="mo_ta_chao_gia">
                    <div class="p-3">
                        <?php echo $ung_tuyen['mo_ta'] ?>
                    </div>
                </div>

                <div class="row" id="ngay_gio_chao_gia">
                    <div class="col-10"></div>
                    <div class="col-2">
                        <span class="bi bi-alarm"><?php echo $ung_tuyen['ngay_ung_tuyen'] ?></span>                        
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>

    <!-- Overlay Form -->
 <div class="overlay" id="formOverlay">
        <div class="form-container">
            <span class="close-button" onclick="closeForm()">×</span>
            <h2>Chào Giá Dự Án</h2>
            <form id="chaoGiaForm" action="/live/mvc/models/xuLyUngTuyen.php" method="POST">
                <div class="container">
                   <div class="row">
                        <div class="col-6"><label for="proposalAmount">Giá chào</label></div>
                        <div class="col-6"><input type="number" id="proposalAmount" name="GiaChao" required><br></div>
                   </div>
                </div>
                <div class="container">
                   <div class="row">
                        <div class="col-6"><label for="completionTime">Thời gian hoàn thành (ngày)</label></div>
                        <div class="col-6"><input type="number" id="completionTime" name="soNgayHoanThanh" required><br></div>     
                   </div>
                </div>

                <div class="container">
                   <div class="row">
                        <div class="col-4"><label for="proposalMessage">Lời nhắn</label><br></div>
                        <div class="col-8"><textarea class="p-4" id="proposalMessage" name="moTa" rows="4" required></textarea><br></div>     
                   </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-5"><button style="width:100%" type="submit">Gửi chào giá</button></div>
                        <div class="col-3"></div>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

<script src="/live/mvc/views/resource/js/jobDetail.js"></script>
