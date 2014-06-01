<?php
/* @var $this YiiPortfolioController */
/* @var $model YiiPortfolio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'yii-portfolio-form',
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
                     
	<?php echo $form->errorSummary($model); ?>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
            </div>
        </div>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
                
		<?php echo $form->labelEx($model,'Автор'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'author'); ?>
            </div>
        </div>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
		<?php echo $form->labelEx($model,'Год'); ?>
                <?php echo $form->textField($model,'year',
                                                array('placeholder'=>'Год')); ?>
		<?php echo $form->error($model,'year'); ?>
            </div>
        </div>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
		<?php echo $form->labelEx($model,'description'); ?>
               <?php $this->widget('application.extensions.ckeditor.CKEditor', 
                    array( 'model'=>$model, 'attribute'=>'description', 'language'=>'ru', 'editorTemplate'=>'full')); ?>
		<?php //  echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50, 'placeholder'=>'description')); ?>
		<?php echo $form->error($model,'description'); ?>
            </div>
        </div>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
		<?php echo $form->labelEx($model,'development'); ?>
                 <a> development </a>
                <br>
                <?php // $this->widget('application.extensions.ckeditor.CKEditor', 
//                    array( 'model'=>$model, 'attribute'=>'development', 'language'=>'ru', 'editorTemplate'=>'full')); ?>
		<?php echo $form->textArea($model,'development',array('rows'=>6, 'cols'=>50, 'placeholder'=>'development')); ?>
		<?php echo $form->error($model,'development'); ?>
            </div>
        </div>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
		<?php echo $form->labelEx($model,'Ссылка'); ?>
                <a> Ссылка </a>
                <br>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link'); ?>
            </div>
        </div>

	 <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">    
                
                <?php echo $form->labelEx($model,'Изображение'); ?>
                <a> Превью </a>
                <br>
                <?php echo $this->get_image($model->img); ?>
                <?php echo CHtml::activeFileField($model, 'img'); ?>
		<?php echo $form->error($model,'img'); ?>
            </div>
        </div>
                        
        <div class="row">
            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">    
                
                <?php echo $form->labelEx($model,'Изображение'); ?>
                <a> Полное изображение </a>
                <br>
                <?php echo $this->get_image($model->img_thumb); ?>
                <?php echo CHtml::activeFileField($model, 'img_thumb'); ?>
		<?php echo $form->error($model,'img_thumb'); ?>
            </div>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>
 </form>
                </div>
</div>
</div><!-- form -->