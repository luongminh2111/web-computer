<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cpt_name',
            'category',
            'cpu',
//            'ram',
//            'hardware',
            //'screen',
            //'graphicscard',
            //'guarantee',
            //'description:ntext',
            //'cost',
            //'title',
            //'image:ntext',
            //'slug',
            //'image_show',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
