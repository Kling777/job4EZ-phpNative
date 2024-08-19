<?php

include 'header.php';


if (isset($_POST['tambah'])) {
    if (create_requirements($_POST) > 0) {
        echo "<script>
                alert('Data Successfully Created');
                document.location.href = 'requirements.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Failed to Create');
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
                    <tr>
                        <td>Require</td>
                        <td>
                            <input autocomplete="off" id="name" value="" class="form-control" type="text"
                                name="require" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button class="btn btn-success" id="tambah" name="tambah" type="submit">Submit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>