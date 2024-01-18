<!-- Подключаем сессию для оповещения о пользовательских ошибках ввода-->
<?php session_start() ?>
<?php require 'navbar.php' ?>

<h1>Задание 3: CRUD</h1>

<p>Создайте страницу со списком комментариев и формой добавления нового. После добавления нового комментария страница перезагружается, добавленный комментарий отображается в конце списка. </p>

<b>Критерии оценки</b>: защита от инъекций.

<h2>Результат: </h2>
<!--Форма для формирования комментария-->
<form action="../logic/create_comment.php" method="post">
    <p>Ваше имя:</p>
    <input type="text" name="author">
    <p>Комментарий:</p>
    <textarea name="content"  cols="30" rows="5"></textarea>
    <button type="submit">Опубликовать</button>
    <!--$_SESSION['SUCCESS'] - переменная сессии которая оповещяет о удачной публикации комментария-->
    <p style="color: green"><?= !empty($_SESSION['SUCCESS']) ? $_SESSION['SUCCESS'] : '' ?></p>
    <!--$_SESSION['INPUT_ERR'] - переменная сессии которая оповещяет о ошибках ввода-->
    <p style="color: red"><?= !empty($_SESSION['INPUT_ERR']) ? $_SESSION['INPUT_ERR'] : '' ?></p>
</form>

<?php
//Удаляем переменную сессии
if (!empty($_SESSION['SUCCESS'])) unset($_SESSION['SUCCESS']);
//Удаляем переменную сессии
if (!empty($_SESSION['INPUT_ERR'])) unset($_SESSION['INPUT_ERR']);
?>

<?php
require '../db/connect.php';
//Подключение логики чтения из БД
require '../logic/read_comments.php';
?>

<!--Вывод в виде таблицы коментариев-->
<table>
    <tr>
        <td>Автор</td>
        <td>Комментарий</td>
    </tr>
    <?php foreach($comments as $comment) {?>
        <tr>
            <td> <?= $comment['author'] ?> </td>
            <td> <?= $comment['content'] ?> </td>
        </tr>
    <?php } ?>
</table>


