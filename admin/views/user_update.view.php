<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/user_update.css">
    <?php include "components/links.php" ?>
</head>

<body>
    <?php include "components/header.view.php" ?>

    <main>
        <div class="top">
            <h1>UPDATE EMPLOYEE</h1>
        </div>

        <div class="content">

            <div class="back">
                <a href="/admin/controller/dashboard.php">Back</a>
            </div>

            <form action="" method="POST" class="profile">

                <p class="update-profile-text">Update Profile</p>

        
                    <div class="text-input update-info-div usertype-div">
                        <label for="firstname">User Type</label>
                        <input type="text" name="userType" value="<?= $userType ?>">
                    </div>
                    <div class="text-input update-info-div username-div">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?= $username ?>">
                    </div>
        
                    
                    <?php if (!empty($profileErrors)): ?>
                        <div class="error-messages">
                            <?php foreach ($profileErrors as $error): ?>
                                <p><?php echo htmlspecialchars($error); ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>



                    <input type="submit" class="submit-btn" name="update-user" value="UPDATE">
 

                <p class="change-password-text">CHANGE PASSWORD</p>
                
                    <div class="text-input update-info-div password">
                        <label for="password">Password</label>
                        <input type="password" name="password" >
                    </div>
                    <div class="text-input update-info-div password">
                        <label for="newpass">New Password</label>
                        <input type="password" name="newPass" >
                    </div>
                    <div class="text-input update-info-div password">
                        <label for="newpass">Confirm Password</label>
                        <input type="password" name="confirm_password" >
                    </div>


                    <?php if (!empty($passwordErrors)): ?>
                        <div class="error-messages">
                            <?php foreach ($passwordErrors as $error): ?>
                                <p><?php echo htmlspecialchars($error); ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>


                 
                    <input type="submit" class="submit-btn" name="update-pass" value="CHANGE PASSWORD">

              

  


    

            </form>

         



        </div>

    </main>


</body>

</html>