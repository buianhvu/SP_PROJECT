<?php
session_start();
require_once 'connect.php';
if(isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'home';
    $action = 'display';   
}
require_once('view/layout.php');