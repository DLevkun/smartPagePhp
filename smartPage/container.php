<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Книги </title>
    <link rel="stylesheet" type='text/css' href="css/container.css">
    <link rel="stylesheet" href="css/container-adaptive.css">
</head>
<body>

    <?php
        require_once "header.inc.php";
    ?>

    <div class="container main-wrap">
        <section id="start" class="header-books">
            <div class="chapter">
                <img src="img/Розділ3.png" alt="Розділ">
            </div>
            <h1>
                Книги
            </h1>
        </section>

        <section class="genre-list">
            <div class="chapter">
                <img src="img/Розділ3.png" alt="Розділ">
            </div>
            <div class="wrap-genres">
                <div class="column">
                    <p>
                        <a href="#"> Детективи </a> <br>
                        <a href="#"> Бойовики </a> <br>
                        <a href="#"> Дитяча література </a> <br>
                        <a href="#"> Документальна література </a> <br>
                        <a href="#">  Романи </a> <br>
                        <a href="#"> Науково-освітня література </a> <br>
                    </p>
                </div>
                <div class="column">
                    <p>
                        <a href="#"> Поезія та драматургія </a> <br>
                        <a href="#"> Пригоди </a> <br>
                        <a href="#"> Історична проза </a> <br>
                        <a href="#"> Сучасна література </a> <br>
                        <a href="#"> Українська література </a> <br>
                        <a href="#"> Зарубіжна література </a> <br>
                    </p>
                </div>
                <div class="column" id="third">
                    <p>
                        <a href="#"> Енциклопедії </a> <br>
                        <a href="#"> Міфи та легенди </a> <br>
                        <a href="#"> Фантастика </a> <br>
                        <a href="#"> Жахи та містика </a> <br>
                        <a href="#"> Фентезі </a> <br>
                        <strong> <a href="#"> Наукова фантастика </a> </strong> <br>
                    </p>
                </div>
            </div>
        </section>

        <section class="search">
            <div class="search-field">
                <form action="#">
                <input type="search" name="search" placeholder="Пошук">
                </form>
            </div>
        </section>

        <section class="head">
            <div class="header-genre">
                <div class="chapter">
                    <img src="img/Розділ3.png" alt="Розділ">
                </div>
                <h2>
                    Наукова фантастика
                </h2>
            </div>
        </section>
        
        <section class="grid">
            <div class="books-grid">
                <div class="book-cell">
                    <img src="img/book_covers/451 градус по Фаренгейту.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            451 градус по Фаренгейту
                        </h5>
                        <h5 class="author">
                            Рей Бредбері
                        </h5>
                        <div class="btn-read">
                            <a href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
                <div class="book-cell">
                    <img src="img/book_covers/Автостопом по галактиці.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            Автостопом по галактиці
                        </h5>
                        <h5 class="author">
                            Дуглас Адамс
                        </h5>
                        <div class="btn-read">
                            <a href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
                <div class="book-cell">
                    <img src="img/book_covers/20000 льє під водою.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            20.000 льє під водою
                        </h5>
                        <h5 class="author">
                            Жуль Верн
                        </h5>
                        <div class="btn-read">
                            <a href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
                <div class="book-cell">
                    <img src="img/book_covers/О дивний новий світ.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            Прекрасний новий світ
                        </h5>
                        <h5 class="author">
                            Олдос Хакслі
                        </h5>
                        <div class="btn-read">
                            <a  href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
                <div class="book-cell">
                    <img src="img/book_covers/1984.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            1984
                        </h5>
                        <h5 class="author">
                            Джордж Оруелл
                        </h5>
                        <div class="btn-read">
                            <a href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
                <div class="book-cell">
                    <img src="img/book_covers/Убити пересмішника.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            Убити пересмішника
                        </h5>
                        <h5 class="author">
                            Харпер Лі
                        </h5>
                        <div class="btn-read">
                            <a href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
                <div class="book-cell">
                    <img src="img/book_covers/Я, робот.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            Я, робот
                        </h5>
                        <h5 class="author">
                            Айзек Азімов
                        </h5>
                        <div class="btn-read">
                            <a href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
                <div class="book-cell">
                    <img src="img/book_covers/Війна світі.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            Війна світів
                        </h5>
                        <h5 class="author">
                            Герберт Уеллс
                        </h5>
                        <div class="btn-read">
                            <a href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
                <div class="book-cell">
                    <img src="img/book_covers/Подорож до центра землі.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            Подорож до центру землі
                        </h5>
                        <h5 class="author">
                            Жуль Верн
                        </h5>
                        <div class="btn-read">
                            <a  href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
                <div class="book-cell">
                    <img src="img/book_covers/Франкенштейн.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            Франкенштейн
                        </h5>
                        <h5 class="author">
                            Мері Шеллі
                        </h5>
                        <div class="btn-read">
                            <a href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
                <div class="book-cell">
                    <img src="img/book_covers/Утрачений світ.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            Утрачений світ
                        </h5>
                        <h5 class="author">
                            Артур Конан Дойль
                        </h5>
                        <div class="btn-read">
                            <a href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
                <div class="book-cell">
                    <img src="img/book_covers/Марсіанські хроніки.png" alt="">
                    <div class="title-read">
                        <h5 class="title">
                            Марсіанські хроніки
                        </h5>
                        <h5 class="author">
                            Рей Бредбері
                        </h5>
                        <div class="btn-read">
                            <a href="get-page.php?page=info-page"> Читати </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="up">
           <a href="#start"> <img src="img/На-початок.png" alt="На початок сторінки"> </a>
        </div>
    </div>

    <?php
        require_once "footer.inc.php";
    ?>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/container.js"></script>
</body>
</html>