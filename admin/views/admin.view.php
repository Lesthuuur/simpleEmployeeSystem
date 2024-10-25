<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../styles/admin.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <?php include "components/links.php" ?>
</head>
<body>
   <?php include "components/header.view.php" ?>

    <main>
        <div class="top">
            <h1>LIST OF USERS</h1>
            <a href="/admin/controller/user_create.php">Create</a>
        </div>

        <div class="content">

            <?php
                foreach($users as $user){
                  
                    ?>
                        
                        <div class="card" id="<?php echo $user['id'] ?>">

                        <div class="card-item">
                            <p>Employee Number:  <span><?= $user["user_num"] ?></span> </p>
            
                            <p>User Type: <span><?= $user["user_type"] ?></span> </p>
                            <p>Username: <span><?= $user["username"] ?></span> </p>
                       
                
                      
                        </div>

                        <div class="card-button">
                            <button class="update" id="<?php echo $user['id']; ?>" onclick="updateRedirection('/admin/controller/user_update.php', <?php echo $user['id']; ?>);">Update</button>

                            <form id="deleteForm-<?php echo $user['id']; ?>" action="/admin/controller/user_delete.php" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                <button type="button" class="delete" id="deleteBtn-<?php echo $user['id']; ?>">Delete</button>
                            </form>
                            
             
                        </div>
                        </div>


                    <?php
                }

            ?>


 


        </div>

    </main>

</body>
    
</html>