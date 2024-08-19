<?php

include 'api.php';
$id = (int)$_GET['id'];

if (delete_requirements($id) > 0) {
  echo "<script>
            alert('Data Successfully Deleted');
            document.location.href = 'requirements.php';
          </script>";
} else {
  echo "<script>
            alert('Data Failed to Delete');
            document.location.href = 'requirements.php';
          </script>";
}
