<?php

include 'header.php';

$data_users = select("SELECT users.*, user_level.level FROM users 
                    LEFT JOIN user_level ON users.id_level = user_level.id");

?>
<div class="container text-center">
    <div class=" d-flex justify-content-between align-items-center me-3 mt-4">
        <h3 class="">All Users Available : <?php
                                            $result = select_count("SELECT COUNT(*) AS total_users FROM users");
                                            echo $result[0]['total_users'];
                                            ?></h3>
        <a class="btn btn-outline-primary" href="create-users.php">Add data</a>
    </div>
    <table class="table table-bordered table-striped mt-2">
        <thead>
            <tr class="table-dark">
                <th>No</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Bio</th>
                <th>User Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_users as $data) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['real_name']; ?></td>
                    <td><?= $data['username']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td><?= $data['age']; ?></td>
                    <td><?= $data['phone']; ?></td>
                    <td><?= $data['status']; ?></td>
                    <td><?= $data['bio']; ?></td>
                    <td><?= $data['level']; ?></td>
                    <td class="table-info" width="15%">
                        <a href="update-users.php?id_user=<?= $data['id_user']; ?>" class="btn"><ion-icon style="font-size: 26px; color: chocolate;" name="create-outline"></ion-icon></a>
                        <a href="delete-users.php?id_user=<?= $data['id_user']; ?>" class="btn" onclick="return confirm('are you sure you want to delete this item?')"><ion-icon style="font-size: 26px; color: red;" name="trash-outline"></ion-icon></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>