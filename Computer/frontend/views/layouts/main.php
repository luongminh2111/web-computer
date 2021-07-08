<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\IndexAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use frontend\assets\AppAsset;


AppAsset::register($this);
IndexAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="wrap">
    <?php
    $title = 'Hệ thống bán lẻ laptop uy tín 0359673610';
    NavBar::begin([
        'brandLabel' => $title,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-dark bg-primary',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Hỗ trợ', 'url' => ['/site/contact']],
        ['label' => 'Giỏ hàng', 'url' => ['/site/cart']],
        ['label' => 'news', 'url' => ['/news/show']],
        ['label' => 'Dell', 'url' => ['/dell/index']],

    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => [
                'class' => 'navbar-nav navbar-collapse collapse justify-content-end',

            ],
            'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <div class="wrap-header">
        <div class="row row-1" >
            <div class="col-md-3 logo " >
                <a href="/site/index" >
                    <i class="fas fa-power-off"></i>
                    luongminh.vn
                </a>
            </div>
            <a href="" ></a>
            <div class="col-md-6">
                <button type="submit" >
                    <input type="search" placeholder="Bạn tìm kiếm..." >
                    <i style="font-size: x-large;" class="fas fa-search"></i>
                </button>
            </div>
            <div class="col-md-2">
                <a href="/news/index">
                    <i style="font-size: 60px" class="far fa-newspaper"></i>
                    <p style="font-size: medium; margin-top: 10px">Tin tức<br>công nghệ</p>
                </a>
            </div>
        </div>
        <div class="row row-2">
            <div class="col-md-1 laptop" >
                <a href='/site/laptoptest' >
                    <i class="fas fa-laptop"></i>
                    LAPTOP
                </a>
            </div>
            <div class="col-md-1 dell">
                <?php echo Html::a('DELL',['/dell/index'])?>
            </div>
            <div class="col-md-1 thinkpad">
                <?php echo Html::a('THINKPAD',['/site/delltest'])?>
            </div>
            <div class="col-md-1 hp">
                <?php echo Html::a('HP',['/site/delltest'])?>
            </div>
            <div class="col-md-1 apple">
                <a href='/site/laptoptest' >
                    <i style="font-size: xx-large; margin-top: 15%; margin-right: 10%" class="fab fa-apple"></i>
                    APPLE
                </a>
            </div>
            <div class="col-md-1 sizemd">
                <a href='/site/laptoptest' >
                    <i style="font-size: x-large; margin-top: 20%; margin-right: 5%" class="fab fa-microsoft"></i>
                    SURFACE
                </a>
            </div>
            <div class="col-md-1 sizemd">
                <a href='/site/laptoptest' >
                    <i style="font-size: x-large; margin-top: 20%;" class="fas fa-gamepad"></i>
                    GAMING
                </a>
            </div>
            <div class="col-md-1 sizemd">
                <a href='/site/laptoptest' >
                    <i style="font-size: large; margin-top: 20%;" class="fas fa-headphones-alt"></i>
                    PHỤ KIỆN
                </a>
            </div>
            <div class="col-md-1 sizemd">
                <a href='/site/laptoptest' >
                    <i style="font-size: large; margin-top: 20%;" class="fas fa-tools"></i>
                    SỬA CHỮA
                </a>
            </div>
            <div class="col-md-2 sizemd">
                <a href='/site/laptoptest' >
                    <i style="font-size: xx-large; margin-top: 5%;margin-right: 5%" class="fas fa-gift"></i>
                    KHUYẾN MÃI
                </a>
            </div>
        </div>
    </div>
    <div class="row content" style="background-color: whitesmoke; margin-top: -1%">
        <div class="col-md-10" style="margin:0 auto;padding-top: 30px">
            <?= $content ?>
        </div>
    </div>
    <div class="foot" style="margin-top: 100px">
        <div class="row top">
                <div class="col-md-3" id="first">
                    <a href="">
                        <i class="far fa-question-circle"></i>
                        <h6>HỎI ĐÁP</h6>
                        <p>mua hàng online</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <i class="fab fa-amazon-pay"></i>
                        <h6>TRẢ GÓP</h6>
                        <p>thủ tục nhanh chóng</p>
                    </a>
                </div>
                <div class=" col-md-3">
                    <a href="">
                        <i class="fas fa-truck-moving"></i>
                        <h6>GIAO HÀNG</h6>
                        <p>vận chuyển toàn quốc</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <i class="fas fa-handshake"></i>
                        <h6>HỢP TÁC CUNG ỨNG</h6>
                        <p>cùng phát triển</p>
                    </a>
                </div>
        </div>
        <div class="row bottom">
            <div class="col-12 col-sm-3 col-lg-2" id="first">
                <p>CHÍNH SÁCH CHUNG</p>
                <div class="list-inf">
                    <a href="">Trả góp, lãi suất</a>
                    <a href="">Bảo trì và bảo hành</a>
                    <a href="">Tuyển dụng</a>
                    <a href="">Hỏi đáp mua hàng online</a>
                </div>

            </div>
            <div class="col-12 col-sm-3 col-lg-2 ">
                <p>HỖ TRỢ</p>
                <div class="list-inf">
                    <a href="">Giới thiệu công ty Lương Minh</a>
                    <a href="">Bảo mật thông tin</a>
                    <a href="">Hướng dẫn mua hàng</a>
                    <a href="">Hướng dẫn thanh toán</a>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-2 ">
                <p>THÔNG TIN LIÊN HỆ</p>
                <div class="list-inf">
                    <a href="">CS 1: 75 Giải phóng, bách khoa</a>
                    <a href="">Hotline: 0359.673.610</a>
                    <a href="">CS 2: 201 Đê Tô Hoàng</a>
                    <a href="">Hotline: 0985.589.907</a>
                    <a href="">Gọi khiếu nại, góp ý, hợp tác<br>094.2345.996</a>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-2">
                <p>CÁCH THỨC THANH TOÁN</p>
                <div class="list-inf" id="image">
                    <div class="bank">
                        <img src="https://cdn.iconscout.com/icon/free/png-512/visa-7-282549.png" alt="" >
                        <img src="http://usashopvietnam.vn/uploads/member/bank1/5_logo-mb.png" alt="">
                        <img src="https://i.pinimg.com/564x/0e/33/49/0e3349ab85ae5ebf604df3cb380f9c8f.jpg" alt="">
                        <img src="https://vietnambankers.vn/wp-content/uploads/2021/02/6.png" alt="">
                    </div>
                    <div class="bank">
                        <img src="https://seeklogo.com/images/A/agribank-logo-1CEEE70C76-seeklogo.com.png" alt="" >
                        <img src="https://infofinance.vn/wp-content/uploads/2020/10/han-muc-chuyen-khoan-techcombank.png" alt="">
                        <img src="https://i.pinimg.com/originals/b4/e0/d3/b4e0d385046f63dd081a2d3536055a60.png" alt="">
                        <img src="https://printgo.vn/uploads/file-logo/1/512x512.2af8df0d52f2d674fa21b2ac60f39274.ai.2.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
