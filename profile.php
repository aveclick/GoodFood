<?php
$title = "Профиль";
require_once "blocks/header.php";
$name =  $_SESSION['logged_user']->login;
$email =  $_SESSION['logged_user']->email;
?>
    <div class="container mt-5">
        <div class="auth_margin">
            <div class="container_profile">
                <h3>Профиль пользователя</h3>
                <br>
                <br>
                <div class="flex">
                <label for="login">Имя:</label>
                <br>
                <input type="text" name="login" class="form-control" placeholder="Логин" value="<?php echo $name; ?>" disabled><br>
                <form action="change_login.php">
                    <button type="submit" class="my_btn">Сменить</button>
                </form>

                <label for="login">Email:</label>
                <br>
                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" disabled><br>
                <form action="change_email.php">
                    <button type="submit" class="my_btn">Сменить</button>
                </form>
                </div>
                <div class="bottom">
                <form action="change_pass.php">
                    <button type="submit" class="my_btn" style="margin-top: 50px">Сменить пароль</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr style="color: white">
<?php
require_once "blocks/footer.php";
?>