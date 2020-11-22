<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\HttpBearerAuth;
use yii\web\NotFoundHttpException;
use common\models\User;

class UserController extends ActiveController
{
    public $modelClass = 'common\models\User';
    
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = ['class' => HttpBearerAuth::className(),];
        return $behaviors;
    }
    
    public function verbs()
    {
        return [
            //'index' => ['GET', 'HEAD'],
            'view' => ['GET'],
            //'create' => ['POST'],
            //'update' => ['PUT', 'PATCH'],
            //'delete' => ['DELETE'],
        ];
    }
    
    public function actions()
    {
        $actions = parent::actions();
        
        // disable defaults
        return [];
    }
    
    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = User::findOne([
            'id' => $id, 
            'status' => User::STATUS_ACTIVE,
            ]);
        if (!is_null($model)) {
            return $model;
        }

        throw new NotFoundHttpException('The requested User does not exist.');
    }
    
    /**
    * Проверяет права текущего пользователя.
    *
    * @param string $action ID действия, которое надо выполнить
    * @param \yii\base\Model $model модель, к которой нужно получить доступ. 
    * @param array $params дополнительные параметры
    * @throws ForbiddenHttpException если у пользователя нет доступа
    *//*
    public function checkAccess($action, $model = null, $params = [])
    {
        if (\Yii::$app->user->isGuest) {
             throw new \yii\web\ForbiddenHttpException(sprintf('Access denied to %s action', $action));
        }
    }*/
}
