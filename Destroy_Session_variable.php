<?php
session_start();
unset($_SESSION['test']);
echo "Сессионная переменная удалена!<br />";
// session_unset();  // уничтожаем все глобальные переменные сессии
?>
<a href="session_main.php">На главную страницу</a>