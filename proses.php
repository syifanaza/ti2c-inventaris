<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama_merek = $_POST['nama_merek'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    if(isset($_POST['no']) && !empty($_POST['no'])) {
        
        $no = $_POST['no'];
        
        $query = "UPDATE inventaris SET nama_merek='$nama_merek', warna='$warna', jumlah=$jumlah WHERE no=$no";
    } else {
        
        $query = "INSERT INTO inventaris (nama_merek, warna, jumlah) VALUES ('$nama_merek', '$warna', $jumlah)";
    }

    if ($conn->query($query) === TRUE) {
        
        header("Location: hasil.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
