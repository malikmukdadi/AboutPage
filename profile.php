<?php
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>

    <?php
    if (isset($_SESSION['uid'])) {
        $prof_user = $_SESSION['username'];
        $sqlpro = "SELECT * FROM profile WHERE uname='$prof_user';";

        $res = mysqli_query($conn, $sqlpro);
        $row = mysqli_fetch_array($res);
        $photo = $row['picpath'];
        $bio = $row['bio'];
    ?>

    <style>
        .center-me {
            display: flex;
            justify-content: center;
            padding: 40px;
            text-align: center;
        }

        #prof-display {
            display: block;

            width: 150px;
            margin: 10px auto;
            border-radius: 50%;
        }

        #uname-style {
            font-size: 20px;
            font-family: "Lucida Console", Courier, monospace;
            font-weight: bold;
        }

    </style>

    <script>
        function triggered() {
            document.querySelector("#prof-image").click();
        }

        function preview(e) {
            if (e.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    document.querySelector('#prof-display').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);

            }
        }
    </script>

    <div class="h-auto center-me">
        <div class="my-auto">
            <form action="includes/upload-helper.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <img class="mb-3 rounded-circle" src="<?= $photo ?>"
                         onclick="triggered()" id="prof-display">
                    <h4><?= $prof_user; ?></h4>
                    <input type="file" name="prof-image" id="prof-image"
                           onchange="preview(this)" class="form-control" style="display: none">
                </div>
                <div class="form-group">
                    <textarea name="bio" cols="30" rows="10" placeholder="bio..." style="text-align: center"></textarea><?php if ($bio !== null) echo $bio; ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="prof-submit" class="btn btn-outline-success btn-lg btn-block">upload</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    } else {
        header("Location: login.php");
        exit();
    }

    ?>
</main>