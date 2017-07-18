<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property integer $id
 * @property integer $pessoa_id
 * @property string $CPF
 * @property integer $REGISTRO
 * @property integer $MATRICULA
 * @property integer $EMPRESA_COD
 * @property integer $divisao_id
 * @property integer $subdivisao_id
 * @property integer $local_trabalho_id
 * @property integer $cargo_id
 * @property integer $atividade_id
 * @property integer $DIVISAO_COD
 * @property integer $SUBDIVISAO_COD
 * @property integer $LOCAL_TRABALHO_COD
 * @property integer $CARGOATUAL_COD
 * @property integer $ATIVIDADE_COD
 * @property integer $VINCULO
 * @property integer $CONTRATO
 * @property string $JORNADA
 * @property integer $CARGOINICIAL
 * @property integer $SITUACAO
 * @property string $CLT_OU_ESTATUTO
 * @property string $DTNOMEACAO
 * @property string $DTPOSSE
 * @property string $SUBDIVISAOITEM
 * @property string $NIVEL_CARGO
 * @property integer $SITUACAO_FUNCIONAL
 *
 * @property Divisao $eMPRESACOD
 * @property DivisoesEmpresa
 * @property Empresa $eMPRESACOD0
 * @property Pessoa $pessoa
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pessoa_id', 'CPF', 'EMPRESA_COD'], 'required'],
            [['pessoa_id', 'CPF', 'REGISTRO', 'MATRICULA', 'EMPRESA_COD', 'divisao_id', 'subdivisao_id', 'local_trabalho_id', 'cargo_id', 'atividade_id', 'DIVISAO_COD', 'SUBDIVISAO_COD', 'LOCAL_TRABALHO_COD', 'CARGOATUAL_COD', 'ATIVIDADE_COD', 'VINCULO', 'CONTRATO', 'CARGOINICIAL', 'SITUACAO', 'SITUACAO_FUNCIONAL'], 'integer'],
            [['JORNADA', 'CLT_OU_ESTATUTO', 'DTNOMEACAO', 'DTPOSSE', 'SUBDIVISAOITEM', 'NIVEL_CARGO'], 'string', 'max' => 10],
            [['EMPRESA_COD', 'DIVISAO_COD'], 'exist', 'skipOnError' => true, 'targetClass' => Divisao::className(), 'targetAttribute' => ['EMPRESA_COD' => 'EMPRESA_COD', 'DIVISAO_COD' => 'CODIGO']],
            [['EMPRESA_COD'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['EMPRESA_COD' => 'CODIGO']],
            [['pessoa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::className(), 'targetAttribute' => ['pessoa_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pessoa_id' => 'Pessoa ID',
            'CPF' => 'Cpf',
            'REGISTRO' => 'Registro',
            'MATRICULA' => 'Matricula',
            'EMPRESA_COD' => 'Empresa  Cod',
            'divisao_id' => 'Divisao ID',
            'subdivisao_id' => 'Subdivisao ID',
            'local_trabalho_id' => 'Local Trabalho ID',
            'cargo_id' => 'Cargo ID',
            'atividade_id' => 'Atividade ID',
            'DIVISAO_COD' => 'Divisao  Cod',
            'SUBDIVISAO_COD' => 'Subdivisao  Cod',
            'LOCAL_TRABALHO_COD' => 'Local  Trabalho  Cod',
            'CARGOATUAL_COD' => 'Cargoatual  Cod',
            'ATIVIDADE_COD' => 'Atividade  Cod',
            'VINCULO' => 'Vinculo',
            'CONTRATO' => 'Contrato',
            'JORNADA' => 'Jornada',
            'CARGOINICIAL' => 'Cargoinicial',
            'SITUACAO' => 'Situacao',
            'CLT_OU_ESTATUTO' => 'Clt  Ou  Estatuto',
            'DTNOMEACAO' => 'Dtnomeacao',
            'DTPOSSE' => 'Dtposse',
            'SUBDIVISAOITEM' => 'Subdivisaoitem',
            'NIVEL_CARGO' => 'Nivel  Cargo',
            'SITUACAO_FUNCIONAL' => 'Situacao  Funcional',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDivisao()
    {
        return $this->hasOne(Divisao::className(), ['EMPRESA_COD' => 'EMPRESA_COD', 'CODIGO' => 'DIVISAO_COD']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['CODIGO' => 'EMPRESA_COD']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPessoa()
    {
        return $this->hasOne(Pessoa::className(), ['id' => 'pessoa_id']);
    }
    
    public function getLotacao()
    {
        $res = (new \yii\db\Query())
                ->select('*')
                ->from('funcionario f')
                ->where(['pessoa_id' => $this->pessoa_id])
                ->andWhere(['in', 'SITUACAO', [1,3,4,5]])
                ->orderBy('MATRICULA')
                ->all();
        return $res;
    }
    
    public function getAtividades()
    {
        $res = (new \yii\db\Query())
                ->select('*')
                ->from('atividade a')
                ->where(['EMPRESA_COD' => $this->EMPRESA_COD])
                ->orderBy('NOME')
                ->all();
        return $res;
    }
}
