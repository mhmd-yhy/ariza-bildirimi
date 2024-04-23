<?php
$baglan = new mysqli("localhost", "root", "usbw", "phpodev");
if ($baglan->connect_error) {
  echo "Baglanti Hatasi" . $baglan->connect_error;
  exit();
}
$baglan->set_charset("utf8");
