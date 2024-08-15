<?php

$data_fulljob = select("SELECT fulljob.*, users.id_user FROM fulljob 
                    LEFT JOIN users ON fulljob.id_user = users.id_user");

?>
<div class="container">
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Name/Industry</th>
                <th>Address</th>
                <th>Jobs</th>
                <th>Salary</th>
                <th>User ID</th>
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
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>