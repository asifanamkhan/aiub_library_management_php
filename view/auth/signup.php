<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Sign Up</title>
</head>
<link rel="stylesheet" href="../../asset/main.css">
<body>

<?php
session_start();
?>
<div class="container">
    <form method="post" action="../../controller/signupcheck.php">
        <fieldset>
            <legend id="10">Signup</legend>
            <?php
            if (isset($_SESSION['signup_error']['teacher_exist'])) {
                echo '<p class="error-message">' . $_SESSION['signup_error']['teacher_exist'] . '</p>';
            }
            ?>
            <table align="center" >
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" id="first_name" class="form-control" name="first_name"
                               placeholder="Enter First Name"></td>

                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" id="last_name" class="form-control" name="last_name"
                               placeholder="Enter Last Name"></td>

                </tr>
                <tr>
                    <td>User Name:</td>
                    <td>
                        <div>
                            <input type="text" id="user_name" class="form-control" name="user_name"
                                   placeholder="Enter User Name">
                            <?php
                            if (isset($_SESSION['signup_error']['user_name'])) {
                                echo '<p class="error-message">' . $_SESSION['signup_error']['user_name'] . '</p>';
                            }
                            ?>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <div>
                            <input type="text" id="password" class="form-control" name="password"
                                   placeholder="Enter Password">
                            <?php
                            if (isset($_SESSION['signup_error']['password'])) {
                                echo '<p class="error-message">' . $_SESSION['signup_error']['password'] . '</p>';
                            }
                            ?>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td>Teachers Id:</td>

                    <td>
                        <div>
                            <input type="text" id="teachers_id" class="form-control" name="teachers_id"
                                   placeholder="Enter Teachers Id">
                            <?php
                            if (isset($_SESSION['signup_error']['teachers_id'])) {
                                echo '<p class="error-message">' . $_SESSION['signup_error']['teachers_id'] . '</p>';
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>

                    <td>
                        <div><input type="text" id="email" name="email" class="form-control"
                                    placeholder="Enter Email">

                            <?php
                            if (isset($_SESSION['signup_error']['email'])) {
                                echo '<p class="error-message">' . $_SESSION['signup_error']['email'] . '</p>';
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Department:</td>

                    <td>
                        <div><input type="text" id="department" class="form-control" name="department"
                                    placeholder="Enter Department">
                            <?php
                            if (isset($_SESSION['signup_error']['department'])) {
                                echo '<p class="error-message">' . $_SESSION['signup_error']['department'] . '</p>';
                            }
                            ?>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" id="phone_number" class="form-control" name="phone_number"
                               placeholder="Enter Phone Number"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" id="address" class="form-control" name="address"
                               placeholder="Enter Address"></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" id="date_of_birth" class="form-control" name="date_of_birth"
                               placeholder="Enter Date of Birth">
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" id="gender_male" name="gender" value="Male">Male
                        <input type="radio" id="gender_female" name="gender" value="Female">Female
                        <input type="radio" id="gender_other" name="gender" value="Others">Others
                    </td>
                </tr>

                <tr>
                    <td><a href="../../view/auth/login.php">Login</a></td>
                    <td>
                        <input value="submit" name="signup_submit" type="submit"/>
                    </td>
                </tr>

            </table>

        </fieldset>

    </form>
</div>
</body>
</html>