

<?php if(!empty($posts)): ?>
<?php foreach ($posts as $post): ?>
    <div class="panel-title">
        <h3><?= $post->title ?></h3>
    </div>
    <div class="panel-body">
        <p><?= $post->description ?> <?= $post->id ?>  <a href="<?= yii\helpers\Url::toRoute(['post/view', 'id'=>$post->id]) ?>">подробнее</a></p>
    </div>
<?php endforeach; ?>
<?php endif; ?>
<?= yii\widgets\LinkPager::widget(['pagination'=>$pages]) ?>


