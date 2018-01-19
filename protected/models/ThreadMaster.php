<?php

/**
 * This is the model class for table "thread_master".
 *
 * The followings are the available columns in table 'thread_master':
 * @property integer $thread_id
 * @property string $thread_title
 * @property string $thread_description
 * @property string $thread_is_active
 * @property string $thread_is_delete
 * @property string $thread_is_closed
 * @property string $thread_created
 * @property string $thread_updated
 *
 * The followings are the available model relations:
 * @property ThreadReplies[] $threadReplies
 */
class ThreadMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
         public $reply_count = 0;
	public function tableName()
	{
		return 'thread_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('thread_title, thread_description', 'required'),
			array('thread_title', 'length', 'max'=>255),
			array('thread_is_active, thread_is_delete, thread_is_closed', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('thread_id, thread_title, thread_description, thread_is_active, thread_is_delete, thread_is_closed, thread_created, thread_updated', 'safe', 'on'=>'search'),
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
			'threadReplies' => array(self::HAS_MANY, 'ThreadReplies', 'thread_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'thread_id' => 'Thread',
			'thread_title' => 'Thread Title',
			'thread_description' => 'Thread Description',
			'thread_is_active' => 'Thread Is Active',
			'thread_is_delete' => 'Thread Is Delete',
			'thread_is_closed' => 'Thread Is Closed',
			'thread_created' => 'Thread Created',
			'thread_updated' => 'Thread Updated',
                        'rep_count' => 'Total Replies',
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

		$criteria->compare('thread_id',$this->thread_id);
		$criteria->compare('thread_title',$this->thread_title,true);
		$criteria->compare('thread_description',$this->thread_description,true);
		$criteria->compare('thread_is_active',$this->thread_is_active,true);
		$criteria->compare('thread_is_delete',$this->thread_is_delete,true);
		$criteria->compare('thread_is_closed',$this->thread_is_closed,true);
		$criteria->compare('thread_created',$this->thread_created,true);
		$criteria->compare('thread_updated',$this->thread_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ThreadMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
