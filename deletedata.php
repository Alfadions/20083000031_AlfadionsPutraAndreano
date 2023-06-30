<?php
   include_once 'koneksi.php';
   $sql = "DELETE FROM tmatakuliah WHERE MataKuliah='" . $_GET["MataKuliah"] . "'";
   if (mysqli_query($conn, $sql)) {
       echo "Record deleted successfully";
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }
   mysqli_close($conn);

?>