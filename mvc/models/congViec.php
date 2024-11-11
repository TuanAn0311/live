<?php
class congViec extends DB {

   
    public function GET_CongViec(){
        $start = 0;
        $litmit = 4;
        $sql = "SELECT * FROM cong_viec LIMIT $start,$litmit";
        return mysqli_query($this->con, $sql);
    }

    public function GET_chiTietCV($maCV){
        $sql = "SELECT * FROM cong_viec WHERE ma_cong_viec = $maCV";
        return mysqli_query($this->con, $sql);
    }

    public function GET_NguoiDung_by_maCV($maCV){
        $layTen = "SELECT * FROM cong_viec WHERE ma_cong_viec = $maCV";
        $query = mysqli_query($this->con, $layTen);
        $nguoiDung = mysqli_fetch_array($query);
        $sql = "SELECT * FROM nguoi_dung WHERE ma_nguoi_dung = ".$nguoiDung['ma_nha_tuyen_dung'];
        return mysqli_query($this->con, $sql);
    }

    

}
?>