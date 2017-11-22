<?php

require_once 'model/account.php';
if (!isset($_POST['txtUsername'])) {
    die('');
}

//connect to database
include('connect.php');

header('Content-Type: text/html; charset=UTF-8');

//get data from registration.php
$username = addslashes($_POST['txtUsername']);
$password = addslashes($_POST['txtPassword']);
$email = addslashes($_POST['txtEmail']);
$fullname = addslashes($_POST['txtFullname']);
$birthday = addslashes($_POST['txtBirthday']);
$sex = addslashes($_POST['txtSex']);

//pre check that users enter all fields or not
if (!$username || !$password || !$email || !$fullname || !$birthday || !$sex) {
    echo "Please complete your information. <a href='javascript: history.go(-1)'>go back</a>";
    exit;
}


//check if this ID is used by another user or not
$user = Account::get_by_name($username);
if (mysql_num_rows($user) > 0) {
    echo "This ID is already used by another user, please choose a different name. <a href='javascript: history.go(-1)'>go back</a>";
    exit;
}

//check email is correct or not
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) {
    echo "Email entered is invalid. <a href='javascript: history.go(-1)'>go back</a>";
    exit;
}

//check if thsi email is eisted or not
$user = Account::get_by_email($email);
if (mysql_num_rows($user) > 0) {
    echo "Email enterd is already used by another user, please choose a different email <a href='javascript: history.go(-1)'>go back</a>";
    exit;
}
//check type of date of birth
if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $birthday)) {
    echo "Date of birth entered is not correct. <a href='javascript: history.go(-1)'>go back</a>";
    exit;
}

//Save info in database
$addmember = Account::add_member($username, $password, $email, $fullname, $birthday, $sex);

if ($addmember)
    echo "Your registration is successful. <a href='index.php?controller=login&action=display'>go to login</a>";
else
    echo "Registration failed. <a href='index.php?controller=registration?action=display'>Try again</a>";
?>