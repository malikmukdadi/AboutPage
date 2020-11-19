<?php
require 'includes/dbhandler.php';
require 'includes/header.php';
?>

<main>
<link rel="stylesheet" href="css/gallery.css">
    <h1>Gallery</h1>
    <div class="gallery-container">
        <?php
        include_once 'includes/dbhandler.php';
        $sql = "SELECT * FROM memes ORDER BY upload_date DESC";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo 'SQL FAILURE';
        }
        else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="card">
                    <a href="review.php?id=<?php echo $row['pid'] ?>">
                        <img src="memes/<?= $row['picpath']; ?>" class="rounded" alt="">
                        <h4><?= $row['title'] ?></h4>
                        <p><?= $row['descript'] ?></p>
                    </a>
                </div>
                <?php
            }
        }
        ?>
    </div>
    

</main>