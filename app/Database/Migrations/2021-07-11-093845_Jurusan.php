<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jurusan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_jurusan'		=>[
				'type'			=>'int',
				'constraint'	=>11,
				'unsigned'		=>true,
				'auto_increment'=>true,

			],
			'nama_jurusan'		=>[
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

		$this->forge->addKey('id_jurusan',true);
		$this->forge->createTable('jurusan');
	}

	public function down()
	{
		$this->forge->dropTable('jurusan');
	}
}
