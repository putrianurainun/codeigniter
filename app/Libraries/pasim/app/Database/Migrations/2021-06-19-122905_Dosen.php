<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dosen extends Migration
{
	public function up()
	{
		$this->forge->addField([
		'nidn'=>[
			'type'	=>'VARCHAR',
			'constraint'=>'25',
			'null'=>false,
		],
		'id_jurusan'=>[
			'type'	=>'int',
			'constraint'=>5,
			'null'=>false,
		],
		'nama'=>[
				'type' => 'VARCHAR',
				'constraint'=>'700',
				'null'=>false,
				
		],
		'gelar'=>[
				'type' => 'VARCHAR',
				'constraint'=>'50',
				
		],

		'pendidikan'=>[
				'type' => 'VARCHAR',
				'constraint'=>'150',
				
		],
		'akademik'=>[
				'type' => 'VARCHAR',
				'constraint'=>'500',
		],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
		$this->forge->addKey('nidn',TRUE);
		$this->forge->createTable('dosen',TRUE);
	}

	public function down()
	{
		//
	}
}
