<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%house_type}}".
 *
 * @property integer $id
 * @property integer $loupan_id
 * @property string $name
 * @property string $building_area
 * @property string $equally_shared_price
 * @property string $equally_shared_coeffcient
 * @property string $indoor_area
 * @property integer $room
 * @property integer $hall
 * @property integer $toilet
 * @property integer $kitchen
 * @property integer $balcony
 */
class HouseType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loupan_id', 'name', 'building_area'], 'required'],
            [['loupan_id', 'room', 'hall', 'toilet', 'kitchen', 'balcony'], 'integer'],
            [['building_area', 'equally_shared_price', 'equally_shared_coeffcient', 'indoor_area'], 'number'],
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
            'loupan_id' => Yii::t('app', '外键：楼盘id'),
            'name' => Yii::t('app', '户型名称'),
            'building_area' => Yii::t('app', '建筑面积'),
            'equally_shared_price' => Yii::t('app', '公摊价'),
            'equally_shared_coeffcient' => Yii::t('app', '公摊系数'),
            'indoor_area' => Yii::t('app', '套内面积'),
            'room' => Yii::t('app', '几室'),
            'hall' => Yii::t('app', '几厅'),
            'toilet' => Yii::t('app', '几卫'),
            'kitchen' => Yii::t('app', '几厨房'),
            'balcony' => Yii::t('app', '几阳台'),
        ];
    }
}
