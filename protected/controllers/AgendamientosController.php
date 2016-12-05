<?php
class AgendamientosController extends Controller
{
	public function actionIndex()
	{
		$agendamientos = Agendamientos::model()->findAll();
		$this->render("index",array("agendamientos"=>$agendamientos));
	}


	public function actionCreate()
	{
		$model=new Agendamientos();
		
        
		if(isset($_POST["Agendamientos"]))
		{
			$model->attributes=$_POST["Agendamientos"];
			if($model->save())
			{
				$this->redirect(array("index"));
			}

		}
		
		$this->render("create", array("model"=>$model));
	}
}
