<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/user_create.css">
    <?php include "components/links.php" ?>
</head>

<body>
    <?php include "components/header.view.php" ?>

    <main>
        <div class="top">
            <h1>CREATE NEW USER</h1>

        </div>

        <div class="content">

            <div class="back">
                <a href="/admin/controller/admin.php">Back</a>
            </div>

            <form action="" method="POST" class="">

                <p class="update-profile-text">Create new User</p>

        
                <div class="text-input update-info-div usertype-div">
                    <label for="firstname">User Type</label>
                    <input type="text" name="userType">
                </div>
                <div class="text-input update-info-div username-div">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                </div>
        
         
                <div class="text-input update-info-div password">
                    <label for="newpass">New Password</label>
                    <input type="password" name="newPass" >
                </div>
                <div class="text-input update-info-div password">
                    <label for="newpass">Confirm Password</label>
                    <input type="password" name="confirmPass" >
                </div>

                
                <?php if (!empty($errors)): ?>
                    <div class="errors">
                        <?php foreach ($errors as $error): ?>
                            <p><?php echo $error; ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>


                <input type="submit" class="submit-btn" name="create-user" value="CREATE">

            </form>

         



        </div>

    </main>


</body>

</html>