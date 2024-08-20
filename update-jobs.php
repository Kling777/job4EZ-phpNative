<?php
include_once 'header.php';

$id = (int)$_GET['id'];

$users = select("SELECT * FROM users WHERE `status` = 'industry'");
$requirements = select("SELECT * FROM requirements");

$jobs = select("SELECT * FROM jobs WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if ($_POST['salary'] < 0) {
        echo "<script>
        alert('Salary cannot be below 0');
        </script>";
    } else {
        if (update_jobs($_POST) > 0) {
            echo "<script>
                    alert('Data Successfully Updated');
                    document.location.href = 'jobs.php';
                    </script>";
        } else {
            echo "<script>
                    alert('Data Failed to Update');
                    document.location.href = 'jobs.php';
                    </script>";
        }
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
                    <input type="hidden" name="id" value="<?= $jobs['id']; ?>">
                    <tr>
                        <td>Name</td>
                        <td>
                            <input autocomplete="off" id="name" value="<?= $jobs['name']; ?>" class="form-control" type="text"
                                name="name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>
                            <input autocomplete="off" id="address" value="<?= $jobs['address']; ?>" class="form-control" type="text"
                                name="address" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Require</td>
                        <td>
                            <select name="require" class="form-select" required>
                                <option value="">Requirements</option>
                                <?php foreach ($requirements as $r) ?>
                                <option value="<?= $r['require']; ?>" <?= $jobs['require'] == $r['require'] ? 'selected' : ''; ?> ">
                                    <?= $r['require']; ?>
                                </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jobs</td>
                        <td>
                            <input autocomplete=" off" id="jobs" value="<?= $jobs['jobs']; ?>" class="form-control" type="text"
                                    name="jobs" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td>
                            <input autocomplete="off" id="jobs" value="<?= $jobs['salary']; ?>" class="form-control" type="number"
                                name="salary" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="full time" <?php if ($jobs['status'] == 'full time') echo 'checked'; ?> id="" required>
                                <label class="form-check-label" for="full time">Full Time</label>
                                <br>
                                <input class="form-check-input" type="radio" name="status" value="part time" <?php if ($jobs['status'] == 'part time') echo 'checked'; ?> id="" required>
                                <label class="form-check-label" for="part time">Part Time</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>
                            <select name="username" class="form-select" required>
                                <option value="">Username</option>
                                <?php foreach ($users as $m) : ?>
                                    <option value="<?= $m['username']; ?>" <?= $jobs['username'] == $m['username'] ? 'selected' : ''; ?>>
                                        <?= $m['username']; ?>
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