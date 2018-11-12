<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addAction
 *
 * @author sathi
 */
class addAction extends CAction{
    
        public function run()
    {
        $model=new addform;
        if(isset($_POST['addform']))
        {
        $model->attributes=$_POST['addform.php'];
        $this->render('addform',array('model'=>$model));
 
    }
    //put your code here
}
}
