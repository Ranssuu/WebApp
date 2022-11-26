<?php
if(isset($_POST['add'])){
	$firstname = $_POST['fname'];
	$middlename = $_POST['mname'];
	$lastname = $_POST['lname'];
	$birthday = $_POST['bday'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$adddress = $_POST['address'];
	$mobilenumber = $_POST['contact'];
	$username = $_POST['username'];
	$password = $_POST['password'];
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Activity 4 | Account</title>
        <meta charset="UTF-8">
        <meta name="author" content="Lance Tumala"
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style2.css">
		<script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body>
		<div class="container">
            <div class="display">
                <div class="user-card">
                    <div class="header">
                        <div class="logo-container">
                            <img src="img/logo.png" class="logo" alt="JOHN LANCE LOGO">
                            <h2>ACCOUNT</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="table_container">
                        <div class="personal">
							<div class="personal_container">
								<div>
									<div class="title_container">
										<div>
										<div class="title">
											<a><i data-feather="user"></i>
											<span>Personal Information</span></a>
										</div>
										</div>
									</div>
									<br>
								</div>
								<div class="table">
									<table border>
										<thead>
											<tr>
												<th>NAME</th>
												<th>BIRTHDAY</th>
												<th>GENDER</th>
											</tr>
										</thead>
										<tbody align="center">
											<tr>
												<td><?php echo $firstname;?> <?php echo $middlename;?> <?php echo $lastname;?></td>
												<td><?php echo $birthday;?></td>
												<td><?php echo $gender;?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="contact">
							<div class="contact_container">
								<div>
									<div class="title_container">
										<div>
										<div class="title">
											<a><i data-feather="phone"></i>
											<span>Contact Information</span></a>
										</div>
										</div>
									</div>
									<br>
								</div>
								<div class="table">
									<table border>
										<thead>
											<tr>
												<th>EMAIL</th>
												<th>MOBILE NUMBER</th>
												<th>ADDRESS</th>
											</tr>
										</thead>
										<tbody align="center">
											<tr>
												<td><?php echo $email;?></td>
												<td><?php echo $mobilenumber;?></td>
												<td><?php echo $adddress;?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="Account">
							<div class="account_container">
								<div>
									<div class="title_container">
										<div>
										<div class="title">
											<a><i data-feather="user-check"></i>
											<span>Account Information</span></a>
										</div>
										</div>
									</div>
									<br>
								</div>
								<div class="table">
									<table border>
										<thead>
											<tr>
												<th>USERNAME</th>
												<th>PASSWORD</th>
											</tr>
										</thead>
										<tbody align="center">
											<tr>
												<td><?php echo $username;?></td>
												<td><?php echo $password;?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
		<script>
            feather.replace()
        </script>
	</body>
</html>