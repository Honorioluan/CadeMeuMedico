<?php
namespace app\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\models\Email;

class Emailmkt extends Widget
{

    public function run()
    {
        $model = new Email();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            Yii::$app->session->setFlash('info', 'Email Registrado com sucesso');
        } else {
            return $this->render('emailmkt', ['model' => $model]);
         }
    }
}