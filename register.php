<?php

include_once 'header.php';
$level = select("SELECT * FROM user_level");

if (isset($_POST['tambah'])) {
    if (create_users($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambah');
                document.location.href = 'dashboard.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href = 'dashboard.php';
              </script>";
    }
}
?>

<div class="container">
    <div class="row mt-3">
        <h3>Register a new users</h3>
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
                            <input autocomplete="off" id="Email" value="" class="form-control" type="email"
                                name="email" required>
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
                        <td>Bio</td>
                        <td>
                            <input autocomplete="off" id="bio" value="" class="form-control" type="text"
                                name="bio" required>
                        </td>
                    </tr>
                    <input type="hidden" name="id_level" value="1">
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