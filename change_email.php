<?php
$title = "Смена Email";
require_once "blocks/header.php";
$data = $_POST;
if(isset($data['change_email'])){
    $errors = array();
    $login = $_SESSION['logged_user']['id'];
    $user = R::findOne( 'users', ' id = ? ', array($login));
    if($data['new_email'] == $user->email){
        $errors[] = "Укажите email, отличный от текущего!";
    }
    if(stristr($data['new_email'], '@') == false) {
        $errors[] = "Введите корректный email!";
    }

if (empty($errors))
{
    $user->email = $data['new_email'];
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

<form action="change_email.php" method="post">
    <div class="auth_margin">
        <div class="container_pass">
            <h1>Введите новый email</h1>
            <br>
            <input type="email" name="new_email" class="form-control" placeholder="Email"><br>
            <button type="submit" class="my_btn" name="change_email">Сменить</button>
        </div>
    </div>
</form>
<hr style="color: white">
<?php
require_once "blocks/footer.php";
?>

