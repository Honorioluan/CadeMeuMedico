<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\MedicoHasEspecialidadesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medico-has-especialidades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Medico_id') ?>

    <?= $form->field($model, 'Clinica_id') ?>

    <?= $form->field($model, 'Especialidades_id') ?>

    <?= $form->field($model, 'criado_em') ?>

    <?= $form->field($model, 'atualizado_em') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
