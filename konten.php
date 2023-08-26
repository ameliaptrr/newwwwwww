<?php
if($_GET['menu'] == "" || $_GET['menu'] == 'home') {
  include('./konten/home.php');
} 
else if($_GET['menu'] == "pengaduan") {
  include('./konten/pengaduan.php');
}
else if($_GET['menu'] == "laporan-kejadian") {
  include('./konten/laporan-kejadian.php');
}
else if($_GET['menu'] == "logout") {
  session_start();
  session_destroy();
  header("Location: index.php");
}