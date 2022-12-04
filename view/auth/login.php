<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Login</title>
</head>

<style>
    .error-message {
        color: red;
        font-size: 12px;
    }
</style>
<body>

<?php
session_start();
if (isset($_SESSION['login_error']['credential_error'])) {
    echo '<p class="error-message">' . $_SESSION['login_error']['credential_error'] . '</p>';
}
?>

<div>
    <form method="post" action="../../controller/logincheck.php">
        <fieldset>
            <legend>Login</legend>
            <table align="center">
                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" id="user" name="user_name" value="">
                        <?php
                        if (isset($_SESSION['login_error']['user_name'])) {
                            echo '<p class="error-message">' . $_SESSION['login_error']['user_name'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" id="pass" name="password" value="">
                        <?php
                        if (isset($_SESSION['login_error']['password'])) {
                            echo '<p class="error-message">' . $_SESSION['login_error']['password'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td><a href="../../view/auth/signup.php">Signup</a></td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>