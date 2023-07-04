<?php

use yii\db\Schema;

class m230704_060101_create_dissemination_events_processed_table extends \app\common\migration\BaseMigration
{
    public string $tableName = '{{%dissemination_events_processed}}';

    public function safeUp(): void
    {

        $this->createTable($this->tableName, [
            'id' => $this->bigPrimaryKey(),
            'instanceID' => $this->string(255),
            'submission_time' => $this->string(255),
            'today' => $this->string(255),
            'startdate' => $this->string(255),
            'enddate' => $this->string(255),
            'country' => $this->string(255),
            'hasc1' => $this->string(255),
            'hasc2' => $this->string(255),
            'lat' => $this->string(255),
            'lon' => $this->string(255),
            'partner' => $this->string(255),
            'event' => $this->string(255),
            'city' => $this->string(255),
            'venue' => $this->string(255),
            'title' => $this->string(255),
            'format' => $this->string(255),
            'useCase' => $this->string(255),
            'topics' => $this->string(255),
            'topicsDetails' => $this->string(255),
            'farmers_M' => $this->string(255),
            'farmers_F' => $this->string(255),
            'EAs_M' => $this->string(255),
            'EAs_F' => $this->string(255),
            'services' => $this->string(255),
            'input_types' => $this->string(255),
            'input_orgs' => $this->string(255),
            'credit_types' => $this->string(255),
            'credit_orgs' => $this->string(255),
            'market_types' => $this->string(255),
            'market_orgs' => $this->string(255),
        ], $this->tableOptions);
    }

    public function safeDown(): void
    {
        $this->dropTable($this->tableName);
    }
}
