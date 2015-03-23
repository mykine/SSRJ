<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%house}}".
 *
 * @property integer $id
 * @property integer $loupan_id
 * @property integer $building_id
 * @property integer $house_type_id
 * @property integer $house_state_id
 * @property integer $ceng_no
 * @property integer $tao_no
 * @property integer $sate
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loupan_id', 'building_id', 'house_type_id', 'ceng_no'], 'required'],
            [['loupan_id', 'building_id', 'house_type_id', 'house_state_id', 'ceng_no', 'tao_no', 'sate'], 'integer']
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
            'house_type_id' => Yii::t('app', '外键:户型id'),
            'house_state_id' => Yii::t('app', '外键:房屋状态id'),
            'ceng_no' => Yii::t('app', '楼层号'),
            'tao_no' => Yii::t('app', '房屋套号'),
            'sate' => Yii::t('app', 'Sate'),
        ];
    }
}
