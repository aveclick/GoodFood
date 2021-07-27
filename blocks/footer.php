<footer>
    <div class="container_footer">
        <div id="nav"><h5>О НАС</h5>
            <hr style="color: white;">
            <a href="index.php"><p>О команде</p></a>
            <a href="index.php"><p>Контакты</p></a>
        </div>

        <div id="aside"><h5>МОЙ АККАУНТ</h5>
        <hr style="color: white">
            <?php if(isset($_SESSION['logged_user'])) : ?>
                <a href="profile.php"><p>Аккаунт</p></a>
            <?php else : ?>
                <a href="login.php"><p>Аккаунт</p></a>
            <?php endif; ?>
            <a href="gallery.php"><p>Галерея</p></a>
        </div>

        <div id="content"><h5>РЕЦЕПТЫ</h5>
        <hr style="color: white">
            <a href="recipes.php"><p>Завтрак</p></a>
            <a href="recipes.php"><p>Обед</p></a>
            <a href="recipes.php"><p>Ужин</p></a>
            <a href="recipes.php"><p>Десерты</p></a>
            <a href="recipes.php"><p>Напитки</p></a>
        </div>
    </div>
    <br>
    <p style="text-align: center; color: #A8A8A8">Все права защищены &copy; 2021</p>
</footer>
<a href="#" id="toTop">
    <i class="fas fa-arrow-up fa-2x" style="margin-top: 7px"></i>
</a>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/goodfood.js"></script>
</body>
</html>
