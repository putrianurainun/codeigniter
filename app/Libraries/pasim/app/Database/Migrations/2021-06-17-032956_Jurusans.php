<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jurusans extends Migration
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
			'id_fakultas'=>[
				'type' => 'int',
				'constraint'=>5,
				'null'=>false,
		],
		'nama_jurusan'=>[
				'type' => 'Varchar',
				'constraint'=>'255',
				'null'=>false,
		],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
		$this->forge->addKey('id',TRUE);
		$this->forge->createTable('jurusans',TRUE);
	}

	public function down()
	{
		//
	}
}
