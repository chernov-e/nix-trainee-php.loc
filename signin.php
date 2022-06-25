<?php
require('header.php');
require('navigation.php'); ?>

<main class="form-signin w-50 m-auto">
    <form>
        <h1 class="h3 m-3 fw-normal">Авторизация</h1>

        <div class="form-floating m-2">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating m-2">
            <input type="password" class="form-control" id="floatingPassword" placeholder="***">
            <label for="floatingPassword">Пароль</label>
        </div>
        <div class="m-2">
            <button class="btn btn-lg btn-primary w-50 m-3" type="submit">Войти</button>
            Нет аккаунта? <a href="/signup">Зарегистрироваться</a>
        </div>
    </form>
</main>

<?php
require('footer.php'); ?>