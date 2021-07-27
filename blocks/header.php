<?php
    require "db.php";
    ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel ="stylesheet" href="css/goodfood.css">
    <link rel ="stylesheet" href="css/media.css">
    <script>
        function scrollTo(to, duration = 700) {
            const
                element = document.scrollingElement || document.documentElement,
                start = element.scrollTop,
                change = to - start,
                startDate = +new Date(),
                // t = current time
                // b = start value
                // c = change in value
                // d = duration
                easeInOutQuad = function (t, b, c, d) {
                    t /= d / 2;
                    if (t < 1) return c / 2 * t * t + b;
                    t--;
                    return -c / 2 * (t * (t - 2) - 1) + b;
                },
                animateScroll = function () {
                    const currentDate = +new Date();
                    const currentTime = currentDate - startDate;
                    element.scrollTop = parseInt(easeInOutQuad(currentTime, start, change, duration));
                    if (currentTime < duration) {
                        requestAnimationFrame(animateScroll);
                    }
                    else {
                        element.scrollTop = to;
                    }
                };
            animateScroll();
        }

        document.addEventListener('DOMContentLoaded', function () {
            let btn = document.querySelector('#toTop');
            window.addEventListener('scroll', function () {
                // Если прокрутили дальше 599px, показываем кнопку
                if (pageYOffset > 100) {
                    btn.classList.add('show');
                    // Иначе прячем
                } else {
                    btn.classList.remove('show');
                }
            });

            // При клике прокручиываем на самый верх
            btn.onclick = function (click) {
                click.preventDefault();
                scrollTo(0, 400);
            }
        });
    </script>
</head>
<body>
<header>
    <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="" width="250" height="100"></a>
    </div>
    <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                     <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Мы</a>
                    <a class="nav-link" href="recipes.php">Рецепты</a>
                    <?php if(isset($_SESSION['logged_user'])) : ?>
                    <a class="nav-link" href="profile.php">Профиль</a>
                    <?php else : ?>
                    <a class="nav-link" href="login.php">Профиль</a>
                    <?php endif; ?>

                    <a class="nav-link" href="gallery.php">Галерея</a>
                    <?php if(isset($_SESSION['logged_user'])) : ?>
                        <a class="nav-link" href="logout.php">Выйти</a>
                    <?php else : ?>
                        <a class="nav-link" href="login.php">Вход</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    </div>
</header>
