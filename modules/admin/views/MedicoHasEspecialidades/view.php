<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MedicoHasEspecialidades */

$this->title = $model->Medico_id;
$this->params['breadcrumbs'][] = ['label' => 'Medico Has Especialidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="medico-has-especialidades-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Medico_id' => $model->Medico_id, 'Clinica_id' => $model->Clinica_id, 'Especialidades_id' => $model->Especialidades_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Medico_id' => $model->Medico_id, 'Clinica_id' => $model->Clinica_id, 'Especialidades_id' => $model->Especialidades_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Medico_id',
            'Clinica_id',
            'Especialidades_id',
            'criado_em',
            'atualizado_em',
            'status',
        ],
    ]) ?>

</div>
