<?php

include 'config/app.php';
$id_nilai = (int)$_GET['id_nilai'];

if (delete_nilai($id_nilai) > 0 ) {
    echo "<script>
            alert('Data Berhasil DIhapus');
            document.location.href = 'index-nilai.php';
          </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'index-nilai.php';
          </script>";
}
