<?php
include_once 'header.php';

$id = (int)$_GET['id_user'];

$level = select("SELECT * FROM user_level");

$users = select("SELECT * FROM users WHERE id_user = $id")[0];

if (isset($_POST['ubah'])) {
    if (update_users($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'users.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah');
                document.location.href = 'users.php';
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
                    <input type="hidden" name="id_user" value="<?= $users['id_user']; ?>">
                    <tr>
                        <td>Full Name</td>
                        <td>
                            <input autocomplete="off" id="real_name" value="<?= $users['real_name']; ?>" class="form-control" type="text"
                                name="real_name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input autocomplete="off" id="username" value="<?= $users['username']; ?>" class="form-control" type="text"
                                name="username" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input autocomplete="off" id="email" value="<?= $users['email']; ?>" class="form-control" type="email"
                                name="email" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>
                            <input autocomplete="off" id="age" value="<?= $users['age']; ?>" class="form-control" type="number"
                                name="age" required>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Phone</td>
                        <td>
                            <input autocomplete="off" id="phone" value="<?= $users['phone']; ?>" class="form-control" type="text"
                                name="phone" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Bio</td>
                        <td>
                            <input autocomplete="off" id="bio" value="<?= $users['bio']; ?>" class="form-control" type="text"
                                name="bio" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>
                            <select name="id_level" required>
                                <option value="">Choose User ID</option>
                                <?php foreach ($level as $m) : ?>
                                    <option value="<?= $m['id']; ?>" <?= $users['id_user'] == $m['id'] ? 'selected' : ''; ?>>
                                        <?= $m['level']; ?>
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