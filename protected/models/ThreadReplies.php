<?php

/**
 * This is the model class for table "thread_replies".
 *
 * The followings are the available columns in table 'thread_replies':
 * @property integer $reply_id
 * @property integer $thread_id
 * @property integer $parent_reply_id
 * @property string $reply_message
 * @property string $reply_sender
 * @property string $reply_is_active
 * @property string $reply_is_delete
 * @property string $reply_created
 *
 * The followings are the available model relations:
 * @property ThreadReplies $parentReply
 * @property ThreadReplies[] $threadReplies
 * @property ThreadMaster $thread
 * @property UserRating[] $userRatings
 */
class ThreadReplies extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'thread_replies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('thread_id, reply_message, reply_sender', 'required'),
			array('thread_id, parent_reply_id', 'numerical', 'integerOnly'=>true),
			array('reply_sender', 'length', 'max'=>255),
			array('reply_is_active, reply_is_delete', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('reply_id, thread_id, parent_reply_id, reply_message, reply_sender, reply_is_active, reply_is_delete, reply_created', 'safe', 'on'=>'search'),
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
			'parentReply' => array(self::BELONGS_TO, 'ThreadReplies', 'parent_reply_id'),
			'threadReplies' => array(self::HAS_MANY, 'ThreadReplies', 'parent_reply_id'),
			'thread' => array(self::BELONGS_TO, 'ThreadMaster', 'thread_id'),
			'userRatings' => array(self::HAS_MANY, 'UserRating', 'reply_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'reply_id' => 'Reply',
			'thread_id' => 'Thread',
			'parent_reply_id' => 'Parent Reply',
			'reply_message' => 'Your Reply Message',
			'reply_sender' => 'Your Name',
			'reply_is_active' => 'Reply Is Active',
			'reply_is_delete' => 'Reply Is Delete',
			'reply_created' => 'Reply Created',
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

		$criteria->compare('reply_id',$this->reply_id);
		$criteria->compare('thread_id',$this->thread_id);
		$criteria->compare('parent_reply_id',$this->parent_reply_id);
		$criteria->compare('reply_message',$this->reply_message,true);
		$criteria->compare('reply_sender',$this->reply_sender,true);
		$criteria->compare('reply_is_active',$this->reply_is_active,true);
		$criteria->compare('reply_is_delete',$this->reply_is_delete,true);
		$criteria->compare('reply_created',$this->reply_created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ThreadReplies the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
