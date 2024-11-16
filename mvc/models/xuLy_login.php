<?php
session_start();
$con = mysqli_connect("localhost","root","","dacs2");

        // Kiểm tra nếu form được submit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            // Kiểm tra định dạng form nhập không có khoảng trắng
            if (strpos($username,' ')!== false || strpos($password,' ')!== false) { //sử dụng strop kiểm tra khoảng trắng hehe
                $_SESSION['error']='Tên đăng nhập hoặc mật khẩu không được chứa khoảng trắng.';
                header("Location: http://localhost/live/Home/Login");
                exit();
            } else {
                // Truy vấn kiểm tra thông tin đăng nhập trong cơ sở dữ liệu
                $sql = "SELECT * FROM nguoi_dung WHERE ten_dang_nhap='".$username."' AND mat_khau='".$password."'";
                $stmt = mysqli_query($con, $sql);
                
                if ($result = mysqli_fetch_array($stmt)) {
                    // Đăng nhập thành công, chuyển hướng đến trang home
                    $_SESSION['message'] = 'Đăng nhập thành công';
                    $_SESSION['ma_nguoi_dung'] = $result['ma_nguoi_dung'];
                    header("Location: http://localhost/live/Home/trang_chu");
                    exit();
                } else {
                    $_SESSION['error'] = 'Tên đăng nhập hoặc mật khẩu không đúng.';
                    header("Location: http://localhost/live/Home/Login");
                    exit();
                }
            }
        }



?>