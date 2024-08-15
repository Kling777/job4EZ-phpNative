<?php

$data_employees = select("SELECT employment.*, users.id_user FROM employment 
                    LEFT JOIN users ON employment.id_user = users.id_user");
?>

<div class=" container">
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Bio</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;?>
            <?php foreach($data_employees as $data) :?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['real_name']; ?></td>
                <td><?= $data['age']; ?></td>
                <td><?= $data['phone']; ?></td>
                <td><?= $data['email']; ?></td>
                <td><?= $data['bio']; ?></td>
                <td width="10%"><?= $data['id_user']; ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>