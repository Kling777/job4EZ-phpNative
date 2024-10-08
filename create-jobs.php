<?php

include 'header.php';

$users = select("SELECT * FROM users WHERE `status` = 'industry'");
$requirements = select("SELECT * FROM requirements");

if (isset($_POST['tambah'])) {
    if($_POST['salary'] < 0){
        echo "<script>
        alert('Salary cannot be below 0');
      </script>";
    } else {        
        if (create_jobs($_POST) > 0) {
            echo "<script>
                    alert('Data Succesfully Created');
                    document.location.href = 'jobs.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Data Failed to Create');
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
            <table class="table table-secondary">
                <tbody>
                    <tr>
                        <td>Name/Industry</td>
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
                        <td>Require</td>
                        <td>
                            <select name="require" class="form-select" required>
                                <option value="" selected>Requirements</option>
                                <?php foreach ($requirements as $r) : ?>
                                    <option value="<?= $r['require']; ?>"><?= $r['require']; ?></option>
                                <?php endforeach; ?>
                            </select>
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
                            <input autocomplete="off" class=" form-control" type="number" name="salary" id="salary" min="1" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status" value="full time" checked required><label class="form-check-label" for="full time">Full time</label>
                                <br>
                                <input class="form-check-input" type="radio" name="status" id="status" value="part time" required><label class="form-check-label" for="part time">Part time</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>
                            <select name="username" class="form-select" required>
                                <option value="" selected>Username</option>
                                <?php foreach ($users as $m) : ?>
                                    <option value="<?= $m['username']; ?>"><?= $m['username']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm</td>
                        <td>
                            <button class="btn btn-success" id="tambah" name="tambah" type="submit">Submit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>