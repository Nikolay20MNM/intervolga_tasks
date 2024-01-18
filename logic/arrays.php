<?php

// Исходный массив с данными
$data = [
    ['Иванов', 'Математика', 5],
    ['Иванов', 'Математика', 4],
    ['Иванов', 'Математика', 5],
    ['Петров', 'Математика', 5],
    ['Сидоров', 'Физика', 4],
    ['Иванов', 'Физика', 4],
    ['Петров', 'ОБЖ', 4],
];

// Цикл для получения списка студентов и предметов
for ($i = 0; $i < count($data); $i++)
{
    $students[$i] = $data[$i][0];
    $subjects[$i] = $data[$i][1];
}

//Из полученных списков удаляем повторяющиеся элементы функцией array_unique
$students = isset($students) ? array_unique($students) : null;
$subjects = isset($subjects) ? array_unique($subjects) : null;

//Сортируем
sort($students);
sort($subjects);