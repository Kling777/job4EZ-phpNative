<?php

include 'header.php';

$users = select("SELECT * FROM users");

if (isset($_POST['tambah'])) {
    if ($_POST['age' < 17]) {
        echo "<script>
        alert('Age cannot be below 17');
      </script>";
    } else {        
        if (create_employment($_POST) > 0) {
            echo "<script>
                    alert('Data Successfully Created');
                    document.location.href = 'employment.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Data Failed to Create');
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
                    <tr>
                        <td>Name</td>
                        <td>
                            <input autocomplete="off" id="real_name" value="" class="form-control" type="text"
                                name="real_name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>
                            <input autocomplete="off" id="age" value="" class="form-control" type="number"
                                name="age" required>
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
                        <td>Email</td>
                        <td>
                            <input autocomplete="off" id="email" value="" class="form-control" type="email"
                                name="email" required>
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