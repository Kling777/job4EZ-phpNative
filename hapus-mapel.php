<?php

include 'config/app.php';

$id_mapel = (int)$_GET['id_mapel'];

if (delete_mapel($id_mapel) > 0 ) {
    echo "<script>
            alert('Data Berhasil DIhapus');
            document.location.href = 'index-mapel.php';
          </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'index-mapel.php';
          </script>";
}
