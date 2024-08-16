<?php

include 'api.php';
$id = (int)$_GET['id'];

if (delete_level($id) > 0 ) {
    echo "<script>
            alert('Data Berhasil DIhapus');
            document.location.href = 'level.php';
          </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'level.php';
          </script>";
}
