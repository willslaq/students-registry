<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_students extends CI_Migration
{

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
            'document' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'address' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'city' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'parent_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'parent_phone' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'parent_email' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'birth_date' => array(
                'type' => 'DATE'
            ),
            'classes_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('students');
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (classes_id) REFERENCES classes(id)');
    }

    public function down()
    {
        $this->dbforge->drop_table('students');
    }
}
