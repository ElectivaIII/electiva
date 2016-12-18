<?php

/**
 * This is the model class for table "autos".
 *
 * The followings are the available columns in table 'autos':
 * @property integer $id
 * @property string $matricula
 * @property string $marca
 * @property string $anho
 * @property string $kilometraje
 * @property string $precio
 * @property string $imagen
 */
class Autos extends CActiveRecord
{
	public $foto;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'autos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('matricula, marca, anho, kilometraje, precio, imagen', 'required'),
			array('matricula, marca, modelo, anho, kilometraje, precio', 'length', 'max'=>60),
			array('imagen', 'length', 'max'=>200,'on'=>'insert,update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, matricula, marca, anho, kilometraje, precio', 'safe', 'on'=>'search'),
			array('foto','file','types'=>'jpg, jpeg, png, gif','allowEmpty'=>true,'on'=>'update'),

		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'matricula' => 'Matricula',
			'marca' => 'Marca',
			'modelo' => 'Modelo',
			'anho' => 'Anho',
			'kilometraje' => 'Kilometraje',
			'precio' => 'Precio',
			'imagen' => 'Imagen',
			'foto' => 'Foto',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		//$criteria->compare('id',$this->id);
		$criteria->compare('matricula',$this->matricula,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('anho',$this->anho,true);
		$criteria->compare('kilometraje',$this->kilometraje,true);
		$criteria->compare('precio',$this->precio,true);
		//$criteria->compare('imagen',$this->imagen,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Autos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
