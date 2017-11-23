<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author BuiAnhVu
 */
abstract class UserOperation {

    final public function change_password($password_enterd, $new_pass) {
        if ($this->confirmPassword($password_enterd) == TRUE){
            return $this->updatePassword($new_pass);
        }
        return FALSE;
    }

    abstract public function confirmPassword($password_entered);

    abstract public function updatePassword($new_pass);
}
