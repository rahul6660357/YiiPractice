<?php

/* @var $this BackenduserController */
/* @var $model backenduser */
/* @var $form CActiveForm */
$this->breadcrumbs=array(
	'Backendusers'=>array('index'),
	$model->users_id,
);

$this->menu=array(
	array('label'=>'List backenduser', 'url'=>array('index')),
	array('label'=>'Create backenduser', 'url'=>array('create')),
	array('label'=>'Update backenduser', 'url'=>array('update', 'id'=>$model->users_id)),
	array('label'=>'Delete backenduser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->users_id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage backenduser', 'url'=>array('admin')),
);
?>

<h1>View backenduser #<?php echo $model->users_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'users_id',
		'users_name',
		'users_email',
		'users_phone',
		'users_password',
	),
)); ?>
