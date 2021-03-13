<?php

include 'header.php';
require_once 'include/auth.php';
require 'include/function.php';

// Get values from $_GET, or provide a default one if not set
$id = $_GET['id'] ? $_GET['id'] : "";
$sql = mysqli_query($link, "SELECT * FROM peminjamperbulan WHERE id='$id'");
$row = mysqli_fetch_array($sql);

if (isset($_POST['editpeminjamperbulan'])) {
  if (editdatapeminjamperbulan($_POST) > 0) {
    echo "<script>
    alert('Edit data berhasil');
    window.location.href='data-peminjam-perbulan.php';
    </script>";
  } else {
    echo "<script>
    alert('Edit data gagal');
    window.location.href='edit-data-peminjam-perbulan.php';
    </script>";
  }
}

?>

<main>
  <div class="container-fluid">
    <h1 class="mt-4">Edit Peminjam Perbulan</h1>
    <div class="card">
      <div class="card-header">Edit Data
      </div>
      <div class="card-body">
        <form class="form-item" action="" method="post" role="form">
          <input type="hidden" name="id" id="id" value="<?= $row['id'] ?>">
          <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" name="nik" required="required" value="<?= $row['nik'] ?>">
          </div>
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" required="required" value="<?= $row['nama'] ?>">
          </div>
          <div class="form-group">
            <label for="nohp">Nomor HP</label>
            <input type="number" class="form-control" name="nohp" required="required" value="<?= $row['nohp'] ?>">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" required="required"><?= $row['alamat'] ?></textarea>
          </div>
          <div class="form-group row-cols-lg-5">
            <label for="jeniskelamin">Jenis Kelamin</label>
              <select name="jeniskelamin" id="" required="required" class="form-control">
                <option selected disabled>Pilih</option>
                <option value="Laki-laki" <?php if(isset($row['jeniskelamin']) && ($row['jeniskelamin']) == 'Laki-laki') echo 'selected="selected"'; ?>>Laki-laki</option>
                <option value="Perempuan" <?php if(isset($row['jeniskelamin']) && ($row['jeniskelamin']) == 'Perempuan') echo 'selected="selected"'; ?>>Perempuan</option>
              </select>
            <!-- <input type="text" class="form-control" name="jeniskelamin" placeholder="Laki-laki/Perempuan"> -->
          </div>
          <div class="form-group row-cols-lg-5">
            <label for="statuskawin">Status Perkawinan</label>
              <select name="statuskawin" id="" required="required" class="form-control">
                <option selected isabled>Pilih</option>
                <option value="Kawin" <?php if(isset($row['statuskawin']) && ($row['statuskawin']) == 'Kawin') echo 'selected="selected"'; ?>>Kawin</option>
                <option value="Belum Kawin" <?php if(isset($row['statuskawin']) && ($row['statuskawin']) == 'Belum Kawin') echo 'selected="selected"'; ?>>Belum Kawin</option>
                <option value="Cerai" <?php if(isset($row['statuskawin']) && ($row['statuskawin']) == 'Cerai') echo 'selected="selected"'; ?>>Cerai</option>
              </select>
            <!-- <input type="text" class="form-control" name="statuskawin" placeholder="Kawin/Belum Kawin/Cerai"> -->
          </div>
          <div class="form-group">
            <label for="norekening">Nomor Rekening</label>
            <input type="number" class="form-control" name="norekening" required="required" value="<?= $row['norekening'] ?>">
          </div>
          <div class="form-group row-cols-lg-5">
            <label for="pinjaman">Pinjaman</label>
              <select name="pinjaman" id="" required="required" class="form-control">
                <option selected disabled>Pilih</option>
                <option value="5000000" <?php if(isset($row['pinjaman']) && ($row['pinjaman']) == '5000000') echo 'selected="selected"'; ?>>5000000</option>
                <option value="10000000" <?php if(isset($row['pinjaman']) && ($row['pinjaman']) == '10000000') echo 'selected="selected"'; ?>>10000000</option>
                <option value="15000000" <?php if(isset($row['pinjaman']) && ($row['pinjaman']) == '15000000') echo 'selected="selected"'; ?>>15000000</option>
                <option value="20000000" <?php if(isset($row['pinjaman']) && ($row['pinjaman']) == '20000000') echo 'selected="selected"'; ?>>20000000</option>
                <option value="25000000" <?php if(isset($row['pinjaman']) && ($row['pinjaman']) == '25000000') echo 'selected="selected"'; ?>>25000000</option>
                <option value="30000000" <?php if(isset($row['pinjaman']) && ($row['pinjaman']) == '30000000') echo 'selected="selected"'; ?>>30000000</option>
                <option value="35000000" <?php if(isset($row['pinjaman']) && ($row['pinjaman']) == '35000000') echo 'selected="selected"'; ?>>35000000</option>
                <option value="40000000" <?php if(isset($row['pinjaman']) && ($row['pinjaman']) == '40000000') echo 'selected="selected"'; ?>>40000000</option>
                <option value="45000000" <?php if(isset($row['pinjaman']) && ($row['pinjaman']) == '45000000') echo 'selected="selected"'; ?>>45000000</option>
                <option value="50000000" <?php if(isset($row['pinjaman']) && ($row['pinjaman']) == '50000000') echo 'selected="selected"'; ?>>50000000</option>
              </select>
            <!-- <input type="text" class="form-control" name="pinjaman" placeholder="Kawin/Belum Kawin/Cerai"> -->
          </div>
          <div class="form-group">
            <label for="angsuran">Angsuran</label>
            <input type="number" class="form-control" name="angsuran" required="required" value="<?= $row['angsuran'] ?>">
          </div>
          <div class="form-group row-cols-lg-5">
            <label for="tglpencairan">Tanggal Pencairan</label>
            <input type="date" class="form-control" name="tglpencairan" pattern="\d{1,2}-\d{1,2}-\d{4}" required="required" value="<?= $row['tglpencairan'] ?>">
          </div>
          <div class="form-group row-cols-lg-5">
              <label for="jangkawaktu">Jangka Waktu</label>
              <select name="jangkawaktu" id="" required="required" class="form-control">
                <option selected disabled>Pilih</option>
                <option value="12 Bulan" <?php if(isset($row['jangkawaktu']) && ($row['jangkawaktu']) == '12 Bulan') echo 'selected="selected"'; ?>>12 Bulan</option>
                <option value="24 Bulan" <?php if(isset($row['jangkawaktu']) && ($row['jangkawaktu']) == '24 Bulan') echo 'selected="selected"'; ?>>24 Bulan</option>
                <option value="36 Bulan" <?php if(isset($row['jangkawaktu']) && ($row['jangkawaktu']) == '36 Bulan') echo 'selected="selected"'; ?>>36 Bulan</option>
                <option value="48 Bulan" <?php if(isset($row['jangkawaktu']) && ($row['jangkawaktu']) == '48 Bulan') echo 'selected="selected"'; ?>>48 Bulan</option>
                <option value="60 Bulan" <?php if(isset($row['jangkawaktu']) && ($row['jangkawaktu']) == '60 Bulan') echo 'selected="selected"'; ?>>60 Bulan</option>
              </select>
            <!-- <input type="text" class="form-control" name="jangkawaktu" placeholder="3 Bulan" required="required"> -->
          </div>
          <button type="submit" name="editpeminjamperbulan" class="btn btn-primary" onclick="return confirm('Simpan perubahan?')">Edit</button>
          <a href="data-peminjam-perbulan.php" class="btn btn-warning" onclick="return confirm('Yakin batal edit?')">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</main>

<?php

include 'footer.php';

?>
