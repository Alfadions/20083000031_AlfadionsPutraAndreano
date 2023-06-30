<?php
	
header("Content-Type:application/json");
$method = $_SERVER['REQUEST_METHOD'];
$result = array();
if($method=='POST'){
    if(isset($_POST['KdMataKuliah']) AND isset($_POST['MataKuliah']))
    {
         
        $KdMataKuliah = $_POST['KdMataKuliah'];
        $MataKuliah = $_POST['MataKuliah'];
        $result['status'] = [
            "code" => 200,
            "description" => '1 Data Inserted'     
        ];
        
        $host = 'localhost';
        $userdb = 'root';
        $pwd = '';
        $db = 'db_mahasiswa';
        $conn = new mysqli($host,$userdb,$pwd,$db);
        
        $sql = "INSERT INTO tmatakuliah (KdMataKuliah, MataKuliah)
                VALUES ('$KdMataKuliah','$MataKuliah')";        
        $conn->query($sql);
            $result['results'] = [
                "KdMatKuliah" => $KdMataKuliah,
                "MataKuliah" => $MataKuliah
            ];
        }else{
            $result['status'] = [
                "code"  => 400,
                "description" =>'Parameter Invalid'
            ];
        }

}else{
    $result['status'] = [
        "code" => 400,
        "description" => "Method Not Valid"
    ];
}
echo json_encode($result);
?>