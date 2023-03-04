<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logIn.css">
    <title>Log In</title>
</head>
<body>
    <header>
        <div id="top">
            <form id="head" action="index.php">
               <button id="home" type="submit" > Home </button>
             </form>        
        </div>      
    </header>

    <main>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
            <?php echo "<h2>Please enter your account information below</h2>"; ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div id="user">
                    <label id="first" for="user">Username:</label>
                    <input id="firstText" type="text" name="user" />
                </div>
                <div id="pass">
                    <label id="password" for="pass">Password:</label>
                    <input id="passwordText" type="text" name="pass" />
                </div>
                <button id="log" type="submit">Log In</button>
            </form>
        <?php
        elseif (!in_array("", $_POST)) :
            

            $selectSQL = 'SELECT * FROM customer';
            
            $servername = "localhost";
            $username = "steverq1_brandon";
            $password = "Csci213+#002";
            $dbname = "steverq1_brandon";
            $conn = new mysqli($servername, $username, $password, $dbname);

            $filterResult = mysqli_query($conn, $selectSQL);
            
            $user = htmlspecialchars(strip_tags($_POST['user']));
            $pass = htmlspecialchars(strip_tags($_POST['user']));

            while($row = mysqli_fetch_array($filterResult)):
                if($user === $row['cust_user']):
                    echo $row['cust_fname'];
                endif;
            endwhile;
            // elseif (isset($_POST['catName']) && isset($_POST['descr']) && isset($_POST['price'])):
            
            // echo var_export($_POST['price'], true)."<br>";
            echo "<h2> Welcome back! <h2>";
        else :
            echo "Please fill out all fields<br>";
        endif;
        ?>
    </main>
</body>
</html>