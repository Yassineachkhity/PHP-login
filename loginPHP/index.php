<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autocomplete" content="off">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>
<body>

    <form action="login.php" method="post" autocomplete="off">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error']))  {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="name">Username</label>
        <input type="text" name="uname" id="username" placeholder="UserName" autocomplete="off" > <br>

        <label for="pwd">Password</label>
        <input type="password" name="pwd" id="password" placeholder="Password" autocomplete="off" > <br>

        <button type="submit">Login</button>
    </form>
    
</body>
</html>

