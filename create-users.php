<?php

include 'header.php';

$level = select("SELECT * FROM user_level");

if (isset($_POST['tambah'])) {
    if ($_POST['age'] < 17) {
        echo "<script>
        alert('Age cannot be below 17');
      </script>";
    } else {
        if (create_users($_POST) > 0) {
            echo "<script>
                    alert('Data Successfully Created');
                    document.location.href = 'users.php';
                    </script>";
        } else {
            echo "<script>
                    alert('Data Failed to Create');
                    document.location.href = 'users.php';
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
                    <tr>
                        <td>Full Name</td>
                        <td>
                            <input autocomplete="off" id="real_name" value="" class="form-control" type="text"
                                name="real_name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input autocomplete="off" id="username" value="" class="form-control" type="text"
                                name="username" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input autocomplete="off" id="email" value="" class="form-control" type="email"
                                name="email" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>
                            <input autocomplete="off" class=" form-control" type="number" name="age" id="age" min="17" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>
                            <input autocomplete="off" id="phone" value="" class="form-control" type="text"
                                name="phone" required>
                        </td>
                    </tr>
                    <tr>
                    <td>Status</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status" value="industry" checked required><label class="form-check-label" for="industry">Industry</label>
                                <br>
                                <input class="form-check-input" type="radio" name="status" id="status" value="worker" required><label class="form-check-label" for="worker">Worker</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Bio</td>
                        <td>
                            <input autocomplete="off" id="bio" value="" class="form-control" type="text"
                                name="bio" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>
                            <select name="id_level" class="form-select" required>
                                <option value="" selected>User role</option>
                                <?php foreach ($level as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['level']; ?></option>
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