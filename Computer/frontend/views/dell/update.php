<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Dell */

$this->title = 'Update Dell: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Dells', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->slug]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dell-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
