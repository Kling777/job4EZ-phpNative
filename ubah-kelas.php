<?php

include 'layout/header.php';

$id_kelas = (int)$_GET['id_kelas'];

$guru = select("SELECT * FROM guru");

$kelas = select("SELECT * FROM kelas WHERE id_kelas = $id_kelas")[0];

if (isset($_POST['ubah'])) {
    if (update_kelas($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'index-kelas.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah');
                document.location.href = 'index-kelas.php';
              </script>";
    }
}
?>

<div class="container">
    <div class="row mt-3">
        <h3>Ubah Data Baru</h3>
    </div>

    <div class="row mt-3">
        <form method="POST" action="">
            <table class="table table-bordered">
                <tbody>
                    <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas']; ?>">
                        <td>Nama Kelas</td>
                        <td>
                            <input autocomplete="off" id="nama_kelas" value="<?= $kelas['nama_kelas']; ?>" class="form-control" type="text"
                                name="nama_kelas" required>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Wali Kelas</td>
                        <td>
                            <select name="id_guru" required>
                                <option value="">Pilih Wali Kelas</option>
                                <?php foreach ($guru as $g) : ?>
                                    <option value="<?= $g['id_guru']; ?>" <?= $kelas['id_guru'] == $g['id_guru'] ? 'selected' : ''; ?>>
                                        <?= $g['nama_guru']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
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