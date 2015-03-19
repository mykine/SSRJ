<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%loupan}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $land_area
 * @property string $sum_area
 * @property string $pic
 * @property string $volume
 */
class Loupan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%loupan}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['land_area', 'sum_area', 'volume'], 'number'],
            [['name'], 'string', 'max' => 100],
            [['pic'], 'string', 'max' => 4000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', '楼盘名'),
            'land_area' => Yii::t('app', '占地面积'),
            'sum_area' => Yii::t('app', '总面积'),
            'pic' => Yii::t('app', '楼盘图片'),
            'volume' => Yii::t('app', '容积率'),
        ];
    }
}
