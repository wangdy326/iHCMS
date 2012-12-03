<?php

/**
 * This is the model class for table "karyawan_sertifikasi".
 *
 * The followings are the available columns in table 'karyawan_sertifikasi':
 * @property integer $id
 * @property integer $karyawan_id
 * @property string $jenis
 * @property string $nomor
 * @property string $tgl_dikeluarkan
 * @property string $tgl_berakhir
 *
 * The followings are the available model relations:
 * @property Karyawan $karyawan
 */
class KaryawanSertifikasi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KaryawanSertifikasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'karyawan_sertifikasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('karyawan_id, jenis, nomor, tgl_dikeluarkan, tgl_berakhir', 'required'),
			array('karyawan_id', 'numerical', 'integerOnly'=>true),
			array('jenis', 'length', 'max'=>100),
			array('nomor', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, karyawan_id, jenis, nomor, tgl_dikeluarkan, tgl_berakhir', 'safe', 'on'=>'search'),
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
			'karyawan' => array(self::BELONGS_TO, 'Karyawan', 'karyawan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'karyawan_id' => 'Karyawan',
			'jenis' => 'Jenis',
			'nomor' => 'Nomor',
			'tgl_dikeluarkan' => 'Tgl Dikeluarkan',
			'tgl_berakhir' => 'Tgl Berakhir',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('karyawan_id',$this->karyawan_id);
		$criteria->compare('jenis',$this->jenis,true);
		$criteria->compare('nomor',$this->nomor,true);
		$criteria->compare('tgl_dikeluarkan',$this->tgl_dikeluarkan,true);
		$criteria->compare('tgl_berakhir',$this->tgl_berakhir,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}