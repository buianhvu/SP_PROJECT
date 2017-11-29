<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once (__DIR__.'/../model/m_product.php');

class ProductAdapter{
    
    public function getAllProduct(){
        $product = new M_Product();
        $result = $product->getAllProduct();

        $json = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($json, $row);
        }
        $json_arr = json_encode($json);
        return $json_arr;
    }
    
    
}