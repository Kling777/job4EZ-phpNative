<?php

include 'layout/header.php';

$mapel = select("SELECT * FROM mapel");

if (isset($_POST['tambah'])) {
    if (create_guru($_POST) > 0 ) {
        echo "<script>
                alert('Data Berhasil Ditambah');
                document.location.href = 'index-guru.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Berhasil Gagal');
                document.location.href = 'index-guru.php';
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
                            <td>Nip</td>
                            <td>
                                <input autocomplete="off" id="nip" value="" class="form-control" type="text"
                                    name="nip" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Guru</td>
                            <td>
                                <input autocomplete="off" id="nama_guru" value="" class="form-control" type="text"
                                    name="nama_guru" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <input autocomplete="off" id="tgl_lahir" value="" class="form-control" type="date"
                                    name="tgl_lahir" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Kelamin</td>
                            <td>
                            <input type="radio" id="kelamin" name="kelamin" value="Male"><label for="Male" required>Male</label><br>
                            <input type="radio" id="kelamin" name="kelamin" value="Female"><label for="Female" required>Female</label><br>

                            </td>
                        </tr>
                        <tr>
                            <td>Mapel</td>
                            <td>
                            <select name="id_mapel" required>
                                <option value="">Pilih Mata Pelajaran</option>
                            <?php foreach($mapel as $m) : ?>
                                <option value="<?= $m['id_mapel']; ?>"><?= $m['nama_mapel']; ?></option>
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