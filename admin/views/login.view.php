<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/styles/login.css">
    <?php include "components/links.php" ?>
</head>
<body>
    <main>
        <div class="left">
            <h1>EMPLOYEE MANAGEMENT SYSTEM</h1>
        </div>
        

        <div class="right">
            <form action="" method="POST">

                <h1>LOGIN</h1>
                <div class="line-division"></div>

                <div class="username">
                    <input type="text" class="form-input username" id="username" name="username" placeholder="USERNAME">
                    <small style="color: red;"><?php echo checkAndDisplayError($usernameError)?></small>
                </div>
              
                <div class="password">
                    <input type="password" class="form-input password" id="password" name="password" placeholder="PASSWORD">
                    <small style="color: red;"><?php echo checkAndDisplayError($passwordError)?></small>
                </div>
                
                <input type="submit" class="submit-btn" id="submit" name="submit" value="LOGIN">

            </form>
        </div>
    </main>
</body>
</html>