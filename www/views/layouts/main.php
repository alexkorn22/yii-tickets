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
            <a href="<?=Yii::$app->urlManager->createUrl([''])?>">
                <img src="/images/logoWedo(white).png" class="logo d-none d-sm-block" alt="WeDo">
                <img src="/images/logo(white).png" class="logo d-block d-sm-none" alt="WeDo">
            </a>
        </div>
        <div class="add-ticket">
    <? if (!Yii::$app->user->isGuest):?>
            <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" disabled data-target="#add-ticket"><i class="material-icons"></i><span class="d-none d-sm-block">Новое обращение</span></button>
    <? endif;?>
        </div>

            <div class="account">
                <ul class="navbar-nav mr-auto">
                    <? if (Yii::$app->user->isGuest):?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?=Yii::$app->urlManager->createUrl(['site/login'])?>">Войти</a>
                    </li>
                    <?else:?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?=Yii::$app->user->identity->getRepresent()?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?=Yii::$app->urlManager->createUrl('ticket/index')?>">Обращения</a>
                            <? if (Yii::$app->user->identity->isAdmin()):?>
                            <?=Html::a('Админка',
                                    Yii::$app->urlManager->createUrl('/admin'),
                                    ['class' => 'dropdown-item'])
                            ?>
                            <?endif;?>
                            <div class="dropdown-divider"></div>
                            <?
                            echo Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'Выход',
                                ['class' => 'dropdown-item account__logout-button']
                            )
                            . Html::endForm()
                            ?>
                        </div>
                    </li>
                    <? endif;?>
                </ul>
            </div>


    </div>
</header>
<section id="content">
    <div class="container">
        <?=Alert::widget() ?>
    </div>
    <?= $content ?>
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