<html>
    <head>
        <title>My Frist PHP Website</title>
    </head>
    <body>
        <h2>Registration Page</h2>
        <a href="index.php">Click here to go back</a><br/><br/>
        <form action="Register.php" method="post">
            Enter Username: <input type="text" name="username" required="required"/> <br/>
            Enter Password: <input type="password" name="password" required="required"/> <br/>
            <intput type="submit" value="Register"/>
        </form>
    </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    echo "Username entered is: ". $username . "<br/>";
    echo "Password entered is: ". $password;
}
?>