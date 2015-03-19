<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\House;

/**
 * HouseSearch represents the model behind the search form about `app\models\House`.
 */
class HouseSearch extends House
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'loupan_id', 'building_id', 'house_type_id', 'house_state_id', 'ceng_no', 'tao_no', 'sate'], 'integer'],
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
        $query = House::find();

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
            'building_id' => $this->building_id,
            'house_type_id' => $this->house_type_id,
            'house_state_id' => $this->house_state_id,
            'ceng_no' => $this->ceng_no,
            'tao_no' => $this->tao_no,
            'sate' => $this->sate,
        ]);

        return $dataProvider;
    }
}
