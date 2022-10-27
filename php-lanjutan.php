<?php

$nama = "Putu";

// PENGULANGAN YANG MENGHABISKAN MEMORI -------------------------------------------
/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
*/

// PENGULANGAN 1 -------------------------------------------
/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
}
*/

// PENGULANGAN 2 -------------------------------------------
/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

// PENGULANGAN 3 -------------------------------------------
/*
$no = 10;
$i = 0;

do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

// PENGULANGAN 4 -------------------------------------------
// $data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');

// untuk menampilkan data spesifik
// echo $data[5];

/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

// PENGULANGAN 5 -------------------------------------------
/*
$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');

for ($i=0; $i<count($data); $i++) {
    echo $data[$i]."<br/>";
}
*/

// PENGULANGAN 6 -------------------------------------------
/*
$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');

$i = 0;
while ($i < count ($data)) {
    echo $data[$i]."<br/>";
    $i++;
}
*/

// PERCABANGAN 1 -------------------------------------------
/*
if ($nama == "Putu") {
    echo $nama." adalah orang Bali";
} else if ($nama == "Budi") {
    echo $nama." berasal dari Pulau Jawa";
} else {
    echo $nama." darimana ya?";
}
*/

// PERCABANGAN 2 -------------------------------------------
/*
switch($nama) {
    case "Putu";
        $pesan = $nama." adalah orang Bali";
    break;
    case "Budi";
        $pesan = $nama." berasal dari Pulau Jawa";
    break;
    default;
        $pesan = $nama." darimana ya?";
}

echo $pesan;
*/

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
    <h1>Input Nama Diulang dan Jumlah</h1>
    <form acttion="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {
            switch($_POST['nama']) {
                case "Putu";
                    $pesan = $_POST['nama']." adalah orang Bali";
                break;
                case "Budi";
                    $pesan = $_POST['nama']." berasal dari Pulau Jawa";
                break;
                default;
                    $pesan = $_POST['nama']." darimana ya?";
        }

        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br/>";
        }

    } else {
        echo "Anda belum input nama dan jumlah";
    }
    ?>

</body>
</html>