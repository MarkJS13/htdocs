<?php
    include 'connections/connection.php';
    $conn = connection();

    $id = $_GET['ID'];


    $sql = "SELECT * FROM `student_list` WHERE id = '$id' ";
    $students = $conn->query($sql) or die($conn->error);
    $row = $students->fetch_assoc();

        
    if(isset($_POST['submit'])) {
        $fname = sanitize_inputs($_POST['firstname']);
        $lname = sanitize_inputs($_POST['lastname']);
        $birthday = sanitize_inputs($_POST['birthday']);
        $gender = sanitize_inputs($_POST['gender']);

        $sql = "UPDATE `student_list` SET first_name='$fname', last_name='$lname', birth_day='$birthday', gender='$gender' WHERE id ='$id'";

        $conn->query($sql) or die($conn->error);

        echo header('Location: details.php?ID='.$id);
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
        <input type="text" name="firstname" value="<?php echo $row['first_name'] ?>">

        <label> Last Name</label>
        <input type="text" name="lastname" value="<?php echo $row['last_name'] ?>"> 

        <label> Birthday </label>
        <input type="date" name="birthday" value="<?php echo $row['birth_day'] ?>"> 

        <label> Gender</label>
        <select name="gender" id="gender" >
            <option value="male" <?php echo ($row['gender'] === 'male')? 'selected' : ''; ?>> Male </option>
            <option value="female" <?php echo ($row['gender'] === 'female')? 'selected' : ''; ?>> Female </option>
        </select>

        <input type="submit" value="Submit Form" name="submit">

    </form>
    
</body>
</html>