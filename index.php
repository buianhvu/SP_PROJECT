<?php

session_start();
require_once 'connect.php';
Connection::getOnlyConnection()->connect();
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    if (Connection::check_login()) {
        $controller = 'product';
        $action = 'display';
        $_GET['controller'] = 'product';
    } else {
        $controller = 'home';
        $action = 'display';
    }
}
//general layout
require_once('view/layout.php');
