<?php
// Проверяем, что запрос был отправлен методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST['order_id'];
    $reason = $_POST['reason'];

    // Валидация 
    if (!empty($order_id)  && !empty($reason)) {
        echo "Номер заказа: " . htmlspecialchars($order_id) . "<br>";
        echo "Причина отмены: " . htmlspecialchars($reason);
    } else {
        echo "Пожалуйста, проверьте введенные данные.";
    }
}
