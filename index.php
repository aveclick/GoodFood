<?php
$title = "Главная страница";
require_once "blocks/header.php";
?>
<div class="content">
    <div class="left">
            <figure class="photo "><img src="img/banana.jpg" alt="banana"></figure>
            <figure class="photo del"><img src="img/pineapple.jpg" alt="pineapple"></figure>
            <figure class="photo"><img src="img/orange.jpg" alt="orange"></figure>
            <figure class="photo del"><img src="img/lemon.jpg" alt="lemon"></figure>
    </div>
    <div class="right">
        <a href="recipes.php"><h1>Летнее меню</h1></a>
        <a href="recipes.php"><h2>Гуакамоле</h2></a>
        <ul class="col2">
            <li><p>Перец чили: 1 штука</p></li>
            <li><p>Авокадо: 3 штуки</p></li>
            <li><p>Помидоры: 2 штуки</p></li>
            <li><p>Лук: 1 головка</p></li>
            <li><p>Кинза: 1 пучок</p></li>
            <li><p>Лайм: 1 штука</p></li>
            <li><p>Соль: по вкусу</p></li>
            <li><p>Чеснок: 1 зубчик</p></li>
        </ul>
    </div>
</div>
<br>
    <div class="container_2">
        <div class="left1">
            <p class="center_img"><img src="img/smile.png" alt="smile" width="70" height="70"></p>
            <h4>GoodFood команда</h4>
            <p>Мы - достоверный источник информации о различных рецептах для готовки в домашних условиях, наш каталог
            постоянно пополнется рецептами новых блюд и их фотографиями. Мы будем рады видеть вас в нашей большой
            дружной семье!</p>
        </div>
        <div class="right1">
            <p class="center_img2"><img src="img/people.png" alt="smile" width="470" height="330"></p>
        </div>
    </div>
<br>
    <div class="container_1">
        <div class="left">
            <div class="gallery">
                <figure class="photo"><img src="img/icecream.jpg" alt="icecream"></figure>
                <figure class="photo del"><img src="img/icecream1.jpg" alt="sugar"></figure>
            </div>
        </div>
        <div class="right">
            <a href="recipes.php"><h1 style="text-align: center">Мороженое</h1></a>
            <a href="recipes.php"><h2>"Лаванда"</h2></a>
            <ul class="col2">
                <li><p>Мед: 150 г</p></li>
                <li><p>Сахар: 300 г</p></li>
                <li><p>Молоко: 400 мл</p></li>
                <li><p>Яичный желток: 14 шт</p></li>
                <li><p>Разрыхлитель: 5 г</p></li>
                <li><p>Сушеная лаванда: 10 г</p></li>
                <li><p>Сода: 5 г</p></li>
                <li><p>Сливки: 300 мл</p></li>
            </ul>
        </div>
    </div>
<?php
require_once "blocks/footer.php";
?>