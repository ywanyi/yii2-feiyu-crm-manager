<?php

namespace yii\feiyu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\feiyu\models\Message;

/**
 * MessageSearch represents the model behind the search form of `yii\feiyu\models\Message`.
 */
class MessageSearch extends Message
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'clue_id', 'adv_id', 'ad_plan_id', 'site_id', 'clue_type', 'module_id', 'clue_source', 'sort', 'status', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['adv_name', 'ad_plan_name', 'external_url', 'module_name', 'create_time', 'name', 'telphone', 'gender', 'age', 'email', 'weixin', 'qq', 'province_name', 'city_name', 'address', 'remark', 'remark_dict', 'form_remark', 'appname', 'convert_status', 'location'], 'safe'],
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
        $query = Message::find();

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
            'clue_id' => $this->clue_id,
            'adv_id' => $this->adv_id,
            'ad_plan_id' => $this->ad_plan_id,
            'site_id' => $this->site_id,
            'clue_type' => $this->clue_type,
            'module_id' => $this->module_id,
            'clue_source' => $this->clue_source,
            'sort' => $this->sort,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'adv_name', $this->adv_name])
            ->andFilterWhere(['like', 'ad_plan_name', $this->ad_plan_name])
            ->andFilterWhere(['like', 'external_url', $this->external_url])
            ->andFilterWhere(['like', 'module_name', $this->module_name])
            ->andFilterWhere(['like', 'create_time', $this->create_time])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'telphone', $this->telphone])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'age', $this->age])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'weixin', $this->weixin])
            ->andFilterWhere(['like', 'qq', $this->qq])
            ->andFilterWhere(['like', 'province_name', $this->province_name])
            ->andFilterWhere(['like', 'city_name', $this->city_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'remark_dict', $this->remark_dict])
            ->andFilterWhere(['like', 'form_remark', $this->form_remark])
            ->andFilterWhere(['like', 'appname', $this->appname])
            ->andFilterWhere(['like', 'convert_status', $this->convert_status])
            ->andFilterWhere(['like', 'location', $this->location]);

        return $dataProvider;
    }
}
