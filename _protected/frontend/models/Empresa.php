<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $CODIGO
 * @property string $NOME
 *
 * @property Atividade[] $atividades
 * @property Cargo[] $cargos
 * @property Divisao[] $divisaos
 * @property Funcionario[] $funcionarios
 * @property LocalTrabalho[] $localTrabalhos
 * @property Subdivisao[] $subdivisaos
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CODIGO'], 'integer'],
            [['NOME'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CODIGO' => 'Codigo',
            'NOME' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtividades()
    {
        return $this->hasMany(Atividade::className(), ['EMPRESA_COD' => 'CODIGO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargos()
    {
        return $this->hasMany(Cargo::className(), ['EMPRESA_COD' => 'CODIGO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDivisaos()
    {
        return $this->hasMany(Divisao::className(), ['EMPRESA_COD' => 'CODIGO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionarios()
    {
        return $this->hasMany(Funcionario::className(), ['EMPRESA_COD' => 'CODIGO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocalTrabalhos()
    {
        return $this->hasMany(LocalTrabalho::className(), ['EMPRESA_COD' => 'CODIGO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubdivisaos()
    {
        return $this->hasMany(Subdivisao::className(), ['EMPRESA_COD' => 'CODIGO']);
    }
}
