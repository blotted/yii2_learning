<?php

namespace app\modules\main\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{

    public function actionIndex()
    {
        $this->layout = 'bootstrap';
        return $this->render('index');
    }
}
