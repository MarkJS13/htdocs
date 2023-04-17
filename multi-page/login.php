<?php include 'includes/headers.php' ?>

        <form action="greetings.php" method="post">
            <h1> Please Log in! </h1>
            <div>
                <label for=""> Name: </label>
                <input type="text" name="name">
            </div>

            <div>
                <label for="email"> Email: </label>
                <input type="text" name="email">
            </div>

            <div>
                <label for="password"> Password: </label>
                <input type="password" name="password">
            </div>

            <div class="submit">
            <input type="submit" name="submit">
            </div>
        </form>

        <?php include 'includes/footers.php' ?>  