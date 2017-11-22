<?php

function load_page($controller, $action){
    require_once ('controller/'.$controller.'_controller/'.$controller.'_'.$action.'.php');
}
load_page($controller, $action);