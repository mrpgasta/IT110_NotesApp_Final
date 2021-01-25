<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery and JS bundle w/ Popper.js -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        var currentUserID = null;
    </script>

    <script type="text/javascript" src="js/app.js"></script>
</head>
<body>
    <div class="frm">
        <form method="POST">
            <h1 class="head1">Registration</h1>
            <label for="">FullName:</label>
            <input type="text" name="name" id="fullname" placeholder="fullname">
            <br><br>
            <label for="">Username:</label>
            <input type="text" name="username" id="username" placeholder="username">
            <br><br>
            <label for="">Password:</label>
            <input type="password" name="password" id="password" placeholder="password">
            <br><br>
            <div>
                <button type="button" value="Register" id="register">Register</button>
                <p>
                    already got an account?<a href="login.php"> Sign In</a>
                </p>
                
            </div>
        </form>
    </div>
    
</body>
</html>