<?php

require_once 'model/model_interfaces/user_operation.php';
require_once 'model/model_interfaces/observer_interface.php';
require_once 'connect.php';

class Account extends UserOperation implements ObserverInterface {

    private $username;
    private $password;
    private $email;
    private $fullname;
    private $birthday;
    private $sex;

    public function __construct($username, $password, $email, $fullname, $birthday, $sex) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthday = $birthday;
        $this->sex = $sex;
    }

    public static function get_by_name($username) {
        $query = mysql_query("SELECT username, password, message FROM member WHERE username='$username'");
        return $query;
    }

    public static function get_by_email($email) {
        $query = mysql_query("SELECT username, password FROM member WHERE username='$email'");
        return $query;
    }

    public static function add_member($username, $password, $email, $fullname, $birthday, $sex) {
        $addmember = mysql_query("
        INSERT INTO member (
            username,
            password,
            email,
            fullname,
            birthday,
            sex
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}',
            '{$birthday}',
            '{$sex}'
        )
    ");
        return $addmember;
    }

    public function updateMessage($message) {
        $update_mess = mysql_query("
             UPDATE member SET
                message =  
            '{$message}' WHERE username = 
            '{$this->username}'
    ");

        return $update_mess;
    }

    public function confirmPassword($password_entered) {
        if (strcmp($this->password, $password_entered) == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updatePassword($new_pass) {
        $update_mess = mysql_query("
             UPDATE member SET
                password =  
            '{$new_pass}' WHERE username = 
            '{$this->username}'
    ");

        return $update_mess;
    }

}
