<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penelitian extends Migration
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
			'id_jurusan'=>[
			'type'	=>'int',
			'constraint'=>5,
			'null'=>false,
		],
			'tahun'=>[
				'type' => 'VARCHAR',
				'constraint'=>'255',
				'null'=>false,
		],
			'penelitian'=>[
				'type' => 'VARCHAR',
				'constraint'=>'1000',
				'null'=>false,
		],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
		$this->forge->addKey('id',TRUE);
		$this->forge->createTable('penelitian',TRUE);
	}

	public function down()
	{
		//
	}
}
