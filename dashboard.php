<?php
include_once 'header.php';
?>

<style>
    .peep-1 {
        position: absolute;
        right: 130px;
        bottom: 0px;
    }

    .peep-2 {
        position: absolute;
        right: 200px;
        bottom: 0;
    }

    .button {
        z-index: 1;
        position: relative;
        font-size: inherit;
        font-family: inherit;
        color: white;
        padding: 0.5em 1em;
        outline: none;
        border: none;
        background-color: #fffffe;
        overflow: hidden;
        transition: color 0.4s ease-in-out;
        border: #161616;
        border-style: solid;
        color: #161616;
    }

    .button::before {
        content: '';
        z-index: -1;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 1em;
        height: 1em;
        border-radius: 50%;
        background-color: #161616;
        transform-origin: center;
        transform: translate3d(-50%, -50%, 0) scale3d(0, 0, 0);
        transition: transform 0.45s ease-in-out;
    }

    .button:hover {
        cursor: pointer;
        color: #fffffe;
    }

    .button:hover::before {
        transform: translate3d(-50%, -50%, 0) scale3d(15, 15, 15);
    }
</style>

<body>
    <main>
        <section class="container">
            <div class=" text-start" style="font-size: large; margin-top: 5rem;">
                <h2>Get Hired Fast with JOBS4EZ</h2>
                <p class=" ">Tired of sending out countless resumes and cover letters, only to hear nothing back?<br>Introducing Jobs4EZ, the ultimate job search platform that makes getting a job easy!<br>With our innovative tools, you'll be able to get hired with a job with ease</p>
                <a href="register.php" class="button btn">Register</a>
            </div>
        </section>
        <footer>
            <img src="assets/walking.png" alt="peep-1" width="130px" height="340px" class="peep-1">
            <img src="assets/sitting.png" alt="peep-2" width="160px" height="200px" class="peep-2">
        </footer>
    </main>