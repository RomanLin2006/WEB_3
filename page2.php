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
    'Элемент списка номер один',
    'Элемент списка номер два',
    'Элемент списка номер три',
    'Элемент списка номер четыре',
    'Элемент списка номер пять'
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
            <h2>Вторая страница сайта</h2>
            <p>Это вторая страница моего сайта. Она имеет такую же структуру, как и главная страница, но содержит другой контент. Все страницы сайта имеют одинаковый макет и оформление, что обеспечивает единообразие дизайна и удобство навигации для пользователей.</p>
            
            <h2>Информация о проекте</h2>
            <p>Данный проект создан в рамках изучения основ веб-разработки. На страницах сайта реализованы различные динамические элементы, которые формируются с помощью PHP. Это позволяет создавать более гибкие и интерактивные веб-приложения, которые могут изменяться в зависимости от различных условий и параметров.</p>
            
            <p>Изучение веб-технологий начинается с понимания базовых принципов работы HTML, CSS и PHP. HTML отвечает за структуру документа, CSS - за его визуальное оформление, а PHP позволяет создавать динамический контент, который может изменяться в зависимости от различных условий. Комбинация этих технологий открывает широкие возможности для создания современных веб-сайтов.</p>
            
            <h2>Фотографии</h2>
            <p>На этой странице также отображаются фотографии, которые меняются в зависимости от текущей секунды:</p>
            <?php
            echo '<img src="' . $image_name . '" alt="Меняющаяся фотография">';
            ?>
            
            <h2>Динамический список</h2>
            <p>Ниже представлен список, который формируется из массива данных:</p>
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

