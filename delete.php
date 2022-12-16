<?php 

if(isset($_GET['id'])){
    // MENGAMBIL ID DARI GET
    $id = $_GET['id'];

    // MEMBUAT KONEKSI KE MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    // CHECK CONNECTION
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo 'koneksi berhasil';
    }

    $sql = "DELETE FROM mahasiswa WHERE id='$id' ";

    if (mysqli_query($con, $sql)) {
        echo "<br>Delete data berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }     
    mysqli_close($con);
}
?>
