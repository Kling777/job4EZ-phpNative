<?php

include 'api.php';
$id = (int)$_GET['id_user'];

if (delete_users($id) > 0 ) {
    echo "<script>
            alert('Data Successfully Deleted');
            document.location.href = 'users.php';
          </script>";
} else {
    echo "<script>
            alert('Data Failed to Delete');
            document.location.href = 'users.php';
          </script>";
}
