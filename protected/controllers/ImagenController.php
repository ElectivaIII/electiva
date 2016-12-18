<?php

class ImagenController extends Controller
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
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	

	/*************************************************/
/*	public function actionCreate()
    {
        $model=new ImagenForm;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['ImagenForm']))
        {
            $rnd = rand(0,9999);  // Generamos un numero aleatorio entre 0-9999
            $model->attributes=$_POST['ImagenForm'];

            $subiendoImagen=CUploadedFile::getInstance($model,'imagen');
            $imgNombre = "{$rnd}-{$subiendoImagen}";  // numero aleatorio  + nombre de archivo
            $model->imagen = $imgNombre;


            if($model->save()){
                $subiendoImagen->saveAs(Yii::app()->basePath.'/../images/'.$imgNombre);
                $this->redirect(array('view','id'=>$model->id));
            }
        }
        $this->render('create',array(
            'model'=>$model,
        ));
    } 


    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        if(isset($_POST['ImagenForm']))
        {
            $rnd = rand(0,9999);  // Generamos un numero aleatorio entre 0-9999
            $_POST['ImagenForm']['imagen'] = $model->imagen;
            $model->attributes=$_POST['ImagenForm'];

            $subiendoImagen=CUploadedFile::getInstance($model,'imagen');
            $imgNombre = "{$rnd}-{$subiendoImagen}";  // numero aleatorio  + nombre de archivo
            $model->imagen = $imgNombre;

            if($model->save()){
                if(!empty($subiendoImagen)){
                    $subiendoImagen->saveAs(Yii::app()->basePath.'/../images/'.$imgNombre);
                }
                $this->redirect(array('view','id'=>$model->id));
            }
        }
        $this->render('update',array(
            'model'=>$model,
        ));
    } 


	public function actionDelete($id)
    {
        $model = $this->loadModel($id);
        unlink(Yii::app()->basePath.'/../images/'.$model->imagen);
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }*/



    /*************************************************/ 



	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionImagen()
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
    }
}
