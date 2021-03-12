<?php

include 'header.php';
require_once 'include/auth.php';
require 'include/function.php';

$id = $_GET['id'] ? $_GET['id'] : "";
$sql = mysqli_query($link, "SELECT * FROM nasabah WHERE id='$id'");
$row = mysqli_fetch_array($sql);

if (isset($_POST['editnasabah'])) {
    if (editdatanasabah($_POST) > 0) {
        echo "<script>
    alert('Edit data berhasil');
    window.location.href='data-nasabah.php';
    </script>";
    } else {
        echo "<script>
    alert('Edit data gagal');
    window.location.href='edit-data-nasabah.php';
    </script>";
    }
}

?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Nasabah</h1>
        <div class="card">
            <div class="card-header">Edit Data
            </div>
            <div class="card-body">
                <form class="form-item" action="" method="post" role="form">
                    <input type="hidden" name="id" id="id" value="<?= $row['id']; ?>">
                    <div class="form-group">
                        <label for="noktp">Nomor KTP</label>
                        <input type="text" class="form-control" name="noktp" placeholder="16664425213" value="<?= $row['noktp']; ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Risda Roosyantie" value="<?= $row['nama']; ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="nohp">Nomor HP</label>
                        <input type="number" class="form-control" name="nohp" placeholder="081298452573" value="<?= $row['nohp']; ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" placeholder="Jalan. Menuju Hatimu" required="required"><?= $row['alamat']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota Asal</label>
                        <input type="text" class="form-control" name="kota" placeholder="Banjarmasin" value="<?= $row['kota']; ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="tmptlahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmptlahir" placeholder="Hulu Sungai" value="<?= $row['tmptlahir']; ?>" required="required">
                    </div>
                    <div class="form-group row-cols-lg-5">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgllahir" pattern="\d{1,2}-\d{1,2}-\d{4}" value="<?= $row['tgllahir']; ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="penghasilan">Penghasilan</label>
                        <input type="text" class="form-control" name="penghasilan" placeholder="4000000" value="<?= $row['penghasilan']; ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" placeholder="PNS" value="<?= $row['pekerjaan']; ?>" required="required">
                    </div>
                    <button type="submit" name="editnasabah" class="btn btn-primary" onclick="return confirm('Simpan perubahan?')">Edit</button>
                    <a href="data-nasabah.php" class="btn btn-warning" onclick="return confirm('Yakin batal edit?')">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</main>

<?php

include 'footer.php';

?>