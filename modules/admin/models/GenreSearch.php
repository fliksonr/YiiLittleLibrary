<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Genre;
use yii\data\Pagination;

/**
 * GenreSearch represents the model behind the search form of `app\modules\admin\models\Genre`.
 */
class GenreSearch extends Genre
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genre_id'], 'integer'],
            [['genre_name', 'description'], 'safe'],
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
        $query = Genre::find();
        $pagination = new Pagination([
          'defaultPageSize'=>5,
          'totalCount'=>$query->count(),
        ]);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>$pagination
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'genre_id' => $this->genre_id,
        ]);

        $query->andFilterWhere(['like', 'genre_name', $this->genre_name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
