<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengabdian extends Migration
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
			'tahun'=>[
				'type' => 'VARCHAR',
				'constraint'=>'255',
				'null'=>false,
		],
			'kegiatan'=>[
				'type' => 'VARCHAR',
				'constraint'=>'255',
				'null'=>false,
		],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
		$this->forge->addKey('id',TRUE);
		$this->forge->createTable('pengabdian',TRUE);
	}

	public function down()
	{
		//
	}
}
