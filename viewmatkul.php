<?php

include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM tmatakuliah, tdosen 
where tmatakuliah.KdMataKuliah = tdosen.KdMataKuliah"); 
while ($data = mysqli_fetch_array(
    $query)){
        echo $data ['KdMataKuliah'];
        echo $data ['MataKuliah'];
        echo $data ['NamaDosen'];

    }



?>