<?php 
class Contactenos extends CActiveRecord
{
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);
	}

	public function tableName()
	{
		return "contactenos";
	}

	public function rules()
	{
		return array(
			array("cedula, nombres, apellidos, telefono, comentario", "required"),
			array('email', 'email'),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}
}