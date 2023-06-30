<?php
	
include "koneksi.php";

$KdDosen = $_GET['KdDosen'];
$NamaDosen = $_POST['NamaDosen'];

$sql = "UPDATE `tdosen` SET `NamaDosen` = '$NamaDosen' 
WHERE `tdosen`.`KdDosen` = '$KdDosen';";

$query = mysqli_query($conn, $sql);
if($query){
    $msg = "update data nama dosen berhasil";

}else{
    $msg = "update data nama dosen gagal";
}
$response = array(
    'status' => 'OK',
    'msg' => $msg
);
echo json_encode($response);


?>