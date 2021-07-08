<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Phukien */

$this->title = 'Create Phukien';
$this->params['breadcrumbs'][] = ['label' => 'Phukiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phukien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
