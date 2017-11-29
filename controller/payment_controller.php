<?php

require_once(__DIR__ . "/../controller/interfaces/paymentstrategy.php");

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
        $count = $_POST['num'];
    for ($i = 1; $i < $count + 1;$i++ ){
        echo $_POST['item_name_'.$i];
        echo $_POST['item_number_'.$i];
        echo $_POST['amount_'.$i];
                echo $_POST['quantity_'.$i];

    }
    }

    public function pay_by_cc() {
        $controller = new PayByCC();
        $controller->display();
    }

    public function pay_by_paypal() {
        $controller = new PayByPaypal();
        $controller->display();
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
