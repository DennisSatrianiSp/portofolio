<?php
session_start();


if (!isset($_SESSION['login'])) {
  header("location: form.php");
  exit;
}
$name = $_SESSION['nama'];
$class = $_SESSION['kelas'];
$mail = $_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="soal.css" />
  <title>Game Kuis Sederhana</title>
</head>

<body>
  <div class="container font text-white">
    <div class="row">
      <div class="col mt-3" style="margin-left: 140px">
        <h2>GAME SOAL MATEMATIKA SEDERHANA</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 mt-4">
        <div class="kartu">
          <h5 class="text-center">DATA DIRI PESERTA GAME</h5>
          <hr />
          <table>
            <tr>
              <th>Nama Lengkap</th>
              <th>:</th>
              <td><?= $name ?></td>
            </tr>
            <tr>
              <th>Kelas</th>
              <th>:</th>
              <td><?= $class ?></td>
            </tr>
            <tr>
              <th>Email</th>
              <th>:</th>
              <td><?= $mail ?></td>
            </tr>
          </table>
          <h3 class="text-center mt-5">Nilai Peserta adalah</h3>
          <h1 class="text-center" id="nilai">0</h1>
          <div class="tombol">
            <button class="btn btn-dark mt-2"><a href="logout.php" style="text-decoration: none; color: red;">LogOut</a> </button>
          </div>
        </div>
      </div>

      <div class="col-md-5 mt-4 ms-2">
        <div class="kartu">
          <h5 class="text-center">SOAL GAME MATEMATIKA</h5>
          <hr />
          <p>1.) Jika x = <span id="num1"></span> dan y = <span id="num2"></span>. Berapakah hasil dari x + y ?</p>
          <input type="text" placeholder="Isi Jawaban Disini" id="total1" />

          <p class="mt-2">2.) Hasil dari <span id="num3"></span> + <span id="num4"></span> adalah ?</p>
          <input type="text" placeholder="Isi Jawaban Disini" id="total2" />

          <p class="mt-2">3.) Hasil dari <span id="num5"></span> x <span id="num6"></span> adalah ?</p>
          <input type="text" placeholder="Isi Jawaban Disini" id="total3" />

          <p class="mt-2">4.) Jika x = <span id="num7"></span> dan y = <span id="num8"></span>. Berapakah hasil dari x - y =?</p>
          <input type="text" placeholder="Isi Jawaban Disini" id="total4" />

          <p class="mt-2">5.) Jika a = <span id="num9"></span> dan b = <span id="num10"></span>. Berapakah hasil dari a / b =?</p>
          <input type="text" placeholder="Isi Jawaban Disini" id="total5" />
          <br />
          <div class="tombol" style="float: right">
            <button class="btn btn-dark mt-2" id="submit">Kirim Sekarang!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="Jquery.js"></script>
  <script src="soal.js"></script>
</body>

</html>