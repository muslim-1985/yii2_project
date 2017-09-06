<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.09.2017
 * Time: 17:41
 */

namespace app\models;


use yii\db\ActiveRecord;

class Tags extends ActiveRecord
{
    public static function tableName()
    {
        return 'tag';
    }
    public function getPostTags()
    {
        return $this->hasMany(PostTags::className(), ['tag_id' => 'id']);
    }
}