<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/indexstyle.css">
    <title>Document</title>
</head>

<body>
    <main>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div>
                    <label for="catName">Item Name:</label>
                    <input type="text" name="catName" />
                </div>
                <div>
                    <label for="descr">Description:</label>
                    <input type="text" name="descr" />
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="text" name="price" />
                </div>
                <button type="submit">Add Item</button>
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