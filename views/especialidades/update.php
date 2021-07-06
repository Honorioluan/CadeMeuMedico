<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Especialidades</h1>
<?php $form = ActiveForm::begin();?>
<?php echo $form->errorSummary($Vmodel);      ?>

    <?= $form->field($Vmodel,'Titulo') ?>
    <?= $form->field($Vmodel,'SubTitulo') ?>
    <?= $form->field($Vmodel,'texto')->textArea(['rows' => 5]) ?>

    
    <?= $form->field($Vmodel,'status')->dropDownList(['1' => "Ativo", '0' => "Inativo"])?>

    <?= Html::submitButton("Enviar",['class' => 'btn btn-danger'])?>

<?php ActiveForm::end();?>