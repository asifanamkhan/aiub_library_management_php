..<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Sign Up</title>
</head>
<body>
    
     
    <div>
        <h1
    padding: 10px 0;
      font-size: 32px;
      font-weight: 300;
      text-align: center;
      }
        <form method="post" action="../../controller/signupcheck.php">
            <fieldset >
                <legend id="10">Signup</legend>
                <table align ="center">
                    <tr>
                        <td>First Name:</td>
                        <td><input type="first name" id="first name" name="first name" placeholder="Enter First Name"></td>
                        
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="last name" id="Last name" name="Last name" placeholder="Enter Last Name"></td>
                        
                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" id="user_name" name="user_name" placeholder="Enter User Name"></td>
                       
</tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" id="password" name="password" placeholder="Enter Password"></td>
                    </tr>
                    <tr>
                        <td>Teachers Id:</td>
                        <td><input type="teachers id" id="teachers id" name="teachers id" placeholder="Enter Teachers Id"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" id="email" name="email" placeholder="Enter Email"></td>
                    </tr>
                    <tr>
                        <td>Department:</td>
                        <td><input type="department" id="department" name="email" placeholder="Enter Department"></td>
                    </tr>

                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="phone number" id="phone number" name="phone number" placeholder="Enter Phone Number"></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="address" id="address" name="address" placeholder="Enter Address"></td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td><input type="date of birth" id="date of birth" name="date of birth" placeholder="Enter Date of Birth"></td>
                    </tr>
                     <tr>
                        <td>Gender </td>
                        <td>
                            <input type="radio" id="gender_male" name="gender" value="Male">Male
                            <input type="radio" id="gender_female" name="gender" value="Female">Female
                            <input type="radio" id="gender_other" name="gender" value="Others">Others
                        </td> 
                    </tr>			
                
                    <tr>
                        <td> <a href="../../view/auth/login.php">Login</a> </td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
    
                </table>
    
            </fieldset>
    
        </form>
    </div>
</body>
</html>