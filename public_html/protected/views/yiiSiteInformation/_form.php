<?php
/* @var $this YiiSiteInformationController */
/* @var $model YiiSiteInformation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'yii-site-information-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	
        <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form role="form">
                   
	<?php  // echo $form->errorSummary($model); ?>

                        
                        
	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
<!--               <a> title </a>-->
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
            </div>
        </div>
                        
                         <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
<!--               <a> title </a>-->
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
            </div>
        </div>
                        
                         <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
<!--               <a> title </a>-->
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone'); ?>
            </div>
        </div>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
		<?php echo $form->labelEx($model,'desc'); ?>
		<?php echo $form->textField($model,'desc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'desc'); ?>
            </div>
        </div>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'author'); ?>
            </div>
        </div>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
		<?php echo $form->labelEx($model,'about'); ?>
                <?php $this->widget('application.extensions.ckeditor.CKEditor', 
                    array( 'model'=>$model, 'attribute'=>'about', 'language'=>'ru', 'editorTemplate'=>'full')); ?>
		<?php // echo $form->textArea($model,'about',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about'); ?>
            </div>
        </div>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
                <?php echo $form->labelEx($model,'Изображение'); ?>
                <?php echo $this->get_image($model->img); ?>
                <?php echo CHtml::activeFileField($model, 'img'); ?>
		<?php echo $form->error($model,'img'); ?>
            </div>
        </div>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Сохранить'); ?>
            </div>
        </div>

<?php $this->endWidget(); ?>
 </form>
                </div>
</div>
</div><!-- form -->
