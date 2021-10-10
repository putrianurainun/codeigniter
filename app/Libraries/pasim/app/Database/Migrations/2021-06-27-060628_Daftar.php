<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daftar extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'=>[
				'type'	=>'int',
				
				'unsigned'=>true,
				'auto_increment'=>true,
		],
			'nama'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
			
		],
			'nik'=>[
				'type' => 'VARCHAR',
				'constraint'=>'16',
				'null'=>false,
		],
			'tempat_lahir'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'tgl_lahir'=>[
				'type' => 'date',
				'null'=>false,
		],
			'alamat'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'agama'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
			
		],
			'notel'=>[
				'type' => 'VARCHAR',
				'constraint'=>'13',
				'null'=>false,
		],
			'email'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				
		],
			'ibu'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'jk'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'sd'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'thn_sd'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'smp'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'thn_smp'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'sma'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'thn_sma'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'status'=>[
				'type' => 'int',
				'constraint'=>'225',
				'null'=>false,
		],
			'id_jurusan'=>[
				'type'	=>'int',
				'constraint'=>5,
		],
			'kelas'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'catatan'=>[
				'type' => 'VARCHAR',
				'constraint'=>'225',
				'null'=>false,
		],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
		$this->forge->addKey('id',TRUE);
		$this->forge->createTable('daftar',TRUE);
	}

	public function down()
	{
		//
	}
}
