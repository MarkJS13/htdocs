<?php
if(isset($_POST['name']) && isset($_POST['age'])) {
    echo "<h1> {$_POST['name']} </h1>";
    echo "<h1> {$_POST['age']} </h1>";
}

?>