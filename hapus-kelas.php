<?php

include 'config/app.php';
$id_kelas = (int)$_GET['id_kelas'];

if (delete_kelas($id_kelas) > 0 ) {
    echo "<script>
            alert('Data Berhasil DIhapus');
            document.location.href = 'index-kelas.php';
          </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'index-kelas.php';
          </script>";
}
