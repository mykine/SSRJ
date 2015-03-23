<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%worker}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $born
 * @property string $logintime
 */
class Worker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%worker}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['born', 'logintime'], 'safe'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'born' => Yii::t('app', '出生年月'),
            'logintime' => Yii::t('app', '最近登录时间'),
        ];
    }
}
