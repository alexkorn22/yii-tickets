<?php

namespace app\modules\admin;

use app\models\User\User;
use Faker\Provider\Person;
use Yii;
use yii\web\NotFoundHttpException;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    public $layout = '/admin';
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (Yii::$app->user->isGuest || !Yii::$app->user->identity->isAdmin()) {
            Yii::$app->response->redirect(['/']);
        }
    }
}
