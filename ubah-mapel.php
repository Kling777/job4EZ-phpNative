<?php

include 'layout/header.php';

$id_mapel = (int)$_GET['id_mapel'];

$mapel = select("SELECT * FROM mapel WHERE id_mapel = $id_mapel")[0];

if (isset($_POST['ubah'])) {
    if (update_mapel($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'index-mapel.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah');
                document.location.href = 'index-mapel.php';
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
                    <input type="hidden" name="id_mapel" value="<?= $mapel['id_mapel']; ?>">
                    <tr>
                        <td>Nama Mapel</td>
                        <td>
                            <input autocomplete="off" id="nama_mapel" value="<?= $mapel['nama_mapel']; ?>" class="form-control" type="text"
                                name="nama_mapel" required>
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