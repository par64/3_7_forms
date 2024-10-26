<?php
//Массив для хранения фиктивных отзывов
$reviews = [
    ['name' => 'Саша', 'review' => 'Так себе', 'rating' => 3],
    ['name' => 'Маша', 'review' => 'Зря ты так, Саша', 'rating' => 5],
];

// Проверяем, что запрос был отправлен методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];

    //Добавление нового отзыва в массив
    $reviews[] = ['name' => $name, 'review' => $review, 'rating' => $rating];
    
    //Вывод обновленного массива
    foreach ($reviews as $r){
        echo "Имя: " . htmlspecialchars($r['name']) . "<br>";
        echo "Отзыв: " . htmlspecialchars($r['review']) . "<br>";
        echo "Оценка: " . htmlspecialchars($r['rating']). "<br>" . "<br>";
        }
}

