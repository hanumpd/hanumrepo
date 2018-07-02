<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<h2><?= $model->title;?></h2>
<p><?= ($model->lead_text !=NULL)? $model->lead_text: 'no lead text'; ?></p>
<p><a class="btn btn-default" href="<?= yii\helpers\Url::to(['/site/detail','id'=>$model->id]) ?>" target="_blank">Go Detail &raquo;</a></p>
<hr>