<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Users extends CI_Migration {
	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
            ),
			'first_name' => array(
	        'type' => 'VARCHAR',
	        'constraint' => '255',
	        'null' => FALSE,
	        ),
	        'last_name' => array(
	        'type' => 'VARCHAR',
	        'constraint' => '255',
	        'null' => FALSE,
	        ),
	        'email' => array(
	        'type' => 'VARCHAR',
	        'constraint' => '255',
	        'null' => FALSE,
	        ),
	        'password' => array(
	        'type' => 'VARCHAR',
	        'constraint' => '255',
	        'null' => FALSE,
	        ),
	        'created_at' => array(
	        'type' => 'DATETIME',
	        'null' => TRUE,
	        )
			));
		$this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
	}
	public function down()
    {
        $this->dbforge->drop_table('users');
    }
}

