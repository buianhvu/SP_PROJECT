<?php

require_once 'model/category.php';

class CategoryController {

    public function show_product() {
        $cate_id = $_GET['cate_id'];
        $products = Category::get_products_by_cate_id($cate_id);
        $json = array();
        while ($row = mysql_fetch_assoc($products)) {
            array_push($json, $row);
            }
            $result = json_encode($json);
            if($result == null) echo "Category is empty!";
                else {
                $this->show_all_cates();
                $this->display_result($result);
                }
    }

    public static function show_all_cates() {
        $all_cate = Category::get_all_cates();
        while ($row = mysql_fetch_array($all_cate)) {
            echo "<a href='index.php?controller=category&action=show_product&cate_id={$row['cate_id']}'>{$row['cate_name']}   </a>";
        }
    }
    
    public function display_result($product){
         $result = $product;
        require_once ('view/searched_cate_html.php');
    }

}
