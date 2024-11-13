<?php
    class nguoiTimViec extends DB {
        public function GET_danh_sach_ma_nguoi_tim_viec($macv){
            $query = "SELECT ma_nguoi_tim_viec FROM ung_tuyen WHERE ma_cong_viec =".$macv;
            return mysqli_query($this->con,$query);
        }
    }

?>