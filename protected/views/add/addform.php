<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
   <div class="form">
<?php echo CHtml::beginForm(); ?>
 
    <div class="row">
        <?php echo CHtml::activeLabel($model,'num1'); ?>
        <?php echo CHtml::activeTextField($model,'num1') ?>
    </div>
 
    <div class="row">
        <?php echo CHtml::activeLabel($model,'num2'); ?>
        <?php echo CHtml::activePasswordField($model,'num2') ?>
    </div>
 
    <div class="row submit">
        <?php echo CHtml::submitButton('ADD'); ?>
    </div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
        
