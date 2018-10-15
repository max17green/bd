<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\User;
//use app\models\Sock;

class MainController extends Controller
{
    public function actionIndex()
    {
        $users = User::find()->select('name')->asArray()->all();
        //$socket = new Sock();
        return $this->render('index', [
            'users' => $users,
        ]);
    }
}