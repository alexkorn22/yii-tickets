<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
//$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Url::to(['/favicon.png'])]);
?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="header-wrap">
        <div class="brand">
            <a href="#">
                <img src="images/logoWedo(white).png" class="logo d-none d-sm-block" alt="WeDo">
                <img src="images/logo(white).png" class="logo d-block d-sm-none" alt="WeDo">
            </a>
        </div>
        <div class="add-ticket">
            <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#add-ticket"><i class="material-icons"></i><span class="d-none d-sm-block">Новое обращение</span></button>
        </div>
        <div class="account">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Exit</a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</header>

<section id="home-page">
    <div class="container">
        <div class="row tabs">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link my-nav-link open active" id="pills-profile-tab" data-toggle="pill" href="#ticket-open" role="tab" aria-controls="pills-profile" aria-selected="false">
                            Открытые
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link my-nav-link all" id="pills-home-tab" data-toggle="pill" href="#ticket-all" role="tab" aria-controls="pills-home" aria-selected="true">
                            Все обращения
                        </a>
                    </li>
                </ul>
                <div class="tab-content tikets" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="ticket-open" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <ul class="top-line d-none d-sm-block">
                            <li class="title">
                                <div class="row">
                                    <div class="col-md-2">
                                        <p>Номер</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Тема</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>Обновлено</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>Статус</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="content-tickets">
                            <li>
                                <div class="row">
                                    <div class="col-md-2">
                                        <p class="d-none d-sm-block">ЭРМ-002</p>
                                    </div>
                                    <div class="name-ticket col-md-6">
                                        <a href="">
                                            <p>Проблемы с обменами с Круглочуточной аптекой</p>
                                        </a>
                                    </div>
                                    <div class="col-md-2 last-update">
                                        <p>07.02.2018 18:00</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="label-open">
                                            <span>Открыт</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2">
                                        <p class="d-none d-sm-block">ЭРМ-003</p>
                                    </div>
                                    <div class="name-ticket col-md-6">
                                        <a href="">
                                            <p>Сервер не включается. Аптека Степногорск</p>
                                        </a>
                                    </div>
                                    <div class="col-md-2 last-update">
                                        <p>01.02.2018 10:30</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="label-open">
                                            <span>Открыт</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="wrap-show-more">
                            <button type="button" id="load-open" class="btn btn-outline-danger">Показать больше</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ticket-all" role="tabpanel" aria-labelledby="pills-home-tab">
                        <ul class="top-line d-none d-sm-block">
                            <li class="title">
                                <div class="row">
                                    <div class="col-md-2">
                                        <p>Номер</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Тема</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>Обновлено</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>Статус</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="content-tickets">
                            <li>
                                <div class="row">
                                    <div class="col-md-2">
                                        <p class="d-none d-sm-block">ЭРМ-001</p>
                                    </div>
                                    <div class="name-ticket col-md-6">
                                        <a href="ticket.html">
                                            <p>Не работает принтер на АП1</p>
                                        </a>
                                    </div>
                                    <div class="col-md-2 last-update">
                                        <p>06.02.2018 14:02</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="label-close">
                                            <span>Закрыт</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2">
                                        <p class="d-none d-sm-block">ЭРМ-002</p>
                                    </div>
                                    <div class="name-ticket col-md-6">
                                        <a href="">
                                            <p>Проблемы с обменами с Круглочуточной аптекой</p>
                                        </a>
                                    </div>
                                    <div class="col-md-2 last-update">
                                        <p>07.02.2018 18:00</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="label-open">
                                            <span>Открыт</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2">
                                        <p class="d-none d-sm-block">ЭРМ-003</p>
                                    </div>
                                    <div class="name-ticket col-md-6">
                                        <a href="">
                                            <p>Сервер не включается. Аптека Степногорск</p>
                                        </a>
                                    </div>
                                    <div class="col-md-2 last-update">
                                        <p>01.02.2018 10:30</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="label-open">
                                            <span>Открыт</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="wrap-show-more">
                            <button type="button" id="load-all" class="btn btn-outline-danger">Показать больше</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div>© Copyright 2018</div>
</footer>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="add-ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Добавить новое обращение</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="title-ticket" class="col-form-label">Тема</label>
                        <input type="text" class="form-control" id="title-ticket" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Описание</label>
                        <textarea class="form-control" id="message-text" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-danger">Создать</button>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>