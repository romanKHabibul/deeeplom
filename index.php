<?php
    include('../deeeplom/php/bd.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css"  href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЗлатоустСталинград</title>
    
    <link rel="shortcut icon" href="../deeeplom/image/star-logo.png" style="width:40px" type="images/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=PT+Serif:ital,wght@0,400;0,700;1,400&family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="aos.css" rel="stylesheet">
</head>
<body>
<div class="s" id="s"></div>
<header id="upper" class="header">
    <div class="container star">
    
    
        <div class="header-items">
            <a a href="../deeeplom/index.php" class="header-logo">
                <img src="../deeeplom/image/star-logo.png" style="width:120px" alt="star" class="header-img">
                <div class="header-subtitle">ПОДВИГ<br>НАРОДА<br><span>1942-1943</span></div> 
            </a>
            <div class="header-nav">
                <a href="#s" class="header-title-button lang" key="mainbutton">ГЛАВНАЯ СТРАНИЦА</a>
            </div>
            <div class="header-lang">
                <button id="russian" class="header-buttons-ru translate">ру</button>
                <div class="header-buttons-ru">|</div>
                <button id="english" class="header-buttons-eng translate">eng</button>
            </div>
         </div>
    
    
    </div>
</header>


<div class="prev">
    <div class="container">


        <div class="prev-items">
            <div class="prev-title-block">
                <h2 class="prev-title lang" key="prevtitle">
                    Сталинградская битва
                </h2>
                <h2 class="prev-subtitle lang" key="prevsubtitle">
                    Подвиг народа
                </h2>
            </div>
            <div class="prev-title-buttons">
                <a href="../deeeplom/history/history.php" class="prev-contact lang" key="headertitlebutton">
                    История
                </a>
                <a href="#contact-form" class="prev-contact lang" key="contacts">
                    Контакты
                </a>
            </div> 
            <button class="prev-buttons-open">
                <img src="../deeeplom/image/menu.png" style="width:40px" alt="menu">
            </button>   
        </div>


    </div>
</div>


<div class="main">
    <div class="container">


        <div class="main-items">
            <div class="upperline"></div>
            <h1 class="main-title lang" key="maintitle">
                ГЕРОИ СТАЛИНГРАДСКОЙ<BR> БИТВЫ
                город златоуст
            </h1>
            <div class="underline"></div>
        </div>


    </div>
</div>


<div class="cards">
    <div class="container">


        <div class="card-items">
            <div class="card">
                <img data-aos="fade-down" src="image/images1.jpg" style="width:270px;height:175px" alt="img1" class="card-img">
                <div class="card-block">
                    <h2 class="card-title lang" key="cardtitle1">
                        Что это за битва?
                    </h2>
                    <p class="card-text lang" key="cardtext1">
                        Одно из важнейших сражений Второй Мировой войны между Красной армией и вермахтом при поддержке армий стран «Оси», закончившееся победой РККА
                    </p>
                </div>
                <img data-aos="fade-down" src="image/images2.jpg" style="width:270px;height:175px" alt="img1" class="card-img">
            </div>

            <div class="card">
                <img data-aos="fade-down" src="image/images2.jpg" style="width:270px;height:175px" alt="img1" class="card-img">
                <div class="card-block">
                    <h2 class="card-title lang" key="cardtitle2">
                        Для чего сайт?
                    </h2>
                    <p class="card-text lang" key="cardtext2">
                        Данный веб-ресурс - место объединения информации об уроженцах Златоуста, принимавших участие в Сталинградской битве
                    </p>
                </div>
                <img data-aos="fade-down" src="image/images1.jpg" style="width:270px;height:175px" alt="img1" class="card-img">
            </div>

            <div class="card">
                <img data-aos="fade-down" src="image/images1.jpg" style="width:270px;height:175px" alt="img1" class="card-img">
                <div class="card-block">
                    <h2 class="card-title lang" key="cardtitle3">
                        Что ещё можно узнать?
                    </h2>
                    <p class="card-text lang" key="cardtext3">
                        Помимо списка героев, выполненного по основам Бессмертного полка, на сайте также расположена информация о боях
                    </p>
                </div>
                <img data-aos="fade-down" src="image/images2.jpg" style="width:270px;height:175px" alt="img1" class="card-img">
            </div>
        </div>

        <div class="cards-label lang" key="cardslabel">
            ПОДВИГ<br>НАРОДА
        </div>

    </div>
</div>


<?php
    $count = mysqli_query($con, "SELECT * FROM `heroes`");
?>


<div class="heroes">
    <div class="container">


        <div class="heroes-items">
            <div class="heroes-search">
                <h2 class="heroes-title lang search" key="heroestitle">
                    ПОИСК ПО ФАМИЛИИ
                </h2>
                <form class="heroes-input-box" method="post" autocomplete="off">
                    <input placeholder="Кого вы ищете?"  type="text" name="search" class="heroes-input search">
                    <input class="heroes-search-button" value="Найти" type="submit" name="submit">
                    <img src="image/lupa.png" style="height: 40px;position:absolute;top:13px;left:15px;" alt="lupa" class="search-icon">
                </form>
            </div>


            <div class="table-items">
            <?php 
            if(isset($_POST['submit'])){
                $search = $_POST['search'];
                $query = mysqli_query($con,"SELECT * FROM `heroes` WHERE `fio` LIKE '%$search%' OR `life` LIKE '%$search%' ");
                while($c=mysqli_fetch_assoc($query))
                    {
                        ?>
                            <div data-aos="flip-left" data-aos-delay="120" class="table-card">
                                <img style="width: 350px;border-radius:10px 10px 0px 0px" src="image/images2dark.jpg" alt="veteran">
                                <div class="table-card-inf">
                                    <h2 class="table-title <?php echo $c['id'];?>">
                                        <?php echo $c['fio'];?>
                                    </h2>
                                    <h3 class="table-date">
                                        <?php echo $c['life'];?>
                                    </h3>
                                    <p class="table-text">
                                        <?php echo $c['description'];?>
                                    </p>
                                    <div class="table-button-block">
                                        <a href="#information-form" class="table-text-opener">
                                            Нажмите, чтобы узнать больше
                                            <img class="table-arrow" src="image/arrowbyrukanicon.png" style="width:10px" alt="arrow">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                } else {
                $query = mysqli_query($con,"SELECT * FROM `heroes`");
                while($c=mysqli_fetch_assoc($query))
                    {
                        ?>
                            <div data-aos="flip-left" data-aos-delay="120" class="table-card">
                                <img style="width: 350px;border-radius:10px 10px 0px 0px" src="image/images2dark.jpg" alt="veteran">
                                <div class="table-card-inf">
                                    <h2 class="table-title <?php echo $c['id'];?>">
                                        <?php echo $c['fio'];?>
                                    </h2>
                                    <h3 class="table-date">
                                        <?php echo $c['life'];?>
                                    </h3>
                                    <p class="table-text">
                                        <?php echo $c['description'];?>
                                    </p>
                                    <div class="table-button-block">
                                        <a href="#information-form" class="table-text-opener">
                                            Нажмите, чтобы узнать больше
                                            <img class="table-arrow" src="image/arrowbyrukanicon.png" style="width:10px" alt="arrow">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                }
                ?>    
            </div>
        </div>


    </div>
</div>


<div class="contact-form" id="contact-form" >
    <a href="#upper" class="contact-form-сlose-area"></a>
    <div class="container">


        <form method="post" class="contact-items" action="send.php" >
            <h2 class="feedback-title">
                Контакты
            </h2>
            <h3 class="feedback-subtitle">
                Номер телефона: 7 904 *** ****<br><br>
                Почта: romochkasolnishko228@gmail.com<br><br>
            </h3>
            <a href="#feedback-form" class="contact-button">
                Предложить свою информацию
                <img class="arrow" src="image/arrow.png" style="width:20px;" alt="arrow">
            </a>
            <a href="#upper" class="feedback-form-close">x</a>
        </form>


    </div>
</div>


<div class="feedback" id="feedback-form" >
    <a href="#contact-form" class="feedback-form-сlose-area"></a>
    <div class="container">


        <form method="post" class="feedback-items" action="send.php" >
            <h2 class="feedback-title">
                Обратная связь
            </h2>
            <h3 class="feedback-subtitle">
                Укажите всю известную вам информацию о ветеране Сталинградской битвы
            </h3>
            <input type="text" name="email" id="email" placeholder="Введите свою почту" required>
            <input type="text" name="fio" id="fio" placeholder="Введите ФИО" required>
            <input type="date" name="date" id="date" placeholder="Укажите дату рождения">
            <textarea name="message"  id="message" rows="1" placeholder="Опишите  всю известную информацию о ветеране"></textarea>
            <button class="feedback-button" type="submit">Отправить</button>
            <a href="#contact-form" class="feedback-form-close">x</a>
        </form>


    </div>
</div>



<div class="information-form" id="information-form" >
    <a href="#upper" class="feedback-form-сlose-area"></a>
    <div class="container">


        <form method="post" class="information-items" action="send.php" >
            <h2 class="feedback-title">
                Обратная связь
            </h2>
            <h3 class="feedback-subtitle">
                Укажите всю известную вам информацию о ветеране Сталинградской битвы
            </h3>
            <a href="#upper-form" class="feedback-form-close">x</a>
        </form>


    </div>
</div>


<nav class="mobile-menu hide">
        <a href="../deeeplom/history/history.php" class="mobile-menu-link">ИСТОРИЯ</a>
        <a href="#contact-form" class="mobile-menu-link">КОНТАКТЫ</a>
    <button class="mobile-menu-close">
        <img src="../deeeplom/image/crest.png" alt="close">
    </button>
</nav>


<footer class="footer">
    <div class="container">


        <div class="footer-items">
            <div class="footer-left">
                <p class="footer-text">
                    ИНФОРМАЦИЯ ОГРАНИЧЕННОГО ДОСТУПА, ПРЕДУСМОТРЕННАЯ ЗАКОНОДАТЕЛЬСТВОМ РОССИЙСКОЙ ФЕДЕРАЦИИ, В СОСТАВЕ ОБД «ПОДВИГ НАРОДА В ВЕЛИКОЙ ОТЕЧЕСТВЕННОЙ ВОЙНЕ 1941-1945 ГГ.» НЕ ПУБЛИКУЕТСЯ.<br><br>
                    ИНФОРМАЦИЯ, ЯВЛЯЮЩАЯСЯ НЕДОСТОВЕРНОЙ, ОТКРЫТО ИЗДЕВАЮЩЕЙСЯ НАД СОБЫТИЯМИ ПРОШЛЫХ ЛЕТ УГОЛОВНО НАКАЗУЕМА Федеральным законом от 05.04.2021 N 59-ФЗ "О внесении изменений в статью 354.1 Уголовного кодекса Российской Федерации" (вступил в силу с 16.04.2021) И РЕГУЛЯРНО ОТСЛЕЖИВАЕТСЯ АДМИНИСТРАЦИЕЙ САЙТА С НАПРАВЛЕНИЕМ В СООТВЕТСТВУЮЩИЕ ОРГАНЫ.
                </p>   
            </div>
            <div class="footer-right">
                <p class="footer-rospis">
                    roman2022♥
                </p>
            </div>
        </div>


    </div>
</footer>


<script src="aos.js"></script>
<script>
    AOS.init();
</script>
<script src="lang.js"></script>
<script src="function.js"></script>
</body>
</html>