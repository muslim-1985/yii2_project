<?php

use app\modules\admin\models\Categories;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'imageUpload' => Url::to(['/admin/default/image-upload']),
            'imageManagerJson' => Url::to(['/admin/default/images-get']),
            'plugins' => [
                'clips',
                'fullscreen',
                'imagemanager',
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'cat_id')->dropDownList(ArrayHelper::map(Categories::find()->all(),'id', 'name'), ['prompt'=>'Select']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
