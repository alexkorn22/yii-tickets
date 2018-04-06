<?php
/* @var $this yii\web\View */

use yii\bootstrap\Tabs;use yii\helpers\Html;
use yii\helpers\Url;

/* @var $ticket \app\models\Ticket */
$this->title = 'Обращение';

?>

<section id="some-ticket">
    <div class="container">
        <div class="row ticket-head">
            <div class="col-md-9">
                <div class="title-ticket">
                    <h1><?=$ticket->result?></h1>
                </div>
                <div class="number-date">
                    <p class="d-none d-sm-block">Номер: <span><?= $ticket->number ?></span></p>
                    <p>Дата: <span><?echo Yii::$app->formatter->asDate($ticket->date, 'dd.MM.yyyy H:mm');?></span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="add-item d-none d-sm-flex">
                    <button type="button" disabled class="btn btn-danger btn-lg" data-toggle="modal" data-target="#add-item">Добавить запись</button>
                </div>
            </div>
        </div>
        <div class="row items">
            <div class="col-md-12">
                <? $counter = 1;?>
                <? foreach ($ticket->records as $record):?>
                <? $counter++?>
                <div class="item <? if ($counter%2):?>client<?else:?>collaborator<?endif;?>">
                    <div class="wrap-head-item">
                        <div class="title-item">
                            <h4><?=$record['Резюме']?></h4>
                        </div>
                        <div class="date-item">
                            <span><?echo Yii::$app->formatter->asDate($record['ДатаВремя'], 'dd.MM.yyyy H:mm');?></span>
                        </div>
                    </div>
                    <div class="body-item">
                    <span>
                        <?=$record['Описание']?>
                    </span>
                    </div>
                </div>
                <? endforeach;?>
            </div>
        </div>
        <div class="row btn-add-item-bottom">
            <div class="col-md-12">
                <div class="add-item">
                    <button type="button" class="btn btn-danger btn-lg" disabled data-toggle="modal" data-target="#add-item"><i class="material-icons d-block d-sm-none">create</i><span class="d-none d-sm-block">Добавить запись</span></button>
                </div>
            </div>
        </div>
    </div>
</section>





