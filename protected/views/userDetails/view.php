<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */

$this->breadcrumbs=array(
	'User Details'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List UserDetails', 'url'=>array('index')),
	array('label'=>'Create UserDetails', 'url'=>array('create')),
	array('label'=>'Update UserDetails', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete UserDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserDetails', 'url'=>array('admin')),
);
?>

<h1>View UserDetails #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'username',
		'first_name',
		'last_name',
		'gender',
		'password',
		'status',
	),
)); ?>
