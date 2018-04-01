
<?
/* @var $tickets \app\models\User\Ticket[] */
?>
<? foreach ($tickets as $ticket): ?>
    <a href="<?=Yii::$app->urlManager->createUrl(['/ticket/item','guid' => $ticket->guid])?>" class="ticket-in-list">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Номер: </strong> <?= $ticket->number ?></h3>
            </div>
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt><p class="text-primary"><strong>Дата:</strong></p></dt>
                    <dd><p class="text-primary"><?= $ticket->date ?></p></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt><p class="text-primary"><strong>Результат:</strong></p></dt>
                    <dd><p class="text-primary"><?= $ticket->result ?></p></dd>
                </dl>
            </div>
        </div>
    </a>

<? endforeach; ?>