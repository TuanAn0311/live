<?php
class nhaTuyenDung extends DB {
    public function GET_nhaTuyenDung($maNTD){
        $sql = "SELECT * FROM nha_tuyen_dung WHERE ma_nha_tuyen_dung = $maNTD";
        return mysqli_query($this->con,$sql);
    }

    public function GET_nhaTuyenDung_by_CV($macv){
        $sql = "SELECT * FROM cong_viec WHERE ma_cong_viec = $macv";
        $query = mysqli_query($this->con,$sql);
        $layMaNTD = mysqli_fetch_array($query);

        return mysqli_query($this->con,"SELECT * FROM nha_tuyen_dung WHERE ma_nha_tuyen_dung =". $layMaNTD['ma_nha_tuyen_dung']);
    }
}
?>