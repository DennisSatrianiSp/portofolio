<?php
session_start();
if (isset($_SESSION['login'])) {
  header("location: soal.php");
  exit;
}

if (isset($_POST['submit'])) {

  $_SESSION['nama'] = $_POST["nama"];
  $_SESSION['kelas'] = $_POST["kelas"];
  $_SESSION['email'] = $_POST["email"];

  $_SESSION['login'] = true;
  header("location: soal.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="soal.css" />
  <title>Formulir Data diri</title>
</head>

<body>
  <section>
    <div class="container text-white font" style="margin-top: 80px">
      <div class="row text-center">
        <div class="col">
          <h2>Formulir Data Peserta</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form method="POST" action="">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" required name="nama" />
            </div>

            <div class="mb-3">
              <label for="nama" class="form-label">Kelas</label>
              <input type="text" class="form-control" id="kelas" aria-describedby="emailHelp" required name="kelas" />
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required name="email" />
            </div>
            <button onclick="result()" type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>