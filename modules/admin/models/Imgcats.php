<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "imgcats".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Images[] $images
 */
class Imgcats extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imgcats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Images::className(), ['cat_img_id' => 'id']);
    }
}
