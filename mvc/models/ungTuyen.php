<?php
class ungTuyen extends DB {

    public function GET_soLuongUngTuyen($maCV){
        $sql = "SELECT COUNT(*) as 'soUT' FROM ung_tuyen WHERE ma_cong_viec = ".$maCV;
        return  mysqli_query($this->con, $sql);
    }

    public function GET_danh_sach_ung_tuyen($maCV){
        $sql = "SELECT * FROM ung_tuyen WHERE ma_cong_viec = ". $maCV;
        return mysqli_query($this->con,$sql);
    }

    public function GET_ung_tuyen_theo_CV($maCV,$maNTV){
        $sql ="SELECT * FROM ung_tuyen WHERE ma_cong_viec = ". $maCV ." and ma_nguoi_tim_viec=" . $maNTV;
        return mysqli_query($this->con,$sql);
    }

}
?>