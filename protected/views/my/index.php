
      

<?php echo "<h1>my name is</h1>";
echo $name;
?>
   
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