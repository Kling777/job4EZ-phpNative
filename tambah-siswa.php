<?php

include 'layout/header.php';

if (isset($_POST['tambah'])) {
    if (create_siswa($_POST) > 0 ) {
        echo "<script>
                alert('Data Berhasil Ditambah');
                document.location.href = 'index-siswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Berhasil Gagal');
                document.location.href = 'index-siswa.php';
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
                                <input autocomplete="off" id="nama" value="" class="form-control" type="text"
                                    name="nama" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Nis</td>
                            <td>
                                <input autocomplete="off" id="nis" value="" class="form-control" type="text"
                                    name="nis" required>
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
                            <td>Alamat</td>
                            <td>
                                <input autocomplete="off" alamat value="" class="form-control" type="text"
                                    name="alamat" required>
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