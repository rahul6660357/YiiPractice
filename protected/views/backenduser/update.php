<?php
/* @var $this BackenduserController */
/* @var $model backenduser */
/* @var $form CActiveForm */
$this->breadcrumbs=array(
	'Backendusers'=>array('index'),
	$model->users_id=>array('view','id'=>$model->users_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List backenduser', 'url'=>array('index')),
	array('label'=>'Create backenduser', 'url'=>array('create')),
	array('label'=>'View backenduser', 'url'=>array('view', 'id'=>$model->users_id)),
	array('label'=>'Manage backenduser', 'url'=>array('admin')),
);
?>

<h1>Update backenduser <?php echo $model->users_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>