<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="./form.css">

</head>

<body>


     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" value="<?php isset($_GET['uname']) ?  $_GET['uname'] : ''?>" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" value="<?php isset($_GET['password']) ?  $_GET['password'] : ''?>" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>