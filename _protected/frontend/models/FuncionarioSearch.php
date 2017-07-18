<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Funcionario;

/**
 * FuncionarioSearch represents the model behind the search form about `app\models\Funcionario`.
 */
class FuncionarioSearch extends Funcionario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pessoa_id', 'CPF', 'REGISTRO', 'MATRICULA', 'EMPRESA_COD', 'divisao_id', 'subdivisao_id', 'local_trabalho_id', 'cargo_id', 'atividade_id', 'DIVISAO_COD', 'SUBDIVISAO_COD', 'LOCAL_TRABALHO_COD', 'CARGOATUAL_COD', 'ATIVIDADE_COD', 'VINCULO', 'CONTRATO', 'CARGOINICIAL', 'SITUACAO', 'SITUACAO_FUNCIONAL'], 'integer'],
            [['JORNADA', 'CLT_OU_ESTATUTO', 'DTNOMEACAO', 'DTPOSSE', 'SUBDIVISAOITEM', 'NIVEL_CARGO'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Funcionario::find();

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
            'id' => $this->id,
            'pessoa_id' => $this->pessoa_id,
            'CPF' => $this->CPF,
            'REGISTRO' => $this->REGISTRO,
            'MATRICULA' => $this->MATRICULA,
            'EMPRESA_COD' => $this->EMPRESA_COD,
            'divisao_id' => $this->divisao_id,
            'subdivisao_id' => $this->subdivisao_id,
            'local_trabalho_id' => $this->local_trabalho_id,
            'cargo_id' => $this->cargo_id,
            'atividade_id' => $this->atividade_id,
            'DIVISAO_COD' => $this->DIVISAO_COD,
            'SUBDIVISAO_COD' => $this->SUBDIVISAO_COD,
            'LOCAL_TRABALHO_COD' => $this->LOCAL_TRABALHO_COD,
            'CARGOATUAL_COD' => $this->CARGOATUAL_COD,
            'ATIVIDADE_COD' => $this->ATIVIDADE_COD,
            'VINCULO' => $this->VINCULO,
            'CONTRATO' => $this->CONTRATO,
            'CARGOINICIAL' => $this->CARGOINICIAL,
            'SITUACAO' => $this->SITUACAO,
            'SITUACAO_FUNCIONAL' => $this->SITUACAO_FUNCIONAL,
        ]);

        $query->andFilterWhere(['like', 'JORNADA', $this->JORNADA])
            ->andFilterWhere(['like', 'CLT_OU_ESTATUTO', $this->CLT_OU_ESTATUTO])
            ->andFilterWhere(['like', 'DTNOMEACAO', $this->DTNOMEACAO])
            ->andFilterWhere(['like', 'DTPOSSE', $this->DTPOSSE])
            ->andFilterWhere(['like', 'SUBDIVISAOITEM', $this->SUBDIVISAOITEM])
            ->andFilterWhere(['like', 'NIVEL_CARGO', $this->NIVEL_CARGO]);

        return $dataProvider;
    }
}
