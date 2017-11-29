<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logout_controller
 *
 * @author BuiAnhVu
 */
class LogoutController{
    function logout(){
        session_destroy();
        header("location:index.php");
    }
    
}
