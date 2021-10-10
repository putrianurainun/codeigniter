<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kalender extends Migration
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
			'tgl_mulai'=>[
			'type'	=>'date',
		],
			'tgl_akhir'=>[
				'type' => 'date',
		],
			'kegiatan'=>[
				'type' => 'VARCHAR',
				'constraint'=>'255',
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
		$this->forge->createTable('kalender',TRUE);
	}

	public function down()
	{
		//
	}
}
