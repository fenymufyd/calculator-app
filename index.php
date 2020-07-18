<?php 
  $hasil = "";
  if (isset($_POST['tambah'])) {
    $a  = $_POST['a'];
    $b  = $_POST['b'];
    $hasil = $a + $b;
  }elseif (isset($_POST['kurang'])) {
    $a  = $_POST['a'];
    $b  = $_POST['b'];
    $hasil = $a - $b;
  }elseif (isset($_POST['bagi'])) {
    $a  = $_POST['a'];
    $b  = $_POST['b'];
    $hasil = $a / $b;
  }elseif (isset($_POST['kali'])) {
    $a  = $_POST['a'];
    $b  = $_POST['b'];
    $hasil = $a * $b;
  }elseif (isset($_POST['modulus'])) {
    $a  = $_POST['a'];
    $b  = $_POST['b'];
    $hasil = $a % $b;
  }elseif (isset($_POST['hapus'])) {
    $a = "";
    $b = "";
    $hasil = "";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator App</title>
</head>
<body>
  <h3>Aplikasi kalkulator berbasis web</h3>
  <table>
    <form action="" method="post">
      <tr>
        <td>Masukkan nilai A</td>
        <td>:</td>
        <td><input type="number" name="a" id="a" value="<?= $a; ?>"></td>
      </tr>
      <tr>
        <td>Masukkan nilai B</td>
        <td>:</td>
        <td><input type="number" name="b" id="b" value="<?= $b; ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <button type="submit" name="tambah">+</button>
          <button type="submit" name="kurang">-</button>
          <button type="submit" name="bagi">/</button>
          <button type="submit" name="kali">X</button>
          <button type="submit" name="modulus">%</button>
          <button type="submit" name="hapus">C</button>
        </td>
      </tr>
      <tr>
        <td>Hasil/result</td>
        <td>:</td>
        <td><input type="text" name="result" id="result" value="<?= $hasil; ?>" readonly></td>
      </tr>
    </form>
  </table>
</body>
</html>