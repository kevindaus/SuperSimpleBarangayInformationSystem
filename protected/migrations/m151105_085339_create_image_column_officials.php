<?php

class m151105_085339_create_image_column_officials extends CDbMigration
{
	public function safeUp()
	{
		$this->addColumn("tbl_barangay_officials", "profile_image", "string");
	}

	public function safeDown()
	{
		$this->dropColumn("tbl_barangay_officials", "profile_image");
	}
}