<?php
session_start();
echo "Переменные сессии: ";
print_r($_SESSION);  // печатаем все сессионные переменные
echo "<br />Идентификатор сессии: ".session_id(); // выводим идентификатор сессии
echo "<hr>";
session_unset();  // уничтожаем все глобальные переменные сессии
echo "Переменные сессии: ";
print_r($_SESSION);  // печатаем все сессионные переменные
echo "<br />Идентификатор сессии: ".session_id(); // выводим идентификатор сессии
echo "<hr>";
session_destroy(); // уничтожаем сессию
echo "<br />Идентификатор сессии: ".session_id(); // выводим идентификатор сессии
echo "<hr>";
?>
<a href="session_main.php">На главную страницу</a>