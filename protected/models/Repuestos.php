<?php

/**
 * This is the model class for table "repuestos".
 *
 * The followings are the available columns in table 'repuestos':
 * @property integer $id
 * @property string $nombre
 * @property string $marca
 * @property string $descripcion
 * @property string $precio
 * @property string $imagen
 */
class Repuestos extends CActiveRecord
{
	public $foto;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'repuestos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, marca, descripcion, precio, imagen', 'required', 'message'=>'{attribute} no puede dejar en blanco.'),
			array('nombre, marca, descripcion, precio, imagen', 'length', 'max'=>250),
			array('imagen', 'length', 'max'=>200,'on'=>'insert,update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, marca, descripcion, precio', 'safe', 'on'=>'search'),
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
			'nombre' => 'Nombre',
			'marca' => 'Marca',
			'descripcion' => 'Descripcion',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('descripcion',$this->descripcion,true);
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
	 * @return Repuestos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
