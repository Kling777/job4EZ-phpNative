<?php
include_once 'header.php';
$data_fulljob = select("SELECT fulljob.*, users.id_user FROM fulljob 
                    LEFT JOIN users ON fulljob.id_user = users.id_user");
?>
<div class="container text-center">
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Name/Industry</th>
                <th>Address</th>
                <th>Jobs</th>
                <th>Salary</th>
                <th>User ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_fulljob as $data) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['name']; ?></td>
                    <td><?= $data['address']; ?></td>
                    <td><?= $data['jobs']; ?></td>
                    <td><?= $data['salary']; ?></td>
                    <td><?= $data['id_user']; ?></td>
                    <td width="15%">
                        <a href="update-fulljob.php?id=<?= $data['id']; ?>" class="btn"><ion-icon style="font-size: 26px; color: chocolate;" name="create-outline"></ion-icon></a>
                        <a href="delete-fulljob.php?id=<?= $data['id']; ?>" class="btn" onclick="return confirm('apakah anda yakin ingin hapus data ini?')"><ion-icon style="font-size: 26px; color: red;" name="trash-outline"></ion-icon></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>