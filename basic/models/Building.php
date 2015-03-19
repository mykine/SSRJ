<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%building}}".
 *
 * @property integer $id
 * @property integer $loupan_id
 * @property integer $no
 * @property string $name
 * @property integer $cengshu
 * @property integer $taoshu
 * @property string $cenggao
 * @property string $face
 * @property string $diffname
 * @property string $base_price
 * @property integer $type
 */
class Building extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%building}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loupan_id'], 'required'],
            [['loupan_id', 'no', 'cengshu', 'taoshu', 'type'], 'integer'],
            [['cenggao', 'base_price'], 'number'],
            [['name', 'face', 'diffname'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'loupan_id' => Yii::t('app', '外键：楼盘id'),
            'no' => Yii::t('app', '楼栋编号'),
            'name' => Yii::t('app', '楼栋名称'),
            'cengshu' => Yii::t('app', '层数'),
            'taoshu' => Yii::t('app', '单层最多套数'),
            'cenggao' => Yii::t('app', '层高'),
            'face' => Yii::t('app', '朝向'),
            'diffname' => Yii::t('app', '差价名称'),
            'base_price' => Yii::t('app', '楼栋基价'),
            'type' => Yii::t('app', '楼栋用途类型:1=住宅,2=商业'),
        ];
    }
}
