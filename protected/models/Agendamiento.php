<?php
class Agendamiento extends CActiveRecord
{
	public static function model($ClassName=__CLASS__)
	{
		parent::model($ClassName);
	}

	public function tableName()
	{
		return "agendamientos";
	}

	public function rules()
	{
		return array(

			array("cedula","matricula","mantenimiento","comentario","taller","fecha", "required");
		);
	}
}