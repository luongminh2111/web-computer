<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SurfaceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surface-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cpt_name') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'cpu') ?>

    <?= $form->field($model, 'ram') ?>

    <?= $form->field($model, 'hardware') ?>

    <?php // echo $form->field($model, 'screen') ?>

    <?php // echo $form->field($model, 'graphicscard') ?>

    <?php // echo $form->field($model, 'guarantee') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'image_show') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
