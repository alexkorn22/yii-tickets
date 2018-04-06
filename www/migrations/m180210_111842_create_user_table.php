<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180210_111842_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'login' => $this->string(255),
            'password' => $this->string(255),
            'name' => $this->string(255),
            'second_name' => $this->string(255),
            'is_admin' => $this->integer(1),
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
