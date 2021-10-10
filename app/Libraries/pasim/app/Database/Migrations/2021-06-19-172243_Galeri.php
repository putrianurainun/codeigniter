<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galeri extends Migration
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
			'kegiatan'=>[
				'type' => 'VARCHAR',
				'constraint'=>'700',
				'null'=>false,
		],
			'foto'=>[
				'type' => 'VARCHAR',
				'constraint'=>'255',
				'null'=>false,
		],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
		$this->forge->addKey('id',TRUE);
		$this->forge->createTable('galeri',TRUE);
	}

	public function down()
	{
		//
	}
}
