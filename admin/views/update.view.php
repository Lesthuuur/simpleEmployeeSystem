<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/update.css">
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

        
                    <div class="text-input update-info-div firstname-div">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" value="<?= $firstname ?>">
                    </div>
                    <div class="text-input update-info-div surname-div">
                        <label for="surname">Surname</label>
                        <input type="text" name="surname" value="<?= $surname ?>">
                    </div>
        

 
                    <div class="text-input update-info-div department-div">
                        <label for="department">Department</label>
                        <input type="text" name="department" value="<?= $department ?>">
                    </div>
                    <div class=" text-input update-info-div email-div">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?= $email ?>">
                    </div>



                    <div class="text-input update-info-div phone-div">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" value="<?= $phone ?>">
                    </div>
                   

  


                <input type="submit" class="submit-btn" name="update-profile" value="UPDATE">

            </form>

         



        </div>

    </main>


</body>

</html>