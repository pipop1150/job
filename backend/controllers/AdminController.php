<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\BaseUrl;
use yii\web\UploadedFile;
use backend\models\UploadForm;

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
    $model = new UploadForm();
    if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            echo "before upload";
            if ($model->upload()) {
              echo "success";
                // file is uploaded successfully
                return;
            }
        }

        return $this->render('index', ['model' => $model]);
  }
}
