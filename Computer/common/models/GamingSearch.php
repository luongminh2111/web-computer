<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Gaming;

/**
 * GamingSearch represents the model behind the search form of `common\models\Gaming`.
 */
class GamingSearch extends Gaming
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'cpt_name', 'category', 'cpu', 'ram', 'hardware', 'screen', 'graphicscard', 'image', 'guarantee', 'description', 'slug'], 'safe'],
            [['cost'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Gaming::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'cpt_name', $this->cpt_name])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'cpu', $this->cpu])
            ->andFilterWhere(['like', 'ram', $this->ram])
            ->andFilterWhere(['like', 'hardware', $this->hardware])
            ->andFilterWhere(['like', 'screen', $this->screen])
            ->andFilterWhere(['like', 'graphicscard', $this->graphicscard])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'guarantee', $this->guarantee])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'slug', $this->slug]);

        return $dataProvider;
    }
}
