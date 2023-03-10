<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signIn.css">
    <title>Sign In</title>
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
            <?php echo "<h2>Please sign in with your information below</h2>"; ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div id="fName">
                    <label id="first" for="catName">First name:</label>
                    <input id="firstText" type="text" name="fName" />
                </div>
                <div id="lName">
                    <label id="last" for="descr">Last name:</label>
                    <input id="lastText" type="text" name="lName" />
                </div>
                <div id="user">
                    <label id="password" for="price">Username:</label>
                    <input id="passwordText" type="text" name="user" />
                </div>
                <div id="pass">
                    <label id="password" for="price">Password:</label>
                    <input id="passwordText" type="text" name="pass" />
                </div>
                <button id="log" type="submit">Sign In</button>
            </form>
        <?php
        elseif (!in_array("", $_POST)) :
            

            // elseif (isset($_POST['catName']) && isset($_POST['descr']) && isset($_POST['price'])):
            $fName = htmlspecialchars(strip_tags($_POST['fName']));
            $lName = htmlspecialchars(strip_tags($_POST['lName']));
            $user = htmlspecialchars(strip_tags($_POST['user']));
            $pass = htmlspecialchars(strip_tags($_POST['pass']));

            $hashed = password_hash($pass, PASSWORD_DEFAULT);

            $servername = "localhost";
            $username = "steverq1_brandon";
            $password = "Csci213+#002";
            $dbname = "steverq1_brandon";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error){
                echo "connection failed";
            }

            $sql = "INSERT INTO customer (cust_id, cust_fname, cust_lname, cust_user, cust_pass) 
            VALUES ('null', '$fName', '$lName', '$user', '$hashed')";
            if ($conn->query($sql) === TRUE){
                echo "<h2> Welcome $fName $lName, you are now signed in! <h2>";
            }
            //else{
            //     echo "Error: " . $sql . "<br>" . $conn->error;
            // }
            // echo var_export($_POST['price'], true)."<br>";
            echo "";
        else :
            echo "Please fill out all fields<br>";
        endif;
        ?>
    </main>
    
</body>
</html>