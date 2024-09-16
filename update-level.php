<?php

include 'header.php';

$id = (int)$_GET['id'];

$level = select("SELECT * FROM user_level WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (update_level($_POST) > 0) {
        echo "<script>
                alert('Data Successfully Updated');
                document.location.href = 'level.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Failed to Update');
                document.location.href = 'level.php';
              </script>";
    }
}
?>

<div class="container">
    <div class="row mt-3">
        <h3>Please Complete This Form</h3>
    </div>
    <div class="row mt-3">
        <form method="POST" action="">
            <table class="table table-secondary">
                <tbody>
                    <input type="hidden" name="id" value="<?= $level['id']; ?>">
                        <td>Role</td>
                        <td>
                            <input autocomplete="off" id="level" value="<?= $level['level']; ?>" class="form-control" type="text"
                                name="level" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm</td>
                        <td>
                            <button class="btn btn-success" id="ubah" name="ubah" type="submit">Submit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>