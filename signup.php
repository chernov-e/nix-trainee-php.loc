<?php
require('header.php');
require('navigation.php'); ?>

<div class="container">
<main class="form-signup w-50 m-auto">
    <form>
        <h1 class="h3 m-3 fw-normal">Регистрация пользователя</h1>

        <div class="form-floating m-2">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating m-2">
            <input type="password" class="form-control" id="floatingPassword" placeholder="***">
            <label for="floatingPassword">Пароль</label>
        </div>
        <div class="form-floating m-2">
            <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="***">
            <label for="floatingConfirmPassword">Подтверждение пароля</label>
        </div>
        <div class="m-2">
            <button class="btn btn-lg btn-primary w-50 m-3" type="submit">Зарегистрироваться</button>
            Уже есть аккаунт? <a href="/signin">Ввойти</a>
        </div>
    </form>
</main>
</div>

<?php
require('footer.php'); ?>