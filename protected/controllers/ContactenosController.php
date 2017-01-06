<?php
class ContactenosController extends Controller
{
	public function actionIndex()
	{
		$contactenos = Contactenos::model()->findAll();
		$this->render("index",array("contactenos"=>$contactenos));
	}

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionCreate()
	{
		$model=new Contactenos();
		
        
		if(isset($_POST["Contactenos"]))
		{
			$model->attributes=$_POST["Contactenos"];
			if($model->save())
			{
				
				$this->redirect(array("index"));
				
			}

		}
		
		$this->render("create", array("model"=>$model));
	}
}
