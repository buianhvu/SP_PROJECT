<?php
require_once 'category_controller.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author BuiAnhVu
 */
class ProductController {

    function display() {
        CategoryController::show_all_cates();
        require_once ('view/product_html.php');
    }

    
}
