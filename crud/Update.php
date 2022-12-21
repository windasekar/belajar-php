<?php
require 'koneksi.php';
$id = $_GET["id"];
$queryUpdate = mysqli_query($conn, "SELECT * FROM todoapp WHERE id='$id'");
$data = mysqli_fetch_array($queryUpdate);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>UPDATE</h2>
        <form action="" method="post">
            <div class="row justify-content-center">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="input data" name="item" value="<?php echo $data['item']; ?>" required>
                </div>
                <div class="col-4">
                    <button class="btn btn-primary" type="submit" name="update">Update</button>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['update'])) {
            $update = htmlspecialchars($_POST['item']);

            if ($data['item'] == $update) {
        ?>
                <meta http-equiv="refresh" content="1; url=../crud/" />
            <?php
            } else {
                $querySimpan = mysqli_query($conn, "UPDATE todoapp SET item='$update' WHERE id='$id'");

            ?>
                <meta http-equiv="refresh" content="0; url=../crud/" />
        <?php
            };
        };
        ?>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>