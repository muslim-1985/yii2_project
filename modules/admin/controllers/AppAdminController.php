<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.08.2017
 * Time: 11:31
 */

namespace app\modules\admin\controllers;


use yii\web\Controller;
use yii\filters\AccessControl;

class AppAdminController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
}