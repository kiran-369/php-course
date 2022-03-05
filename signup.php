<?php

session_start();

require "DataBase.php";
$db = new myplaylist();


include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST")

 {
// if something is posted
    $fname = $_POST[fname];
    $lname =$_POST[lname];
    $logname = $_POST[logname];
    $Password =$_POST[Password];
    $Mnumber = $_POST[Mnumber];
    $email =$_POST[email];


    
        $userid = random_num(20);
        $query = insert into table users (fname, lname, logname, password, Mnumber, email) values ($fname, $lname, $logname, $Password, $Mnumber, $email);


        mysqli_query($conec, $query);
        
        header("Location: login.php");
        die;
    }else
    {
        echo " Please enter valid login information or else contactUS";

    }
}










/**if (null!== (($_POST['fname']) && ($_POST['lname'])  && ($_POST['logname']) && ($_POST['password']) && ($_POST['Mnumber']) && ($_POST['email'])) {
     ($db->dbConnect()) {
        ($db->signUp("users", $_POST['fname'], $_POST['lname'],   $_POST['logname'], $_POST['password'], $_POST['Mnumber'],  $_POST['email'])) {
            echo "Sign Up Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";

*/
?>
