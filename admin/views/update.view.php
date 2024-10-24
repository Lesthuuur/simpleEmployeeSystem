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

            <form action="">
                
                <h1>Update Information</h1>
                <div class="row1">
                    <div class="text-input update-info-div firstname-div">
                        <label for="firstname">Firstname</label>
                        <input type="text" >
                    </div>
                    <div class="text-input update-info-div surname-div">
                        <label for="surname">Surname</label>
                        <input type="text" >
                    </div>
                </div>

                <div class="row2">

                    <div class="text-input update-info-div department-div">
                        <label for="department">Department</label>
                        <input type="text" >
                    </div>
                    <div class="text-input update-info-div email-div">
                        <label for="email">Email</label>
                        <input type="text" >
                    </div>

                </div>
                <div class="row3">

                    <div class="text-input update-info-div phone-div">
                        <label for="phone">Phone</label>
                        <input type="text" >
                    </div>
                    <div class="text-input update-info-div username-div">
                        <label for="username">Username</label>
                        <input type="text" >
                    </div>

                </div>
     
               
                <input type="submit" class="submit-btn" value="UPDATE">

            </form>

            <form action="" method="post">
             
                    <div class="text-input old-pass">
                        <label for="old-pass">Old Password</label>
                        <input type="password" >
                    </div>
                    <div class="text-input new-pass">
                        <label for="new-pass">New Password</label>
                        <input type="password" >
                    </div>
                    <div class="text-input confirm-pass">
                        <label for="confirm-pass">Confirm Password</label>
                        <input type="password" >
                    </div>
       
                <input type="submit" class="submit-btn" value="CHANGE PASSWORD">


            </form>



        </div>

    </main>


</body>
</html>