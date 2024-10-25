<?php
echo "Идентификатор сессии: ".session_id(); // выводим идентификатор сессии
echo "<hr />";
// session_start() создаёт сессию (или продолжает текущую на основе session id, переданного через GET-переменную или куки).
session_start();
if(isset($_SESSION["test"]))
	echo $_SESSION['test'];
else
	echo "Сессионная переменная не создана!<br />";
echo "<hr />";
echo "Идентификатор сессии: ".session_id(); // выводим идентификатор сессии
echo "<hr />";
echo "Переменные сессии: ";
print_r($_SESSION);

// session.use_cookies=1 - передача идентификатора сессии через куки
// session.use_trans_sid=1 - присоединение идентификатора сессии к URL, а также передача идентификатора сессии через скрытые поля
// session.save_path="C:\xampp\tmp" - каталог для хранения сессионых переменных
?>
<br />
<a href="Create_Session_variable.php">Создать сессионную переменную</a><br />
<a href="Destroy_Session_variable.php">Удалить сессионную переменную</a><br />
<a href="Session.php">Удалить сессию</a>
