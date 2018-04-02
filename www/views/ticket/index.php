<?php
/* @var $this yii\web\View */

use yii\bootstrap\Tabs;use yii\helpers\Html;
use yii\helpers\Url;

/* @var $tickets \app\models\User\Ticket[] */
$this->title = 'Список обращений';
?>

<section id="home-page">
    <div class="container">
        <div class="row tabs">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-fill" id="pills-tab">
                    <li class="nav-item">
                        <a class="nav-link my-nav-link open active">
                            Открытые
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<? Url::to(['ticket/all']) ?>" class="nav-link my-nav-link all " id="pills-home-tab">
                            Все обращения
                        </a>
                    </li>
                </ul>
                <div class="tab-content tikets" id="pills-tabContent">
                    <div class="tab-pane show active" id="ticket-open">
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
                            <?
                            echo $this->render('_listTicket', ['tickets' => $tickets]);
                            ?>
                        </ul>
                        <div id="loader">
                            <div class="loader__content d-flex justify-content-center">
                                <img src="/images/loader.gif" alt="Загрузка" class="img-responsive">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?
echo Html :: hiddenInput(Yii::$app->getRequest()->csrfParam, Yii::$app->getRequest()->getCsrfToken(), ['id'=> 'csrfParamListTicket']);
?>
<?
$this->registerJsFile('/js/src/listTickets.js',['depends' => ['yii\web\JqueryAsset']])
?>


