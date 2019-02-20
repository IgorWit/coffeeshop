<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="Coffee.php">Кофе</a></li>
                    <li><a href="Shop.php">Магазин</a></li>
                    <li><a href="About.php">О нас</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div class="">
                <img src="../Images/sidephoto.jpg" class="sidebar">
            </div>
            <footer>
                <p>Все права защищены &copy;</p>
            </footer>
        </div>
    </body>
</html>
<script>
 