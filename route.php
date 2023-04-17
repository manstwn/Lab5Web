<?php
$mod = @$_REQUEST['mod'];
switch ($mod) {
  case "":
    require("halaman/home.php");
    break;
  case "home":
    require("halaman/home.php");
    break;
  case "tambah":
    require("fungsi/tambah.php");
    break;
  case "ubah":
    require("fungsi/ubah.php");
    break;   
  case "about":
    require("halaman/about.php");
    break; 
  case "kontak":
    require("halaman/kontak.php");
    break; 
 default:
 require("halaman/error.php");
}
?>