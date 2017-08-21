<?php use yii\helpers\Url;
use yii\widgets\LinkPager;

if(!empty($posts)): ?>
    <?php foreach ($posts as $post):?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><a href="<?= Url::to(['post/view', 'id'=>$post->id]) ?>"><?= $post->title ?></a></h3>
            </div>
            <div class="panel-body">
                <?= $post->description ?>
            </div>
        </div>
    <?php endforeach; ?>
    <?= LinkPager::widget(['pagination'=>$pages]) ?>
<?php endif; ?>
