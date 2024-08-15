<?php

include 'layout/header.php';

$data_users = select("SELECT users.*, user_level.id FROM users 
                    LEFT JOIN user_level ON users.id_level = user_level.id");

?>
    <div class="container">
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Bio</th>
                <th>User_level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;?>
            <?php foreach($data_users as $data) :?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['real_name']; ?></td>
                <td><?= $data['username']; ?></td>
                <td><?= $data['email']; ?></td>
                <td><?= $data['age']; ?></td>
                <td><?= $data['phone']; ?></td>
                <td><?= $data['bio']; ?></td>
                <td><?= $data['id_level']; ?></td>
                <td width="15%">
                    <a href="update-users.php?id_user=<?= $data['id_user']; ?>" class="btn btn-warning">Ubah</a>
                    <a href="delete-users.php?id_user=<?= $data['id_user']; ?>" class="btn btn-danger" onclick="return confirm('Serius Nak Hapus Ke Ni??')">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>