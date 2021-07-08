<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Phukien */

$this->title = 'Update Phukien: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Phukiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->slug]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phukien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
