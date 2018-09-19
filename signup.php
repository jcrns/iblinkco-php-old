<?php
	require "includes/signup.inc.php";
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="We started by targeting small businesses and helping their social media platforms in Northern California."/>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
<head>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<title>iBlinkco - About</title>
</head>
<?php
  include_once 'header.php';
?>
<br>
<br>
<br>
<br>
<br>
<body>
    <div class="wrapper">
        <h1>Sign Up</h1>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class=" <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <input style="font-size: 20px;" type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <br>
            <div class=" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input style="font-size: 20px;" type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <br>
            <div class=" <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <input style="font-size: 20px;" type="password" name="confirm_password" value="<?php echo $confirm_password; ?>" placeholder="Confirm Password">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <br>
            <div class="form-group">
                <input style="font-size: 20px;" type="submit" value="Submit">
            </div>
            <p>Already have an account? <a href="signin.php">Login here</a>.</p>
        </form>
    </div>  
</body>
<br>
<br>
<br>
<br>
<br>
<br>
  <footer>
    </p>
    <p>iBlinkco, Copyright &copy; 2018</p>
  </footer>
</body>
</html>