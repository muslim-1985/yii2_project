<?php if(!empty($post)): ?>
        <div class="panel-title">
            <h3><?= $post->title ?></h3>
        </div>
        <div class="panel-body">
            <p><?= $post->content ?></p>
        </div>
<?php endif; ?>