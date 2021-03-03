<?php

use yii\helpers\Url;
use yii\helpers\Html;
use components\SmallBody;


?>


<div class="post-preview">
    <a href="<?=Url::toRoute(['/post/view','id'=>$model->id])?>">
        <h2 class="post-title">
            <?=Html::encode($model->title) ?>
        </h2>
    </a>
        <h3 class="post-subtitle">
            <?=Html::encode($model->description)?>
        </h3>
    </a>
    <p class="post-meta">Posted by
        <strong><?=Html::encode($model->postedBy->username)?></strong>
        on <?=Html::encode($model->created_at)?></p>
</div>
<hr>
