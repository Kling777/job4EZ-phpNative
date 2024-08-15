<?php

$level = select("SELECT * FROM level");

if (isset($_POST['tambah'])) {
    if (create_users($_POST) > 0 ) {
        echo "<script>
                alert('Data Berhasil Ditambah');
                document.location.href = 'in.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Berhasil Gagal');
                document.location.href = 'index-kelas.php';
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
                            <td>Nama Kelas</td>
                            <td>
                                <input autocomplete="off" id="nama_kelas" value="" class="form-control" type="text"
                                    name="nama_kelas" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Guru</td>
                            <td>
                            <select name="id_guru" required>
                                <option value="">Pilih Wali Kelas</option>
                            <?php foreach($guru as $g) : ?>
                                <option value="<?= $g['id_guru']; ?>"><?= $g['nama_guru']; ?></option>
                            <?php endforeach; ?>
                            </select>
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