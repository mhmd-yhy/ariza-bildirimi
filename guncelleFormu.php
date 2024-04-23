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
$id = $_GET["id"];
$sql = "Select * From arizabildirimi Where id = $id ";

$veri = $baglan->query($sql);
$satir = $veri->fetch_assoc();
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

      <div class="overflow-auto" style="height: 48vh;">
        <h3 class="mb-0 text-center text-light">Guncelleme Formu</h3>
        <form class="g-3 py-4 pb-0 px-4 text-white" action="guncelle.php?id=<?php echo $satir["id"] ?>" method="post">
          <div class="row d-flex justify-content-between">
            <div class="col-md-4">
              <label for="inputName" class="form-label fs-5">Ad Soyad</label>
              <input type="text" name="AdSoyad" value="<?php echo $satir["AdSoyad"] ?>" id="inputName" class="form-control bg-transparent text-white border border-secondary">
              </input>
            </div>
            <div class="col-md-3">
              <label for="inputSeriNO" class="form-label fs-5">Seri No</label>
              <input type="number" name="SeriNo" value="<?php echo $satir["SeriNo"] ?>" id="inputSeriNO" class="form-control bg-transparent text-white border border-secondary">
            </div>
            <div class="col-md-4">
              <label for="inputModal" class="form-label fs-5">Model</label>
              <input type="text" name="MarkaModel" value="<?php echo $satir["MarkaModel"] ?>" id="inputModal" class="form-control bg-transparent text-white border border-secondary">
              </input>
            </div>
          </div>
          <div class="col-md-12 mt-3">
            <label for="inputCity" class="form-label fs-5">Açıklama</label>
            <input type="text" name="ArizaAciklamasi" value="<?php echo $satir["ArizaAciklamasi"] ?>" id="inputCity" class="form-control bg-transparent text-white border border-secondary">

          </div>

          <div class="col-md-2 d-flex justify-content-center mt-4 w-100">
            <button type="submit" class="btn btn-primary w-25">Guncelle</button>
          </div>
        </form>
      </div>

    </div>
    <div class="alert border-0 m-0 mt-3 text-center fs-4 text-white" role="alert">
      Developed By Muhammed Yahya
    </div>
  </div>
  <?php
  $baglan->close();
  ?>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>