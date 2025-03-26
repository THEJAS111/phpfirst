<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <form method="post" action="register.php">
        <div class="container">
        <h1>REGISTER</h1>
        <div class="name">
        <i class="fa-solid fa-user namelogo"></i>
        <label for="input"></label>
        <input type="name" name="username" placeholder="Username" >
        </div>
        <div class="email">
        <i class="fa-solid fa-envelope emaillogo"></i>
        <label for="input"></label>
        <input type="email" name="email" placeholder="Email" >
        </div>
        <div class="password">
        <i class="fa-solid fa-lock passwordlogo"></i>
        <label for="input"></label>
        <input type="password" name="password" placeholder="Password ">
        </div>
        <input  class="button" type="submit" name="signup" value="Sign Up">
        <p>----------OR----------</p>
        <div class="access">
            <i class="fa-brands fa-google fa-xl goog" ></i>
            <i class="fa-brands fa-facebook fa-xl goog"></i>
        </div>
        <p>Already have an account ?</p>
        <input class="button1" type="submit" value="Sign In">
    </div>
    </form>
    
</body>
</html>