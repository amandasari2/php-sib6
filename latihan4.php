<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Form Login</h1>
    <form action="#" method="POST">
        <div>
            <label>Nama : </label>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="">Password : </label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="">Email : </label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Tanggal Lahir</label>
            <input type="date" name="tanggal" id="">
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jk" id="" value="Laki-laki">Laki-laki
            <input type="radio" name="jk" id="" value="Perempuan">Perempuan
        </div>
        <div>
            <input type="submit" name="submit" value="Simpan">
            <input type="reset" name="reset" value="Reset">
        </div>
    </form>
    <hr>
</body>
</html>

<?php 

echo 'Nama : ' . $_POST['nama'] . '<br>';
echo 'Password : ' . $_POST['password'] . '<br>';
echo 'Email : ' . $_POST['email'] . '<br>';
echo 'Tanggal Lahir : ' . $_POST['tanggal'] . '<br>';
echo 'Jenis Kelamin : ' . $_POST['jk'];
?>