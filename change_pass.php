<?php
$title = "Смена пароля";
require_once "blocks/header.php";
$data = $_POST;
if(isset($data['change_pass'])){
    $errors = array();
    $login = $_SESSION['logged_user']['id'];
    $user = R::findOne( 'users', ' id = ? ', array($login));
    if(password_verify($data['pass'], $user->password)){
        $errors[] = "Укажите пароль, отличный от текущего!";
    }
    if(strlen($data['pass']) < 5 || strlen($data['pass']) > 15){
        $errors[] = "Введите корректный пароль!";
    }
if (empty($errors))
{
    $user->password = $data['pass'];
    $user->password = password_hash($data['pass'], PASSWORD_DEFAULT);
    R::store($user);
    $_SESSION['logged_user'] = $user;
    header('Location: index.php');
    exit;
}
else{
    echo '<div style="color: red; text-align: center; margin-top: 30px">'.array_shift($errors).'</div><hr>';
}
}
?>

<form action="change_pass.php" method="post">
    <div class="auth_margin">
        <div class="container_pass">
            <h1>Введите новый пароль</h1>
            <br>
            <input type="password" name="pass" class="form-control" placeholder="Пароль"><br>
            <button type="submit" class="my_btn" name="change_pass">Сменить</button>
        </div>
    </div>
</form>
<hr style="color: white">
<?php
require_once "blocks/footer.php";
?>
