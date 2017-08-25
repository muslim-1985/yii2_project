<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.08.2017
 * Time: 17:10
 */

namespace app\models;


use yii\db\ActiveRecord;

class Posts extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }
    public function getImage()
    {
        return ($this->image) ? \Yii::getAlias('@web') . '/img/' . $this->image : '/browser.png';
    }
    public function getCat()
    {
        return $this->hasOne(Cats::className(), ['id' => 'cat_id']);
    }
}