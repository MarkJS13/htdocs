<?php

    if(isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = $_POST['age'];

        echo $name;
        echo $age;
    
    }
    
    
?>


<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="text" name="name">
    <input type="number" name="age">
    <input type="submit" name="submit">
</form>