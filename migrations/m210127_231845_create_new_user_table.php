<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%new_user}}`.
 */
class m210127_231845_create_new_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%new_user}}', [
            'id' => $this->primaryKey(),
            'username'=>$this->string(),
            'email'=>$this->string(),
            'password'=>$this->string(),
            'authKey'=>$this->string(),
            'accessToken'=>$this->string(),
            'isAdmin'=>$this->integer()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%new_user}}');
    }
}
