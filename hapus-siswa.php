<?php

include 'config/app.php';

$id_siswa = (int)$_GET['id_siswa'];

if (delete_siswa($id_siswa) > 0 ) {
    echo "<script>
            alert('Data Berhasil DIhapus');
            document.location.href = 'index-siswa.php';
          </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'index-siswa.php';
          </script>";
}
