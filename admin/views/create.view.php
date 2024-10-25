<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/create.css">
    <?php include "components/links.php" ?>
</head>

<body>
    <?php include "components/header.view.php" ?>

    <main>
        <div class="top">
            <h1>CREATE NEW EMPLOYEE</h1>

        </div>

        <div class="content">

            <div class="back">
                <a href="/admin/controller/dashboard.php">Back</a>
            </div>

            <form action="" method="POST" class="">

                <p class="update-profile-text">Update Profile</p>

        
                    <div class="text-input update-info-div firstname-div">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname">
                    </div>
                    <div class="text-input update-info-div surname-div">
                        <label for="surname">Surname</label>
                        <input type="text" name="surname" >
                    </div>
        

 
                    <div class="text-input update-info-div department-div">
                        <label for="department">Department</label>
                        <input type="text" name="department">
                    </div>
                    <div class=" text-input update-info-div email-div">
                        <label for="email">Email</label>
                        <input type="text" name="email">
                    </div>



                    <div class="text-input update-info-div phone-div">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone">
                    </div>
                   

                    <?php if (!empty($errors)): ?>
                        <div class="errors">
                            <?php foreach ($errors as $error): ?>
                                <p><?php echo $error; ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>


                <input type="submit" class="submit-btn" name="create" value="CREATE">

            </form>

         



        </div>

    </main>


</body>

</html>