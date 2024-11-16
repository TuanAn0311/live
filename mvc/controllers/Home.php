<?php
class Home extends Controller{
    // kế thừa các funtion trong controller.php
    function trang_chu(){
        //model() ở Controller.php
        $CV = $this->model("congViec");
        
        $this->view("home",["page1"=>"job","CV"=>$CV->GET_CongViec()]);
    }
////////////////////////
    function jobDetail($macv) {
        $CV = $this->model("congViec");
        $UT = $this->model("ungTuyen");
        $NTD = $this->model("nhaTuyenDung");
        $NTV = $this->model("nguoiTimViec");
        $this->view("joinJob", ["page2"=>"jobDetail",
        "chiTietCV" => $CV->GET_chiTietCV($macv),
        "nguoiDung"=> $CV->GET_NguoiDung_by_maCV($macv),
        "soUngTuyen"=> $UT->GET_soLuongUngTuyen($macv),
        "nhaTuyenDung"=> $NTD->GET_nhaTuyenDung_by_CV($macv),
        "danhSachMaNguoiTimViec"=> $NTV->GET_danh_sach_ma_nguoi_tim_viec($macv)
    ]);
    }
//////////////////////////
    function Login(){
        $login = $this->view("login",['']);
    }
////////////////////
    function Show($a, $b){
        //model
        $an = $this->model("SinhVienModel");
        $tong = $an->Tong($a,$b);

        //view
        $this->view("aodep", 
        ["Page"=>"news",
        "Number"=>$tong,
        "Mau"=>"red",
        "soThich"=>["da bong","nghe nhac"],
        "SV"=>$an->SinhVien()]);//[key=>value] truyền value của tổng vào biển key

    }
}
?>  