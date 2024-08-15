<?php

$data_level = select("SELECT * FROM user_level");

?>
<div class="container">
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_level as $data) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['level']; ?></td>
                    <td width="15%">
                        <a href="update-level.php?id=<?= $data['id']; ?>" class="btn btn-warning">Ubah</a>
                        <a href="delete-level.php?id=<?= $data['id']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>