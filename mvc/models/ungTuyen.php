<?php
class ungTuyen extends DB {

    public function GET_soLuongUngTuyen($maCV){
        $sql = "SELECT COUNT(*) as 'soUT' FROM ung_tuyen WHERE ma_cong_viec = ".$maCV;
        return  mysqli_query($this->con, $sql);
    }

    

}
?>