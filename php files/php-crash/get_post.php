<?php

    if(isset($_GET['name'])) {
        echo $_GET['name'];
    } else {
        echo 'error';
    }


?>


<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=brad"> server</a>

<form action="submit.php" method="POST">
    <input type="text" name="name">
    <input type="number" name="age">
    <input type="submit">
</form>