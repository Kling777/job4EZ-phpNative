<?php

include 'api.php';
$id = (int)$_GET['id'];

if (delete_level($id) > 0 ) {
    echo "<script>
            alert('Data Successfully Delete');
            document.location.href = 'level.php';
          </script>";
} else {
    echo "<script>
            alert('Data Failed to Delete');
            document.location.href = 'level.php';
          </script>";
}
