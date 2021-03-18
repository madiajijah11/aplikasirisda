<?php

include 'header.php';
require_once 'include/auth.php';
require 'include/function.php';

if (isset($_POST['datanasabah'])) {
    if (tambahdatanasabah($_POST) > 0) {
        echo "<script>
    alert('Tambah data berhasil');
    window.location.href='data-nasabah.php';
    </script>";
    } else {
        echo "<script>
    alert('Tambah data gagal');
    window.location.href='tambah-data-nasabah.php';
    </script>";
    }
}

?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Data Nasabah Lunas</h1>
        <div class="card">
            <div class="card-header">Tambah Data
            </div>
            <div class="card-body">
                <form class="form-item" action="" method="post" role="form">
                    <div class="form-group">
                        <label for="noktp">Nomor KTP</label>
                        <input type="text" class="form-control" name="noktp" placeholder="16664425213" required="required">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Risda Roosyantie" required="required">
                    </div>
                    <div class="form-group">
                        <label for="nohp">Nomor HP</label>
                        <input type="number" class="form-control" name="nohp" placeholder="081298452573" required="required">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" placeholder="Jalan. Menuju Hatimu" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota Asal</label>
                        <input type="text" class="form-control" name="kota" placeholder="Banjarmasin" required="required">
                    </div>
                    <div class="form-group">
                        <label for="tmptlahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmptlahir" placeholder="Hulu Sungai" required="required">
                    </div>
                    <div class="form-group row-cols-lg-5">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgllahir" pattern="\d{1,2}-\d{1,2}-\d{4}" required="required">
                    </div>
                    <div class="form-group">
                        <label for="penghasilan">Penghasilan</label>
                        <input type="text" class="form-control" name="penghasilan" placeholder="4000000" required="required">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" placeholder="PNS" required="required">
                    </div>
                    <button type="submit" name="datanasabah" class="btn btn-primary" onclick="return confirm('Yakin ingin menyimpan?')">Simpan</button>
                    <button type="reset" class="btn btn-warning">Clear</button>
                    <a href="data-nasabah.php" class="btn btn-success" onclick="return confirm('Yakin kembali?')">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</main>

<?php

include 'footer.php';

?>