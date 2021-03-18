<?php

include 'header.php';
require_once 'include/auth.php';
require "include/function.php";

$sql = mysqli_query($link, "SELECT * FROM nasabah ORDER BY id DESC");
if (isset($_POST['searchnasabah'])) {
  $sql = carinasabah($_POST['carinasabah']);
}

?>

<main>
  <div class="container-fluid">
    <h1 class="mt-4">Data Nasabah</h1>
    <div class="card mb-4">
      <div class="card-header">Tabel
        <form class="form-inline my-2 my-lg-0 float-right" method="post">
          <input class="form-control mr-sm-2" type="search" name="carinasabah" placeholder="Cari">
          <button class="btn btn-outline-success mr-sm-2" type="submit" name="searchnasabah">Cari</button>
          <a href="data-nasabah.php" class="btn btn-danger mr-sm-2">Reset</a>
          <a href="tambah-data-nasabah.php" class="btn btn-primary mr-sm-2">Tambah Data</a>
          <!-- <a href="printall-nasabah.php" class="btn btn-success" target="_blank">Print Semua</a> -->
        </form>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-sm table-hover table-bordered">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Nomor KTP</th>
              <th scope="col">Nama Nasabah</th>
              <th scope="col">Nomor HP</th>
              <th scope="col">Alamat</th>
              <th scope="col">Kota</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Penghasilan</th>
              <th scope="col">Pekerjaan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($sql as $row) : ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $row['noktp']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nohp']; ?></td>
                <td><?= substr($row['alamat'], 0, 255); ?></td>
                <td><?= $row['kota']; ?></td>
                <td><?= $row['tmptlahir']; ?></td>
                <td><?= $row['tgllahir']; ?></td>
                <td>Rp.<?= number_format($row['penghasilan'], 0, ',', '.'); ?></td>
                <td><?= $row['pekerjaan']; ?></td>
                <td>
                  <div class="btn-group">
                    <a href="edit-data-nasabah.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="hapus-data-nasabah.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    <a href="print-nasabah.php?id=<?= $row['id']; ?>" class="btn btn-success" target="_blank">Print</a>
                  </div>
                </td>
              </tr>
              <?php $no++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</main>

<?php

include 'footer.php';

?>