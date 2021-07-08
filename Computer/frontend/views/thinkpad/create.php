<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Thinkpad */

$this->title = 'Create Thinkpad';
$this->params['breadcrumbs'][] = ['label' => 'Thinkpads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thinkpad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
