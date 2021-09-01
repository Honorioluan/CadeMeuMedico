<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\MedicoHasEspecialidades;
use app\models\search\MedicoHasEspecialidadesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MedicoHasEspecialidadesController implements the CRUD actions for MedicoHasEspecialidades model.
 */
class MedicoHasEspecialidadesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MedicoHasEspecialidades models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MedicoHasEspecialidadesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MedicoHasEspecialidades model.
     * @param integer $Medico_id
     * @param integer $Clinica_id
     * @param integer $Especialidades_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Medico_id, $Clinica_id, $Especialidades_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Medico_id, $Clinica_id, $Especialidades_id),
        ]);
    }

    /**
     * Creates a new MedicoHasEspecialidades model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MedicoHasEspecialidades();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Medico_id' => $model->Medico_id, 'Clinica_id' => $model->Clinica_id, 'Especialidades_id' => $model->Especialidades_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MedicoHasEspecialidades model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Medico_id
     * @param integer $Clinica_id
     * @param integer $Especialidades_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Medico_id, $Clinica_id, $Especialidades_id)
    {
        $model = $this->findModel($Medico_id, $Clinica_id, $Especialidades_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Medico_id' => $model->Medico_id, 'Clinica_id' => $model->Clinica_id, 'Especialidades_id' => $model->Especialidades_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MedicoHasEspecialidades model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Medico_id
     * @param integer $Clinica_id
     * @param integer $Especialidades_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Medico_id, $Clinica_id, $Especialidades_id)
    {
        $this->findModel($Medico_id, $Clinica_id, $Especialidades_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MedicoHasEspecialidades model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Medico_id
     * @param integer $Clinica_id
     * @param integer $Especialidades_id
     * @return MedicoHasEspecialidades the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Medico_id, $Clinica_id, $Especialidades_id)
    {
        if (($model = MedicoHasEspecialidades::findOne(['Medico_id' => $Medico_id, 'Clinica_id' => $Clinica_id, 'Especialidades_id' => $Especialidades_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
