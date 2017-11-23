<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once(__DIR__."/../controller/PayByCC.php");
require_once(__DIR__."/../controller/PayByPaypal.php");
if(isset($_POST['total'])) {
    $amount = $_POST['total'];
    if($amount < 100) {
         $controller = new PayByCC();
         $controller->display();
    } else {
        $controller = new PayByPaypal();
        $controller->display();
    }
}
