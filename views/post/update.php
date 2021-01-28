<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = 'Update Post: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php if( Yii::$app->user->id == $model->postedBy->id || Yii::$app->user->id ==1111){?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
<?php } else { echo "You have no access to update other post";}?>

</div>
