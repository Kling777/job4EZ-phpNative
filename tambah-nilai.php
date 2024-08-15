<?php

include 'layout/header.php';

$siswa = select("SELECT * FROM siswa");
$mapel = select("SELECT * FROM mapel");


if (isset($_POST['tambah'])) {
    if (create_nilai($_POST) > 0 ) {
        echo "<script>
                alert('Data Berhasil Ditambah');
                document.location.href = 'index-nilai.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Berhasil Gagal');
                document.location.href = 'index-nilai.php';
              </script>";
    }
}
?>

<div class="container">
        <div class="row mt-3">
            <h3>Tambah Data  Baru</h3>
        </div>

        <div class="row mt-3">
            <form method="POST" action="">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>
                            <select name="id_siswa" required>
                                <option value="">Pilih Nama Siswa</option>
                            <?php foreach($siswa as $s) : ?>
                                <option value="<?= $s['id_siswa']; ?>"><?= $s['nama']; ?></option>
                            <?php endforeach; ?>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Mapel</td>
                            <td>
                            <select name="id_mapel" required>
                                <option value="">Pilih Nama Mapel</option>
                            <?php foreach($mapel as $m) : ?>
                                <option value="<?= $m['id_mapel']; ?>"><?= $m['nama_mapel']; ?></option>
                            <?php endforeach; ?>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Nilai</td>
                            <td>
                                <input autocomplete="off" id="nilai" value="" class="form-control" type="decimal"
                                    name="nilai" required>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-success" id="tambah" name="tambah" type="submit">Submit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

<?php include 'layout/footer.php'?>