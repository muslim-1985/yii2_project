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
}