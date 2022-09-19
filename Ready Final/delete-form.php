<?php
include('./include/config.php');
$obj = new Database();

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  if ($obj->delete($id)) {
    echo '<script>alert("Data Penduduk Berhasil Dihapus..")</script>';
    echo '<script>window.location.href="data-table.php"</script>';
  } else {
    echo '<script>alert("Data Penduduk Gagal Dihapus!")</script>';
    echo '<script>window.location.href="data-table.php"</script>';
  }
}
