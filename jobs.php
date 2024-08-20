<?php
include_once 'header.php';
$data_fulljob = select("SELECT jobs.*, users.username, requirements.require FROM jobs 
                    LEFT JOIN users ON jobs.username = users.username
                    LEFT JOIN requirements ON jobs.require = requirements.require");
?>
<div class="container text-center">
    <div class=" d-flex justify-content-between align-items-center me-3 mt-4">
        <h3 class="">All Full Time Jobs Available : <?php
                                                    $result = select_count("SELECT COUNT(*) AS total_jobs FROM jobs");
                                                    echo $result[0]['total_jobs'];
                                                    ?></h3>
        <a class="btn btn-outline-primary" href="create-jobs.php">Add data</a>
    </div>
    <div>
        <table class="table table-bordered table-striped mt-2">
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
                        <td><?= $data['require']; ?></td>
                        <td><?= $data['jobs']; ?></td>
                        <td><?= $data['salary']; ?></td>
                        <td><?= $data['status']; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td width="15%">
                            <a href="update-jobs.php?id=<?= $data['id']; ?>" class="btn"><ion-icon style="font-size: 26px; color: chocolate;" name="create-outline"></ion-icon></a>
                            <a href="delete-jobs.php?id=<?= $data['id']; ?>" class="btn" onclick="return confirm('are you sure you want to delete this item?')"><ion-icon style="font-size: 26px; color: red;" name="trash-outline"></ion-icon></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>