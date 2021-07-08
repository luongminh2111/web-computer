<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Surface */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Surfaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surface-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->slug], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->slug], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cpt_name',
            'category',
            'cpu',
            'ram',
            'hardware',
            'screen',
            'graphicscard',
            'guarantee',
            'description:ntext',
            'cost',
            'image:ntext',
            'title',
            'slug',
            'image_show',
        ],
    ]) ?>

</div>
