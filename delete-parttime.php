<?php

include 'api.php';
$id = (int)$_GET['id'];

if (delete_parttime($id) > 0 ) {
    echo "<script>
            alert('Data Berhasil DIhapus');
            document.location.href = 'part-time-job.php';
          </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'part-time-job.php';
          </script>";
}
