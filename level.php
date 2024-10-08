<?php

include_once 'header.php';
$data_level = select("SELECT * FROM user_level");

?>
<div class="container text-center">
    <div class=" d-flex justify-content-between align-items-center me-3 mt-4">
        <h3 class="">All Role Available : <?php
                                            $result = select_count("SELECT COUNT(*) AS total_level FROM user_level");
                                            echo $result[0]['total_level'];
                                            ?></h3>
        <a class="btn btn-outline-primary" href="create-level.php">Add data</a>
    </div>
    <table class="table table-bordered table-striped mt-2">
        <thead>
            <tr class="table-dark">
                <th>No</th>
                <th>Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_level as $data) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['level']; ?></td>
                    <td class="table-info" width="15%">
                        <a href="update-level.php?id=<?= $data['id']; ?>" class="btn"><ion-icon style="font-size: 26px; color: chocolate;" name="create-outline"></ion-icon></a>
                        <a href="delete-level.php?id=<?= $data['id']; ?>" class="btn" onclick="return confirm('are you sure you want to delete this item?')"><ion-icon style="font-size: 26px; color: red;" name="trash-outline"></ion-icon></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<footer>
    <img src="assets/half.png" alt="peep-3" class="peep-3" width="210" height="250">
</footer>