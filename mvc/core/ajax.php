<?php
    $conn = mysqli_connect("localhost","root","","dacs2");
    $limit = 4;
    //phân trang
    $start = ($_POST['page']-1) * $limit;
    $query = "SELECT * FROM cong_viec WHERE ma_cong_viec LIMIT $start,$limit";
    $kq = mysqli_query($conn,$query);
           while ($dong = mysqli_fetch_array($kq)) {
                $con = mysqli_connect("localhost","root","","dacs2");
                $layChuyenNganh= mysqli_query($con,"SELECT ten_chuyen_nganh FROM chuyen_nganh WHERE ma_chuyen_nganh =". $dong["ma_chuyen_nganh"]);
                $query_soUT = mysqli_query($con,"SELECT COUNT(*) as 'soUT' FROM ung_tuyen WHERE ma_cong_viec = ".$dong["ma_cong_viec"]);
                $result_soUT = mysqli_fetch_array($query_soUT);
                $chuyenNganh = mysqli_fetch_array($layChuyenNganh);

                $luong = number_format($dong["muc_luong"], 0, ',', '.');

        ?>
        <div class="container">
            <div class="row" id="thongTinSn">
                <div class="col-8 left">
                    
                    <a href="#tenNganh" class="yellow"><?php echo $chuyenNganh["ten_chuyen_nganh"] ?></a>
                    
                    <br>
                    <a href="#TieuDe" class="tieuDe yellow"><?php echo $dong["tieu_de_cong_viec"] ?></a><br>
                    <span class=" bi bi-pin-angle-fill chaoGia white">
                    <?php echo $result_soUT['soUT'] ?>
                    </span> |
                    <span class=" bi bi-stopwatch thoiGianDangBai white">
                    <?php echo $dong["ngay_tao"] ?>
                    </span>
                    <p class="moTa grey">
                    <?php echo $dong["mo_ta_cong_viec"] ?>
                    </p> 
                    
                    
                </div>
                <div class="col-4 right">
                    <span style="color: white">Trạng thái: <?php echo $dong["trang_thai"] ?></span>
                    <div class="Gia"><?php echo $luong ?>.000 VNĐ</div>
                    <a href="" class="chaoGia">Chào giá cho dự án</a>
                </div>
            </div>
        </div>
        <?php
           
            }
        ?>