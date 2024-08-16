<?php

include 'api.php';
$id = (int)$_GET['id_user'];

if (delete_users($id) > 0 ) {
    echo "<script>
            alert('Data Berhasil DIhapus');
            document.location.href = 'users.php';
          </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'users.php';
          </script>";
}
