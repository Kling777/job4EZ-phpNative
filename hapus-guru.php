<?php

include 'config/app.php';
$id_guru = (int)$_GET['id_guru'];

if (delete_guru($id_guru) > 0 ) {
    echo "<script>
            alert('Data Berhasil DIhapus');
            document.location.href = 'index-guru.php';
          </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'index-guru.php';
          </script>";
}
