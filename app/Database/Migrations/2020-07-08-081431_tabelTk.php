<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelTk extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'tk_id'=> [
				'type' => 'INT',
				'constraint' => 20,
				'auto_increment' => true
			],
			'tk_name' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'tk_status' => [
				'type' => 'ENUM',
				'constraint' => ['Active', 'Inactive']
			],
			'tk_alamat' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'tk_agama' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'tk_tanggalLahir' => [
				'type' => 'DATE'
			]

		]);
		$this->forge->addKey('tk_id');
		$this->forge->createTable('tenagakerja');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
