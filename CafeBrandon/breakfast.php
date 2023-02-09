<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breakfast Menu</title>
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php

        

        $pancakes = array('Pancakes',  4.99, 'Two pancakes with your choice of maple or blueberry syrup.');
        $waffles = array('Waffles',  3.99, 'Two waffles with your choice of maple or blueberry syrup.');
        $frenchToast = array('French Toast',  3.99, 'A stack of french toast with sugar and maple syrup.');
        $omelette = array('Omelette',  3.99, 'An omelette including cheese, ham, bacon, sausage, peppers and tomatoes');

        $breakfastList = array($pancakes, $waffles, $frenchToast, $omelette);

        function createFood($a){
            $str = "";
            foreach($a as $food){
                $str = $str."<div class ='Menu'>";
                $str = $str."<img id='Img' src='images/$food[0].jpg' alt='Picture of food'>";
                $str = $str."<h2>$food[0] -- $$food[1]</h2>";
                $str = $str."<p>$food[2]</p>";
                $str = $str."</div>";
            }
            return $str;
        }

        $menu = createFood($breakfastList);
        
        
        
    
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