<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MedicoHasEspecialidades */

$this->title = 'Update Medico Has Especialidades: ' . $model->Medico_id;
$this->params['breadcrumbs'][] = ['label' => 'Medico Has Especialidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Medico_id, 'url' => ['view', 'Medico_id' => $model->Medico_id, 'Clinica_id' => $model->Clinica_id, 'Especialidades_id' => $model->Especialidades_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medico-has-especialidades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
