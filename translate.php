<?php

//function load_page($controller, $action) {
//    require_once ('controller/' . $controller . '_controller' . '.php');
//}
//
//load_page($controller, $action);

class Translate {

    private $controller;
    private $action;
    private $called_class;

    public function __construct($controller, $action) {
        $this->controller = $controller;
        $this->action = $action;
    }

    function find_page() {
        require_once ('controller/' . $this->controller . '_controller' . '.php');
        if ($this->controller == "login") {
            $this->called_class = new LoginController();
        }
        if ($this->controller == 'registration') {
            $this->called_class = new RegistrationController();
        }
        if ($this->controller == "product") {
            $this->called_class = new ProductController();
        }
        if ($this->controller == "home") {
            $this->called_class = new HomeController();
        }
        if ($this->controller == "logout") {
            $this->called_class = new LogoutController();
        }
        if ($this->controller == "notify") {
            $this->called_class = new NotifyController();
        }
        if ($this->controller == "profile") {
            $this->called_class = new ProfileController();
        }
    }

    function load_a_service() {
        $this->find_page();
        $this->called_class->{ $this->action }();
    }

}

$translate = new Translate($controller, $action);
$translate->load_a_service();

