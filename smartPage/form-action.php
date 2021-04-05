<?php
    include "check.php";
    session_start();
    if(isset($_POST['name']) and isset($_POST['surname'])){
        $name = check($_POST['name']);
        $surname = check($_POST['surname']);
        $email = check($_POST['email']);
        $phone = check($_POST['phone']);
        $password = check($_POST['password']);

        if(!(preg_match("/^\+380\d{9}$/", $phone) or preg_match("/^0\d{9}$/", $phone))){
            die("Неправильний формат номеру телефона!");
        } 

        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;

        if(strlen($password) < 6){
            die("Пароль занадто короткий! Пароль має містити більше 5 символів");
        }

        $_SESSION['password'] = $password; 
    }else{
        $name = $_SESSION['name'];
        $surname = $_SESSION['surname'];
        $email = $_SESSION['email'];
        $phone = $_SESSION['phone'];
        $password = $_SESSION['password'];
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Не правильний формат електронної адреси!");
    }

    $user_name = "{$name} {$surname}";

    setcookie("username", $user_name);

    /*if(!isset($_COOKIE["username"])){
        echo "Cookie is not set <br>";
    }else{
        echo "Cookie is set <br>";
        echo $_COOKIE["username"];
    }*/
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
        </div>
        <div class="personal-info">
            <h2> <?php echo $user_name ?> </h2>
            <div class="go-to-saved">
                <h3> <a href="#">Перейти в збережене </a> 
                    <img src="img/heart-hover.png" alt="Saved">
                </h3>
            </div>
            <form action="change-info.php" method="POST">
                <h3>Редагувати контактну інформацію</h3>
                <div>
                    <label> E-mail: </label>
                    <input type="text" name="email" value="<?php echo $email ?>">
                    <label> Телефон: </label>
                    <input type="text" name="phone" value="<?php echo $phone ?>">
                    <label> Змінити пароль: </label>
                    <input type="password" name="password" value="<?php echo $password ?>">
                </div>
                <input class="submit" type="submit" name="submit" value="Зберегти зміни">
            </form>
        </div>
    </section>

    <?php
        require_once "footer.inc.php";
    ?>

</body>
</html>