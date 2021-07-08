<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PhukienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phukiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phukien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Phukien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
//            'image',
//            'pk_name',
            'quantity',
            'status',
            //'description:ntext',
            //'cost',
            //'slug',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
