<?php
class Home extends Controller{
    // kế thừa các funtion trong controller.php
    function SayHi(){
        //model() ở Controller.php
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSV();
    }
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