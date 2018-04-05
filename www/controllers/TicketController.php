<?php

namespace app\controllers;

use app\models\Ticket;
use Yii;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;

class TicketController extends \yii\web\Controller
{
    public function actionIndex(){
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $tickets = Ticket::findNotCompleted(Yii::$app->user->identity->guid);
        return $this->render('index',compact('tickets'));
    }

    public function actionAll(){
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $tickets = Ticket::findByClientGuid(Yii::$app->user->identity->guid);
        return $this->render('all',compact('tickets'));
    }

    public function beforeAction($action){
        if (Yii::$app->user->isGuest) {
           return $this->redirect(['site/login']);
        }
        return parent::beforeAction($action);
    }

    public function actionListAjax(){
        $start = Yii::$app->request->post('begin');

        if (Yii::$app->user->isGuest) {
            throw new NotFoundHttpException('Страница не найдена');
        }
        $tickets = Ticket::findNotCompleted(Yii::$app->user->identity->guid,$start);
        $result['html'] = $this->renderAjax('_listTicket',compact('tickets'));
        $result['stop'] = count($tickets) == 0;
        return json_encode($result,true);
    }

    public function actionListAjaxAll(){
        $start = Yii::$app->request->post('begin');

        if (Yii::$app->user->isGuest) {
            throw new NotFoundHttpException('Страница не найдена');
        }
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
