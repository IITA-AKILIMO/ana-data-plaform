<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "{{%dissemination_events_processed}}".
 *
 * @property integer $id
 * @property string $instanceID
 * @property string $submission_time
 * @property string $today
 * @property string $startdate
 * @property string $enddate
 * @property string $country
 * @property string $hasc1
 * @property string $hasc2
 * @property string $lat
 * @property string $lon
 * @property string $partner
 * @property string $event
 * @property string $city
 * @property string $venue
 * @property string $title
 * @property string $format
 * @property string $useCase
 * @property string $topics
 * @property string $topicsDetails
 * @property string $farmers_M
 * @property string $farmers_F
 * @property string $EAs_M
 * @property string $EAs_F
 * @property string $services
 * @property string $input_types
 * @property string $input_orgs
 * @property string $credit_types
 * @property string $credit_orgs
 * @property string $market_types
 * @property string $market_orgs
 */
class DisseminationEventsProcessed extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['instanceID', 'submission_time', 'today', 'startdate', 'enddate', 'country', 'hasc1', 'hasc2', 'lat', 'lon', 'partner', 'event', 'city', 'venue', 'title', 'format', 'useCase', 'topics', 'topicsDetails', 'farmers_M', 'farmers_F', 'EAs_M', 'EAs_F', 'services', 'input_types', 'input_orgs', 'credit_types', 'credit_orgs', 'market_types', 'market_orgs'], 'string', 'max' => 255]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%dissemination_events_processed}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
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
