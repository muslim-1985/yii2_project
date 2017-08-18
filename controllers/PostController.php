<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.08.2017
 * Time: 14:30
 */

namespace app\controllers;
use app\models\Post;
use yii\data\Pagination;

class PostController extends AppController
{
    /**
     * @return string
     */
    public function actionIndex () {
        $query = Post::find()->select('id, title, description')->orderBy('id DESC');
        $pages = new Pagination (['totalCount' => $query->count(), 'pageSize' => 2]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('index', compact('posts','pages'));
    }

    public function actionView () {
       $id = \Yii::$app->request->get('id');
        $post = Post::findOne($id);
        return $this->render('view', compact('post'));
    }
}