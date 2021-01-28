<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $posted_by
 * @property string $created_at
 * @property string $updated_at
 *
 * @property NewUser $postedBy
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['posted_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'description'], 'string', 'max' => 255],
            [['posted_by'], 'exist', 'skipOnError' => true, 'targetClass' => NewUser::className(), 'targetAttribute' => ['posted_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'posted_by' => 'Posted By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[PostedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPostedBy()
    {
        return $this->hasOne(NewUser::className(), ['id' => 'posted_by']);
    }
}
