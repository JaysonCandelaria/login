<html>
<head>
<title>Login form</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com//a81368914c.js"></script>
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="picture/phone.png">
        </div>
    <div class="login-container">
    <form action="process.php" method="POST">
        <img class="avatar"src="picture/avatar.png">
            <h2>Welcome</h2>
        <div class="input-div one focus">
            <div class="i">
            <i class="fas fa-user"></i>
            </div>
            <div>
                <h5>Username</h5>
                <input class="input" type="text" id="username" name="username">
                </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                    <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" type="password" id="password" name="password">
                        </div>
                        </div>
                        <a href="#">Forgot Password</a>
                        <input type="submit" class="btn" value="login"> 
                    </form>
                    </div>
                </div>
                <script type="text/javascript" src="js/main.js"></script>
</body> 


</html>