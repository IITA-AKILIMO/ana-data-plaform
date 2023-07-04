<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DisseminationEventsProcessed;

/**
 * app\models\DisseminationEventsProcessedSearch represents the model behind the search form about `app\models\DisseminationEventsProcessed`.
 */
 class DisseminationEventsProcessedSearch extends DisseminationEventsProcessed
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['instanceID', 'submission_time', 'today', 'startdate', 'enddate', 'country', 'hasc1', 'hasc2', 'lat', 'lon', 'partner', 'event', 'city', 'venue', 'title', 'format', 'useCase', 'topics', 'topicsDetails', 'farmers_M', 'farmers_F', 'EAs_M', 'EAs_F', 'services', 'input_types', 'input_orgs', 'credit_types', 'credit_orgs', 'market_types', 'market_orgs'], 'safe'],
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
        $query = DisseminationEventsProcessed::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'instanceID', $this->instanceID])
            ->andFilterWhere(['like', 'submission_time', $this->submission_time])
            ->andFilterWhere(['like', 'today', $this->today])
            ->andFilterWhere(['like', 'startdate', $this->startdate])
            ->andFilterWhere(['like', 'enddate', $this->enddate])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'hasc1', $this->hasc1])
            ->andFilterWhere(['like', 'hasc2', $this->hasc2])
            ->andFilterWhere(['like', 'lat', $this->lat])
            ->andFilterWhere(['like', 'lon', $this->lon])
            ->andFilterWhere(['like', 'partner', $this->partner])
            ->andFilterWhere(['like', 'event', $this->event])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'venue', $this->venue])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'format', $this->format])
            ->andFilterWhere(['like', 'useCase', $this->useCase])
            ->andFilterWhere(['like', 'topics', $this->topics])
            ->andFilterWhere(['like', 'topicsDetails', $this->topicsDetails])
            ->andFilterWhere(['like', 'farmers_M', $this->farmers_M])
            ->andFilterWhere(['like', 'farmers_F', $this->farmers_F])
            ->andFilterWhere(['like', 'EAs_M', $this->EAs_M])
            ->andFilterWhere(['like', 'EAs_F', $this->EAs_F])
            ->andFilterWhere(['like', 'services', $this->services])
            ->andFilterWhere(['like', 'input_types', $this->input_types])
            ->andFilterWhere(['like', 'input_orgs', $this->input_orgs])
            ->andFilterWhere(['like', 'credit_types', $this->credit_types])
            ->andFilterWhere(['like', 'credit_orgs', $this->credit_orgs])
            ->andFilterWhere(['like', 'market_types', $this->market_types])
            ->andFilterWhere(['like', 'market_orgs', $this->market_orgs]);

        return $dataProvider;
    }
}
