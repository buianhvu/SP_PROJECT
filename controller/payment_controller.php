<?php

require_once(__DIR__ . "/../controller/interfaces/paymentstrategy.php");
require_once 'model/order.php';

class PaymentController {

    public function payment() {
        if (isset($_POST['total'])) {
            $amount = $_POST['total'];
            if ($amount < 100) {
                $this->pay_by_cc();
            } else {
                $this->pay_by_paypal();
            }
        }
    }

    public function show_receipt() {
        require_once 'view/receipt_html.php';
    }

    public function pay_by_cc() {
        $this->show_receipt();
        $controller = new PayByCC();
        $controller->display();
    }

    public function pay_by_paypal() {
        $this->show_receipt();
        $controller = new PayByPaypal();
        $controller->display();
    }

    public function complete_order() {
        $total = $_SESSION['total_amount'];
        $user_id = $_SESSION['user_id'];
        $date = new DateTime('now', new DateTimeZone('Asia/Bangkok'));
        $date_time = $date->format('d-m-Y H:i:s');
        if( Order::add_order($user_id, $total, $date_time) ){
          $this->show_complete_order();
        }
        else{
            echo "Failed, <a href=index.php?controller=product&action=display>go back</a>";
        }
    }
    
    public function show_complete_order(){
        require_once ('view/completeOrder_html.php');
    }
}

class PayByCC implements paymentstrategy {

    function display() {
        require_once (__DIR__ . '/../view/paybycc_html.php');
    }

    public function pay($amount) {
        
    }

}

class PayByPaypal implements paymentstrategy {

    function display() {
        require_once (__DIR__ . '/../view/paybypaypal_html.php');
    }

    public function pay($amount) {
        
    }

}
