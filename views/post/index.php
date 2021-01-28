<?php

use app\models\Post;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
/* @var $model1 app\models\Post */
?>

<div class="container">
<h2>Lists of articles</h2>
    <a href="<?=Url::to(['create'])?>" class="btn btn-success ">Create Post</a>
    <?php
    //$model1= Post::find()->where(['posted_by' => Yii::$app->user->id])->one();
   // if(isset($model1) && $model1->postedBy->isAdmin==1)
    if(Yii::$app->user->id ==1111)
    {?>
    <a href="<?=Url::to(['userpost'])?>" class="btn btn-success ">View Users' Posts</a>
    <?php } ?>
<br>
    <?php
    echo GridView::widget([
        'dataProvider'=>$model,
        'columns'=>[
            ['class'=>'yii\grid\SerialColumn'],
            //'poster.name',
            'title',
            [
                'attribute'=>'created_at',
                'format'=>['date','Y-m-d']
            ],
            ['class'=>'yii\grid\ActionColumn']
        ]
    ])

    ?>




</div>