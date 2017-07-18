<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "divisao".
 *
 * @property integer $EMPRESA_COD
 * @property integer $CODIGO
 * @property string $NOME
 * @property string $SIGLA
 * @property string $DTCRIACAO
 * @property string $DTEXTINCAO
 *
 * @property Empresa $eMPRESACOD
 * @property Funcionario[] $funcionarios
 */
class Divisao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'divisao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EMPRESA_COD', 'CODIGO'], 'required'],
            [['EMPRESA_COD', 'CODIGO'], 'integer'],
            [['DTCRIACAO', 'DTEXTINCAO'], 'safe'],
            [['NOME'], 'string', 'max' => 50],
            [['SIGLA'], 'string', 'max' => 10],
            [['EMPRESA_COD'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['EMPRESA_COD' => 'CODIGO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EMPRESA_COD' => 'Empresa',
            'CODIGO' => 'Codigo',
            'NOME' => 'Nome',
            'SIGLA' => 'Sigla',
            'DTCRIACAO' => 'Dtcriacao',
            'DTEXTINCAO' => 'Dtextincao',
        ];
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
    public function getFuncionarios()
    {
        return $this->hasMany(Funcionario::className(), ['EMPRESA_COD' => 'EMPRESA_COD', 'DIVISAO_COD' => 'CODIGO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDivisoesEmpresa()
    {
        $res = (new \yii\db\Query())
                ->select('*')
                ->from('divisao d')
                ->where(['EMPRESA_COD' => $this->EMPRESA_COD])
                ->orderBy('NOME')
                ->all();
        return $res;
    }
}
