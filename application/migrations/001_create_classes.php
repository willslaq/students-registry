<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_classes extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'number' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'max_students' => array(
                'type' => 'INT',
                'constraint' => 100
            ),
            'teacher' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'schedule_type' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('classes');
    }

    public function down()
    {
        $this->dbforge->drop_table('classes');
    }
}
