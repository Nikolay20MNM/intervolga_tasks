<h1>Задание 2: SQL</h1>

<p>Есть база данных состоящая из таблиц:</p>

<ul>
    <li>группы каталога</li>
    <li>товары</li>
    <li>наличие товаров на складах</li>
    <li>склады</li>
</ul>

По некоторой причине нарушена их связность:
<ul>
    <li>есть пустые группы (без товаров)</li>
    <li>товары</li>
    <li>есть склады без товаров</li>
</ul>

<p>Необходимо написать код для устранения (удаления) этих нарушений.</p>

<b>Критерии оценки</b>: минимум SQL-запросов.

<h2>Результат: </h2>

<h3>DELETE FROM categories WHERE id NOT IN (SELECT category_id FROM products);</h3>
<h3>DELETE FROM products WHERE id NOT IN (SELECT product_id FROM availabilities);</h3>
<h3>DELETE FROM stocks WHERE id NOT IN (SELECT stock_id FROM availabilities);</h3>
