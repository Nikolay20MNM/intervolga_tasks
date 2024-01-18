<?php
//Подключаем сессию для оповещения о пользовательских ошибках ввода
session_start();
//Подключение к БД
require '../db/connect.php';

/*
Сущность комментариев (comments):

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`author` VARCHAR(255) NULL,
`content` TEXT NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8
COLLATE=utf8_unicode_ci;

*/

//Верификация данных
function verification($data)
{
    return strip_tags(stripcslashes(trim(htmlentities($data))));
}

//Проверка на NULL
$author = isset($_POST['author']) ? verification($_POST['author']) : '';
$content = isset($_POST['content']) ? verification($_POST['content']) : '';

try {
    //Проверка что поле комментарий заполнено
    if (!empty($content)) {
        //Запрос
        $sql = "INSERT INTO comments (author, content) VALUES (:author, :content)";
        //Подготавливаем
        $stmt = $pdo->prepare($sql);
        //Выполняем
        $stmt->execute([':author' => empty($author) ? 'Без имени' : $author, ':content' => $content]);
        //Инициализируем
        $_SESSION['SUCCESS'] = 'Комментарий обуликован!';
        //Редиректим
        header("Location: ../view/comments_list_with_form.php");
    } else {
        //Инициализируем в случае false
        $_SESSION['INPUT_ERR'] = 'Поле коментария должно быть заполнено!';
        //Редиректим
        header("Location: ../view/comments_list_with_form.php");
    }
} catch (PDOException $e) {
    die("Ошибка вставки $sql. " . $e->getMessage());
}



