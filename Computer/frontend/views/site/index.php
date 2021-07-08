<?php

/* @var $this yii\web\View */

use common\models\Dell;
use common\models\Gaming;
use common\models\Hp;
use common\models\Phukien;
use common\models\Thinkpad;
use yii\helpers\Html;

$this->title = 'luongminh.vn - laptop uy tin';
?>
<div class="site-index" >
    <div class="header">
        <div class="row">
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
                <div class="row row-1">
                    <a href="">
                        <img src="https://trungtran.vn/upload_images/2021/05/HOTSALE.jpg" alt="">
                    </a>
                </div>

                <div class="row row-2">
                    <div class="row row1">
                        <div class="col-md-12">
                            <div class="col-md-6 aside-left "  >
                                TIN CÔNG NGHỆ
                            </div>
                            <div class="col-md-6 admin-right">
                                <?php echo Html::a('Xem tất cả...',['/site/index'])?>
                            </div>
                        </div>
                    </div>
                    <div class="row row2">
                        <div class="row new1" >
                            <div class="col-md-3 aside-left" >
                                <img src="https://trungtran.vn/upload_images/2021/06/1399_Panel03_Video_Introducing-1024x576.jpg" alt="">
                            </div>
                            <div class="col-md-9 admin-right " >
                                <a href="">Microsoft chính thức công bố Hệ điều hành thế hệ mới: Windows 11</a>
                                <p>
                                    25/06/2021
                                </p>
                            </div>
                        </div>
                        <div class="row new2">
                            <div class="col-md-3 aside-left">
                                <img src="https://trungtran.vn/upload_images/2021/05/banner-web-755x300-1.jpg" alt="">
                            </div>
                            <div class="col-md-9 admin-right">
                                <a href="">SUMMER SALE 2021 – Giảm Giá Nhanh, Hè Thanh Mát!!!</a>
                                <p>26/05/2021</p>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
    </div>
    </div>

    <div class="body">
        <div class="first-content">
            <div class="row row1" >
                <?php $item1 = Thinkpad::find()
                ->where(['title'=>'Lenovo Legion Y545 Core i7 GTX 1660Ti'])
                ->one(); ?>
                <div class="col-md-3 cpt1">
                    <?php if($item1) { ?>
                        <?php echo Html::img($item1->image);?>
                        <h6 style="text-align: center"><?php echo $item1->title ;?></h6>
                    <?php } ?>
                </div>

                <?php $item2 = Thinkpad::find()
                ->where(['title'=>'Lenovo Thinkpad X390'])
                ->one(); ?>
                <div class="col-md-3 cpt2">
                    <?php if ($item2) { ?>
                        <?= Html::img($item2->image) ;?>
                        <h6 style="text-align: center"><?= $item2->title ;?></h6>
                    <?php  } ?>
                </div>

                <?php $item3 = Hp::find()
                    ->where(['cpu'=>'10th Generation Intel® Core™ i5-1035G1 Processor (6MB Cache, up to 3.6 GHz)'])
                    ->one(); ?>
                <div class="col-md-3 cpt3">
                    <?php if ($item3) { ?>
                        <?= Html::img($item3->image) ;?>
                        <h6 style="text-align: center"><?= $item3->cpt_name ;?></h6>
                    <?php  } ?>
                </div>

                <?php $item4 = Gaming::find()
                    ->where(['cpu'=>'i5-10300H (bộ nhớ đệm 8M, lên đến 4,50 GHz)'])
                    ->one(); ?>
                <div class="col-md-3 cpt3">
                    <?php if ($item4) { ?>
                        <?= Html::img($item4->image) ;?>
                        <h6 style="text-align: center"><?= $item4->category ;?></h6>
                    <?php  } ?>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="row menu1">
                <div class="col-md-5 aside-left">
                    <?= Html::a('SUMMER SALE - GIẢM GIÁ NHANH, HÈ THANH MÁT',['/site/index'])?>
                </div>
                <div class="col-md-7 admin-right">
                    <ul>
                        <li class="nav-item">
                            <?= Html::a('Laptop văn phòng',['/site/index']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('Laptop đồ họa',['/site/index']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('Laptop lập trình',['/site/index']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('Laptop gaming',['/site/index']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('Xem tất cả...',['/site/index']) ?>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="list-computer" >
                <div class="list list-1">
                    <?php $prd1 = Gaming::find()
                        ->where(['cpu'=>'AMD Ryzen 5 4500U, xung nhịp 2.3GHz - 4.0GHz, 6 nhân 6 luồng'])
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item" >
                        <?php if($prd1) { ?>
                            <?= Html::img($prd1->image_show ) ?>
                            <h6><?= $prd1->title ;?></h6>
                            <p><?= $prd1->cost .'  VND' ; ?></p>
                        <?php }?>
                    </div>

                    <?php $prd2 = Thinkpad::find()
                        ->where(['cpu'=>'AMD Ryzen 7 4800H, 2.9-4.2Ghz, 8 lõi 16 luồng'])
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item item-center"  >
                        <?php if($prd2) { ?>
                            <?= Html::img($prd2->image_show ) ?>
                            <h6><?= $prd2->title ;?></h6>
                            <p><?= $prd2->cost .'  VND'; ?></p>
                        <?php }?>
                    </div>

                    <?php $prd3 = Dell::find()
                        ->where(['cpu'=>'11th Generation Intel® Core™ i5 Processors (Tần số Turbo Boost 4.20GHz), 8MB Cache'])
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item" >
                        <?php if($prd3) { ?>
                            <?= Html::img($prd3->image_show ) ?>
                            <h6><?= $prd3->title ;?></h6>
                            <p><?= $prd3->cost .'   VND' ; ?></p>
                        <?php }?>
                    </div>
                </div>

                <div class="list list-2" >
                    <?php $prd1 = Dell::find()
                        ->where(['cpu'=>'Intel® Core™ i5 8350U Processor 8 Luồng Cực Mạnh 8M Cache, 4.00 GHz'] and
                        ['category'=>'Dell Latitude'])
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item" >
                        <?php if($prd1) { ?>
                            <?= Html::img($prd1->image_show ) ?>
                            <h6><?= $prd1->title ;?></h6>
                            <p><?= $prd1->cost .'  VND'; ?></p>
                        <?php }?>
                    </div>

                    <?php $prd2 = Hp::find()
                        ->where(['cpu'=>'10th Generation Intel® Core™ i5-1035G1 Processor (6MB Cache, up to 3.6 GHz)']
                            and [''] )
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item item-center" >
                        <?php if($prd2) { ?>
                            <?= Html::img($prd2->image_show ) ?>
                            <h6><?= $prd2->title ;?></h6>
                            <p><?= $prd2->cost.'  VND' ; ?></p>
                        <?php }?>
                    </div>

                    <?php $prd1 = Gaming::find()
                        ->where(['cpu'=>'i5-10300H (bộ nhớ đệm 8M, lên đến 4,50 GHz)'])
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item" >
                        <?php if($prd1) { ?>
                            <?= Html::img($prd1->image_show ) ?>
                            <h6><?= $prd1->title ;?></h6>
                            <p><?= $prd1->cost .'  VND'; ?></p>
                        <?php }?>
                    </div>
                </div>

                <div class="list list-3" >
                    <?php $prd1 = Thinkpad::find()
                        ->where(['cpu'=>'Intel Core i7 9750H 12*2.2GHz Up To 4.1GHz'])
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item" >
                        <?php if($prd1) { ?>
                            <?= Html::img($prd1->image_show ) ?>
                            <h6><?= $prd1->title ;?></h6>
                            <p><?= $prd1->cost .'  VND'; ?></p>
                        <?php }?>
                    </div>

                    <?php $prd1 = Thinkpad::find()
                        ->where(['cpu'=>'8th Gen Intel® Core™ i7 8750H Processor 2.20 GHz (upto 4.10GHz, 9MB Cache)'])
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item item-center" >
                        <?php if($prd1) { ?>
                            <?= Html::img($prd1->image_show ) ?>
                            <h6><?= $prd1->title ;?></h6>
                            <p><?= $prd1->cost.'  VND' ; ?></p>
                        <?php }?>
                    </div>

                    <?php $prd1 = Dell::find()
                        ->where(['cpu'=>'Intel® Core™ i7-6820HQ Processor 8MB Cache, up to 3.60 GHz, Intel® Core™ i7-7820HQ Processor 8MB Cache, up to 3.90 GHz'])
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item" >
                        <?php if($prd1) { ?>
                            <?= Html::img($prd1->image_show ) ?>
                            <h6><?= $prd1->title ;?></h6>
                            <p><?= $prd1->cost.'  VND' ; ?></p>
                        <?php }?>
                    </div>
                </div>

                <div class="list list-4" >
                    <?php $prd1 = Hp::find()
                        ->where(['cpu'=>'Intel® Core™ i7-6820HQ (2.70 GHz, 2133 MHz, 8 MB L3 Cache, 4 cores, 45W) Up to 3.60 GHz with Intel Turbo Boost Technology'])
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item" >
                        <?php if($prd1) { ?>
                            <?= Html::img($prd1->image_show ) ?>
                            <h6><?= $prd1->title ;?></h6>
                            <p><?= $prd1->cost .'  VND'; ?></p>
                        <?php }?>
                    </div>

                    <?php $prd1 = Dell::find()
                        ->where(['cpu'=>'Intel® Core™ i7-6820HQ Processor (8M Cache, up to 3.60 GHz)'])
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item item-center" >
                        <?php if($prd1) { ?>
                            <?= Html::img($prd1->image_show ) ?>
                            <h6><?= $prd1->title ;?></h6>
                            <p><?= $prd1->cost.'  VND' ; ?></p>
                        <?php }?>
                    </div>

                    <?php $prd1 = Thinkpad::find()
                        ->where(['cpu'=>'Intel® Core™ i7-6820HQ Processor (8M Cache, up to 3.60 GHz)'])
                        ->one(); ?>
                    <div class="col-12 col-sm-6 col-lg-4 list-item" >
                        <?php if($prd1) { ?>
                            <?= Html::img($prd1->image_show ) ?>
                            <h6><?= $prd1->title ;?></h6>
                            <p><?= $prd1->cost.'  VND' ; ?></p>
                        <?php }?>
                    </div>
                </div>

            </div>
        </div>

        <div class=" category">
            <div class="lap lap-graphics">
                <div class="row menu2" >
                    <div class="col-md-5 aside-left">
                        <p>LAPTOP ĐỒ HỌA</p>
                    </div>
                    <div class="col-md-7 admin-right">
                        <ul>
                            <li class="nav-item">
                                <?= Html::a('Dưới 10 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('10-15 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('15-25 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('trên 25 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('Xem tất cả...',['/site/index']) ?>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="prod prod-grap">
                    <div class="row">
                        <?php $grap1 = Dell::find()
                        ->where(['cpu'=>'Intel® Core™ i7-6820HQ Processor 8MB Cache, up to 3.60 GHz, Intel® Core™ i7-7820HQ Processor 8MB Cache, up to 3.90 GHz'])
                            ->one();?>
                        <div class="col-sm-3">
                            <?php if($grap1) { ?>
                                <?php echo Html::img($grap1->image) ;?>
                                <h6><?php echo $grap1->title;?></h6>
                                <p><?php echo $grap1->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap2 = Thinkpad::find()
                            ->where(['cpu'=>'8th Gen Intel® Core™ i7 8750H Processor 2.20 GHz (upto 4.10GHz, 9MB Cache)'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap2) { ?>
                                <?php echo Html::img($grap2->image) ;?>
                                <h6><?php echo $grap2->title;?></h6>
                                <p><?php echo $grap2->cost .'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap3 = Hp::find()
                            ->where(['cpu'=>'Intel® Xeon® E-2176M (bộ nhớ đệm 12M, tối đa 4,40 GHz)'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap3) { ?>
                                <?php echo Html::img($grap3->image_show,['style'=>['width'=>'90%']]) ;?>
                                <h6><?php echo $grap3->title;?></h6>
                                <p><?php echo $grap3->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap4 = Hp::find()
                            ->where(['cpu'=>'Intel Core Xeon E3-1505M v5 Quad Core Xeon 2.80GHz, 3.70GHz Turbo, 8MB 45W'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap4) { ?>
                                <?php echo Html::img($grap4->image_show) ;?>
                                <h6><?php echo $grap4->title;?></h6>
                                <p><?php echo $grap4->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class=" lap lap-programing">
                <div class="row menu2" >
                    <div class="col-md-5 aside-left">
                        <p>LAPTOP LẬP TRÌNH</p>
                    </div>
                    <div class="col-md-7 admin-right">
                        <ul>
                            <li class="nav-item">
                                <?= Html::a('Dưới 10 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('10-15 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('15-25 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('trên 25 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('Xem tất cả...',['/site/index']) ?>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="prod prod-prog">
                    <div class="row">
                        <?php $grap1 = Gaming::find()
                            ->where(['slug'=>'asus-zenbook-15-q507iq-flip-#2'])
                            ->one();?>
                        <div class="col-sm-3">
                            <?php if($grap1) { ?>
                                <?php echo Html::img($grap1->image) ;?>
                                <h6><?php echo $grap1->title;?></h6>
                                <p><?php echo $grap1->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap2 = Dell::find()
                            ->where(['cpu'=>'intel core i7 thế hệ 10'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap2) { ?>
                                <?php echo Html::img($grap2->image) ;?>
                                <h6><?php echo $grap2->title;?></h6>
                                <p><?php echo $grap2->cost .'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap3 = Thinkpad::find()
                            ->where(['cpu'=>'Intel® Core™ i5-8250U Processor 6M Cache, up to 3.40 GHz'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap3) { ?>
                                <?php echo Html::img($grap3->image_show,['style'=>['width'=>'90%']]) ;?>
                                <h6><?php echo $grap3->title;?></h6>
                                <p><?php echo $grap3->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap4 = Thinkpad::find()
                            ->where(['cpu'=>'Intel Core i5-6300U tốc độ 2.4GHz (Max 3.0GHz)'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap4) { ?>
                                <?php echo Html::img($grap4->image_show) ;?>
                                <h6><?php echo $grap4->title;?></h6>
                                <p><?php echo $grap4->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class=" lap lap-gaming">
                <div class="row menu2" >
                    <div class="col-md-5 aside-left">
                        <p>LAPTOP GAMING</p>
                    </div>
                    <div class="col-md-7 admin-right">
                        <ul>
                            <li class="nav-item">
                                <?= Html::a('Dưới 10 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('10-15 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('15-25 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('trên 25 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('Xem tất cả...',['/site/index']) ?>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class=" prod prod-game">
                    <div class="row">
                        <?php $grap1 = Thinkpad::find()
                            ->where(['cpu'=>'Intel core i7-10750H'])
                            ->one();?>
                        <div class="col-sm-3">
                            <?php if($grap1) { ?>
                                <?php echo Html::img($grap1->image) ;?>
                                <h6><?php echo $grap1->title;?></h6>
                                <p><?php echo $grap1->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap2 = Thinkpad::find()
                            ->where(['cpu'=>'Intel Core i5-10300H'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap2) { ?>
                                <?php echo Html::img($grap2->image) ;?>
                                <h6><?php echo $grap2->title;?></h6>
                                <p><?php echo $grap2->cost .'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap3 = Thinkpad::find()
                            ->where(['cpu'=>'Intel Core i5-10300H'] and ['category'=>'Lenovo Legion 5 Intel core i5-10300H'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap3) { ?>
                                <?php echo Html::img($grap3->image_show) ;?>
                                <h6><?php echo $grap3->title;?></h6>
                                <p><?php echo $grap3->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap4 = Thinkpad::find()
                            ->where(['cpt_name'=>'Lenovo Legion #1'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap4) { ?>
                                <?php echo Html::img($grap4->image) ;?>
                                <h6><?php echo $grap4->title;?></h6>
                                <p><?php echo $grap4->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class=" lap lap-office">
                <div class="row menu2" >
                    <div class="col-md-5 aside-left">
                        <p>LAPTOP VĂN PHÒNG</p>
                    </div>
                    <div class="col-md-7 admin-right">
                        <ul>
                            <li class="nav-item">
                                <?= Html::a('Dưới 10 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('10-15 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('15-25 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('trên 25 triệu',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('Xem tất cả...',['/site/index']) ?>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class=" prod prod-office">
                    <div class="row">
                        <?php $grap1 = Gaming::find()
                            ->where(['slug'=>'asus-zenbook-15-q507iq-flip-#2'])
                                ->one();?>
                        <div class="col-sm-3">
                            <?php if($grap1) { ?>
                                <?php echo Html::img($grap1->image) ;?>
                                <h6><?php echo $grap1->title;?></h6>
                                <p><?php echo $grap1->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap2 = Gaming::find()
                            ->where(['cpu'=>'Ryzen 7 4700U (8 nhân, 8 luồng, xung cơ bản 2.0GHz, xung tối đa có thể đạt 4.1GHz, 8MB Cache)'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap2) { ?>
                                <?php echo Html::img($grap2->image) ;?>
                                <h6><?php echo $grap2->title;?></h6>
                                <p><?php echo $grap2->cost .'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap3 = Thinkpad::find()
                            ->where(['cpu'=>'i7-10510U (bộ nhớ đệm cache 8M, lên đến 4,90 GHz)'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap3) { ?>
                                <?php echo Html::img($grap3->image_show) ;?>
                                <h6><?php echo $grap3->title;?></h6>
                                <p><?php echo $grap3->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>

                        <?php $grap4 = Thinkpad::find()
                            ->where(['cpt_name'=>'Lenovo Thinkpad X270'])
                            ->one();?>
                        <div class="col-sm-3 " >
                            <?php if($grap4) { ?>
                                <?php echo Html::img($grap4->image) ;?>
                                <h6><?php echo $grap4->title;?></h6>
                                <p><?php echo $grap4->cost.'   VND'; ?></p>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class="lap accessories">
                <div class="row menu2" >
                    <div class="col-md-5 aside-left">
                        <p>PHỤ KIỆN</p>
                    </div>
                    <div class="col-md-7 admin-right">
                        <ul>
                            <li class="nav-item">
                                <?= Html::a('Pin',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('Bàn phím',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('Chuột',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('Màn hình laptop',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('Sạc laptop',['/site/index']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('Xem tất cả...',['/site/index']) ?>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class=" prod prod-acces">
                    <div class="row">
                        <?php $acces1 = Phukien::find()
                            ->where(['title'=>'Ổ cứng SSD M2-PCIe 128GB Liteon T12 Evo 2230 NVMe'])
                            ->one();?>
                        <?php $text = $acces1->status; ?>
                        <div class="col-sm-2">
                            <?php if($acces1) { ?>
                                <?php echo Html::img($acces1->image) ;?>
                                <h6><?php echo $acces1->title;?></h6>
                                <?php echo Html::a($text,['/site/index']) ?>
                            <?php } ?>
                        </div>

                        <?php $acces1 = Phukien::find()
                            ->where(['title'=>'Ổ cứng SSD M2-PCIe 256GB Liteon T12 Evo 2230 NVMe'])
                            ->one();?>
                        <div class="col-sm-2">
                            <?php if($acces1) { ?>
                                <?php echo Html::img($acces1->image) ;?>
                                <h6><?php echo $acces1->title;?></h6>
                                <?php echo Html::a($text,['/site/index']) ?>
                            <?php } ?>
                        </div>
                        <?php $acces1 = Phukien::find()
                            ->where(['title'=>'Ổ cứng SSD M2-PCIe 512GB Liteon T12 Evo 2230 NVMe'])
                            ->one();?>
                        <div class="col-sm-2">
                            <?php if($acces1) { ?>
                                <?php echo Html::img($acces1->image) ;?>
                                <h6><?php echo $acces1->title;?></h6>
                                <?php echo Html::a($text,['/site/index']) ?>
                            <?php } ?>
                        </div>
                        <?php $acces1 = Phukien::find()
                            ->where(['title'=>'Ổ cứng SSD M2-PCIe 256GB Lexar NM520 2242 NVMe'])
                            ->one();?>
                        <div class="col-sm-2">
                            <?php if($acces1) { ?>
                                <?php echo Html::img($acces1->image) ;?>
                                <h6><?php echo $acces1->title;?></h6>
                                <?php echo Html::a($text,['/site/index']) ?>
                            <?php } ?>
                        </div>
                        <?php $acces1 = Phukien::find()
                            ->where(['title'=>'Ổ cứng SSD M2-PCIe 512GB Lexar NM520 2242 NVMe'])
                            ->one();?>
                        <div class="col-sm-2">
                            <?php if($acces1) { ?>
                                <?php echo Html::img($acces1->image) ;?>
                                <h6><?php echo $acces1->title;?></h6>
                                <?php echo Html::a($text,['/site/index']) ?>
                            <?php } ?>
                        </div>
                        <?php $acces1 = Phukien::find()
                            ->where(['title'=>'Ổ cứng SSD M2-PCIe 256GB Samsung PM971 NVMe 2230'])
                            ->one();?>
                        <div class="col-sm-2">
                            <?php if($acces1) { ?>
                                <?php echo Html::img($acces1->image) ;?>
                                <h6><?php echo $acces1->title;?></h6>
                                <?php echo Html::a($text,['/site/index']) ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer" style="height: 430px">
        <div class="row">
            <div id="mycarousel1" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1" class=""></li>
                    <li data-target="#mycarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://i.ytimg.com/vi/vN6rHaUfows/maxresdefault.jpg">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://zicxa.com/vi//uploaded/files/hinh-nen-4k-cong-nghe-1.jpeg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://i.ytimg.com/vi/vN6rHaUfows/maxresdefault.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://macad.vn/upload/imac5k_feat.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://mac365.vn/wp-content/uploads/2020/02/best_apple_imac_deals_thumb1200_4-3.jpg">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#mycarousel1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                    </span> <span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" href="#mycarousel1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span> </a>
            </div>
        </div>
    </div>
</div>
