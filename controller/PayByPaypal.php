<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once(__DIR__."/../controller/interfaces/paymentstrategy.php");
class PayByPaypal implements paymentstrategy{
     function display(){
        require_once (__DIR__.'/../view/paybypaypal_html.php');
    }
    
    public function pay($amount){
        
    }
}
