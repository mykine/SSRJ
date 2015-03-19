<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Building;

/**
 * search represents the model behind the search form about `app\models\Building`.
 */
class search extends Building
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'loupan_id', 'no', 'cengshu', 'taoshu', 'type'], 'integer'],
            [['name', 'face', 'diffname'], 'safe'],
            [['cenggao', 'base_price'], 'number'],
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
        $query = Building::find();

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
            'no' => $this->no,
            'cengshu' => $this->cengshu,
            'taoshu' => $this->taoshu,
            'cenggao' => $this->cenggao,
            'base_price' => $this->base_price,
            'type' => $this->type,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'face', $this->face])
            ->andFilterWhere(['like', 'diffname', $this->diffname]);

        return $dataProvider;
    }
}
