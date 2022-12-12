<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="asset/main.css">
</head>
<body>
    <div class="container" >
        <div>
            <h2>Welcome to Library Management System</h2>
        </div>
        <div style="display: inline-block">
            <form action="controller/signupcheck.php" method="get">
                <input class="btn-info" type="submit" value="sign up" name="signup_page">
            </form>
            <form action="controller/logincheck.php" method="get">
                <input class="btn-info" type="submit" value="login" name="login_page">
            </form>

        </div>
        <br><br>
        <div>
            <img src="library2.png" alt="">
        </div>
    </div>
</body>
</html>
