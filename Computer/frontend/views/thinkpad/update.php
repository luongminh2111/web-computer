<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Thinkpad */

$this->title = 'Update Thinkpad: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Thinkpads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->slug]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thinkpad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
