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
$basvur = "Select * From arizabildirimi";
$veri = $baglan->query($basvur);
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
                <a class="nav-link active" aria-current="page" href="#">AnaSayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kayitFormu.php">Kayit Ekle</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="overflow-auto pe-1" style="height: 48vh;">
        <table class="table table-hover border-0" border="1">
          <thead>
            <tr>
              <td class="bg-dark text-center">ID</td>
              <td class="bg-dark text-center">Ad Soyad</td>
              <td class="bg-dark text-center">Marka</td>
              <td class="bg-dark text-center">SeriNo</td>
              <td class="bg-dark text-center">Aciklama</td>
              <td class="bg-dark text-center">Kayit Tarihi</td>
              <td class="bg-dark text-center">Guncelle</td>
              <td class="bg-dark text-center">Sil</td>
            </tr>
          </thead>
          <tbody class="overflow-auto">
            <?php while ($satir = $veri->fetch_assoc()) { ?>
              <tr>
                <td class="bg-transparent text-light text-center"><?php echo $satir["id"]; ?></td>
                <td class="bg-transparent text-light text-center"><?php echo $satir["AdSoyad"]; ?></td>
                <td class="bg-transparent text-light text-center"><?php echo $satir["MarkaModel"]; ?></td>
                <td class="bg-transparent text-light text-center"><?php echo $satir["SeriNo"]; ?></td>
                <td class="bg-transparent text-light text-center"><?php echo $satir["ArizaAciklamasi"]; ?></td>
                <td class="bg-transparent text-light text-center"><?php echo $satir["ArizaKayitTarihi"]; ?></td>
                <td class="bg-transparent text-light text-center"><a href="guncelleFormu.php?id=<?php echo $satir["id"] ?>" class="link-offset-2 link-underline link-underline-opacity-0 text-white-50">Guncelleme</a></td>
                <td class="bg-transparent text-light text-center"><a href="sil.php?id=<?php echo $satir["id"] ?>" class="link-offset-2 link-underline link-underline-opacity-0 text-white-50">Sil</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="alert border-0 m-0 mt-3 text-center fs-4 text-white" role="alert">
      Developed By Muhammed Yahya
    </div>
  </div>
  <?php $baglan->close(); ?>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>