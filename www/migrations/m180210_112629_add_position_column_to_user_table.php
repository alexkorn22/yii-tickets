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
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
    }
}
