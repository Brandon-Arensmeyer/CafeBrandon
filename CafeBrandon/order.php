<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php
            include 'header/header.php';
        ?>
        <div id="top">
            <form id="head" action="signIn.php">
               <button id="header" type="submit" > Sign In </button>
             </form>        
             <form id="head" action="logIn.php">
                <button id="header" type="submit" > Log In </button>
             </form>        
             <form id="head" action="order.php">
                <button id="header" type="submit" > Order </button>
             </form>  
        </div>      
    </header>

    <main>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div>
                    <label for="catName">Name:</label>
                    <input type="text" name="catName" />
                </div>
                <div>
                    <label for="descr">Food:</label>
                    <input type="text" name="descr" />
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="text" name="price" />
                </div>
                <button id="order" type="submit">Add Item</button>
            </form>
        <?php
        elseif (!in_array("", $_POST)) :
            // elseif (isset($_POST['catName']) && isset($_POST['descr']) && isset($_POST['price'])):
            $catName = htmlspecialchars(strip_tags($_POST['catName']));
            $descr = htmlspecialchars(strip_tags($_POST['descr']));
            $price = htmlspecialchars(strip_tags($_POST['price']));
            // echo var_export($_POST['price'], true)."<br>";
            echo "$catName, $descr, $price<br>";
        else :
            echo "Please fill out all fields<br>";
        endif;
        ?>
    </main>
</body>

</html>