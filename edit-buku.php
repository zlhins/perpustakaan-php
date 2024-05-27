<?php
include_once("./connect.php");

$id = $_GET["id"];

$query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
$buku = mysqli_fetch_assoc($query_get_data);

if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db, "INSERT INTO buku VALUES (
        NULL, '$nama', '$isbn', $unit
    )");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT BUKU</title>
</head>
<body>
    <h1>Form tambah edit buku</h1>

    <!-- REQUEST: GET, POST, PUT, PATCH-->
    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $buku["nama"] ?>" type="text" id="nama" name="nama">

        <br>
        <br>

        <label for="isbn">ISBN</label>
        <input value="<?php echo $buku["isbn"] ?>" type="text" id="isbn" name="isbn">

        <br>
        <br>

        <label for="unit">Unit</label>
        <input value="<?php echo $buku["unit"] ?>" type="number" id="unit" name="unit">

        <br>
        <br>

        <button type="submit" name="submit">SUBMIT</button>
    </form>

</body>
</html>