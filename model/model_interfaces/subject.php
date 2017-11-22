<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author BuiAnhVu
 */
interface SubjectInterface {
    
    public function addObserver(ObserverInterface $observer);
    public function deleteObserver();
    public function notifyObservers();
    //put your code here
}
