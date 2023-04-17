
<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    session_start();

    if(isset($_SESSION['ign'])) {
        echo '<h1> Welcome ' . $_SESSION['ign'] . '</h1>';
        echo '<a href="logout.php"> Logout </a>';
    } else {
        echo '<h1> Welcome Guest </h1>';
        echo '<a href="logout.php"> Logout </a>';
    }


?>


