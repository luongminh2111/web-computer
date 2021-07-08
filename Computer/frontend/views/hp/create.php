<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Hp */

$this->title = 'Create Hp';
$this->params['breadcrumbs'][] = ['label' => 'Hps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
