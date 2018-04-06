<?php

use yii\db\Migration;

/**
 * Handles adding position to table `user`.
 */
class m180210_112629_add_position_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'guid', $this->string(255));
        $data = [
            'login' => 'admin',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('admin'),
            'name' => 'admin',
            'second_name' => 'admin',
            'is_admin' => 1,
            'guid' => 'bbf8b678-a569-11e3-925b-82d70ac539aa'
        ];
        $this->insert('user', $data);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
    }
}
