<?php
include "conn.php";

if (isset($_POST['save'])) {

    $tanggal = $_POST['tgl'];
    $kendala = $_POST['kendala'];
    $modul = $_POST['modul'];
    $lokasi = $_POST['lokasi'];
    $note = $_POST['note'];
    $status = $_POST['status'];

    $sql = "INSERT INTO emr_kotaksaran (tanggal,kendala,modul,layanan,note,status) VALUES 
    ('$tanggal','$kendala','$modul','$lokasi','$note','$status' )";

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        //redirect ke halaman index
        echo "<script> alert(
            'Sip,Kesimpen!',
            'Mantap Sekali',
            'success') </script>";
        $apiToken = "5355839999:AAEBaeF-MOoF8ExnZJ1dcXJviVBdGxiTM0g";
        $data = [
            'chat_id' => '539860841',
            // 'text' => 'Laporan Baru Masuk,Bos!',
            'text' => $kendala
            // 'text' => $tanggal
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
}
