<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property integer $cat_img_id
 *
 * @property CatImg $catImg
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'cat_img_id'], 'required'],
            [['cat_img_id'], 'integer'],
            [['title'], 'string', 'max' => 150],
            [['image'], 'string', 'max' => 50],
            [['cat_img_id'], 'exist', 'skipOnError' => true, 'targetClass' => CatImg::className(), 'targetAttribute' => ['cat_img_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'cat_img_id' => 'Cat Img ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatImg()
    {
        return $this->hasOne(CatImg::className(), ['id' => 'cat_img_id']);
    }
}
