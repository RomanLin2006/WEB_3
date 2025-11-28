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
    'Первый элемент динамического списка',
    'Второй элемент динамического списка',
    'Третий элемент динамического списка',
    'Четвертый элемент динамического списка'
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
                        $current_page = true;
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
            <h2>Третья страница сайта</h2>
            <p>Это третья страница моего сайта. Она завершает набор страниц проекта и демонстрирует единообразие структуры и оформления всех страниц сайта. Каждая страница имеет одинаковый макет, что обеспечивает удобство навигации и восприятия информации пользователями.</p>
            
            <h2>Особенности реализации</h2>
            <p>Все страницы сайта используют одинаковую структуру HTML и общие стили CSS. Динамические элементы формируются с помощью PHP-кода, что позволяет создавать гибкие и интерактивные веб-приложения. Меню на каждой странице формируется с помощью двух PHP-включений, что соответствует требованиям лабораторной работы.</p>
            
            <p>Веб-разработка требует понимания различных технологий и их взаимодействия. HTML создает структуру страницы, CSS отвечает за ее внешний вид, а PHP позволяет создавать динамический контент. Изучение этих технологий по отдельности и их совместное использование является важным этапом в освоении веб-разработки. Практические задания, такие как эта лабораторная работа, помогают закрепить полученные знания и навыки.</p>
            
            <h2>Фотографии</h2>
            <p>На этой странице также присутствуют фотографии, которые меняются в зависимости от четности текущей секунды:</p>
            <?php
            echo '<img src="' . $image_name . '" alt="Меняющаяся фотография">';
            ?>
            
            <h2>Список элементов</h2>
            <p>Список на этой странице также формируется динамически из массива:</p>
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

