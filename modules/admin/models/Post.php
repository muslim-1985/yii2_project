<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property integer $cat_id
 *
 * @property Categories $cat
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content'], 'required'],
            [['content'], 'string'],
            [['cat_id'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['cat_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'content' => 'Контент',
            'image' => 'Изображение',
            'cat_id' => 'Категория',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Categories::className(), ['id' => 'cat_id']);
    }

    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }

    public function getImage()
    {
        return ($this->image) ? 'img/' . $this->image : '/browser.png';
    }

    public function deleteImage()
    {
        $imageUploadModel = new ImagesUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }

}
