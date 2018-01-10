<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Avaliation;

/**
 * AvaliationSearch represents the model behind the search form about `app\models\Avaliation`.
 */
class AvaliationSearch extends Avaliation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fk_id_user', 'fk_id_movie'], 'integer'],
            [['stars'], 'number'],
            [['critique'], 'safe'],
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
        $query = Avaliation::find();

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
            'id' => $this->id,
            'stars' => $this->stars,
            'fk_id_user' => $this->fk_id_user,
            'fk_id_movie' => $this->fk_id_movie,
        ]);

        $query->andFilterWhere(['like', 'critique', $this->critique]);

        return $dataProvider;
    }
}
