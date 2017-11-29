<?php

require_once 'model/category.php';

class CategoryController {

    public function show_product($cate_name) {
        
    }

    public static function show_all_cates() {
        $all_cate = Category::get_all_cates();
        while ($row = mysql_fetch_array($all_cate)) {
            echo "<a href='index.php?controller=category&action=show_product&cate_id={$row['cate_id']}'>{$row['cate_name']}   </a>";
        }
    }

}
