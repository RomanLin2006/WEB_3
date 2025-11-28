<?php
date_default_timezone_set('Europe/Moscow');

$fio = 'Роман Линейцев';
$group = '241-361';
$lab_number = 'Лабораторная работа №3';
$page_title = $fio . ', ' . $group . ', ' . $lab_number;

$s = date('s'); 
$os = $s % 2; 
if($os === 0) { 
    $image_name = 'https://storage.yandexcloud.net/fotora.ru/uploads/db4d6f36a64284c9.png'; 
} else { 
    $image_name = 'https://storage.yandexcloud.net/fotora.ru/uploads/50bf4ee41e3a801f.png'; 
}

$list_items = [
    'Первый пункт списка',
    'Второй пункт списка',
    'Третий пункт списка',
    'Четвертый пункт списка'
];

$date_time = date('d.m.Y в H-i:s');

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Мой сайт</h1>
            <nav>
                <ul class="menu">
                    <li>
                        <a href="<?php
                        $name = 'Главная';
                        $link = 'index.php';
                        $current_page = true;
                        echo $link;
                        ?>"<?php
                        if($current_page) {
                            echo ' class="selected_menu"';
                        }
                        echo '>' . $name;
                        ?></a>
                    </li>
                    <li>
                        <a href="<?php
                        $name = 'Вторая страница';
                        $link = 'page2.php';
                        $current_page = false;
                        echo $link;
                        ?>"<?php
                        if($current_page) {
                            echo ' class="selected_menu"';
                        }
                        echo '>' . $name;
                        ?></a>
                    </li>
                    <li>
                        <a href="<?php
                        $name = 'Третья страница';
                        $link = 'page3.php';
                        $current_page = false;
                        echo $link;
                        ?>"<?php
                        if($current_page) {
                            echo ' class="selected_menu"';
                        }
                        echo '>' . $name;
                        ?></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Добро пожаловать на главную страницу</h2>
            <p>Это главная страница моего сайта. Здесь представлена основная информация о проекте. Сайт создан в рамках выполнения лабораторной работы по веб-разработке. На странице используются базовые технологии HTML, CSS и PHP для создания динамического контента.</p>
            
            <h2>Динамические элементы</h2>
            <p>На этой странице реализованы различные динамические элементы. Фотографии меняются в зависимости от текущей секунды. Список формируется из массива данных. Меню создается с помощью PHP-кода. Все эти элементы делают сайт более интерактивным и интересным для пользователей.</p>
            
            <p>Веб-разработка - это увлекательный процесс создания веб-сайтов и веб-приложений. Она включает в себя множество технологий и инструментов. HTML используется для структуры страницы, CSS - для оформления, а PHP - для создания динамического контента. Изучение этих технологий открывает множество возможностей для создания современных веб-проектов.</p>
            
            <h2>Фотографии</h2>
            <p>Ниже представлена фотография, которая меняется в зависимости от четности текущей секунды:</p>
            
            <?php
            echo '<img src="' . $image_name . '" alt="Меняющаяся фотография">';
            ?>
            
            <h2>Список элементов</h2>
            <p>Следующий список формируется динамически из массива:</p>
            <ul>
                <?php
                foreach($list_items as $item) {
                    echo '<li>' . $item . '</li>';
                }
                ?>
            </ul>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>Сформировано <?php echo $date_time; ?></p>
        </div>
    </footer>
</body>
</html>
