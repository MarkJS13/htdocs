<?php

session_start();
session_unset();
session_destroy();

// go back

header('Location: ../index.php?error=none_logout');