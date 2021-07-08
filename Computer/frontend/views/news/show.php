<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tin tức- laptop Lương Minh';
$this->params['breadcrumbs'][] = $this->title;
\frontend\assets\NewsIndexAsset::register($this);
?>
<div class="show">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'slug',
                'title',
                'author',
    //            'description:ntext',
    //            'image:ntext',
                //'create_by',
                //'content:ntext',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>


</div>
