<?php

class input_cong_viec extends DB {

        public function excute_them_cong_viec(
                $ma_nha_tuyen_dung,
                $tieu_de_cong_viec,
                $mo_ta_cong_viec,
                $muc_luong,
                $ma_chuyen_nganh,
                $trang_thai,
                $ky_nang_bat_buoc){
                        $ngay_tao=date("Y-m-d H:i:s");
                $sql = "INSERT INTO cong_viec(ma_nha_tuyen_dung,tieu_de_cong_viec,
                                mo_ta_cong_viec,muc_luong,ngay_tao,
                                ma_chuyen_nganh,trang_thai,ky_nang_bat_buoc)
                                VALUES($ma_nha_tuyen_dung,'$tieu_de_cong_viec','$mo_ta_cong_viec',$muc_luong,'$ngay_tao',$ma_chuyen_nganh,'$trang_thai','$ky_nang_bat_buoc')";
                $result = mysqli_query($this->con, $sql);
                if (!$result) {
                    return "Error: " . mysqli_error($this->con);
                }
                // header("Location: http://localhost/live/Home/trang_chu");
                echo "khong input duoc";
                
                }


}
?>