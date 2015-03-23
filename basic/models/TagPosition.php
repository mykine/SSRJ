<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tag_position}}".
 *
 * @property integer $id
 * @property integer $loupan_id
 * @property integer $building_id
 * @property integer $type
 * @property string $tag_name
 * @property integer $x_value
 * @property integer $y_value
 */
class TagPosition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tag_position}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loupan_id', 'building_id'], 'required'],
            [['loupan_id', 'building_id', 'type', 'x_value', 'y_value'], 'integer'],
            [['tag_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'loupan_id' => Yii::t('app', '外键:楼盘id'),
            'building_id' => Yii::t('app', '外键:楼栋id'),
            'type' => Yii::t('app', '建筑类型:1=住宅,2=商业'),
            'tag_name' => Yii::t('app', '坐标点名称'),
            'x_value' => Yii::t('app', 'x坐标值'),
            'y_value' => Yii::t('app', 'y坐标值'),
        ];
    }
}
