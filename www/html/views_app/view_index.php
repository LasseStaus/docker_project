<?php

session_start();

if (!isset($_SESSION['user_uuid'])) {
    header('Location: /login');
    exit();
}

require('./db/db.php');

require('./db/globals.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/views_app/view_top.php');
?>
<main id="index">

    <div class="top">
        <h1>Hello <?= $_SESSION['user_email'] ?></h1>
    </div>
    <div id="users">

        <h2>all users</h2>

        <?php require('./db/users.php');
        foreach ($users as $user) {
            $image = json_decode($user['user_image']);
        ?>
            <div class="user">
                <p class=" title"> <?= out($user['user_email']) ?></p>
                <p class="h5 title"> <?= out($user['user_password']) ?></p>



            </div>
        <?php
        }

        ?>

    </div>

</main>


</body>

</html>
