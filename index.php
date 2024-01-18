
<!--index. Сюда подключаются все представления для отображения верстки-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!--Представление меню-->
    <?php require 'view/navbar.php' ?>

    <!--Представление таблицы с оценками студентов (1 задание)-->
    <?php require 'view/students_scores_table.php' ?>

    <!--Представление с SQL запросами (2 задание)-->
    <?php require 'view/sql.php' ?>

    <!--Представление с новостью (задание 4)-->
    <?php require 'logic/text_to_edit.php' ?>
    <?php require 'view/news_text.php' ?>

</body>
</html>




