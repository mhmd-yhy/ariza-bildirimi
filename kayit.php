<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<?php
include("ayarlar.php");
$AdSoyad = $_POST["AdSoyad"];
$MarkaModel = $_POST["MarkaModel"];
$SeriNo = $_POST["SeriNo"];
$ArizaAciklamasi = $_POST["ArizaAciklamasi"];
$sorgu = $baglan->prepare("Insert Into arizabildirimi(AdSoyad,MarkaModel,SeriNo,ArizaAciklamasi) Values(?,?,?,?)");
$sorgu->bind_param("ssis", $AdSoyad, $MarkaModel, $SeriNo, $ArizaAciklamasi);
?>

<body>
  <div class="parent d-flex flex-column justify-content-between m-auto my-5 rounded-2 overflow-hidden">
    <div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
        <div class="container-fluid">
          <span class="fs-4 text-white me-2">Ariza Bildirimi</span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">AnaSayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kayitFormu.php">Kayit Ekle</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="overflow-auto d-flex justify-content-center align-items-center" style="height: 48vh;">
        <div class="alert bildirim border-0 rounded-0 m-0 mt-3 text-center fs-4 text-white w-100" role="alert">
          <?php
          if ($AdSoyad != "" && $SeriNo != "" && $MarkaModel != "" && $ArizaAciklamasi != "") {
            if ($sorgu->execute()) echo "Ariza Eklendi ";
          }
          $sorgu->close();
          $baglan->close();
          ?>
        </div>
      </div>
    </div>

    <div class="alert border-0 m-0 mt-3 text-center fs-4 text-white" role="alert">
      Developed By Muhammed Yahya
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>