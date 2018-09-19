<?php
	require "includes/signin.inc.php";
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
    <div class="wrapper">
        <h1>Login</h1>
        <p>Please Login into iBlinkco.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <input style="font-size: 20px;" type="text" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="Username/Email">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <br>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input style="font-size: 20px;" type="password" name="password" class="form-control" placeholder="Password">
                <span class="help-block"><?php echo $password_err; ?></span>
                <br>
            </div>
            <br>
            <div class="form-group">
                <input style="font-size: 20px;" type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
        </form>
    </div>    
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