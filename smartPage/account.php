<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="css/account.css">
    <link rel="stylesheet" href="css/account-adaptive.css">
    <title>Особистий акаунт</title>
</head>
<body>
    
    <?php
        require_once "header.inc.php";
    ?>

    <section class="registration container">
        <div class="header-account">
            <div class="chapter">
                <img src="img/Розділ3.png" alt="Розділ">
            </div>
            <h1>
                Особистий акаунт
            </h1>
            <p class="note">
                Зареєструйтесь або увійдіть, якщо в вас вже є акаунт
            </p>
        </div>
        <div class="registr-form">
            <h2>
                Реєстрація
            </h2>
            <form action="form-action.php" method="POST">
                <input type="text" name="name" placeholder="Ім'я*" required>
                <input type="text" name="surname" placeholder="Прізвище*" required>
                <input type="text" name="email" placeholder="E-mail*" required>
                <input type="text" name="phone" placeholder="Телефон">
                <input type="password" name="password" placeholder="Пароль*" required>
                <p class="required">
                    *поля обов’язкові до заповнення
                </p>
                <input class="submit" type="submit" name="submit" value="Зареєструватись">
            </form>
            <div class="options">
                <h4>
                   <a href="#"> Увійти </a>
                </h4>
                <h4>
                    <a href="#"> Забули пароль? </a>
                </h4>
            </div>
        </div>
    </section>

    <?php
        require_once "footer.inc.php";
    ?>

</body>
</html>