<?php

class m151010_194708_create_barangay_officials_table extends CDbMigration
{
	public function up()
	{
		$this->createTable("tbl_barangay_officials",array(
				'id'=>"pk",
				'firstname'=>"string not null",
				'middlename'=>"string not null",
				'lastname'=>"string not null",
				'position'=>"string not null",
				'term_from'=>"datetime",
				'term_to'=>"datetime",
				'date_record_created'=>"datetime",
				'date_record_updated'=>"datetime",
			));
	}

	public function down()
	{
		$this->dropTable("tbl_barangay_officials");
	}


}