<?php
class SinhVienModel extends DB{
    public function GetSV(){
        echo "adsasda";
        return "Nguyễn Trường Nhật";
        
    }

    public function Tong($n, $m){
        return $n + $m;
        echo "hahaaha";
    }

    public function SinhVien(){
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $qr);
    }

}
?>