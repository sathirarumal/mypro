<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sum
 *
 * @author sathi
 */
class sum extends CFormModel{
    //put your code here
    
    public $num1;
    public $num2;
    
    
    
    public function rules()
    {
        return array(
                array('num1,num2','numaric','max'=>3),
                );
    }
    
    public function attributeLables()
    {
        return array(
            'num1'=>'Number One',
            'num2'=>'Number Two'
        );
    }
    
    public function result()
    {
        /* @var $result type */
        $resul=num1+num2;
        return resul;
    }
}
