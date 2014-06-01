<?php

class YiiPortfolioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new YiiPortfolio;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
               
		if(isset($_POST['YiiPortfolio'])) {
			$model->attributes=$_POST['YiiPortfolio'];
                        $model->img=CUploadedFile::getInstance($model,'img');
                        $model->img_thumb=CUploadedFile::getInstance($model,'img_thumb');
                        
                        
			if($model->save()) {
                            if(strlen($model->img)>0) {
                                $model->img->saveAs(Yii::app()->basePath.'/../images/portfolio/'.$model->img);
                            }
                            if(strlen($model->img_thumb)>0) {
                                $model->img_thumb->saveAs(Yii::app()->basePath.'/../images/portfolio/'.$model->img_thumb);
                            }
                            $this->redirect(array('view','id'=>$model->id));
                        }				
		} $this->render('create',array( 'model'=>$model, ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{

		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['YiiPortfolio'])) {
			$model->attributes=$_POST['YiiPortfolio'];
                        $model->img=CUploadedFile::getInstance($model,'img');
                        $model->img_thumb=CUploadedFile::getInstance($model,'img_thumb');
//               echo "<pre>";
//              print_r($model);
//                                //    print_r($model);
//            exit;
                        
			if($model->save()) {
                            
                            if(!empty($_POST['YiiPortfolio'])){
                                    
                            }
                            
                            if(strlen($model->img)>0) {
                                $model->img->saveAs(Yii::app()->basePath.'/../images/portfolio/'.$model->img);
                            }
                            if(strlen($model->img_thumb)>0) {
                                $model->img_thumb->saveAs(Yii::app()->basePath.'/../images/portfolio/'.$model->img_thumb);
                            }
				$this->redirect(array('view','id'=>$model->id));
                        }
                } $this->render('update',array( 'model'=>$model, ));
        }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('YiiPortfolio');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new YiiPortfolio('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['YiiPortfolio']))
			$model->attributes=$_GET['YiiPortfolio'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return YiiPortfolio the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=YiiPortfolio::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
        
        public function get_image($image) {
		
            if(!empty($image) && file_exists(Yii::app()->basePath.'/../images/portfolio/'.$image)){
                return CHtml::image('/images/portfolio/'.$image);
            }else{
                return CHtml::image('/images/portfolio/no_image_200_200.png');
            }
	}

	/**
	 * Performs the AJAX validation.
	 * @param YiiPortfolio $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='yii-portfolio-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
