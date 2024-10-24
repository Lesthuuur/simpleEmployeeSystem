<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../styles/dashboard.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <?php include "components/links.php" ?>
</head>
<body>
   <?php include "components/header.view.php" ?>

    <main>
        <div class="top">
            <h1>LIST OF EMPLOYEES</h1>
        </div>

        <div class="content">

            <?php
                foreach($employees as $employee){
                    $fullName = $employee["surname"] . ", " .  $employee["first_name"];
                    ?>
                        
                        <div class="card" id="<?php echo $employee['id'] ?>">

                        <div class="card-item">
                            <p>Employee Number:  <span><?= $employee["employee_number"] ?></span> </p>
                            <p>Name: <span><?= $fullName ?></span> </p>
                            <p>Department: <span><?= $employee["department"] ?></span> </p>
                            <p>Email: <span><?= $employee["email"] ?></span> </p>
                            <p>Phone: <span><?= $employee["phone"] ?></span> </p>
                            <p>Username: <span><?= $employee["username"] ?></span> </p>
                      
                        </div>

                        <div class="card-button">
                            <button class="update" id="<?php echo $employee['id']; ?>" onclick="updateRedirection('/admin/controller/update.php', <?php echo $employee['id']; ?>);">Update</button>

                            <button class="delete" id="<?php echo $employee['id'] ?>"  >Delete</button>
                        </div>
                        </div>


                    <?php
                }

            ?>


 


        </div>

    </main>

</body>
    
</html>