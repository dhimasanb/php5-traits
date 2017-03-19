<?php
include 'Sayap.php';
class Burung implements Sayap {
  public function terbang() {
    echo "Burung terbang tinggi sekali :) \n";
  }
}

$burung = new Burung();
$burung->terbang();

?>
