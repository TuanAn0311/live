<?php
class SinhVienModel extends DB {
    public function GetSV(){
        //connect db lấy dl
        return "Tuan An";
    }
    public function Tong($n, $m){
        return ($n + $m);
    }

    public function SinhVien(){
        $sql = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $sql);
    }
}
?>