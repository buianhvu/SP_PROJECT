<?php

class Order {

    private $order_id;
    private $user_id;
    private $amount;
    private $date;

    public static function add_order($user_id, $amount, $date) {
        $addorder = mysql_query("
        INSERT INTO orders (
            user_id,
            amount,
            date
        )
        VALUE (
            '{$user_id}',
            '{$amount}',
            '{$date}'
        )
    ");
        return $addorder;
    }

}
