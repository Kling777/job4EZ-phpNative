<?php

include 'header.php';

$users = select("SELECT * FROM users");

if (isset($_POST['tambah'])) {
    if (create_parrtime($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambah');
                document.location.href = 'part-time-job.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan');
                document.location.href = 'part-time-job.php';
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
                        <td>Name</td>
                        <td>
                            <input autocomplete="off" id="name" value="" class="form-control" type="text"
                                name="name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>
                            <input autocomplete="off" id="address" value="" class="form-control" type="text"
                                name="address" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Jobs</td>
                        <td>
                            <input autocomplete="off" id="jobs" value="" class="form-control" type="text"
                                name="jobs" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td>
                            <input autocomplete="off" class=" form-control" type="number" name="salary" id="salary" required>
                        </td>
                    </tr>
                    <tr>
                        <td>User ID</td>
                        <td>
                            <select name="id_user" required>
                                <option value="">ID User</option>
                                <?php foreach ($users as $m) : ?>
                                    <option value="<?= $m['id_user']; ?>"><?= $m['username']; ?></option>
                                <?php endforeach; ?>
                            </select>
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