<?php
namespace backend\controllers;

use yii\web\Controller;
use yii\helpers\BaseUrl;

class AdminController extends Controller {
  public $layout = 'admin';
  public function actions() {
    return [
      'error' => [
        'class' => 'yii\web\ErrorAction',
      ],
    ];
  }

  public function actionIndex() {
    return $this->render('index');
  }
}
