<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Imgcats */

$this->title = 'Create Imgcats';
$this->params['breadcrumbs'][] = ['label' => 'Imgcats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imgcats-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
