<?php
require 'koneksi.php';
// Check If form submitted, insert form data into users table.
if (isset($_POST['submit'])) {
    $item = htmlspecialchars($_POST['item']);


    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO todoapp VALUES ('','$item')");

?>
    <meta http-equiv="refresh" content="1; url=../crud/" />
<?php
}
