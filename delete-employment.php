<?php

include 'api.php';
$id = (int)$_GET['id'];

if (delete_employment($id) > 0 ) {
    echo "<script>
            alert('Data Succesfully Deleted');
            document.location.href = 'employment.php';
          </script>";
} else {
    echo "<script>
            alert('Data Failed to Delete');
            document.location.href = 'employment.php';
          </script>";
}
