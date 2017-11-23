<?php
require_once 'model/subject.php';
require_once 'model/account.php';

class NotifyController {

    public $subject;

    public function __construct() {
        $this->subject = new Subject();
    }

    public function display() {
        require_once ('view/notify_html.php');
    }
    
    public function change_message(){
        echo '123';
        $names = array();
        for($i = 1; $i < 10; $i++){
            $names[]=$_GET['p'.$i];
        }
        foreach ($names as $name){
            if($name != ""){
                $account = new Account($name, "","","","","");
                $this->subject->addObserver($account);                
            }
        }        
        $this->subject->notifyObservers($_GET['message']);
    }

}
