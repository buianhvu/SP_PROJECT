<?php

require_once 'connect.php';

class Category {

    private $name;
    private $cate_id;
    private $cate_parent;

    public function __construct($cate_id, $name) {
        $this->name = $name;
        $this->cate_id = $cate_id;
    }

    public static function get_all_cates() {
        $query = mysql_query("SELECT * FROM category");
        return $query;
    }
    
    public static function get_products_by_cate_id($cate_id){
        $query = "SELECT * FROM product WHERE cate_id =' ".$cate_id. "'";
        $result = mysql_query($query);
        return $result;
    }

}
