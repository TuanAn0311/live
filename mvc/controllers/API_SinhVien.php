<?php
class API_SinhVien extends Controller{
////////////////////////////////// thêm dữ liệu/////////////////////////////////////////
    
    public function DanhSach(){
        //model
        $sinhvien = $this->model("SinhVienModel");
        $sv = $sinhvien->SinhVien();
        $mang = [];
        $count = 0;
        
        while($s = mysqli_fetch_array($sv)){
            array_push($mang, new SinhVien(
                $s["id"], 
                $s["hoten"], 
                $s["namsinh"]
            ));  
            $count += 1;
        }
        foreach ($mang as $key => $value) {
            echo json_encode($mang[$key]);// ép mảng về dạng json vd("a":1)
            echo "<br>";
        }
    }
}
class SinhVien{
    public $ID;
    public $HOTEN;
    public $NAMSINH;

    public function __construct($id, $hoten, $namsinh){
        $this->ID = $id;
        $this->HOTEN = $hoten;
        $this->NAMSINH = $namsinh;
    }
}
?>