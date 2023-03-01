<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logIn.css">
    <link rel="stylesheet" href="css/logIn.css">
    <title>Log In</title>
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
            <?php echo "<h2>Please enter your account information below</h2>"; ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div id="fName">
                    <label id="first" for="catName">First name:</label>
                    <input id="firstText" type="text" name="catName" />
                </div>
                <div id="lName">
                    <label id="last" for="descr">Last name:</label>
                    <input id="lastText" type="text" name="descr" />
                </div>
                <div id="pass">
                    <label id="password" for="price">Password:</label>
                    <input id="passwordText" type="text" name="price" />
                </div>
                <button id="log" type="submit">Log In</button>
            </form>
        <?php
        elseif (!in_array("", $_POST)) :
            // elseif (isset($_POST['catName']) && isset($_POST['descr']) && isset($_POST['price'])):
            $catName = htmlspecialchars(strip_tags($_POST['catName']));
            $descr = htmlspecialchars(strip_tags($_POST['descr']));
            $price = htmlspecialchars(strip_tags($_POST['price']));
            // echo var_export($_POST['price'], true)."<br>";
            echo "<h2> Thank you for ordering! <h2>";
            echo "<h3> You ordered $catName, and added '$descr' to the description<h3> <br>";
        else :
            echo "Please fill out all fields<br>";
        endif;
        ?>
    </main>
</body>
</html>