<?php
$title = "Смена логина";
require_once "blocks/header.php";
$data = $_POST;
if(isset($data['change_login'])){
    $errors = array();
    $login = $_SESSION['logged_user']['id'];
    $user = R::findOne( 'users', ' id = ? ', array($login));
    if($data['new_login'] == $user->login){
        $errors[] = "Укажите логин, отличный от текущего!";
    }
    if(strlen($data['new_login']) < 5 || strlen($data['new_login']) > 15){
        $errors[] = "Введите корректный логин!";
    }

    if (empty($errors))
    {
        $user->login = $data['new_login'];
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

<form action="change_login.php" method="post">
    <div class="auth_margin">
        <div class="container_pass">
            <h1>Введите новый логин</h1>
            <br>
            <input type="text" name="new_login" class="form-control" placeholder="Логин"><br>
            <button type="submit" class="my_btn" name="change_login">Сменить</button>
        </div>
    </div>
</form>
<hr style="color: white">
<?php
require_once "blocks/footer.php";
?>
