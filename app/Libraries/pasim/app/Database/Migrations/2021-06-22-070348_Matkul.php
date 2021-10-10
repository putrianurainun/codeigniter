<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Matkul extends Migration
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
			
		],
			'kode'=>[
				'type' => 'VARCHAR',
				'constraint'=>'20',
				'null'=>false,
		],
			'nama_matkul'=>[
				'type' => 'VARCHAR',
				'constraint'=>'255',
				'null'=>false,
		],
			'sks'=>[
				'type' => 'VARCHAR',
				'constraint'=>'5',
				'null'=>false,
		],
			'semester'=>[
				'type' => 'VARCHAR',
				'constraint'=>'5',
				'null'=>false,
		],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
		$this->forge->addKey('id',TRUE);
		$this->forge->createTable('matkul',TRUE);
	}

	public function down()
	{
		//
	}
}
