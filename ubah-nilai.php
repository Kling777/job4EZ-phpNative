<?php

include 'layout/header.php';

$id_nilai = (int)$_GET['id_nilai'];

$siswa = select("SELECT * FROM siswa");
$mapel = select("SELECT * FROM mapel");

$nilai = select("SELECT * FROM nilai WHERE id_nilai = $id_nilai")[0];

if (isset($_POST['ubah'])) {
    if (update_nilai($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'index-nilai.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah');
                document.location.href = 'index-nilai.php';
              </script>";
    }
}
?>

<div class="container">
    <div class="row mt-3">
        <h3>Ubah Data</h3>
    </div>

    <div class="row mt-3">
        <form method="POST" action="">
            <table class="table table-bordered">
                <tbody>
                    <input type="hidden" name="id_nilai" value="<?= $nilai['id_nilai']; ?>">
                    <tr>
                        <td>Siswa</td>
                        <td>
                            <select name="id_siswa" required>
                                <option value="">Pilih Siswa</option>
                                <?php foreach ($siswa as $s) : ?>
                                    <option value="<?= $s['id_siswa']; ?>" <?= $nilai['id_siswa'] == $s['id_siswa'] ? 'selected' : ''; ?>>
                                        <?= $s['nama']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Mapel</td>
                        <td>
                            <select name="id_mapel" required>
                                <option value="">Pilih Mata Pelajaran</option>
                                <?php foreach ($mapel as $m) : ?>
                                    <option value="<?= $m['id_mapel']; ?>" <?= $nilai['id_mapel'] == $m['id_mapel'] ? 'selected' : ''; ?>>
                                        <?= $m['nama_mapel']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nilai</td>
                        <td>
                            <input autocomplete="off" id="nilai" value="<?= $nilai['nilai']; ?>" class="form-control" type="number" step="0.01"
                                name="nilai" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button class="btn btn-success" id="ubah" name="ubah" type="submit">Ubah</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<?php include 'layout/footer.php' ?>
