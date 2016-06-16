<?php

use yii\db\Migration;

class m160616_084641_Task extends Migration
{
    // table prefix support used
    const TABLE_NAME = '{{%Task}}';

    public function up()
    {
        $this->createTable(self::TABLE_NAME, [
            'id'         => $this->primaryKey(10)->unsigned()->notNull(),
            'account_id' => $this->integer(10)->unsigned()->defaultValue(null),
            'created'    => $this->dateTime()->defaultValue(null),
            'deffer'     => $this->dateTime()->defaultValue(null),
            'type'       => $this->smallInteger(2)->defaultValue(null),
            // 'type' => 'tinyint(2) DEFAULT NULL',
            'task'       => $this->string(45)->defaultValue(null),
            'action'     => $this->string(45)->defaultValue(null),
            'data'       => $this->text(),
            'status'     => $this->smallInteger(2)->defaultValue(null),
            // 'status' => 'tinyint(2) DEFAULT NULL',
            //'retries' =>  'tinyint(2) DEFAULT NULL',
            'retries'    => $this->smallInteger(2)->defaultValue(null),
            'finished'   => $this->dateTime()->defaultValue(null),
            'result'     => $this->text(),
        ]);
        $this->createIndex('task_status', self::TABLE_NAME, 'status');
        $this->createIndex('task_deffer', self::TABLE_NAME, 'deffer');

        $this->insert(self::TABLE_NAME, [
            'id'         => 2971220,
            'account_id' => 70748,
            'created'    => '2016­02­14 13:09:15',
            'deffer'     => null,
            'type'       => null,
            'task'       => 'integration',
            'action'     => 'process',
            'data'       => '{\"integration_id\":3312,\"lead_id\":\"2999670\"}',
            'status'     => 0,
            'retries'    => 0,
            'finished'   => null,
            'result'     => null,
        ]);

        $this->insert(self::TABLE_NAME, [
            'id'         => 2971206,
            'account_id' => 80034,
            'created'    => '2016­02­14 13:08:16',
            'deffer'     => null,
            'type'       => null,
            'task'       => 'message',
            'action'     => 'sms',
            'data'       => '{\"number\":\"89111111119\",\"message\":\"Заявка с ru.ru\\nвячеслав \\n\"}',
            'status'     => 0,
            'retries'    => 0,
            'finished'   => null,
            'result'     => null,
        ]);

        $this->insert(self::TABLE_NAME, [
            'id'         => 2971187,
            'account_id' => 81259,
            'created'    => '2016­02­14 13:06:42',
            'deffer'     => null,
            'type'       => null,
            'task'       => 'account',
            'action'     => 'bill',
            'data'       => '{\"bill_id\":\"82029\"}',
            'status'     => 0,
            'retries'    => 0,
            'finished'   => null,
            'result'     => null,
        ]);

        $this->insert(self::TABLE_NAME, [
            'id'         => 2971123,
            'account_id' => 9608,
            'created'    => '2016­02­14 13:01:58',
            'deffer'     => null,
            'type'       => null,
            'task'       => 'integration',
            'action'     => 'process',
            'data'       => '{\"integration_id\":2845,\"lead_id\":\"2999571\"}',
            'status'     => 0,
            'retries'    => 0,
            'finished'   => null,
            'result'     => null,
        ]);

        $this->insert(self::TABLE_NAME, [
            'id'         => 2971122,
            'account_id' => 9608,
            'created'    => '2016­02­14 13:01:53',
            'deffer'     => null,
            'type'       => null,
            'task'       => 'integration',
            'action'     => 'process',
            'data'       => '{\"integration_id\":2987,\"lead_id\":\"2999570\"}',
            'status'     => 0,
            'retries'    => 0,
            'finished'   => null,
            'result'     => null,
        ]);

        $this->insert(self::TABLE_NAME, [
            'id'         => 2971107,
            'account_id' => 83992,
            'created'    => '2016­02­14 13:01:03',
            'deffer'     => null,
            'type'       => null,
            'task'       => 'domain',
            'action'     => 'addzone',
            'data'       => '{\"domain\":\"mydomain.ru\"}',
            'status'     => 0,
            'retries'    => 0,
            'finished'   => null,
            'result'     => null,
        ]);

    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }

}
