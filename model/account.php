<?php

class Account {

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
        $query = mysql_query("SELECT username, password FROM member WHERE username='$username'");
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
}

?>