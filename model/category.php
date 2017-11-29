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

}
