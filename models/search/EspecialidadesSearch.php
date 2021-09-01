<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Especialidades;

/**
 * EspecialidadesSearch represents the model behind the search form of `app\models\Especialidades`.
 */
class EspecialidadesSearch extends Especialidades
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Especialidades_id', 'status'], 'integer'],
            [['Titulo', 'SubTitulo', 'texto', 'Imagem', 'criado_em', 'atualizado_em'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Especialidades::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Especialidades_id' => $this->Especialidades_id,
            'criado_em' => $this->criado_em,
            'atualizado_em' => $this->atualizado_em,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'SubTitulo', $this->SubTitulo])
            ->andFilterWhere(['like', 'texto', $this->texto])
            ->andFilterWhere(['like', 'Imagem', $this->Imagem]);

        return $dataProvider;
    }
}
