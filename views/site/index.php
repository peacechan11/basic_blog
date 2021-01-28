<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\components\SmallBody;
use yii\widgets\ListView;

$this->title = 'Peace Chan Blog';

?>


<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <? if(isset($posts)) {?>
            <?php
            echo ListView::widget([
                'dataProvider'=>$posts,
                'itemView'=>'_post'
            ])
            ?>
            <?}
            else{
                echo "No post avaliable right now! Let's create post by going post section";
            }?>


            <!--<div class="clearfix">
                <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
            </div>-->
        </div>
    </div>
</div>

<hr>