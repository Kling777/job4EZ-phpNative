<?php
include_once 'header.php';

$id = (int)$_GET['id'];

$users = select("SELECT * FROM users");

$employment = select("SELECT * FROM employment WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (update_employment($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'employment.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah');
                document.location.href = 'employment.php';
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
                            <select name="id_user" required>
                                <option value="">Choose User ID</option>
                                <?php foreach ($users as $m) : ?>
                                    <option value="<?= $m['id_user']; ?>" <?= $employment['id_user'] == $m['id_user'] ? 'selected' : ''; ?>>
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