<?php use yii\helpers\Url;
use yii\widgets\LinkPager;

if(!empty($posts)): ?>
    <?php foreach ($posts as $post):?>
        <div class="panel panel-default" style="margin-top: 80px;">
            <div class="panel-heading">
                <h3 class="panel-title"><a href="<?= Url::to(['post/view', 'id'=>$post->id]) ?>"><?= $post->title ?></a></h3>
            </div>
            <div class="panel-body">
                <?= $post->description ?>
            </div>
            <div class="panel-body">
                <img src="<?= $post->getImage(); ?>" alt="<?= $post->image ?>">
            </div>
            <div class="panel-body">
                <h2 style="color: black"><?=$post->cat->name?></h2>
            </div>
        </div>
    <?php endforeach; ?>
    <?= LinkPager::widget(['pagination'=>$pages]) ?>
<?php endif; ?>


<?php if(!empty($queryCats)): ?>
<?php foreach ($queryCats as $cats):?>
    <div class="panel panel-default" style="margin-top: 80px;">
        <div class="panel-heading">
            <h3 class="panel-title"><a href="#"><?= $cats->name ?></a></h3>
        </div>
    </div>
<?php endforeach; ?>
<?php endif; ?>

<?php if(!empty($oneCats)): ?>
    <h1><?= $oneCats->name ?></h1>
    <?php foreach ($oneCats->posts as $cats):?>
        <div class="panel panel-default" style="margin-top: 80px;">
            <div class="panel-heading">
                <h3 class="panel-title"><?= $cats->title ?></h3>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
