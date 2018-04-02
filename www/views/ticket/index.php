<?php
/* @var $this yii\web\View */
/* @var $tickets \app\models\User\Ticket[] */
$this->title = 'Список обращений';
?>
<h1><?= $this->title ?></h1>
<div id="blockListTickets">
    <?
    echo $this->render('_listTicket', ['tickets' => $tickets]);
    ?>
</div>

<div id="loadTickets">
    <img src="images/loader.gif" alt="Загрузка" class="img-responsive center-block">
</div>

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

<?
$this->registerJsFile('/js/src/listTickets.js',['depends' => ['yii\web\JqueryAsset']])
?>


