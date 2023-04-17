<?php


$id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : '';
$username = isset($_POST['id']) ? htmlspecialchars($_POST['username']) : '';




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        form {
            display: flex;
            align-items: center;
            flex-direction: column;
            gap: 20px;
        }

        .display {
            display: flex;
            justify-content: center;
            gap: 30px;
        }


    </style>

    <title>Document</title>
</head>
<body>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>Create</h1>
            <input type="text" name="id" placeholder="ID">
            <input type="text" name="username" placeholder="Username">
            <input type="submit" name="create" placeholder="Create">
    </form>


    <div class="display">
        <h1>ID: <?php echo $id ?> </h1>
        <h1> Username: <?php echo $username ?> </h1>
    </div>
    
</body>
</html>