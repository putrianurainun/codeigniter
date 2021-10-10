<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Beasiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'=>[
			'type'	=>'int',
			'constraint'=>5,
			'unsigned'=>true,
			'auto_increment'=>true,
		],
			'nama'=>[
				'type' => 'VARCHAR',
				'constraint'=>'1000',
				'null'=>false,
		],
			'keterangan'=>[
				'type' => 'VARCHAR',
				'constraint'=>'1000',
				'null'=>false,
		],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
		$this->forge->addKey('id',TRUE);
		$this->forge->createTable('beasiswa',TRUE);
	}

	public function down()
	{
		//
	}
}
