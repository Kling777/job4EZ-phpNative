<?php

$data_jobs = select("SELECT jobs.*, requirements.require, users.username  FROM jobs 
                    LEFT JOIN requirements ON jobs.require = requirements.require
                    LEFT JOIN users ON jobs.username = users.username");

?>
<div class="container">
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Name/Industry</th>
                <th>Address</th>
                <th>Require</th>
                <th>Jobs</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_jobs as $data) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['name']; ?></td>
                    <td><?= $data['address']; ?></td>
                    <td><?= $data['require']; ?></td>
                    <td><?= $data['jobs']; ?></td>
                    <td><?= $data['salary']; ?></td>
                    <td><?= $data['status']; ?></td>
                    <td><?= $data['username']; ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>