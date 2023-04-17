<?php 
    include 'includes/headers.php';

    if(isset($_POST['submit'])) {
        $name = sanitize_input($_POST['name']);
        $email = sanitize_input($_POST['email']);
    }


    function sanitize_input($input) {
        $data = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $data;
    }
    
?>    
        
    <div class="content-container">
        <div class="greet">
            <?php if (isset($name)) { ?>
                <h1> Hello <?php echo $name ?> </h1>
            <?php } ?>
            <?php if (isset($email)) { ?>
                <h2> You logged in with the email of <?php echo $email ?></h2>
            <?php } ?>
        </div>

        
<?php include 'includes/footers.php' ?>