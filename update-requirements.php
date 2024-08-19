<?php
include_once 'header.php';

$id = (int)$_GET['id'];

$requirements = select("SELECT * FROM requirements WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (update_requirements($_POST) > 0) {
        echo "<script>
                alert('Data Successfully Updated');
                document.location.href = 'requirements.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Failed to Update');
                document.location.href = 'requirements.php';
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
            <table class="table table-bordered">
                <tbody>
                    <input type="hidden" name="id" value="<?= $requirements['id']; ?>">
                    <tr>
                        <td>Require</td>
                        <td>
                            <input autocomplete="off" id="require" value="<?= $requirements['require']; ?>" class="form-control" type="text"
                                name="require" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button class="btn btn-success" id="ubah" name="ubah" type="submit">Ubah</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>