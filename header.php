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


include 'api.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobs4EZ</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #d1d1e9;
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    ion-icon {
        font-size: 32px;
    }

    #navlog {
        font-weight: bold;
        font-size: 48px;
    }
    
    .dropdown-item:focus {
        background: #2b2c34;
    }
    .peep-3 {
        position: absolute;
        right: 0;
        bottom: 0;
        margin-bottom: -30px;
        z-index: -1;
    }
</style>

<body>
    <div>
        <nav style="background-color: #2b2c34;" class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" id="navlog" href="dashboard.php">JOBS4EZ</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="dashboard.php" class="btn btn-outline-warning">Home</a>
                        <a href="jobs.php" class="btn btn-outline-light ms-3">Jobs</a>
                        <a href="employment.php" class="btn btn-outline-light mx-3">Employment</a>
                        <a href="users.php" class="btn btn-outline-light">Users</a>
                        <a href="requirements.php" class="btn btn-outline-light mx-3">Requirements</a>
                        <a href="level.php" class="btn btn-outline-light">Role</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>