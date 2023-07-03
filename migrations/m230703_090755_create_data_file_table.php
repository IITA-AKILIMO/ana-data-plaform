<?php

use app\common\migration\BaseMigration;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%data_file}}`.
 */
class m230703_090755_create_data_file_table extends BaseMigration
{
    public string $tableName = '{{%data_file}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'file_name' => $this->string(100)->notNull()->comment('CSV fie name')
        ], $this->tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(): void
    {
        $this->dropTable($this->tableName);
    }
}
