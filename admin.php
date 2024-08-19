<?php
function select_count($query)
{
    global $db;

    $result = mysqli_query($db, $query);
    if (!$result) {
        die('Query Error: ' . mysqli_error($db));
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

include_once 'header.php'
?>
<section>
    <div class="container mt-5">
        <h3 class=" ms-2">Statistics</h3>
        <ul class=" list-group">
            <li class=" list-group-item">Total of jobs:
                <?php
                $result = select_count("SELECT COUNT(*) AS total_jobs FROM jobs");
                echo $result[0]['total_jobs'];
                ?>
            </li>
            <li class=" list-group-item">Total of Employees for hire:
                <?php
                $result = select_count("SELECT COUNT(*) AS total_employees FROM employment");
                echo $result[0]['total_employees'];
                ?>
            </li>
            <li class=" list-group-item">Total of users registered:
                <?php
                $result = select_count("SELECT COUNT(*) AS total_users FROM users");
                echo $result[0]['total_users'];
                ?>
            </li>
            <li class=" list-group-item">Total of Requirements:
                <?php
                $result = select_count("SELECT COUNT(*) AS total_req FROM requirements");
                echo $result[0]['total_req'];
                ?>
            </li>
            <li class=" list-group-item">Total of Role:
                <?php
                $result = select_count("SELECT COUNT(*) AS total_level FROM user_level");
                echo $result[0]['total_level'];
                ?>
            </li>
        </ul>
    </div>
    <div class=" container mt-3">
        <h3 class=" text-center">All Table and Data</h3>
        <div class=" mt-1 d-flex justify-content-center">
            <a href="jobs.php" class="btn btn-outline-danger">Jobs</a>
            <a href="employment.php" class="btn btn-outline-danger mx-3">Employment</a>
            <a href="users.php" class="btn btn-outline-danger">Users</a>
            <a href="requirements.php" class="btn btn-outline-danger mx-3">Requirements</a>
            <a href="level.php" class="btn btn-outline-danger">Role</a>
        </div>
    </div>
</section>