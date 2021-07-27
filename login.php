<?php
$title = "Авторизация";
require_once "blocks/header.php";

$data = $_POST;
if(isset($data['do_login']))
{
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if($user){

        if(password_verify($data['password'], $user->password)){
            $_SESSION['logged_user'] = $user;
            header('Location: index.php');
            exit;
        }
        else{
            $errors[] = 'Неверно введен пароль';
        }
    }
    else{
        $errors[] = 'Пользователь с таким логином не найден';
    }
    if (! empty($errors))
    {
        echo '<div style="color: red; text-align: center; margin-top: 30px">'.array_shift($errors).'</div><hr>';
    }
}

?>
<form action="login.php" method="post">
    <div class="auth_margin">
    <div class="container_login">
    <h1>Вход в кабинет</h1>
        <br>
    <input type="text" name="login" class="form-control" placeholder="Логин" value="<?php echo @$data['login']; ?>"><br>
    <input type="password" name="password" class="form-control" placeholder="Пароль"><br>
    <a href="signup.php">Регистрация</a>
    <button type="submit" class="my_btn" name="do_login">Войти</button>
    </div>
    </div>
</form>
<hr style="color: white">
<?php
require_once "blocks/footer.php";
?>

