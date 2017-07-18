<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pessoa;

/**
 * PessoaSearch represents the model behind the search form about `app\models\Pessoa`.
 */
class PessoaSearch extends Pessoa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'CPF', 'NACIONALIDADE', 'INSTRUCAO', 'ESTADOCIVIL', 'CATFUNCIONAL', 'REGISTROINT', 'RACA'], 'integer'],
            [['NOME', 'SEXO', 'ANOCHEGADA', 'DTNASCIMENTO', 'NOMEPAI', 'NOMEMAE', 'CEP', 'ENDERECO', 'NUMERO', 'BAIRRO', 'COMPL', 'CIDADE', 'UF', 'TELEFONE', 'PIS', 'RG', 'CTPS', 'SERIE', 'UFCTPS', 'CNH_DTEXPEDIDA', 'CNH_NUMERO', 'CNH_UF', 'CNH_DTVALIDADE', 'ELEITOR', 'ZONAELEITORAL', 'SECAOELEITORAL', 'RESERVISTA', 'DTEMISSAOCTPS', 'RGORGAOEMISSOR', 'UFRG', 'ORGAOSIPREV', 'RN_CIDADE', 'RN_UF', 'DTRG', 'CATEGORIA_RESERVISTA', 'COROLHOS', 'CORCABELOS', 'CUTIS', 'DEFICIENCIAFISICA', 'ALERGIAMEDICAMENTOS', 'ALTURA', 'PESO', 'TIPOSANGUE', 'DOADOR', 'SINAIS', 'RN_REGISTRO_NASCIMENTO', 'RN_LIVRO', 'RN_FOLHA', 'LETRA_SEXO', 'CELULAR', 'DTTERMINO', 'CNH_CATEGORIA', 'EMAIL', 'SENHAWEB', 'TSREGISTROS_RESCINDIDOS', 'RN_CIDADE_TCEMS', 'NUMEROPROFISSIONAL', 'DOCADM_TIPODOC', 'LEGADM_TIPODOC', 'LEGADM_NUMERO', 'LEGADM_DATA', 'CPF_PAI', 'CPF_MAE', 'DOCUMENTO_NUMERO', 'DOCUMENTO_TIPO', 'DOCUMENTO_UF', 'REGISTRO_UNICO_CARTORIO', 'PENSIONISTA_PARIDADE', 'UFELEITOR', 'RESERVISTA_DTEXPEDICAO'], 'safe'],
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
        $query = Pessoa::find();

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
            'CPF' => $this->CPF,
            'NACIONALIDADE' => $this->NACIONALIDADE,
            'DTNASCIMENTO' => $this->DTNASCIMENTO,
            'INSTRUCAO' => $this->INSTRUCAO,
            'ESTADOCIVIL' => $this->ESTADOCIVIL,
            'DTRG' => $this->DTRG,
            'CATFUNCIONAL' => $this->CATFUNCIONAL,
            'REGISTROINT' => $this->REGISTROINT,
            'RACA' => $this->RACA,
        ]);

        $query->andFilterWhere(['like', 'NOME', $this->NOME])
            ->andFilterWhere(['like', 'SEXO', $this->SEXO])
            ->andFilterWhere(['like', 'ANOCHEGADA', $this->ANOCHEGADA])
            ->andFilterWhere(['like', 'NOMEPAI', $this->NOMEPAI])
            ->andFilterWhere(['like', 'NOMEMAE', $this->NOMEMAE])
            ->andFilterWhere(['like', 'CEP', $this->CEP])
            ->andFilterWhere(['like', 'ENDERECO', $this->ENDERECO])
            ->andFilterWhere(['like', 'NUMERO', $this->NUMERO])
            ->andFilterWhere(['like', 'BAIRRO', $this->BAIRRO])
            ->andFilterWhere(['like', 'COMPL', $this->COMPL])
            ->andFilterWhere(['like', 'CIDADE', $this->CIDADE])
            ->andFilterWhere(['like', 'UF', $this->UF])
            ->andFilterWhere(['like', 'TELEFONE', $this->TELEFONE])
            ->andFilterWhere(['like', 'PIS', $this->PIS])
            ->andFilterWhere(['like', 'RG', $this->RG])
            ->andFilterWhere(['like', 'CTPS', $this->CTPS])
            ->andFilterWhere(['like', 'SERIE', $this->SERIE])
            ->andFilterWhere(['like', 'UFCTPS', $this->UFCTPS])
            ->andFilterWhere(['like', 'CNH_DTEXPEDIDA', $this->CNH_DTEXPEDIDA])
            ->andFilterWhere(['like', 'CNH_NUMERO', $this->CNH_NUMERO])
            ->andFilterWhere(['like', 'CNH_UF', $this->CNH_UF])
            ->andFilterWhere(['like', 'CNH_DTVALIDADE', $this->CNH_DTVALIDADE])
            ->andFilterWhere(['like', 'ELEITOR', $this->ELEITOR])
            ->andFilterWhere(['like', 'ZONAELEITORAL', $this->ZONAELEITORAL])
            ->andFilterWhere(['like', 'SECAOELEITORAL', $this->SECAOELEITORAL])
            ->andFilterWhere(['like', 'RESERVISTA', $this->RESERVISTA])
            ->andFilterWhere(['like', 'DTEMISSAOCTPS', $this->DTEMISSAOCTPS])
            ->andFilterWhere(['like', 'RGORGAOEMISSOR', $this->RGORGAOEMISSOR])
            ->andFilterWhere(['like', 'UFRG', $this->UFRG])
            ->andFilterWhere(['like', 'ORGAOSIPREV', $this->ORGAOSIPREV])
            ->andFilterWhere(['like', 'RN_CIDADE', $this->RN_CIDADE])
            ->andFilterWhere(['like', 'RN_UF', $this->RN_UF])
            ->andFilterWhere(['like', 'CATEGORIA_RESERVISTA', $this->CATEGORIA_RESERVISTA])
            ->andFilterWhere(['like', 'COROLHOS', $this->COROLHOS])
            ->andFilterWhere(['like', 'CORCABELOS', $this->CORCABELOS])
            ->andFilterWhere(['like', 'CUTIS', $this->CUTIS])
            ->andFilterWhere(['like', 'DEFICIENCIAFISICA', $this->DEFICIENCIAFISICA])
            ->andFilterWhere(['like', 'ALERGIAMEDICAMENTOS', $this->ALERGIAMEDICAMENTOS])
            ->andFilterWhere(['like', 'ALTURA', $this->ALTURA])
            ->andFilterWhere(['like', 'PESO', $this->PESO])
            ->andFilterWhere(['like', 'TIPOSANGUE', $this->TIPOSANGUE])
            ->andFilterWhere(['like', 'DOADOR', $this->DOADOR])
            ->andFilterWhere(['like', 'SINAIS', $this->SINAIS])
            ->andFilterWhere(['like', 'RN_REGISTRO_NASCIMENTO', $this->RN_REGISTRO_NASCIMENTO])
            ->andFilterWhere(['like', 'RN_LIVRO', $this->RN_LIVRO])
            ->andFilterWhere(['like', 'RN_FOLHA', $this->RN_FOLHA])
            ->andFilterWhere(['like', 'LETRA_SEXO', $this->LETRA_SEXO])
            ->andFilterWhere(['like', 'CELULAR', $this->CELULAR])
            ->andFilterWhere(['like', 'DTTERMINO', $this->DTTERMINO])
            ->andFilterWhere(['like', 'CNH_CATEGORIA', $this->CNH_CATEGORIA])
            ->andFilterWhere(['like', 'EMAIL', $this->EMAIL])
            ->andFilterWhere(['like', 'SENHAWEB', $this->SENHAWEB])
            ->andFilterWhere(['like', 'TSREGISTROS_RESCINDIDOS', $this->TSREGISTROS_RESCINDIDOS])
            ->andFilterWhere(['like', 'RN_CIDADE_TCEMS', $this->RN_CIDADE_TCEMS])
            ->andFilterWhere(['like', 'NUMEROPROFISSIONAL', $this->NUMEROPROFISSIONAL])
            ->andFilterWhere(['like', 'DOCADM_TIPODOC', $this->DOCADM_TIPODOC])
            ->andFilterWhere(['like', 'LEGADM_TIPODOC', $this->LEGADM_TIPODOC])
            ->andFilterWhere(['like', 'LEGADM_NUMERO', $this->LEGADM_NUMERO])
            ->andFilterWhere(['like', 'LEGADM_DATA', $this->LEGADM_DATA])
            ->andFilterWhere(['like', 'CPF_PAI', $this->CPF_PAI])
            ->andFilterWhere(['like', 'CPF_MAE', $this->CPF_MAE])
            ->andFilterWhere(['like', 'DOCUMENTO_NUMERO', $this->DOCUMENTO_NUMERO])
            ->andFilterWhere(['like', 'DOCUMENTO_TIPO', $this->DOCUMENTO_TIPO])
            ->andFilterWhere(['like', 'DOCUMENTO_UF', $this->DOCUMENTO_UF])
            ->andFilterWhere(['like', 'REGISTRO_UNICO_CARTORIO', $this->REGISTRO_UNICO_CARTORIO])
            ->andFilterWhere(['like', 'PENSIONISTA_PARIDADE', $this->PENSIONISTA_PARIDADE])
            ->andFilterWhere(['like', 'UFELEITOR', $this->UFELEITOR])
            ->andFilterWhere(['like', 'RESERVISTA_DTEXPEDICAO', $this->RESERVISTA_DTEXPEDICAO]);

        return $dataProvider;
    }
}
