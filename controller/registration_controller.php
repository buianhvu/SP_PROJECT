<?php

require_once 'model/account.php';

class RegistrationController {

    private $username, $password, $email, $fullname, $birthday, $sex;

    function display() {
        require_once ('view/registration_html.php');
    }

    function check_legit() {
        $this->fetch_and_check_if_info_completed();
        $this->check_username_existed();
        $this->check_email_valid_type();
        $this->check_email_existed();
        $this->check_dob_valid();
        $this->add_to_database();
        $this->let_checking_pass();
    }

    function fetch_and_check_if_info_completed() {
        if (!isset($_POST['txtUsername'])) {
            die('Unexpected Errors Happened!');
        }
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
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthday = $birthday;
        $this->sex = $sex;
    }

    function check_username_existed() {
        //check if this ID is used by another user or not
        $user = Account::get_by_name($this->username);
        if (mysql_num_rows($user) > 0) {
            echo "This ID is already used by another user, please choose a different name. <a href='javascript: history.go(-1)'>go back</a>";
            exit;
        }
    }

    function check_email_valid_type() {
        //check email is correct or not
        if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $this->email)) {
            echo "Email entered is invalid. <a href='javascript: history.go(-1)'>go back</a>";
            exit;
        }
    }

    function check_email_existed() {
        //check if thsi email is eisted or not
        $user = Account::get_by_email($this->email);
        if (mysql_num_rows($user) > 0) {
            echo "Email enterd is already used by another user, please choose a different email <a href='javascript: history.go(-1)'>go back</a>";
            exit;
        }
    }

    function check_dob_valid() {
        //check type of date of birth
        if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $this->birthday)) {
            echo "Date of birth entered is not correct. <a href='javascript: history.go(-1)'>go back</a>";
            exit;
        }
    }

    function add_to_database() {
//Save info in database
        $addmember = Account::add_member($this->username, $this->password, $this->email, $this->fullname, $this->birthday, $this->sex);
        return $addmember;
    }

    function let_checking_pass() {
        $addmember = $this->add_to_database();
        if ($addmember)
            echo "Your registration is successful. <a href='index.php?controller=login&action=display'>go to login</a>";
        else
            echo "Registration failed. <a href='index.php?controller=registration?action=display'>Try again</a>";
    }

}
