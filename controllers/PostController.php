<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.08.2017
 * Time: 14:30
 */

namespace app\controllers;
use app\models\Cats;
use app\models\Posts;
use yii\data\Pagination;


class PostController extends AppController
{
    /**
     * @return string
     */
    public function actionIndex () {
        $query = Posts::find()->select('id, title, description, image, cat_id')->orderBy('id DESC');
        $queryCats = Cats::find()->all();
        $oneCats = Cats::find()->with('posts')->where(['slug'=>'sqltable'])->one();
        $pages = new Pagination (['totalCount' => $query->count(), 'pageSize' => 2]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('index', compact('posts','pages', 'post','queryCats','oneCats'));
    }

    public function actionView () {
       $id = \Yii::$app->request->get('id');
        $post = Posts::findOne($id);
        return $this->render('view', compact('post'));
    }
}