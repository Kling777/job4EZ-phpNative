<?php

include 'layout/header.php';

if (isset($_POST['tambah'])) {
    if (create_mapel($_POST) > 0 ) {
        echo "<script>
                alert('Data Berhasil Ditambah');
                document.location.href = 'index-mapel.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambah');
                document.location.href = 'index-mapel.php';
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
                            <td>Nama Mapel</td>
                            <td>
                                <input autocomplete="off" id="nama_mapel" value="" class="form-control" type="text"
                                    name="nama_mapel" required>
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