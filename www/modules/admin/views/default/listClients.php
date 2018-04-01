<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $clients array*/

$this->title = 'Список клиентов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>Имя </th>
            <th>Гуид</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($clients as $client):?>
            <tr>
                <td>
                    <?=$client['Description']?>
                </td>
                <td>
                    <?=$client['Ref_Key']?>
                </td>
            </tr>
        <?php endforeach;?>

        </tbody>
    </table>

</div>
