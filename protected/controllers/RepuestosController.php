<?php

class RepuestosController extends Controller
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
			//'postOnly + delete', // we only allow deletion via POST request
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
		$model=Repuestos::model()->findByPk($id);
		$this->render("vista", array("model"=>$model));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Repuestos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Repuestos']))
		{
			$rnd = rand(0,9999);

			
			$model->attributes=$_POST['Repuestos'];

			$uploadedFile=CUploadedFile::getInstance($model,'foto');

			if (!empty($uploadedFile)) {
				$fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
			} else {
				$fileName = "default_repuestos.png";
			}

			$model->imagen = $fileName;
			if($model->save())
			{
			    
			    if (!empty($uploadedFile)) {
			    	$uploadedFile->saveAs(Yii::getPathOfAlias('webroot').'/image/'.$fileName);
			    } 

				$this->redirect(array('view','id'=>$model->id));

		    }
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['Repuestos']))
		{
			

			$rnd = rand(0,9999);

			
			$model->attributes=$_POST['Repuestos'];

			$uploadedFile=CUploadedFile::getInstance($model,'foto');

			if (!empty($uploadedFile)) {
				$fileName = "{$rnd}-{$uploadedFile}";  // random number + file name //se cargo una nueva imagen
			} else if ($model->imagen!="default_repuestos.png") {
				$fileName = $model->imagen; //no se cargo una nueva imagen y ya se habia asignado otra que no era la default
			} else {
				$fileName = "default_repuestos.png";
			}
			
            
            $model->imagen = $fileName;
			if($model->update())
			{

			    if (!empty($uploadedFile)) {
			    	$uploadedFile->saveAs(Yii::getPathOfAlias('webroot').'/image/'.$fileName);
			    } 
			    
				$this->redirect(array('view','id'=>$model->id));

		    }
		}

		$this->render('update',array(
			'model'=>$model,
		));
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
		// Setup Criteria
		$model = new Repuestos();
		
		$criteria = new CDbCriteria;

		$criteria->order = 'id';

		// Count total records

		$pages = new CPagination(Repuestos::model() -> count());

		// Set Page Limit

		$pages->pageSize=5;

		// Apply page criteria to CDbCriteria

		$pages->applyLimit($criteria);

		// Grab the records

		$repuestos=Repuestos::model()->findAll($criteria);

		$this->render("index",array("repuestos"=>$repuestos, "pages"=>$pages));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Repuestos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Repuestos']))
			$model->attributes=$_GET['Repuestos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Repuestos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Repuestos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Repuestos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='repuestos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
