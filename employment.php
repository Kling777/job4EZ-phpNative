<?php

include_once 'header.php';
$data_employees = select("SELECT employment.*, users.id_user FROM employment 
                    LEFT JOIN users ON employment.id_user = users.id_user");
?>

<div class="container text-center">
    <div class=" d-flex justify-content-between align-items-center me-3 mt-4">
        <h3 class="">All Employees Jobs Available</h3>
        <a class="btn btn-outline-primary" href="create-employment.php">Add data</a>
    </div>
    <table class="table table-bordered table-striped mt-2">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Bio</th>
                <th>User ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_employees as $data) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['real_name']; ?></td>
                    <td><?= $data['age']; ?></td>
                    <td><?= $data['phone']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td><?= $data['bio']; ?></td>
                    <td width="10%"><?= $data['id_user']; ?></td>
                    <td width="15%">
                        <a href="update-employment.php?id=<?= $data['id']; ?>" class="btn"><ion-icon style="font-size: 26px; color: chocolate;" name="create-outline"></ion-icon></a>
                        <a href="delete-employment.php?id=<?= $data['id']; ?>" class="btn" onclick="return confirm('apakah anda yakin ingin hapus data ini?')"><ion-icon style="font-size: 26px; color: red;" name="trash-outline"></ion-icon></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>