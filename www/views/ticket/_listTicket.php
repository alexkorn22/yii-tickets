
<?
/* @var $tickets \app\models\User\Ticket[] */
?>
<? foreach ($tickets as $ticket): ?>
    <li>
        <div class="row">
            <div class="col-md-2">
                <p class="d-none d-sm-block"><?= $ticket->number ?></p>
            </div>
            <div class="name-ticket col-md-6">
                <a href="">
                    <p><?= $ticket->result ?></p>
                </a>
            </div>
            <div class="col-md-2 last-update">
<!--                <p>07.02.2018 18:00</p> -->
                <p><?echo Yii::$app->formatter->asDate($ticket->date, 'dd.MM.yyyy H:mm');?></p>
            </div>
            <div class="col-md-2">
                    <?if ($ticket->completed):?>
                        <div class="label-close">
                            <span>Закрыт</span>
                        </div>
                    <?else:?>
                        <div class="label-open">
                            <span>Открыт</span>
                        </div>
                    <?endif;?>
            </div>
        </div>
    </li>

<? endforeach; ?>