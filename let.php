
<?php

$servername = "localhost";
$username = "dev";
$password = "devharmon1";

$link = mysqli_connect('localhost', $username, $password);
if (!$link) {
    die('Not connected : ');
}

// make foo the current db
mysqli_select_db($link, 'qc_profile');



$nama = $_POST["nama"];
$email = $_POST["email"];
$telp = $_POST["telepon"];
$jabatan = $_POST["jabatan"];
$instansi = $_POST["instansi"];
$telpInstansi = $_POST["telpInstansi"];
$ds = mysqli_query($link, "INSERT INTO request_demo_client (nama, email, nomor_telepon, jabatan_instansi, nama_instansi, nomor_instansi) 
                    VALUES ('$nama', '$email', '$telp', '$jabatan', '$instansi', '$telpInstansi')");
if ($ds) {
    echo json_encode(["success" => true]);
}


?>
