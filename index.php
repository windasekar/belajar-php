<?php
    // membuat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","seal_fakultas");

    // check connection with MySQL
    if (mysqli_connect_errno()) {
        echo "Koneksi gagal" . mysqli_connect_error();
        exit();
    }else{
        echo "Koneksi berhasil";
    }

    // membuat data dari table mysql
    $query = "SELECT * FROM mahasiswa";

    // menampilkan data, cek apakah query bisa dijalankan
    $result = mysqli_query($con,$query);
    $mahasiswa = [];
    if ($result){
        // menampilkan satu per satu
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br>".$row["nama"]."alamat :".$row["alamat"];
            $mahasiswa[] = $row;
        }
        mysqli_free_result($result);
    }

    // menutup koneksi
    mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php var_dump($mahasiswa);?>
    <table border="1" style="width:100%;">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
    </tr>
    <?php foreach($mahasiswa as $value): ?>
    <tr>
        <td><?php echo $value["nim"]; ?></td>
        <td><?php echo $value["nama"]; ?></td>
    </tr>
    <?php endforeach; ?>
</body>
</html>