<?php
include "database.php";
$result_pizza = mysqli_query($inclutions, "SELECT * FROM `pizza`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon/icon.png">
    <title>WebPizza</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <a href="index.php" class="header__logo">
                    <img src="img/logo/logo.png" alt="Logo">
                    <nav>WebPizza</nav>
                </a>
                <div class="header__menu menu">
                    <div class="menu__icon">
                        <span></span>
                    </div>
                    <ul class="menu__list">
                        <li class="menu__item"><a href="index.php" class="menu__link">Головна</a></li>
                        <li class="menu__item"><a href="pizza.php" class="menu__link">Піцца</a></li>
                        <li class="menu__item"><a href="drinks.php" class="menu__link">Напої</a></li>
                        <li class="menu__item"><a href="salad.php" class="menu__link">Салати</a></li>
                        <button class="menu__cart-button">
                            <img src="img/icon/shop.svg" alt="Cart">
                            <nav>Кошик</nav>
                        </button>
                    </ul>
                    <div class="cart">
                        <div class="cart__content">
                            <nav>Ваше замовлення</nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <img class="main__top-image" src="/img/home/pizza-top.png" alt="Pizza Top">
            <div class="main__container home">
                <div class="home__information">
                    <div class="home__title">Вітаємо вас на нашому сайті WebPizza</div>
                    <div class="home__sub-title">У нас ви можете скуштувати страви приготовлені з душею</div>
                    <img class="home__photo1" src="/img/home/main_1.png" alt="">
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer__container">
                <div class="footer__content">
                    <nav>ⓒ 2023 WebPizza. Усі права захищено</nav>
                    <a href="">Публічна інформація</a>
                    <a href="">Політика конфіденційності</a>
                    <a href="">Розробка сайтів "САМ ЗРОБИВ"</a>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/script.js"></script>
</body>
</html>