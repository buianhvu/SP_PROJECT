<?php

require_once 'model/account.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of profile_controller
 *
 * @author BuiAnhVu
 */
class ProfileController {

    //put your code here
    private $account;

    public function __construct() {
        $this->account = new Account($_SESSION['username'], $_SESSION['password'], "", "", "", "");
    }

    public function display() {
        require_once ('view/profile_html.php');
    }

    public function change_name($name, $password) {
        
    }

    public function change_password() {
        $password_entered = $_POST['entered_password'];
        $new_password = $_POST['new_password'];
        if ($this->account->change_password($password_entered, $new_password)) {
            echo "Congrats, Your password is changed successfully <a href='index.php?controller=product&action=display'>continue your shopping</a>";
        }
        else{
            echo 'Sorry change password failed, try again :( !';
        }
    }

}
