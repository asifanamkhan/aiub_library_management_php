<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>
<div align="center">
    <a href="../dashboard.php" id="a1">Dashboard</a>
    <a href="../profile/show.php" id="a1">Profile</a>
    <a href="../../route/path.php?book_list" id="a1">Books</a>
    <a href="../../route/path.php?address_list" id="a1">Address</a>
    <a href="../../route/path.php?employee_list" id="a1">Employee</a>
    <a href="../../route/path.php?student_list" id="a1">Student</a>
    <a href="../../controller/logout.php" id="a1">Log Out</a>
</div>

<div align="center">
    <form action="../../controller/teacher.php" method="post">
        <input type="hidden" name="change_password">
        <button type="submit" id="a2" style="margin-top: 30px;">Change Password</button>
    </form>
</div>
    <?php
        session_start();
        require_once('../../model/teacherModel.php');
        $id = $_COOKIE['loggedInId'];
        $teacher = getTeachersById($id);
    ?>
    <div class="container">
        <form method="post" action="../../controller/teacher.php">
            <fieldset>
                <legend id="10">Edit Profile</legend>
                <?php
                if (isset($_SESSION['teacher_edit_error']['teacher_exist'])) {
                    echo '<p class="error-message">' . $_SESSION['teacher_edit_error']['teacher_exist'] . '</p>';
                }
                if (isset($_SESSION['teacher_edit_success'])) {
                    echo '<p class="error-message">' . $_SESSION['teacher_edit_success'] . '</p>';
                }
                ?>
                <table align="center" >
                    <tr>
                        <td>First Name:</td>
                        <td><input type="text" value="<?php echo $teacher['first_name']; ?>" id="first_name" class="form-control" name="first_name"
                                   placeholder="Enter First Name"></td>
                        <input type="hidden" name="auth_id" value="<?php echo $teacher['id']; ?>">

                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" id="last_name" value="<?php echo $teacher['last_name']; ?>" class="form-control" name="last_name"
                                   placeholder="Enter Last Name"></td>

                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td>
                            <div>
                                <input type="text" value="<?php echo $teacher['name']; ?>" id="user_name" class="form-control" name="user_name"
                                       placeholder="Enter User Name">
                                <?php

                                if (isset($_SESSION['teacher_edit_error']['user_name'])) {
                                    echo '<p class="error-message">' . $_SESSION['teacher_edit_error']['user_name'] . '</p>';
                                }
                                ?>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>Teachers Id:</td>
                        <td>
                            <div>
                                <input type="text" value="<?php echo $teacher['teacher_id']; ?>" id="teachers_id" class="form-control" name="teachers_id"
                                       placeholder="Enter Teachers Id">
                                <?php
                                if (isset($_SESSION['teacher_edit_error']['teachers_id'])) {
                                    echo '<p class="error-message">' . $_SESSION['teacher_edit_error']['teachers_id'] . '</p>';
                                }
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>

                        <td>
                            <div><input type="text" value="<?php echo $teacher['email']; ?>" id="email" name="email" class="form-control"
                                        placeholder="Enter Email">

                                <?php
                                if (isset($_SESSION['teacher_edit_error']['email'])) {
                                    echo '<p class="error-message">' . $_SESSION['teacher_edit_error']['email'] . '</p>';
                                }
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Department:</td>

                        <td>
                            <div><input type="text" value="<?php echo $teacher['department']; ?>" id="department" class="form-control" name="department"
                                        placeholder="Enter Department">
                                <?php
                                if (isset($_SESSION['teacher_edit_error']['department'])) {
                                    echo '<p class="error-message">' . $_SESSION['teacher_edit_error']['department'] . '</p>';
                                }
                                ?>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" value="<?php echo $teacher['phone_number']; ?>" id="phone_number" class="form-control" name="phone_number"
                                   placeholder="Enter Phone Number"></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" value="<?php echo $teacher['address']; ?>" id="address" class="form-control" name="address"
                                   placeholder="Enter Address"></td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td><input type="date" value="<?php echo $teacher['date_of_birth']; ?>" id="date_of_birth" class="form-control" name="date_of_birth"
                                   placeholder="Enter Date of Birth">
                        </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" <?php  echo ($teacher['gender'] == 'Male') ? "checked": ""  ?> id="gender_male" name="gender" value="Male">Male
                            <input type="radio" <?php  echo ($teacher['gender'] == 'Female') ? "checked": ""  ?> id="gender_female" name="gender" value="Female">Female
                            <input type="radio" <?php  echo ($teacher['gender'] == 'Others') ? "checked": ""  ?> id="gender_other" name="gender" value="Others">Others
                        </td>
                    </tr>

                    <tr>
                        <td><a href="../../view/auth/login.php">Login</a></td>
                        <td>
                            <input value="submit" name="teacher_edit_submit" type="submit"/>
                        </td>
                    </tr>

                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>
