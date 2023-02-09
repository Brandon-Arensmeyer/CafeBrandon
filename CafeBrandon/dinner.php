<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinner Menu</title>
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php
        $lasagna = array('Lasagna', 4.49, 'A rich and creamy whole-wheat pasta dish filled layer by layer with refreshingly fresh onions and garlic');
        $cheeseburger = array('Cheeseburger', 3.99, 'Lean meat topped with lettuce, pickles, tomatoes, and onions');
        $alfredo = array('Chicken Alfredo', 4.99, 'A creamy white sauce, long strands of pasta mixed with tender pieces of lean protien');
        $pizza = array('Pizza', 4.49, 'Flatten dough, topped with mozzarella and pepperoni');

        $dinnerList = array($lasagna, $cheeseburger, $alfredo, $pizza);

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

        $menu = createFood($dinnerList);
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
