<?php
include_once 'header.php';

$requirements = select('SELECT * FROM requirements')

?>
<div class="container text-center">
    <div class=" d-flex justify-content-between align-items-center me-3 mt-4">
        <h3 class="">All Requirements Available : <?php
                                                    $result = select_count("SELECT COUNT(*) AS total_req FROM requirements");
                                                    echo $result[0]['total_req'];
                                                    ?></h3>
        <a class="btn btn-outline-primary" href="create-requirements.php">Add data</a>
    </div>
    <table class="table table-bordered table-striped mt-2">
        <thead>
            <tr class="table-dark">
                <th>No</th>
                <th>Require</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($requirements as $data) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['require']; ?></td>
                    <td class="table-info" width="15%">
                        <a href="update-requirements.php?id=<?= $data['id']; ?>" class="btn"><ion-icon style="font-size: 26px; color: chocolate;" name="create-outline"></ion-icon></a>
                        <a href="delete-requirements.php?id=<?= $data['id']; ?>" class="btn" onclick="return confirm('are you sure you want to delete this item?')"><ion-icon style="font-size: 26px; color: red;" name="trash-outline"></ion-icon></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<footer>
    <img src="assets/half.png" alt="peep-3" class="peep-3" width="210" height="250">
</footer>