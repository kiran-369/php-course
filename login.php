<?php
require "DataBase.php";
$db = new myplaylist();
if (isset($_POST['logname']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("users", $_POST['logname'], $_POST['password'])) {
            echo "Login Success";
        } else echo "Username or Password wrong";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
