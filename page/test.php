<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style/all.css">
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    <div class="wrap">
        <header class="header">
            <a href="/" class="logo">PROWEB</a>
            <div class="singIn">
                <a href="/page/login.php" class="singIn__link">Вход</a>
                <a href="/page/registration.php" class="singIn__link">Регистрация</a>
            </div>
            <div class="user">
                <div class="user__profile">
                    <img src="/img/2.jpg" alt="" class="user__profile-img">
                    <h4 class="user__profile-name">Имя</h4>
                </div>
                <ul class="user__menu">
                    <li><a href="#" class="user__menu-link"><i class="far fa-external-link"></i>Выход</a></li>
                </ul>
            </div>
        </header>
        <aside class="menu">
            <div class="menu__reviews">
                <span class="menu__reviews_span" data-href="https://proweb.uz">
                    <i class="far fa-chevron-right"></i>
                </span>
                <span class="menu__reviews_text">Оставить озыв</span>
            </div>
            <ul class="menu__list">
                <li><a href="/" class="menu__list-link active"><i class="fal fa-home"></i>Главная</a></li>
                <li><a href="/page/contact.php" class="menu__list-link"><i class="fal fa-address-book"></i>Контакты</a></li>
                <li><a href="/page/table.php" class="menu__list-link"><i class="fas fa-times"></i>Таблица умножения</a></li>
                <li><a href="/page/calc.php" class="menu__list-link"><i class="fas fa-calculator-alt"></i>Калькулятор</a></li>
                <li><a href="/page/slide.php" class="menu__list-link"><i class="far fa-presentation"></i>Слайдер</a></li>
                <li><a href="/page/guest.php" class="menu__list-link"><i class="fal fa-books"></i>Гостевая книга</a></li>
                <li><a href="/page/test.php" class="menu__list-link"><i class="fal fa-vial"></i>Тест</a></li>
            </ul>
        </aside>
        <main class="main">
            <?
                $name = 'pro';
                // echo '<h1>PROWEB</h1>'; /* Выводит информацию на экран */
            ?>

            <?if($name == 'proweb'):?>
                <h1><?= $name?></h1> <!-- РАВНО - это вывод в тег -->
            <?else:?>
                <h1>В переменной $name находится <?= $name?></h1>
            <?endif;?>


            <?
                $array = ['John', 'Alex', 'Ivan']; /* Массив */
                $countries = [
                    'uzbekistan' => ['tashkent', 'samarkand', 'buxara'],
                    'russia' => ['moskva', 'st.peterburg', 'sochi'],
                    'usa' => ['california', 'florida', 'washington']
                ]
            ?>

            <?for($i = 0; $i < count($array); $i++):?>
                <p><?= $array[$i]?></p>
            <?endfor;?>

            <?foreach($countries as $country => $value):?>
                <h1><?= $country?></h1>
                <hr>
                <?foreach($value as $key):?>
                    <p><?= $key?></p>
                <?endforeach;?>
            <?endforeach;?>

            <form action="">
                <p>Выберите год рождения</p>
                <select>
                   <?for($i = 1960; $i <= date('Y'); $i++):?>
                        <option><?= $i?></option>
                    <?endfor;?>
                </select>
            </form>
            <div class="php-flex">
            <h1><?= date('d/m/Y')?></h1>
            <h3 class="php-hFlex"><?= date('H:i:s')?></h3>
            </div>
        </main>
    </div>

    <script src="/js/script.js"></script>
</body>

</html>