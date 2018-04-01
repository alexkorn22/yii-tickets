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

<?
$this->registerCssFile('/css/ui.totop.css');
$this->registerJsFile('/js/easing.js',['depends' => ['yii\web\JqueryAsset']]);
$this->registerJsFile('/js/jquery.ui.totop.min.js',['depends' => ['yii\web\JqueryAsset']]);
$this->registerJsFile('/js/listTickets.js',['depends' => ['yii\web\JqueryAsset']])
?>


