<?php

require_once 'model/m_product.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of search
 *
 * @author BuiAnhVu
 */
class SearchController {

    //put your code here
    public function __construct() {
       $this->keyword = "";
    }
    
    private $keyword;

    public function check_search($keyword) {
        if ($this->keyword == "") {
            echo "Please enter something to start searching.";
            return false;
        }
        return true;
    }

    public function process_search() {
        $keyword = $_GET['search'];
        $this->keyword = $keyword;
        if ($this->check_search($keyword)){
            $result = M_Product::getSearchByName($keyword);
            echo count($result).' results found';
            
        }
    }

    public function display_result() {
        
    }

}
