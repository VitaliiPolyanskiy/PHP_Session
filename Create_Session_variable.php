<?php
session_start();
$_SESSION['test'] = "Сессионная переменная создана!<br>";
echo $_SESSION['test'];
?>
<a href="session_main.php">На главную страницу</a>
