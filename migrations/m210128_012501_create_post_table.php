<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m210128_012501_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'description'=>$this->string(),
            'posted_by'=>$this->integer(),
            'created_at'=>$this->timestamp() ->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at'=>$this->timestamp() ->defaultExpression('CURRENT_TIMESTAMP'),
            'status'=>$this->integer(),
        ]);
        $this->addForeignKey(
            'fk-posted_by',
            'post',
            'posted_by',
            'new_user',
            'id',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
