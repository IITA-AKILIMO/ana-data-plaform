<?php

namespace app\models;

use \app\models\base\DisseminationEventsProcessed as BaseDisseminationEventsProcessed;

/**
 * This is the model class for table "dissemination_events_processed".
 */
class DisseminationEventsProcessed extends BaseDisseminationEventsProcessed
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['instanceID', 'submission_time', 'today', 'startdate', 'enddate', 'country', 'hasc1', 'hasc2', 'lat', 'lon', 'partner', 'event', 'city', 'venue', 'title', 'format', 'useCase', 'topics', 'topicsDetails', 'farmers_M', 'farmers_F', 'EAs_M', 'EAs_F', 'services', 'input_types', 'input_orgs', 'credit_types', 'credit_orgs', 'market_types', 'market_orgs'], 'string', 'max' => 255]
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'id' => 'ID',
            'instanceID' => 'Instance ID',
            'submission_time' => 'Submission Time',
            'today' => 'Today',
            'startdate' => 'Startdate',
            'enddate' => 'Enddate',
            'country' => 'Country',
            'hasc1' => 'Hasc1',
            'hasc2' => 'Hasc2',
            'lat' => 'Lat',
            'lon' => 'Lon',
            'partner' => 'Partner',
            'event' => 'Event',
            'city' => 'City',
            'venue' => 'Venue',
            'title' => 'Title',
            'format' => 'Format',
            'useCase' => 'Use Case',
            'topics' => 'Topics',
            'topicsDetails' => 'Topics Details',
            'farmers_M' => 'Farmers M',
            'farmers_F' => 'Farmers F',
            'EAs_M' => 'E As M',
            'EAs_F' => 'E As F',
            'services' => 'Services',
            'input_types' => 'Input Types',
            'input_orgs' => 'Input Orgs',
            'credit_types' => 'Credit Types',
            'credit_orgs' => 'Credit Orgs',
            'market_types' => 'Market Types',
            'market_orgs' => 'Market Orgs',
        ];
    }
}
