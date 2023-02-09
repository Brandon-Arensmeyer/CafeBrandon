<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch Menu</title>
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php
        $sub = array('Meatball Sub', 3.99, 'A sub sandwich with 3 meatballs, lettuce and pickles');
        $blt = array('BLT Sandwich',  3.49, 'Two sandwiches with Bacon lettuce and tomatoes');
        $cheeseburger = array('Cheeseburger', 3.99, 'A cheeseburger with lettuce, pickles, tomatoes, and onions');
        $philly = array('Salad', 2.49, 'A salad added with tomatoes, crutons, onions, and your choice of dressing');

        $lunchList = array($sub, $blt, $cheeseburger, $philly);

        function createFood($a){
            $str = "";
            foreach($a as $food){
                $str = $str."<div class ='Menu'>";
                $str = $str."<img id='Img' src='images/$food[0].jpg' alt='Picture of food'>";
                $str = $str."<h2>$food[0] -- $food[1]</h2>";
                $str = $str."<p>$food[2]</p>";
                $str = $str."</div>";
            }
            return $str;
        }

        $menu = createFood($lunchList);
    ?>

    <header>
        <?php
            include 'header/header.php';
        ?>
    </header>

    <?php
        echo "$menu";    
    ?>

    <footer>
        <?php
            include 'footer/footer.php';
        ?>
    </footer>

</body>
</html>