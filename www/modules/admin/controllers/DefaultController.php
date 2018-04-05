<?php

namespace app\modules\admin\controllers;

use yii\helpers\ArrayHelper;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionListClients()
    {
        $list = getRequestOdata('Catalog_Клиенты');
        $clients = $list['value'];
        ArrayHelper::multisort($clients, ['Description'], [SORT_ASC]);
        return $this->render('listClients',['clients' =>$clients]);
    }
}
