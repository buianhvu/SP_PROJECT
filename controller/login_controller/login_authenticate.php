<?php
header('Content-Type: text/html; charset=UTF-8');

//login processing
if (isset($_POST['dangnhap'])) {
    //connect to database
    include('connect.php');

    //get the inputted value
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);

    //check if two fields of login is entered 
    if (!$username || !$password) {
        echo "Please enter ID and Password. <a href='javascript: history.go(-1)'>go back</a>";
        exit;
    }

    //check if the username is in database
//    $query = mysql_query("SELECT username, password FROM member WHERE username='$username'");
    require_once 'model/account.php';
    $user = Account::get_by_name($username);
    
    if (mysql_num_rows($user) == 0) {
        echo "This ID is not available. Please check again. <a href='javascript: history.go(-1)'>go back</a>";
        exit;
    }

    //get password from db
    $row = mysql_fetch_array($user);

    //compare two passwords
    if ($password != $row['password']) {
        echo "Your password is entered not correctly <a href='javascript: history.go(-1)'>go back</a>";
        exit;
    }

    //Save the username onto the session
    $_SESSION['username'] = $username;
    echo "Hello " . $username . ". Welcome back, We're happy to see you again. <a href='index.php?controller=product&action=display'>continue your shopping</a>";
    die();
}
?>