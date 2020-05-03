
<?php
/* @var $this BackenduserController */
/* @var $model backenduser */
/* @var $form CActiveForm */


?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'backenduser-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'users_name'); ?>
		<?php echo $form->textField($model,'users_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'users_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'users_email'); ?>
		<?php echo $form->textField($model,'users_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'users_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'users_phone'); ?>
		<?php echo $form->textField($model,'users_phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'users_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'users_password'); ?>
		<?php echo $form->textField($model,'users_password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'users_password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->