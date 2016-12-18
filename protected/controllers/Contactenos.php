<?php
class ContactenosController extends Controller
{
	public function actionIndex()
	{
		$contactenos = Contactenos::model()->findAll();
		$this->render("index",array("contactenos"=>$contactenos));
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
