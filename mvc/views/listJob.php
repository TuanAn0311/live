<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>danh sách công việc</title>
    <link rel="stylesheet" href="./resource/css/listJob.css">
</head>
<body>
    <div class="container" id="thonTinSn">
        <div class="row">
            <div class="col-md-8 left">
                <a href="#tenNganh" class="yellow">nganh A</a><br>
                <a href="#TieuDe" class="tieuDe yellow">Cần nhân viết biết html</a><br>
                <span class=" bi bi-pin-angle-fill chaoGia white">
                    <?php echo "Chào Giá" ?>
                </span> |
                <span class=" bi bi-stopwatch thoiGianDangBai white">
                    <?php echo "Thời Gian Đăng Bài" ?>
                </span>
                <p class="moTa grey">
                Chủ đề là đám tang, mình cần 1 bạn chỉnh sửa video phù hợp với chủ đề 
                Dung lượng file mình gửi tầm 50GB đến 100GB File sẽ bao gồm gafgfsg gsdfg  sfgsdfgs sfgf 
                </p>
                <div class="container-TAG">
                    <a href="#">ádfaf</a>
                    <a href="#">ádfaf</a>
                    <a href="#">ádfaf</a>
                </div>
            </div>
            <div class="col-md-4 right">
                <div class="Gia"> đ 1/ đ 2000000</div>
                <a href="" class="chaoGia">Chào giá cho dự án</a>
            </div>
        </div>
    </div>

    <?php
    include_once("./footer.php");
    ?>
</body>
</html>