<?php

namespace app\controllers;

use app\models\Ticket;
use Yii;
use yii\web\BadRequestHttpException;

class TicketController extends \yii\web\Controller
{
    public function actionIndex(){
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $tickets = Ticket::findByClientGuid(Yii::$app->user->identity->guid);
        return $this->render('index',compact('tickets'));
    }

    public function beforeAction($action){
        if (Yii::$app->user->isGuest) {
            $this->redirect(['/']);
        }
        return parent::beforeAction($action);
    }

    public function actionListAjax(){
        $start = Yii::$app->request->post('begin');
        $tickets = Ticket::findByClientGuid(Yii::$app->user->identity->guid,$start);
        $result['html'] = $this->renderAjax('_listTicket',compact('tickets'));
        $result['stop'] = count($tickets) == 0;
        return json_encode($result,true);
    }

    public function actionItem($guid){
        return $guid;
//        $tickets = Ticket::findByClientGuid(Yii::$app->user->identity->guid);
//        return $this->render('index',compact('tickets'));
    }

}
