<?php
require 'includes/header.php'
?>
<link rel="stylesheet" href="css/login.css">
<main>
<div class="bg-cover">
    <div class="container" style="padding-top: 80px">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/carousel-1.jpg" class="d-block mx-auto" alt="First">
                </div>
                <div class="carousel-item">
                    <img src="images/carousel-2.jpg" class="d-block mx-auto" alt="Second">
                </div>
                <div class="carousel-item">
                    <img src="images/carousel-3.jpg" class="d-block mx-auto" alt="Third">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="h-auto center-me">
        <div class="my-auto">
            <form class="form-signin" style="background: whitesmoke;" action="includes/login-helper.php" method="post">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <label for="inputEmail" class="sr-only">Username or Email Address</label>
                <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username/ Email" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
                <div class="checkbox mb-3" style="margin: 10px">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-dark btn-block" name="login-submit" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
            </form>
        </div>
    </div>
</div>
</main>
</html>