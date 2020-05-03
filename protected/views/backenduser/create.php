<?php

/* @var $this BackenduserController */
/* @var $model backenduser */
$this->pageTitle=Yii::app()->name . ' - Create';
$this->breadcrumbs=array(

	'Create',
);

$this->menu=array(
	array('label'=>'List backenduser', 'url'=>array('index')),
	array('label'=>'Manage backenduser', 'url'=>array('admin')),
);
?>

<h1>Create backenduser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>