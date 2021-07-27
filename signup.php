<?php
$title = "Регистрация";
require_once "blocks/header.php";
$data = $_POST;
if(isset($data['do_signup'])){
    // регистрация
    $errors = array();

    if(R::count('users', "login = ?", array($data['login'])) > 0){
        $errors[] = "Пользователь с таким логином уже существует!";
    }
    if(R::count('users', "email = ?", array($data['email'])) > 0){
        $errors[] = "Пользователь с таким Email уже существует!";
    }

    if (empty($errors))
    {
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
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

    <form action="signup.php" method="post" id = "signup-form">
        <div class="auth_margin">
        <div class="container_signup">
            <h1>Регистрация</h1>
            <br>
            <input type="text" name="login" id="name" value="<?php echo @$data['login']; ?>" class="form-control" placeholder="Логин"><br>
            <input type="email" name="email" id="email" value="<?php echo @$data['email']; ?>" class="form-control" placeholder="Email"><br>
            <input type="password" name="password" id="pass" value="<?php echo @$data['password']; ?>" class="form-control" placeholder="Пароль"><br>
            <input type="password" name="password_2" id="repass" value="<?php echo @$data['password_2']; ?>" class="form-control" placeholder="Повторите пароль"><br>
            <div id = "error" style="color: red"></div>
            <a href="login.php">Вход</a>
            <button type="submit" class="my_btn" name="do_signup">Зарегистрироваться</button>
        </div>
        </div>
    </form>
    <hr style="color: white">
<?php
require_once "blocks/footer.php";
?>