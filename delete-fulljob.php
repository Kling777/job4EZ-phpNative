<?php

include 'api.php';
$id = (int)$_GET['id'];

if (delete_fulljob($id) > 0 ) {
    echo "<script>
            alert('Data Berhasil DIhapus');
            document.location.href = 'full-time-job.php';
          </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'full-time-job.php';
          </script>";
}
