<main>

    <?php
    require 'includes/header.php';
    if (isset($_SESSION['uid'])) {
        include 'html/profile.html';
    } else {
        header("Location: login.php");
        exit();
    }

    ?>
</main>