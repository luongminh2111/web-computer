<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Gaming */

$this->title = 'Create Gaming';
$this->params['breadcrumbs'][] = ['label' => 'Gamings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gaming-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
