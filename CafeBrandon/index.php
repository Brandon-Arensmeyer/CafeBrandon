<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafê Milestone</title>
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <header>
        <?php
            include 'header/header.php';
            echo 'hello Steve and Brandon';
        ?>
        
    </header>

    <div class="Menu">
        <form action="breakfast.php">
            <button type="submit" style="background: url(images/breakfast.png) no-repeat; background-position: center; background-size: cover;"> Breakfast Menu </button>
        </form>
    </div>

    <div class="Menu">
        <form action="lunch.php">
            <button type="submit" style="background: url(images/lunch.png) no-repeat; background-position: center; background-size: cover;"> Lunch Menu </button>
        </form>

    </div>

    <div class="Menu">
        <form action="dinner.php">
            <button type="submit" style="background: url(images/dinner.png) no-repeat; background-position: center; background-size: cover;"> Dinner Menu </button>
        </form>

    </div>

    <footer>
        <?php
            include 'footer/footer.php';
        ?>
    </footer>
    
</body>
</html>