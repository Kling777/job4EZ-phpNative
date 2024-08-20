<?php
include_once 'header.php';

$id = (int)$_GET['id'];

$users = select("SELECT * FROM users WHERE `status` = 'worker'");

$employment = select("SELECT * FROM employment WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if ($_POST['age'] < 17) {
        echo "<script>
        alert('Age cannot be below 17');
      </script>";
    } else {
        if (update_employment($_POST) > 0) {
            echo "<script>
                    alert('Data Succesfully Updated');
                    document.location.href = 'employment.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Data Failed to Update');
                    document.location.href = 'employment.php';
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
                    <input type="hidden" name="id" value="<?= $employment['id']; ?>">
                    <tr>
                        <td>Full Name</td>
                        <td>
                            <input autocomplete="off" id="real_name" value="<?= $employment['real_name']; ?>" class="form-control" type="text"
                                name="real_name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>
                            <input autocomplete="off" id="age" value="<?= $employment['age']; ?>" class="form-control" type="number"
                                name="age" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>
                            <input autocomplete="off" id="phone" value="<?= $employment['phone']; ?>" class="form-control" type="text"
                                name="phone" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input autocomplete="off" id="phone" value="<?= $employment['email']; ?>" class="form-control" type="email"
                                name="email" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Bio</td>
                        <td>
                            <input autocomplete="off" id="bio" value="<?= $employment['bio']; ?>" class="form-control" type="text"
                                name="bio" required>
                        </td>
                    </tr>
                    <tr>
                        <td>User ID</td>
                        <td>
                            <select name="username" class="form-select" required>
                                <option value="">Choose Username</option>
                                <?php foreach ($users as $m) : ?>
                                    <option value="<?= $m['username']; ?>" <?= $employment['username'] == $m['username'] ? 'selected' : ''; ?>>
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