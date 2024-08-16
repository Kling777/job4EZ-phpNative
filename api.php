<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'listjob';

$db = mysqli_connect($host, $username, $password, $database);

if (!$db) {
    echo "Database connection failed";
}

function select($query) {
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
function create_fulljob ($post){

    global $db;

    $name       = $post['name'];
    $address        = $post['address'];
    $jobs  = $post['jobs'] ;
    $salary    = $post['salary'];
    $id_user     = $post['id_user'];


    $query = "INSERT INTO fulljob VALUES(null, '$name' , '$address', '$jobs' , $salary , $id_user)";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

// update fulljob 
function update_fulljob ($post){

    global $db;

    $id   = $post['id'];
    $name       = $post['name'];
    $address        = $post['address'];
    $jobs  = $post['jobs'];
    $salary    = $post['salary'];
    $id_user     = $post['id_user'];


    $query = "UPDATE fulljob SET name = '$name' , address = '$address' , jobs = '$jobs' , salary = $salary , id_user = $id_user WHERE id = $id";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//delete fulljob
function delete_fulljob ($id){

    global $db;

    $query = "DELETE FROM fulljob WHERE id = $id";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);


}

// create part time jobs
function create_parrtime ($post){

    global $db;

    $name       = $post['name'];
    $address        = $post['address'];
    $jobs  = $post['jobs'];
    $salary    = $post['salary'];
    $id_user     = $post['id_user'];


    $query = "INSERT INTO parttime VALUES(null, '$name','$address','$jobs',$salary,$id_user)";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

// update parttime table
function update_parttime ($post){

    global $db;

    $id   = $post['id'];
    $name       = $post['name'];
    $address        = $post['address'];
    $jobs  = $post['jobs'];
    $salary    = $post['salary'];
    $id_user     = $post['id_user'];

    $query = "UPDATE parttime SET name = '$name', address = '$address', jobs = '$jobs', salary = $salary, id_user = $id_user  WHERE id = $id";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// delete parttime data
function delete_parttime ($id){

    global $db;

    $query = "DELETE FROM parttime WHERE id = $id";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);


}


//create user table data
function create_users ($post){

    global $db;

    $name        = $post['real_name'];
    $username  = $post['username'];
    $email  = $post['email'];
    $age    = $post['age'];
    $phone   = $post['phone'];
    $bio   = $post['bio'];
    $id_level   = $post['id_level'];


    $query = "INSERT INTO users VALUES (null,'$name' , '$username', '$email' , $age , '$phone', '$bio', $id_level)";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

//update users table data
function update_users ($post){

    global $db;

    $id_user = $post['id_user'];
    $name        = $post['real_name'];
    $username  = $post['username'];
    $email  = $post['email'];
    $age    = $post['age'];
    $phone   = $post['phone'];
    $bio   = $post['bio'];
    $id_level   = $post['id_level'];


    $query = "UPDATE users SET real_name = '$name', username = '$username', email = '$email', age = $age, phone = '$phone', bio = '$bio', id_level = $id_level WHERE id_user = $id_user";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// delete users data
function delete_users ($id_user){

    global $db;

    $query = "DELETE FROM users WHERE id_user = $id_user";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);


}

// create employment data
function create_employment ($post){

    global $db;
    
    $name        = $post['real_name'];
    $age    = $post['age'];
    $phone   = $post['phone'];
    $email  = $post['email'];
    $bio   = $post['bio'];
    $id_user   = $post['id_user'];

    $query = "INSERT INTO employment VALUES (null, '$name', $age, '$phone', '$email','$bio', $id_user)";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

// update employment table
function update_employment ($post){

    global $db;

    $id = $post['id'];
    $name        = $post['real_name'];
    $age    = $post['age'];
    $phone   = $post['phone'];
    $email  = $post['email'];
    $bio   = $post['bio'];
    $id_user   = $post['id_user'];



    $query = "UPDATE employment SET name = '$name', age = $age', phone = '$phone', email = '$email', bio = '$bio', id_user = $id_user WHERE id = $id";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//delete employment data
function delete_employment ($id){

    global $db;

    $query = "DELETE FROM employment WHERE id = $id";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);


}


// create level data
function create_level ($post){

    global $db;

    $level        = $post['level'];


    $query = "INSERT INTO user_level VALUES (null,'$level')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}


// update level table
function update_level ($post){

    global $db;

    $id = $post['id'];
    $level       = $post['level'];


    $query = "UPDATE user_level SET level = '$level' WHERE id = $id";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// delete user table
function delete_level ($id){

    global $db;

    $query = "DELETE FROM user_level WHERE id = $id";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}