
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
 
$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>
 
<div class="form" id="login_ajax_form">
    <div class="container" style="background: white;">
 <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
            <div class="row">
                <div class="col-lg-12 text-center">
                   <h3>Авторизация</h3>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group floating-label-form-group-with-focus">
                                <?php echo $form->labelEx($model,'Ваше имя'); ?>                              
                                <?php echo $form->textField($model,'username',
                                                array('class'=>'form-control','placeholder'=>'Ваше Имя')); ?>
                                <?php echo $form->error($model,'username'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <?php echo $form->labelEx($model,'Ваш пароль'); ?>
                                <?php echo $form->textField($model,'password',
                                                array('class'=>'form-control','placeholder'=>'Ваше пароль')); ?>
                                <?php echo $form->error($model,'password'); ?>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                        <p class="hint">
                                         Вы можете авторизоваться, как: admin / demo.
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <?php echo CHtml::submitButton('Войти'); ?>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
    <?php $this->endWidget(); ?>
        </div>
     </div>
