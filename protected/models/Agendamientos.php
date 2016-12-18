<?php
class Agendamientos extends CActiveRecord
{
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);
	}

	public function tableName()
	{
		return "agendamientos";
	}

	public function rules()
	{
		return array(

			array("cedula, chapa, mantenimiento, comentario, taller, fecha", "required"),
		);
	}
	
}