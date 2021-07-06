<?php

namespace app\controllers;

use app\models\Clinica;

class ClinicasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $clinicas = Clinica::find()->orderBy("Nome")->all();
        return $this->render('index',[
            'clinicas' => $clinicas
        ]);
    }

    public function actionView($id)
    {
        $clinicas= Clinica::findOne($id);

        
        return $this->render('view',['clinicas'=>$clinicas]);
    }
}