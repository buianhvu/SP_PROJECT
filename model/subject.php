<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subject
 *
 * @author BuiAnhVu
 */
class Subject implements SubjectInterface {

    public $array_observers;

    public function __construct() {
        $this->array_observers = array();
    }

    public function addObserver(\ObserverInterface $observer) {
        $this->array_observers[] = $observer;
    }

    public function deleteObserver() {
        
    }

    public function notifyObservers($message) {
        foreach($this->array_observers as $one){
            $one->updateMessage($message);
        }
    }

}
