<?php

//Пробуем осуществить запрос
try {
    //Формируем запрос
    $sql = "SELECT * FROM comments";
    //Выполняем
    $result = $pdo->query($sql);
    //"Берем" полученный результат и записываем в переменную
    $comments = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("ОШИБКА: не удалось выполнить $sql. " . $e->getMessage());
}