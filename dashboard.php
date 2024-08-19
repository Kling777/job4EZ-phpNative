<?php
include_once 'header.php';
?>

<body>
    <main>
        <section class="container">
            <div class=" text-center my-5" style="font-size: large;">
                <h2>Get Hired Fast with JOBS4EZ</h2>
                <p class=" ">Tired of sending out countless resumes and cover letters, only to hear nothing back?<br>Introducing Jobs4EZ, the ultimate job search platform that makes getting a job easy!<br>With our innovative tools, you'll be able to get hired with a job wih ease</p>
                <a href="register.php" class=" btn btn-outline-primary">Register</a>
            </div>
        </section>
        <section>
            <div class="container text-center">
                <h3>Available Full Time Jobs</h3>
                <?php include_once 'index-jobs.php' ?>
        </section>
    </main>