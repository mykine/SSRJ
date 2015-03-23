<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HouseType;

/**
 * HouseTypeSearch represents the model behind the search form about `app\models\HouseType`.
 */
class HouseTypeSearch extends HouseType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'loupan_id', 'room', 'hall', 'toilet', 'kitchen', 'balcony'], 'integer'],
            [['name'], 'safe'],
            [['building_area', 'equally_shared_price', 'equally_shared_coeffcient', 'indoor_area'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = HouseType::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'loupan_id' => $this->loupan_id,
            'building_area' => $this->building_area,
            'equally_shared_price' => $this->equally_shared_price,
            'equally_shared_coeffcient' => $this->equally_shared_coeffcient,
            'indoor_area' => $this->indoor_area,
            'room' => $this->room,
            'hall' => $this->hall,
            'toilet' => $this->toilet,
            'kitchen' => $this->kitchen,
            'balcony' => $this->balcony,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
