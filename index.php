<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Navbar</title>
    <!-- Подключение CSS файла Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Подключение Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Стили для иконок и навбара -->
    <style>
        .fa-mobile-alt, .fa-map-marker-alt, .fa-clock {
            color: #6c8ed3;
        }

        .custom-navbar {
            background-color: #000000;
        }

        .social-icons .fas, .social-icons .fab {
            color: #ffbc00;
            margin-left: 15px;
        }
        .enlarged-navbar {
            height: 80px;
            display: flex;
            align-items: center;  /* Чтобы содержимое было вертикально центрировано */
        }

        .enlarged-navbar .navbar-brand {
            margin-left: 110px !important;  /* Увеличенный отступ слева для логотипа с использованием !important */
        }
        .enlarged-navbar {
            position: relative;
            z-index: 1;
        }

        .enlarged-navbar::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #333333;
            opacity: 0.6;
            z-index: -1;
        }
        .enlarged-navbar .nav-link {
            color: #ffffff !important;
        }


    </style>
<style>
    #bgVideo {
        position: fixed;
        top: 0;
        left: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
        opacity: 0.7;
    }
</style>

</head>

<body>
<video autoplay muted loop id="bgVideo">
    <source src="container-ship-v4.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid justify-content-between">
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav ms-5">
                    <li class="nav-item me-5">
                        <a class="nav-link active text-white" aria-current="page" href="#"><i class="fas fa-map-marker-alt"></i> м. Львів, вул. Газова 36/4</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link text-white" href="#"><i class="fas fa-mobile-alt"></i> +380 96 900 76 76</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link text-white" href="#"><i class="fas fa-clock"></i> Пн-Сб 10:00-19:00</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav2">
                <ul class="navbar-nav social-icons ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fab fa-telegram-plane"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
<!-- Второй Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light enlarged-navbar">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand ms-5" href="#">
            <img src="GalLogo.svg" alt="GalLogo" width="140" height="30"> <!-- Укажите правильный путь к файлу -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="#">Калькулятор</a>
                <a class="nav-link" href="#">Відстежити</a>
                <a class="nav-link" href="#">Авто в наявності</a>
                <a class="nav-link" href="#">Інформація</a>
            </div>
        </div>
    </div>
</nav>


    <!-- Подключение JS файлов Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
