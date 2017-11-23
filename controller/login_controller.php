<?php

header('Content-Type: text/html; charset=UTF-8');
Connection::getOnlyConnection()->connect();
class LoginController {

    private $username;
    private $password;
    private $message;

    function display() {
        require_once ('view/login_html.php');
    }

    function authenticate() {
        $this->check_entered_id_password_yet();
        $this->check_id();
        $this->check_password();
        $this->let_login_pass();
    }

    function check_entered_id_password_yet() {
        //get the inputted value
        $username = addslashes($_POST['txtUsername']);
        $password = addslashes($_POST['txtPassword']);
        if (!$username || !$password) {
            echo "Please enter ID and Password. <a href='javascript: history.go(-1)'>go back</a>";
            exit;
        }
        $this->username = $username;
        $this->password = $password;
    }

    function check_id() {
        require_once 'model/account.php';
        $user = Account::get_by_name($this->username);
        if (mysql_num_rows($user) == 0) {
            echo "This ID is not available. Please check again. <a href='javascript: history.go(-1)'>go back</a>";
            exit;
        }
    }

    function check_password() {
        //get password from db
        $user = Account::get_by_name($this->username);
        $row = mysql_fetch_array($user);
        //compare two passwords
        if ($this->password != $row['password']) {
            echo "Your password is entered not correctly <a href='javascript: history.go(-1)'>go back</a>";
            exit;
        }
        $this->message = $row['message'];
    }

    function let_login_pass() {
        //Save the username onto the session
        $_SESSION['username'] = $this->username;
        $_SESSION['message'] = $this->message;
        echo "Hello " . $this->username . ". Welcome back, We're happy to see you again. <a href='index.php?controller=product&action=display'>continue your shopping</a>";
        die();
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

