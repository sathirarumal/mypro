<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of myController
 *
 * @author sathi
 */
class myController extends CController {
    //put your code here
    public function actionView()
    {
      $model=new Info;  
      $d= Info::model()->findByPk(1);
      $Name = $d->name;
       $this->render('index',array('name'=>$Name,'model'=>$model));
    }
    
    public function actionReg()
{
     $model=new Info;
     if(isset($_POST['Info']))
     {
         $model->attributes = $_POST['Info'];
         if ($model->save()) {
            Yii::app()->user->setFlash('success', 'You have successfully added.');
            $this->redirect(array('index'));
        }
         // or if(!$model->save()){ print_r($model->getErrors())} 
    }
    $this->render('index',array(
                    'model'=>$model,
           )); 
}
    
}