<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DellSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dells';
$this->params['breadcrumbs'][] = $this->title;
\frontend\assets\DellIndexAsset::register($this);
?>
<div class="dell-index">
    <div class="header">
            <div class="col-md-8 aside-left">
                <div id="slideshow" class="carousel slide" data-ride="carousel">
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://trungtran.vn/upload_images/2021/06/Ledion-5-21tr4fix-02.jpg" alt="Ledion">
                        </div>
                        <div class="carousel-item">
                            <img src="https://trungtran.vn/upload_images/2021/05/x1-nano-moi.png" alt="nano">
                        </div>
                        <div class="carousel-item">
                            <img src="https://trungtran.vn/upload_images/2019/03/7559.jpg" alt="computer">
                        </div>
                        <div class="carousel-item">
                            <img src="https://trungtran.vn/upload_images/2021/02/Untitled-1.jpg" alt="shopping">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#slideshow" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#slideshow" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <div class=" row title">
                    <p>Mua hàng online cực dễ dàng - luongminh.vn</p>
                </div>
            </div>

            <div class="col-md-4 admin-right ">
                <div class="title">
                    <h5>TIN DELL</h5>
                    <h6>Xem tất cả</h6>

                </div>
                <?php ?>
                <div class="new1">

                </div>
            </div>
    </div>
</div>
