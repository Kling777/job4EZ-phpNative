<?php

include 'layout/header.php';

$id_siswa = (int)$_GET['id_siswa'];

$siswa = select("SELECT * FROM siswa WHERE id_siswa = $id_siswa")[0];

if (isset($_POST['ubah'])) {
    if (update_siswa($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'index-siswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah');
                document.location.href = 'index-siswa.php';
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
                    <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa']; ?>">
                    <tr>
                        <td>Nama Siswa</td>
                        <td>
                            <input autocomplete="off" id="nama" value="<?= $siswa['nama']; ?>" class="form-control" type="text"
                                name="nama" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nis</td>
                        <td>
                            <input autocomplete="off" id="nis" value="<?= $siswa['nis']; ?>" class="form-control" type="text"
                                name="nis" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input autocomplete="off" id="tgl_lahir" value="<?= $siswa['tgl_lahir']; ?>" class="form-control" type="date"
                                name="tgl_lahir" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Kelamin</td>
                        <td>
                            <input type="radio" name="kelamin" value="Male" <?php if ($siswa['kelamin'] == 'Male') echo 'checked'; ?> required>
                            <label>Male</label>

                            <input type="radio" name="kelamin" value="Female" <?php if ($siswa['kelamin'] == 'Female') echo 'checked'; ?> required>
                            <label>Female</label>
                        </td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>
                            <input autocomplete="off" alamat value="<?= $siswa['alamat']; ?>" class="form-control" type="text"
                                name="alamat" required>
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