<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addController
 *
 * @author sathi
 */
class addController extends CController {
    //put your code here
    
    public function actions()
    {
        return  array(
            
            'add'=>'application.controllers.adding.addAction',
        );
        
    }
}
