<?php
include_once 'header.php';

$id = (int)$_GET['id'];

$users = select("SELECT * FROM users");

$parttime = select("SELECT * FROM parttime WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (update_parttime($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'part-time-job.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah');
                document.location.href = 'part-time-job.php';
              </script>";
    }
}
?>

<div class="container">
    <div class="row mt-3">
        <h3>Ubah Data Baru</h3>
    </div>
    <div class="row mt-3">
        <form method="POST" action="">
            <table class="table table-bordered">
                <tbody>
                    <input type="hidden" name="id" value="<?= $parttime['id']; ?>">
                    <tr>
                        <td>Name</td>
                        <td>
                            <input autocomplete="off" id="name" value="<?= $parttime['name']; ?>" class="form-control" type="text"
                                name="name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>
                            <input autocomplete="off" id="address" value="<?= $parttime['address']; ?>" class="form-control" type="text"
                                name="address" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Jobs</td>
                        <td>
                            <input autocomplete="off" id="jobs" value="<?= $parttime['jobs']; ?>" class="form-control" type="text"
                                name="jobs" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td>
                            <input autocomplete="off" id="jobs" value="<?= $parttime['salary']; ?>" class="form-control" type="number"
                                name="salary" required>
                        </td>
                    </tr>
                    <tr>
                        <td>User ID</td>
                        <td>
                            <select name="id_user" required>
                                <option value="">Choose User ID</option>
                                <?php foreach ($users as $m) : ?>
                                    <option value="<?= $m['id_user']; ?>" <?= $parttime['id_user'] == $m['id_user'] ? 'selected' : ''; ?>>
                                        <?= $m['id_user']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
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