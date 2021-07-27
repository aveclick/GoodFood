<?php
$title = "Выход";
require_once "blocks/header.php";
unset($_SESSION['logged_user']);
header('Location: index.php')
?>

<?php
require_once "blocks/footer.php";
?>
