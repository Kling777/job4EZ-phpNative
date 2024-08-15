<?php

$id_guru = (int)$_GET['id_guru'];

$mapel = select("SELECT * FROM mapel");

$guru = select("SELECT * FROM guru WHERE id_guru = $id_guru")[0];

if (isset($_POST['ubah'])) {
    if (update_fulljob($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'index-guru.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah');
                document.location.href = 'index-guru.php';
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
                    <input type="hidden" name="id_guru" value="<?= $guru['id_guru']; ?>">
                    <tr>
                        <td>Nip</td>
                        <td>
                            <input autocomplete="off" id="nip" value="<?= $guru['nip']; ?>" class="form-control" type="text"
                                name="nip" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Guru</td>
                        <td>
                            <input autocomplete="off" id="nama_guru" value="<?= $guru['nama_guru']; ?>" class="form-control" type="text"
                                name="nama_guru" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input autocomplete="off" id="tgl_lahir" value="<?= $guru['tgl_lahir']; ?>" class="form-control" type="date"
                                name="tgl_lahir" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Kelamin</td>
                        <td>
                            <input type="radio" name="kelamin" value="Male" <?php if ($guru['kelamin'] == 'Male') echo 'checked'; ?> required>
                            <label>Male</label>

                            <input type="radio" name="kelamin" value="Female" <?php if ($guru['kelamin'] == 'Female') echo 'checked'; ?> required>
                            <label>Female</label>
                        </td>
                    </tr>

                    <tr>
                        <td>Mapel</td>
                        <td>
                            <select name="id_mapel" required>
                                <option value="">Pilih Mata Pelajaran</option>
                                <?php foreach ($mapel as $m) : ?>
                                    <option value="<?= $m['id_mapel']; ?>" <?= $guru['id_mapel'] == $m['id_mapel'] ? 'selected' : ''; ?>>
                                        <?= $m['nama_mapel']; ?>
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