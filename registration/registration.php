<!DOCTYPE html>
<html>
    <head>
        <title>Activity 4 | REGISTER</title>
        <meta charset="UTF-8">
        <meta name="author" content="Lance Tumala"
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="display">
                <div class="user-card">
                    <div class="header">
                        <div class="logo-container">
                            <img src="img/logo.png" class="logo" alt="JOHN LANCE LOGO">
                            <h2>ENTER PRODUCT</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="form-registration">
                        <form action="signup.php" method="post">
                        <table>
                            <tr>
                                <td>Firstname: </td>
                                <td><input class="custom-control-input" type="text" name="fname" placeholder="Enter your firstname" required/></td>
                            </tr>
                            <tr>
                                <td>Middlename: </td>
                                <td><input class="custom-control-input" type="text" name="mname" placeholder="Enter your middlename"/></td>
                            </tr>
                            <tr>
                                <td>Lastname: </td>
                                <td><input class="custom-control-input" type="text" name="lname" placeholder="Enter your lastname" required/></td>
                            </tr>
                            <tr>
                                <td>Birthday: </td>
                                <td><input class="custom-control-input" type="date" name="bday" placeholder="Enter your birthday" required/></td>
                            </tr>
                            <tr>
                                <td>Gender: </td>
                                <td><input type="radio" name="gender" value="Male"/> Male
                                <br><input type="radio" name="gender" value="Female"/> Female </td>
                            </tr>
                            <tr>
                                <td>Email: </td>
                                <td><input class="custom-control-input" type="email" name="email" placeholder="Enter your email" required/></td>
                            </tr>

                            <tr>
                                <td>Address: </td>
                                <td><input class="custom-control-input" type="text" name="address" placeholder="Enter your address" required/></td>
                            </tr>
                            <tr>
                                <td>Mobile Number: </td>
                                <td><input class="custom-control-input" type="text" name="contact" placeholder="Enter your mobile number" required/></td>
                            </tr>
                            <tr>
                                <td>Username: </td>
                                <td><input class="custom-control-input" type="text" name="username" placeholder="Enter username" required/></td>
                            </tr>
                            <tr>
                                <td>Password: </td>
                                <td><input class="custom-control-input" type="password" name="password" placeholder="Enter password" required/></td>
                            </tr>
                            
                            <tr>
                                <td>&nbsp;</td>
                                <td><input class="btn-submit" type="submit" name="add" value="Submit"/></td>
                            </tr>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>