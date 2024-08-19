<?php

include 'api.php';
$id = (int)$_GET['id'];

try {

  if (delete_requirements($id) > 0) {
    echo "<script>
              alert('Data Successfully Deleted');
            </script>";
  }
} catch (Exception $e) {
  echo "<script>alert('Cannot delete this record because it is referenced by another record.')</script>";
} finally {
  echo "<script>
  document.location.href = 'requirements.php';
  </script>";
};
