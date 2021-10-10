<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_siswa'		=>[
				'type'			=>'int',
				'constraint'	=>11,
				'unsigned'		=>true,
				'auto_increment'=>true,
			],
			'id_jurusan'		=>[
				'type'			=>'int',
				'constraint'	=>11,
			],
			'nama_siswa'		=>[
				'type'			=>'varchar',
				'constraint'	=>'200',
			],
			'created_at'		=>[
				'type'			=>'DATETIME',
				'null'			=>true,
			],
			'updated_at'		=>[
				'type'			=>'DATETIME',
				'null'			=>true,
			]
	]);

		$this->forge->addKey('id_siswa',true);
		$this->forge->createTable('siswa');
	}

	public function down()
	{
		$this->forge->dropTable('siswa');	
	}
}
