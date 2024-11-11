
<head>
    <title>danh sách công việc</title>
    <link rel="stylesheet" href="../mvc/views/resource/css/job.css">
</head>
<body>
    <div id="danh_sach_cong_viec">
        <?php
           while ($dong = mysqli_fetch_array($data["CV"])) {
            $con = mysqli_connect("localhost","root","","dacs2");
                $layChuyenNganh= mysqli_query($con,"SELECT ten_chuyen_nganh FROM chuyen_nganh WHERE ma_chuyen_nganh =". $dong["ma_chuyen_nganh"]);
                $chuyenNganh = mysqli_fetch_array($layChuyenNganh);
        ?>
        <div class="container">
            <div class="row" id="thongTinSn">
                <div class="col-8 left">
                    
                    <a href="#tenNganh" class="yellow"><?php echo $chuyenNganh["ten_chuyen_nganh"] ?></a>
                    
                    <br>
                    <a href="#TieuDe" class="tieuDe yellow"><?php echo $dong["tieu_de_cong_viec"] ?></a><br>
                    <span class=" bi bi-pin-angle-fill chaoGia white">
                    <?php echo $dong["muc_luong"] ?>
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
                    <div class="Gia"><?php echo $dong["muc_luong"] ?></div>
                    <a href="../Home/jobDetail/<?php echo $dong['ma_cong_viec'] ?>" id="changeContent" class="chaoGia">Chào giá cho dự án</a>
                </div>
            </div>
        </div>
        <?php
           
            }
        ?>
    </div>
    <div class="vs-pagination" style="align-items:center">
        <a href="#" class="bagi-btn-prev bagi-btn">prev</a>
        <ul>
            <?php
                $sql = "SELECT COUNT(ma_cong_viec) as total FROM cong_viec";
                $kqq = mysqli_query($con, $sql);
                $count = mysqli_fetch_array($kqq);
                $limit = 4;
                $sotrang = ceil($count['total'] / $limit);

                $current_page = isset($_POST['page']) ? (int)$_POST['page'] : 1;

                // Xác định trang bắt đầu và kết thúc để hiển thị tối đa 5 số
                $start_page = max(1, $current_page - 2);
                $end_page = min($sotrang, $current_page + 2);

                for ($i = $start_page; $i <= $end_page; $i++) {
                    $activeClass = ($i === $current_page) ? "active-page" : "";
                    echo "<li><span class='sotrang $activeClass' data-page='" . $i . "'>" . $i . "</span></li>";
                }
            ?>
        </ul>

        <a href="#" class="bagi-btn-next bagi-btn">next</a>
    </div>
    <div id="soTrang" style="display:none"><?php echo $sotrang ?></div>

<script src="../mvc/views/resource/js/job.js"></script>