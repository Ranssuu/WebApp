<!DOCTYPE html>
<html>
    <head>
        <title>Activity 5 | REGISTER</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
        body{
            background-image: url("img/background.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }
    </style>
    <body>
        <div class="container">
            <div class="display">
                <div class="user-card">
                    <div class="header">
                        <div class="logo-container">
                            <img src="img/logo.png" class="logo" alt="JOHN LANCE LOGO">
                            <h2>PRODUCT</h2>
                        </div>
                    </div>
                    <hr>
            
                    <div class="form-container">
                        <div class="form-registration">
                            <form action="insert.php" method="post" enctype="multipart/form-data" >
                            <table>
                                <tr>
                                    <td>Product Image: </td>
                                    <td><input class="custom-control-input" type="file" name="productImg" accept="image/*" required/></td>
                                </tr>
                                <tr>
                                    <td>Product Category: </td>
                                    <td><input class="custom-control-input" type="text" name="productCat" placeholder="Enter category" required/></td>
                                </tr>
                                <tr>
                                    <td>Product Name: </td>
                                    <td><input class="custom-control-input" type="text" name="productName" placeholder="Enter name" required/></td>
                                </tr>
                                <tr>
                                    <td>Product Description: </td>
                                    <td><input class="custom-control-input" type="text" name="productDes" placeholder="Enter description" required/></td>
                                </tr>
                                <tr>
                                    <td>Product Price: </td>
                                    <td><input class="custom-control-input" type="text" name="productPrice" placeholder="Enter price" required/></td>
                                </tr>
                                <tr>
                                    <td>Product Quantity: </td>
                                    <td><input class="custom-control-input" type="text" name="productQty" placeholder="Enter quantity" required/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><input class="btn-submit" type="submit" name="Add" value="Submit"/></td>
                                </tr>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>