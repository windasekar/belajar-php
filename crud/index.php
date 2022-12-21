<?php
require 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM todoapp");
$jumlahItem = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h2 class="text-center">To Do App</h2>
    <p class="text-center">
      winda Sekar Widiati (3042765) - Malang 3
    </p>

    <form action="tambah.php" method="post">
      <div class="row justify-content-center">
        <div class="col-4">
          <input type="text" class="form-control" placeholder="input data" name="item" required>
        </div>
        <div class="col-4">
          <button class="btn btn-primary" type="submit" name="submit">Save</button>
        </div>
      </div>
    </form>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">To Do Item</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($jumlahItem == 0) {
        ?>
          <tr>
            <td colspan="3" class="text-center">Data To Do App Tidak Ada!!</td>
          </tr>
          <?php
        } else {
          $jumlah = 1;
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?php echo $jumlah; ?></td>
              <td><?php echo $data['item']; ?></td>
              <td>
                <button class="btn btn-warning">
                  <a class="text-decoration-none text-white" href="update.php?id=<?= $data['id']; ?>">
                    Update
                  </a>
                </button>
                <a href="?id=<?= $data['id']; ?>">
                  <button class="btn btn-danger">
                    Delete
                  </button>
                </a>
              </td>
            </tr>
        <?php
            $jumlah++;
          }
        }
        ?>

      </tbody>
    </table>
    <?php
    if (isset($_GET['id'])) {
      $queryDelete = mysqli_query($conn, "DELETE FROM `todoapp` WHERE id='$_GET[id]'");
    ?>
      <meta http-equiv="refresh" content="0; url=../crud/" />
    <?php
    };
    ?>
  </div>


  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>