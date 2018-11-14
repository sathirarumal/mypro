<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="form">
<?php echo CHtml::beginForm(); ?>
 
    <?php echo CHtml::errorSummary($model); ?>
 
    <div class="row">
        <?php echo CHtml::activeLabel($model,'name'); ?>
        <?php echo CHtml::activeTextField($model,'name') ?>
    </div>
 
    <div class="row">
        <?php echo CHtml::activeLabel($model,'age'); ?>
        <?php echo CHtml::activePasswordField($model,'age') ?>
    </div>


    <div class="row submit">
        <?php echo CHtml::submitButton('Add'); ?>
    </div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
    </body>
</html>
