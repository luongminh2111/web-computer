<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Thinkpad */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Thinkpads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="thinkpad-view">

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
            'title',
            'cpt_name',
            'category',
            'cpu',
            'ram',
            'hardware',
            'screen',
            'graphicscard',
            'image',
            'guarantee',
            'description:ntext',
            'slug',
            'cost',
            'image_show',
        ],
    ]) ?>

</div>
