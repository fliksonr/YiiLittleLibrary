<?php

namespace app\modules\admin\controllers;
use yii\filters\AccessControl;

use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends AppAdminController
{

  // public function behaviors()
  // {
  //     return [
  //       'access' => [
  //           'class' => AccessControl::className(),
  //           'rules' => [
  //               [
  //                   'allow' => true,
  //                   'roles' => ['@'],
  //               ],
  //           ],
  //       ],
  //         'verbs' => [
  //             'class' => VerbFilter::className(),
  //             'actions' => [
  //                 'delete' => ['POST'],
  //             ],
  //         ],
  //     ];
  // }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
