<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'listjob';

$db = mysqli_connect($host, $username, $password, $database);

if (!$db) {
    echo "Database connection failed";
}

function select($query)
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

// create full job
function create_jobs($post)
{

    global $db;

    $name       = $post['name'];
    $address        = $post['address'];
    $require = $post['require'];
    $jobs  = $post['jobs'];
    $salary    = $post['salary'];
    $status = $post['status'];
    $username     = $post['username'];


    $query = "INSERT INTO jobs VALUES(null, '$name' , '$address', '$require', '$jobs' , $salary , '$status', '$username')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// update jobs
function update_jobs($post)
{

    global $db;

    $id   = $post['id'];
    $name       = $post['name'];
    $address        = $post['address'];
    $require = $post['require'];
    $jobs  = $post['jobs'];
    $salary    = $post['salary'];
    $status = $post['status'];
    $username     = $post['username'];


    $query = "UPDATE jobs SET `name` = '$name' , `address` = '$address' , `require` = '$require', `jobs` = '$jobs' , `salary` = $salary , `status` = '$status' , `username` = '$username' WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//delete fulljob
function delete_jobs($id)
{

    global $db;

    $query = "DELETE FROM jobs WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// create part time jobs
function create_requirements($post)
{

    global $db;
    $require = $post['require'];

    $query = "INSERT INTO requirements VALUES(null, '$require')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// update parttime table
function update_requirements($post)
{

    global $db;

    $id   = $post['id'];
    $require = $post['require'];

    $query = "UPDATE requirements SET `require` = '$require' WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// delete parttime data
function delete_requirements($id)
{

    global $db;

    $query = "DELETE FROM requirements WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


//create user table data
function create_users($post)
{

    global $db;

    $name        = $post['real_name'];
    $username  = $post['username'];
    $email  = $post['email'];
    $age    = $post['age'];
    $phone   = $post['phone'];
    $status = $post['status'];
    $bio   = $post['bio'];
    $id_level   = $post['id_level'];


    $query = "INSERT INTO users VALUES (null,'$name' , '$username', '$email' , $age , '$phone','$status', '$bio', $id_level)";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//update users table data
function update_users($post)
{

    global $db;

    $id_user = $post['id_user'];
    $name        = $post['real_name'];
    $username  = $post['username'];
    $email  = $post['email'];
    $age    = $post['age'];
    $phone   = $post['phone'];
    $status = $post['status'];
    $bio   = $post['bio'];
    $id_level   = $post['id_level'];


    $query = "UPDATE users SET real_name = '$name', username = '$username', email = '$email', age = $age, phone = '$phone', `status` = '$status', bio = '$bio', id_level = $id_level WHERE id_user = $id_user";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// delete users data
function delete_users($id_user)
{

    global $db;

    $query = "DELETE FROM users WHERE id_user = $id_user";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// create employment data
function create_employment($post)
{

    global $db;

    $name        = $post['real_name'];
    $age    = $post['age'];
    $phone   = $post['phone'];
    $email  = $post['email'];
    $bio   = $post['bio'];
    $username   = $post['username'];

    $query = "INSERT INTO employment VALUES (null, '$name', $age, '$phone', '$email','$bio', '$username')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// update employment table
function update_employment($post)
{

    global $db;

    $id = $post['id'];
    $name        = $post['real_name'];
    $age    = $post['age'];
    $phone   = $post['phone'];
    $email  = $post['email'];
    $bio   = $post['bio'];
    $username   = $post['username'];



    $query = "UPDATE employment SET `real_name` = '$name', `age` = $age, `phone` = '$phone', `email` = '$email', `bio` = '$bio', `username` = '$username' WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//delete employment data
function delete_employment($id)
{

    global $db;

    $query = "DELETE FROM employment WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


// create level data
function create_level($post)
{

    global $db;

    $level        = $post['level'];


    $query = "INSERT INTO user_level VALUES (null,'$level')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


// update level table
function update_level($post)
{

    global $db;

    $id = $post['id'];
    $level = $post['level'];


    $query = "UPDATE user_level SET level = '$level' WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// delete user table
function delete_level($id)
{

    global $db;

    $query = "DELETE FROM user_level WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
