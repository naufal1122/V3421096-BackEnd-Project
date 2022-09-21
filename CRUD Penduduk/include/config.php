<?php
class Database
{
  private $host = "localhost";
  private $user = "v3421096_dewa2";
  private $pass = "123";
  private $db = "v3421096_db_warga";
  public $conn;
  public function __construct()
  {
    $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  public function insert($nik, $nama, $jenis_kelamin, $alamat, $status, $pekerjaan, $kewarganegaraan, $tempat_lahir, $tanggal_lahir, $golongan_darah, $klasifikasi, $umur)
  {
    $sql = "INSERT INTO warga (id, nik, nama, jenis_kelamin, alamat, status, pekerjaan, kewarganegaraan, tempat_lahir, tanggal_lahir, golongan_darah, klasifikasi, umur) VALUES (NULL, '$nik', '$nama', '$jenis_kelamin', '$alamat', '$status', '$pekerjaan', '$kewarganegaraan', '$tempat_lahir', '$tanggal_lahir', '$golongan_darah', '$klasifikasi', '$umur')";
    if ($this->conn->query($sql) === TRUE) {
      echo "<script>alert('Data Warga Berhasil Ditambahkan...')</script>";
      echo "<script>window.location.href='index.php'</script>";
    } else {
      echo "<script>alert('Data Warga Gagal Ditambahkan...')</script>" . $this->conn->error;
      echo "<script>window.location.href='index.php'</script>";
    }
  }

  public function get()
  {
    $sql = "SELECT * FROM warga";
    $result = $this->conn->query($sql);
    return $result;
  }

  public function update($nik, $nama, $jenis_kelamin, $alamat, $status, $pekerjaan, $kewarganegaraan, $tempat_lahir, $tanggal_lahir, $golongan_darah, $klasifikasi, $umur, $id)
  {
    $sql = "UPDATE warga SET nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', status='$status', pekerjaan='$pekerjaan', kewarganegaraan='$kewarganegaraan', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', golongan_darah='$golongan_darah', klasifikasi='$klasifikasi', umur='$umur' WHERE id='$id'";
    if ($this->conn->query($sql) === TRUE) {
      echo "<script>alert('Sukses Mengubah Data Warga')</script>";
      echo "<script>window.location.href='data-table.php'</script>";
    } else {
      echo "<script>alert('Gagal Mengubah Data Warga')</script>" . $this->conn->error;
      echo "<script>window.location.href='data-table.php'</script>";
    }
  }

  public function get_one($id)
  {
    $sql = "SELECT * FROM warga WHERE id = $id";
    $result = $this->conn->query($sql);
    return $result;
  }

  public function delete($id)
  {
    $sql = "DELETE FROM warga WHERE id = '$id'";
    if ($this->conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }
}

class warga
{
  public $nik;
  public $nama;
  public $jenis_kelamin;
  public $alamat;
  public $status;
  public $pekerjaan;
  public $kewarganegaraan;
  public $tempat_lahir;
  public $tanggal_lahir;
  public $golongan_darah;

  // fungsi setter
  function setter($nik, $nama, $jenis_kelamin, $alamat, $status, $pekerjaan, $kewarganegaraan, $tempat_lahir, $tanggal_lahir, $golongan_darah)
  {
    $this->nik = $nik;
    $this->nama = $nama;
    $this->jenis_kelamin = $jenis_kelamin;
    $this->alamat = $alamat;
    $this->status = $status;
    $this->pekerjaan = $pekerjaan;
    $this->kewarganegaraan = $kewarganegaraan;
    $this->tempat_lahir = $tempat_lahir;
    $this->tanggal_lahir = $tanggal_lahir;
    $this->golongan_darah = $golongan_darah;
  }

  // fungsi getter
  function get_nik()
  {
    return $this->nik;
  }
  function get_nama()
  {
    return $this->nama;
  }
  function get_jenis_kelamin()
  {
    return $this->jenis_kelamin;
  }
  function get_alamat()
  {
    return $this->alamat;
  }
  function get_status()
  {
    return $this->status;
  }
  function get_pekerjaan()
  {
    return $this->pekerjaan;
  }
  function get_kewarganegaraan()
  {
    return $this->kewarganegaraan;
  }
  function get_tempat_lahir()
  {
    return $this->tempat_lahir;
  }
  function get_tanggal_lahir()
  {
    return $this->tanggal_lahir;
  }
  function get_golongan_darah()
  {
    return $this->golongan_darah;
  }



  // method
  function calculate_age()
  {
    $date = new DateTime($this->tanggal_lahir);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;
  }

  function classify_age()
  {
    $age = $this->calculate_age();
    if ($age < 5) {
      return "Balita";
    } else if ($age >= 5 && $age < 12) {
      return "Anak-anak";
    } else if ($age >= 12 && $age < 19) {
      return "Remaja";
    } else if ($age >= 19 && $age < 60) {
      return "Dewasa";
    } else {
      return "Lansia";
    }
  }
}

if (isset($_POST['submit'])) {
  $warga = new Warga();
  $database = new Database();

  // setting properties
  $warga->setter($_POST['nik'], $_POST['nama'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['status'], $_POST['pekerjaan'], $_POST['kewarganegaraan'], $_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['golongan_darah']);

  // masukkan database
  $database->insert($warga->get_nik(), $warga->get_nama(), $warga->get_jenis_kelamin(), $warga->get_alamat(), $warga->get_status(), $warga->get_pekerjaan(), $warga->get_kewarganegaraan(), $warga->get_tempat_lahir(), $warga->get_tanggal_lahir(), $warga->get_golongan_darah(), $warga->classify_age(), $warga->calculate_age());
}

if (isset($_POST['submit_edit'])) {
  $database = new Database();
  $warga = new Warga();

  $warga->setter($_POST['nik'], $_POST['nama'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['status'], $_POST['pekerjaan'], $_POST['kewarganegaraan'], $_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['golongan_darah']);
  $database->update($warga->get_nik(), $warga->get_nama(), $warga->get_jenis_kelamin(), $warga->get_alamat(), $warga->get_status(), $warga->get_pekerjaan(), $warga->get_kewarganegaraan(), $warga->get_tempat_lahir(), $warga->get_tanggal_lahir(), $warga->get_golongan_darah(), $warga->classify_age(), $warga->calculate_age(), $_POST['id']);
}
