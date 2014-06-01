<?php

/**
 * This is the model class for table "yii_site_information".
 *
 * The followings are the available columns in table 'yii_site_information':
 * @property integer $id
 * @property string $title
 * @property string $desc
 * @property string $author
 * @property string $about
 * @property string $text
 * @property string $img
 */
class YiiSiteInformation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'yii_site_information';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('title, email, phone, desc, author', 'length', 'max'=>255),
                        array('img', 'file', 'types'=>'jpg, gif, png'),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, email, phone, desc, author, about, text, img', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
                        'email' => 'Email',
                        'phone' => 'Phone',
			'desc' => 'Desc',
			'author' => 'Author',
			'about' => 'About',
			'text' => 'Text',
			'img' => 'Img',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
                $criteria->compare('email',$this->email,true);
                $criteria->compare('phone',$this->phone,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('img',$this->img,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return YiiSiteInformation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
