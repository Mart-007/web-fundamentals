
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wall</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>The Wall</header>
    <div class="container">
        <h1 class="reg">Register</h1>
        <form action="process.php" method="post" class="register">
            <input type="hidden" name="action" value="register">
            First name:<input type="text" name="f_name" placeholder="First name" class="fname"><br>
            Last name:<input type="text" name="l_name" placeholder="Last name" class="lname"><br>
            Email:<input type="text" name="email" placeholder="Email" class="email"><br>
            Password:<input type="password" name="password" placeholder="Password" class="reg_password"><br>
            Confirm password: <input type="password" name="c_password" placeholder="Confirm password" class="cpassword"><br>
            <input type="submit" class="submit" value="Register">
        </form>
                <hr></hr>
                <h1>Login</h1>
        <form action="process.php" method="post" class="login">
            <input type="hidden" name="action" value="login">
            Email:<input type="text" name="email" placeholder="Email" class="login_email"><br>
            Password:<input type="password" name="password" placeholder="Password" class="login_password"><br>
            <input type="submit" class="login_btn" value="Login">
        </form>
    </div>
</body>
</html>