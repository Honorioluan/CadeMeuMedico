<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedicoHasEspecialidades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medico-has-especialidades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Medico_id')->textInput() ?>

    <?= $form->field($model, 'Clinica_id')->textInput() ?>

    <?= $form->field($model, 'Especialidades_id')->textInput() ?>

    <?= $form->field($model, 'criado_em')->textInput() ?>

    <?= $form->field($model, 'atualizado_em')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
