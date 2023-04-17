<?php

session_start();

 if(isset($_POST['submit'])) {
     $ign = filter_input(INPUT_POST, 'ign', FILTER_SANITIZE_SPECIAL_CHARS);
     $password = $_POST['password'];

    // echo $ign;
    // echo $password;

    if($ign === 'heracle' || $password === 'pass') {
        $_SESSION['ign'] = $ign;
        header('Location: /practice/dashboard.php');
    } else {
        echo 'Log in details invalid';
    }


}



?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

    <label for="ign"> In-Game Name:</label>
        <input type="text" name="ign">
    </div>
    <div>
        <label for="password"> Password:</label>
        <input type="password" name="password">
    </div>
    <input type="submit" name="submit">

</form>




