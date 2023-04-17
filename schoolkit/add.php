<?php
    include 'connections/connection.php';
    $conn = connection();


    if(isset($_POST['submit'])) {

        $fname = sanitize_inputs($_POST['firstname']);
        $lname = sanitize_inputs($_POST['lastname']);
        $birthday = sanitize_inputs($_POST['birthday']);
        $gender = sanitize_inputs($_POST['gender']);

        $sql = "INSERT INTO `student_list`(`first_name`, `last_name`, `birth_day`, `gender`) VALUES ('$fname','$lname','$birthday','$gender')";

        $conn->query($sql) or die($conn->error);

        echo header('Location: index.php');
    };


    function sanitize_inputs($inputs) {
        $inputs = trim($inputs);
        $inputs = stripslashes($inputs);
        $inputs = htmlspecialchars($inputs);
        return $inputs;
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <label> First Name</label>
        <input type="text" name="firstname">

        <label> Last Name</label>
        <input type="text" name="lastname"> 

        <label> Birthday </label>
        <input type="date" name="birthday"> 

        <label> Last Name</label>
        <select name="gender" id="gender">
            <option value="Male"> Male </option>
            <option value="Female"> Female </option>
        </select>

        <input type="submit" value="Submit Form" name="submit">

    </form>
    
</body>
</html>