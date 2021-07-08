<?php

use frontend\assets\NewsIndexAsset;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
NewsIndexAsset::register($this);
?>
<div class="news-index">

    <div class="header">
        <div class="header header-top">
            <a href="/site/index">Trang chủ</a>
            <p>>> Tin mới nhất </p>
        </div>
        <div class="header header-bottom">
            <div class="menu">
                <ul>
                    <li><a href="">Tin mới nhất</a></li>
                    <li><a href="">Tin khuyến mãi</a></li>
                    <li><a href="">Đánh giá sản phẩm</a></li>
                    <li><a href="">Hướng dẫn kĩ thuật</a></li>
                    <li><a href="">Hướng dẫn mua hàng</a></li>
                    <li><a href="">Tin luongminh.vn</a></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="main-content">
        <div class= "hot-news">
            <div class="dsl-new-1" >
                <div class="col-md-6 left">
                    <a href="" title="Microsoft chính thức công bố Hệ điều hành thế hệ mới: Windows 11">
                        <img src="https://trungtran.vn/upload_images/2021/06/1399_Panel03_Video_Introducing.jpg" alt="">
                        <span class="top-left">
                            <p>TIN MỚI NHẤT</p>
                        </span>
                        <div class="bottom-left">
                            <h6>Microsoft chính thức công bố Hệ điều hành thế hệ mới:<br> Windows 11</h6>
                            <h7>
                                Luongminh.vn    Thứ Ba, 06/07/2021
                            </h7>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 right">
                    <a href="" title="SUMMER SALE 2021 – Giảm Giá Nhanh, Hè Thanh Mát!!!">
                        <img src="https://trungtran.vn/upload_images/2021/05/banner-web-755x300-1.jpg" alt="">
                        <span class="top-left">
                            <p>TIN MỚI NHẤT</p>
                        </span>
                        <div class="bottom-left">
                            <h6>SUMMER SALE 2021 – Giảm Giá Nhanh, Hè Thanh Mát!!!</h6>
                            <h7>
                                Luongminh.vn    Thứ Ba, 06/07/2021
                            </h7>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" row dsl-new-2">
                <div class="col-sm-4 dsl-new" >
                    <a href="" title="CHƯƠNG TRÌNH ƯU ĐÃI “KHÁCH HÀNG THÂN THIẾT">
                        <img src="https://trungtran.vn/upload_images/2020/12/128282973_408426463542851_2225728325124079966_n-1.jpg" alt="">
                        <span class="top-left">
                            <p>TIN KHUYẾN MÃI</p>
                        </span>
                        <div class="bottom-left">
                            <h6>CHƯƠNG TRÌNH ƯU ĐÃI “KHÁCH HÀNG THÂN THIẾT</h6>
                            <h7>
                                Luongminh.vn    Thứ Ba, 06/07/2021
                            </h7>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 dsl-new" >
                    <a href="" title="Lộ diện chi tiết mới về bản làm mới MacBook Pro 2021 của Apple">
                        <img src="https://lh4.googleusercontent.com/TyG88k0XUC165zFrlChSTs_okfKH-wTWbx6M592jGVkWZjClOa8f0yqWvcvchWtD8gbkt92_90P5dqAZ8VrG6SxnnZfsOQudMB8zPN_sVWhJumyE58psljXdJhs4LUrV1gJIFj_v" alt="">
                        <span class="top-left">
                            <p>TIN MỚI NHẤT</p>
                        </span>
                        <div class="bottom-left">
                            <h6>Lộ diện chi tiết mới về bản làm mới MacBook Pro 2021 của Apple</h6>
                            <h7>
                                Luongminh.vn    Thứ Ba, 06/07/2021
                            </h7>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4  dsl-new" >
                    <a href="" title="SALE TƯNG BỪNG, MỪNG ĐẠI LỄ!!!">
                        <img src="https://trungtran.vn/upload_images/2021/04/test-2.jpg" alt="">
                        <span class="top-left">
                            <p>TIN KHUYẾN MÃI</p>
                        </span>
                        <div class="bottom-left">
                            <h6>SALE TƯNG BỪNG, MỪNG ĐẠI LỄ!!!</h6>
                            <h7>
                                Luongminh.vn    Thứ Ba, 06/07/2021
                            </h7>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row list-news">
            <div class="col-md-9 aside-left">
                <?php $item = \common\models\News::find() ->all() ?>
                <?php for($i = 0 ; $i < 5 ; $i++) { ?>
                    <?php if ($item[$i]) {?>
                        <div class="new" id="item">
                            <div class="col-md-4 aside-left">
                                <?php  echo Html::img($item[$i]->image,['width'=>'100%','height'=>'100%']) ;?>
                            </div>
                            <div class="col-md-8 admin-right">
                                <?php echo Html::a($item[$i]->title,['/news/views', 'id'=>$item[$i]->slug]);?>
                                <p><?php echo $item[$i]->description?> </p>
                                <h6><?php echo substr($item[$i]->create_by,0,10) ;?></h6>
                            </div>
                        </div>

                    <?php }?>
                <?php }?>

                <div class="extend">
                    <a href="">
                        Xem thêm
                        <i class="fas fa-caret-down"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3 admin-right">
                <div class="search-new ">
                    <button>
                        <input type="search" placeholder="Bạn cần tìm bài viết..." >
                        <i class="fas fa-search" ></i>
                    </button>
                </div>

                <div class="show-new">
                    <div class="title">
                        <p>TIN XEM NHIỀU</p>
                    </div>
                    <!--                    sủa đoạn này sau, tạm thời show bừa-->
                    <?php $show = \common\models\News::find() ->all() ?>
                    <?php for($i = 0 ; $i < 5 ; $i++) { ?>
                        <?php if ($show[$i]) {?>
                            <div class="show-one">
                                <div class="col-md-4 aside-left ">
                                    <?php  echo Html::img($show[$i]->image,['width'=>'100%','height'=>'100%']) ;?>
                                </div>
                                <div class="col-md-8 admin-right ">
                                    <?php echo Html::a($show[$i]->title,['/news/views', 'id'=>$show[$i]->slug]);?>
                                </div>
                            </div>
                        <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <div class="bot-contain">
        <div class="col-md-4 col-first">
            <p>DELL</p>
            <?php $newOne = \common\models\News::find()
            ->where(['title'=>'Workstation Dell thế hệ mới: Precision 5520 vs XPS 9560'])
            ->one() ;?>
            <div class="new-one">
                <a href="">
                    <?php if($newOne) { ?>
                        <?= Html::img($newOne->image) ; ?>
                        <h6> <?= $newOne->title ;?> </h6>
                        <span> <?= $newOne->author ."・ ".substr($newOne->create_by,0,10) ?> </span>
                    <?php } ?>
                </a>
            </div>

            <?php $newTwo = \common\models\News::find()
                ->where(['title'=>'Đánh giá laptop Dell Inspiron 5559 không chỉ dành cho dân văn phòng'])
                ->one() ;?>
            <div class="sub-new new-two">
                <a href="">
                    <?php if($newTwo) { ?>
                        <div class="col-md-3">
                            <?= Html::img($newTwo->image) ; ?>
                        </div>
                        <div class="col-md-9">
                            <h6> <?= $newTwo->title ;?> </h6>
                            <span> <?= $newTwo->author ."・ ".substr($newTwo->create_by,0,10) ?> </span>
                        </div>
                    <?php } ?>
                </a>

            </div>

            <?php $newThree = \common\models\News::find()
                ->where(['title'=>'Khuyến mại khủng khi mua laptop dịp giỗ Tổ Hùng Vương tại trungtran.vn'])
                ->one() ;?>
            <div class="sub-new new-three">
                <a href="">
                    <?php if($newThree) { ?>
                        <div class="col-md-3">
                            <?= Html::img($newThree->image) ; ?>
                        </div>
                        <div class="col-md-9">
                            <h6> <?= $newThree->title ;?> </h6>
                            <span> <?= $newThree->author ."・ ".substr($newTwo->create_by,0,10) ?> </span>
                        </div>
                    <?php } ?>
                </a>
            </div>

            <?php $newFour = \common\models\News::find()
                ->where(['title'=>'Đặt mua Dell Inspiron 5559 nhận ngay voucher mua hàng cực khủng'])
                ->one() ;?>
            <div class="sub-new new-four">
                <a href="">
                    <?php if($newFour) { ?>
                        <div class="col-md-3">
                            <?= Html::img($newFour->image) ; ?>
                        </div>
                        <div class="col-md-9">
                            <h6> <?= $newFour->title ;?> </h6>
                            <span> <?= $newFour->author ."・ ".substr($newFour->create_by,0,10) ?> </span>
                        </div>
                    <?php } ?>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-second">
            <p>THINKPAD</p>
            <?php $newOne = \common\models\News::find()
                ->where(['title'=>'Lenovo ra mắt TVC mới cho Thinkpad X1 Nano'])
                ->one() ;?>
            <div class="new-one">
                <a href="">
                    <?php if($newOne) { ?>
                        <?= Html::img($newOne->image) ; ?>
                        <h6> <?= $newOne->title ;?> </h6>
                        <span> <?= $newOne->author ."・ ".substr($newOne->create_by,0,10) ?> </span>
                    <?php } ?>
                </a>

            </div>

            <?php $newTwo = \common\models\News::find()
                ->where(['title'=>'Chiếc laptop Lenovo Thinkpad và vụ tai nạn xe máy bất ngờ'])
                ->one() ;?>
            <div class="sub-new new-two">
                <a href="">
                    <?php if($newTwo) { ?>
                        <div class="col-md-3">
                            <?= Html::img($newTwo->image) ; ?>
                        </div>
                        <div class="col-md-9">
                            <h6> <?= $newTwo->title ;?> </h6>
                            <span> <?= $newTwo->author ."・ ".substr($newTwo->create_by,0,10) ?> </span>
                        </div>
                    <?php } ?>
                </a>

            </div>

            <?php $newThree = \common\models\News::find()
                ->where(['title'=>'Đánh giá Thinkpad W541 Laptop chuyên đồ họa 3D hiệu suất cao'])
                ->one() ;?>
            <div class="sub-new new-three">
                <a href="">
                    <?php if($newThree) { ?>
                        <div class="col-md-3">
                            <?= Html::img($newThree->image) ; ?>
                        </div>
                        <div class="col-md-9">
                            <h6> <?= $newThree->title ;?> </h6>
                            <span> <?= $newThree->author ."・ ".substr($newTwo->create_by,0,10) ?> </span>
                        </div>
                    <?php } ?>
                </a>
            </div>

            <?php $newFour = \common\models\News::find()
                ->where(['title'=>'Đánh giá chuyên sâu về dòng laptop doanh nhân siêu cơ động thinkpad x230'])
                ->one() ;?>
            <div class="sub-new new-four">
                <a href="">
                    <?php if($newFour) { ?>
                        <div class="col-md-3">
                            <?= Html::img($newFour->image) ; ?>
                        </div>
                        <div class="col-md-9">
                            <h6> <?= $newFour->title ;?> </h6>
                            <span> <?= $newFour->author ."・ ".substr($newFour->create_by,0,10) ?> </span>
                        </div>
                    <?php } ?>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-three">
            <p>HƯỚNG DẪN KĨ THUẬT</p>
            <?php $newOne = \common\models\News::find()
                ->where(['title'=>'Cần chuẩn bị những gì để nâng cấp lên Windows 11?'])
                ->one() ;?>
            <div class="new-one">
                <a href="">
                    <?php if($newOne) { ?>
                        <?= Html::img($newOne->image) ; ?>
                        <h6> <?= $newOne->title ;?> </h6>
                        <span> <?= $newOne->author ."・ ".substr($newOne->create_by,0,10) ?> </span>
                    <?php } ?>
                </a>

            </div>

            <?php $newTwo = \common\models\News::find()
                ->where(['title'=>'Những thói quen làm hại chiếc laptop của bạn'])
                ->one() ;?>
            <div class="sub-new new-two">
                <a href="">
                    <?php if($newTwo) { ?>
                        <div class="col-md-3">
                            <?= Html::img($newTwo->image) ; ?>
                        </div>
                        <div class="col-md-9">
                            <h6> <?= $newTwo->title ;?> </h6>
                            <span> <?= $newTwo->author ."・ ".substr($newTwo->create_by,0,10) ?> </span>
                        </div>
                    <?php } ?>
                </a>

            </div>

            <?php $newThree = \common\models\News::find()
                ->where(['title'=>'Vui đón xuân sang – Nhận ngàn ưu đãi'])
                ->one() ;?>
            <div class="sub-new new-three">
                <a href="">
                    <?php if($newThree) { ?>
                        <div class="col-md-3">
                            <?= Html::img($newThree->image) ; ?>
                        </div>
                        <div class="col-md-9">
                            <h6> <?= $newThree->title ;?> </h6>
                            <span> <?= $newThree->author ."・ ".substr($newTwo->create_by,0,10) ?> </span>
                        </div>
                    <?php } ?>
                </a>
            </div>

            <?php $newFour = \common\models\News::find()
                ->where(['title'=>'Khắc phục lỗi mất Wifi sau khi update Windows 10'])
                ->one() ;?>
            <div class="sub-new new-four">
                <a href="">
                    <?php if($newFour) { ?>
                        <div class="col-md-3">
                            <?= Html::img($newFour->image) ; ?>
                        </div>
                        <div class="col-md-9">
                            <h6> <?= $newFour->title ;?> </h6>
                            <span> <?= $newFour->author ."・ ".substr($newFour->create_by,0,10) ?> </span>
                        </div>
                    <?php } ?>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    console.log(document.getElementById('item0'));

</script>

