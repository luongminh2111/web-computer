<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Hp */

$this->title = 'Update Hp: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Hps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->slug]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>