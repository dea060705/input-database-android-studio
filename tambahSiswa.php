<?php
 
include('koneksi.php');
 
$noinduk    = $_POST['noinduk'];
$nama       = $_POST['nama'];
$alamat     = $_POST['alamat'];
$hobi       = $_POST['hobi'];
 
if(!empty($nama) &amp;&amp; !empty($noinduk)){
 
    $sqlCheck = "SELECT COUNT(*) FROM tb_siswa WHERE noinduk='$noinduk' AND nama='$nama'";
    $queryCheck = mysqli_query($conn,$sqlCheck);
    $hasilCheck = mysqli_fetch_array($queryCheck);
    if($hasilCheck[0] == 0){
        $sql = "INSERT INTO tb_siswa (noinduk,nama,alamat,hobi) VALUES('$noinduk','$nama','$alamat','$hobi')";
 
        $query = mysqli_query($conn,$sql);
 
        if(mysqli_affected_rows($conn) > 0){
            $data['status'] = true;
            $data['result'] = "Berhasil";
        }else{
            $data['status'] = false;
            $data['result'] = "Gagal";
        }
    }else{
        $data['status'] = false;
        $data['result'] = "Gagal, Data Sudah Ada";
    }
 
     
 
}else{
    $data['status'] = false;
    $data['result'] = "Gagal, Nomor Induk dan Nama tidak boleh kosong!";
}
 
 
print_r(json_encode($data));
 
 
 
 
?>