<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%house_state}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sort
 */
class HouseState extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_state}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['sort'], 'integer'],
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
            'name' => Yii::t('app', '房屋状态名称'),
            'sort' => Yii::t('app', '状态排序序号'),
        ];
    }
}
