<?php
include "database.php";
$result_salad = mysqli_query($inclutions, "SELECT * FROM `salads`");
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
            <div class="katalog__container">
                <div class="katalog__content">
                    <?php while($pizza = mysqli_fetch_assoc($result_salad)){ ?>
                        <ul class="katalog__particle particle">
                            <img src="<?php echo $pizza['image']; ?>" alt="Photo Pizzas">
                            <div class="particle__name"><?php echo $pizza['name']; ?></div>
                            <div class="particle__composition"><?php echo $pizza['description']; ?></div>
                            <div class="particle__footer">
                                <nav class="particle__price"><?php echo $pizza['price']; ?>₴</nav>
                                <button data-id = "salad<?php echo $pizza['id']; ?>" class="particle__button-plus"></button>
                                <button data-id = "salad<?php echo $pizza['id']; ?>" class="particle__button-minus"></button>
                            </div>
                        </ul>
                    <?php } ?>
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