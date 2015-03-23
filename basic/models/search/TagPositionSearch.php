<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TagPosition;

/**
 * TagPositionSearch represents the model behind the search form about `app\models\TagPosition`.
 */
class TagPositionSearch extends TagPosition
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'loupan_id', 'building_id', 'type', 'x_value', 'y_value'], 'integer'],
            [['tag_name'], 'safe'],
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
        $query = TagPosition::find();

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
            'type' => $this->type,
            'x_value' => $this->x_value,
            'y_value' => $this->y_value,
        ]);

        $query->andFilterWhere(['like', 'tag_name', $this->tag_name]);

        return $dataProvider;
    }
}
