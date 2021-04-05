<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='css/main.css' type='text/css' rel='stylesheet/less'>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main-adaptive.css">
    <title>smartPage</title>
</head>
<body>

    <?php
        require_once "header.inc.php";
    ?>
    
    <section class="start">
        <div class="start-wrap">
            <div class="library">
                <h1 class="lead-text">
                    <span id="white-library"> Бібліотека </span> <br> у твоєму смартфоні
                </h1>
                <div class="chapter">
                    <img src="img/Розділ.png" alt="Розділ">
                </div>
                <div class="start-text">
                    Читайте свої улюблені твори <br> будь-де і 
                    будь-коли. Скачуйте <br> та слухайте у 
                    аудіоформаті <br> Франка, Ремарка, Шекспіра
                </div>
                <div class="btn animated pulse">
                    <a href="get-page.php?page=container">
                        Читати зараз 
                        <img id="arrow" src="img/arrow.png" alt="стрілка">
                        <img id="arrow-hover" src="img/blue-hover-arrow.png" alt="стрілка">
                    </a>
                </div>
                <div class="page">
                    1
                </div>
            </div>
            <div class="start-image">
                <img src="img/main-collage.png" alt="Книги">
            </div>
        </div>
    </section>
    
    <section class="question container">
        <div class="chapter">
            <img src="img/Розділ2.png" alt="Розділ">
        </div>
        <div class="problems">
            <p class="q1 animated">
                Не знаєш як провести час з <span class="blue-text"> користю? </span>
            </p>
            <p class="q2 animated">
                Чи може у пошуках <span class="yellow-text">якісної</span> навчальної літератури?
            </p>
            <p class="q1 animated">
                <span class="red-text">Хочеться</span> дочитати главу, але треба бігти на роботу?
            </p>
        
            <p class="problems-main animated">
                Зі <span class="blue-text">smartPage</span> читання тільки в задоволення!
            </p>
        </div>
        <div class="page"> 2 </div>
    </section>

    <section>
        <div class="book-image">
            <img src="img/books-image.png" alt="Книги">
        </div>
    </section>

    <section class="service container">
        <h1 class="service-suggest animated">
            Цей сервіс пропонує:
        </h1>
        <div class="service-container">
            <div class="service-item animated">
                <img src="img/books.png" alt="books" class="icon">
                <img src="img/Розділ3.png" alt="Розділ" class="chapter">
                <p class="service-text">
                    Більше 7 000 книжок різних жанрів у вільному доступі
                </p>
            </div>
            <div class="service-item animated">
                <img src="img/headphone.png" alt="headphone" class="icon">
                <img src="img/Розділ3.png" alt="Розділ" class="chapter">
                <p class="service-text">
                    Можливість слухати аудіокниги онлайн та офлайн
                </p>
            </div>
            <div class="service-item animated">
                <img src="img/tablet.png" alt="tablet" class="icon">
                <img src="img/Розділ3.png" alt="Розділ" class="chapter">
                <p class="service-text">
                    Зручний інтерфейс, який також адаптований для мобільних
                </p>
            </div>
        </div>
        <div class="page">3</div>
    </section>

    <section class="genres">
        <div class="genres-header container">
            <h1>
                Шукай улюблені книжки вже зараз та
                додавай до <span class="light-text"> вибраного </span>
            </h1>
            <img class="arrow animated" src="img/Стрілка.png" alt="Стрілка">
        </div>
        <div class="genre-grid">
            <div class="genre" id="detective">
                <h1> Детектив </h1>
            </div>
            <div class="genre" id="kids">
                <h1> Дитяча <br> література </h1>
            </div>
            <div class="genre" id="science">
                <h1> Науково-освітня <br> література </h1>
            </div>
            <div class="genre" id="document">
                <h1> Документальна <br> література </h1>
            </div>
            <div class="genre" id="fantasy">
                <h1> Фентезі та <br> фантастика </h1>
            </div>
            <div class="genre" id="adventure">
                <h1> Пригоди </h1>
            </div>
        </div>
        <div class="lines">
            <img src="img/Лінії.png" alt="Лінії">
        </div>
        <div class="page">4</div>
    </section>

    <section class="registration container">
        <div class="chapter">
            <img src="img/Розділ3.png" alt="Розділ">
        </div>
        <p class="q1 animated">
            Ще немає акаунта на <span class="blue-text"> smartPage</span> ?
        </p>
        <p class="q2 animated">
            Реєструйся та прокачуй свої мізки!
        </p>
        <div class="btn-rgstr animated">
            <a href="get-page.php?page=account">
                Зареєструватись
            </a>
        </div>
    </section>

    <?php
        require_once "footer.inc.php";
    ?>

    <script src='//cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js'></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>