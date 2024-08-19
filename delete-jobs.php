<?php

include 'api.php';
$id = (int)$_GET['id'];

if (delete_jobs($id) > 0 ) {
    echo "<script>
            alert('Data Sucessfully Deleted');
            document.location.href = 'jobs.php';
          </script>";
} else {
    echo "<script>
            alert('Data Failed to Delete');
            document.location.href = 'jobs.php';
          </script>";
}
