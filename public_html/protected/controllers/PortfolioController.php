<?php

/*
 *  Главный контроллер Portfolio для шаблона freelancer 
 * 
 */

Class PortfolioController extends Controller {
    
    public function actionIndex() {
        
        $result = new stdClass();
        
        // выбор данных о портфолио
        $result->portfolio = YiiPortfolio::model()->findAll();   
        // выбор данных автора портфолио
        $array2 = array(2);
        $result->siteinformations = YiiSiteInformation::model()->findAllByPk($array2);
//        echo "<pre>";
//        print_r($result->siteinformations);
//        exit;
        $this->render('/portfolio/index', array('model'=>$result));
               
    }
    
    public function actionLogin() {
        $model = new LoginForm;
       // $this->render('login', array('model' => $model));
         $this->renderPartial('//portfolio/login',array('model'=>$model));
    }
    
        public function actionGetField() {
            
            $param = $_POST['param'];
            $array2 = array(2);
            $result = new stdClass();
//            $result->siteinformations = YiiSiteInformation::model()->findAllByAttributes(array(''));
           $result->siteinformations = YiiSiteInformation::model()->find(array( 'select'=>$param, 'params'=>array('id'=>2), ));
                    
            
           echo CJSON::encode(array(
                    'authenticated' => true,
                    'redirectUrl' => Yii::app()->user->returnUrl,
                    "result" => $result->siteinformations->$param,
                    "param" => $param
                ));
       
      
    }
    
  
    
}

// Поиск
//  
//      findByPk        ->findAllByPk(array(1,2));  
//      findAllByPk
//      find            ->find(array(1,2));  
// 
//    1.    $array = YiiPortfolio::model()->findByPk(1);  
//        echo $array->title;
        
        
        
        
// $model = new YiiPortfolio;
//                               
//                $model->title = "Война и мир";
//                $model->author = "Лев Толстой";
//                
//                $model->save(false);
//                
//                echo "ok";
//                
//                
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

