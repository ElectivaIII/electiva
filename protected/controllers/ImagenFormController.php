<?php

class ImagenFormController extends Controller
{
	public function actionIndex()
	{
		$model = new ImagenForm();
        if(isset($_POST['ImagenForm']))
        {
            if(isset($_FILES) and $_FILES['ImagenForm']['error']['foto']==0)
             {
                $uf = CUploadedFile::getInstance($model, 'foto');
                if($uf->getExtensionName() == "jpg" || $uf->getExtensionName() == "png" ||
                    $uf->getExtensionName() == "jpeg" || $uf->getExtensionName()== "gif")
                {
                      $uf->saveAs(Yii::getPathOfAlias('webroot').'/image/'.$uf->getName());
                      
                      Yii::app()->user->setFlash('noerror_imagen',"Imagen: ".$uf->getName()." Subida Correctamente");
                      Yii::app()->user->setFlash('imagen','/image/'.$uf->getName());
                      $this->refresh();
                }else{
                    Yii::app()->user->setFlash('error_imagen','Imagen no valida');
                }
                
             }
        }
        $this->render('index',array('model'=>$model));
	}

	/*public function actionImagen()
    {
        $model = new ImagenForm();
        if(isset($_POST['ImagenForm']))
        {
            if(isset($_FILES) and $_FILES['ImagenForm']['error']['foto']==0)
             {
                $uf = CUploadedFile::getInstance($model, 'foto');
                if($uf->getExtensionName() == "jpg" || $uf->getExtensionName() == "png" ||
                    $uf->getExtensionName() == "jpeg" || $uf->getExtensionName()== "gif")
                {
                      $uf->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$uf->getName());
                    
                      Yii::app()->user->setFlash('noerror_imagen',"Imagen: ".$uf->getName()." Subida Correctamente");
                      Yii::app()->user->setFlash('imagen','/images/'.$uf->getName());
                      $this->refresh();
                }else{
                    Yii::app()->user->setFlash('error_imagen','Imagen no valida');
                }
                
             }
        }
        $this->render('index',array('model'=>$model));
    }*/

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}